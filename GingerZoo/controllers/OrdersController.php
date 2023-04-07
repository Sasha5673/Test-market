<?php

class OrdersController extends Controller {
	private $pageTpl = '/views/orders.tpl.php';
	private $mailTpl = "/views/mail/checkOrder.tpl.html";
	private $mailDeleteTpl = "/views/mail/deleteOrder.tpl.html";

	public function __construct(){

		$this->model = new OrdersModel();
		$this->view = new View();

	}

	public function index() {

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
            header("Location: /");
        }

        $this->pageData['title'] = "Детали заказа";
        $this->pageData['titles'] = "Кабинет";

        if(isset($_GET['orderId'])){

         $orderId = $_GET['orderId'];
         $this->pageData['orderInfo'] = $this->model->getOrderInfoByOrederId($orderId);
     }

     $this->view->render($this->pageTpl, $this->pageData);

 }

 public function sendCheckOrderMail($fullName, $email, $amount, $products, $prices, $qty) {

    if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
        header("Location: /");
    }

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $emailText = file_get_contents(ROOT . $this->mailTpl);
    $emailText = str_replace('%fullName%', $fullName, $emailText);
    $emailText = str_replace('%amount%', $amount, $emailText);
    $productsList = "";
    foreach($products as $key => $product) {
        $productsList .= "<li>" . $product . " - " . $prices[$key] . " - " . "В количестве: " . $qty[$key] . "</li>";
    }
    $emailText .= "<ul style='margin:0; padding:0'>" . $productsList . "</ul>";
    mail($email, "Ваш заказ одобрен", $emailText, $headers);
}

public function checkOrder() {

    if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
        header("Location: /");
    }

    if(isset($_POST['id'])) {
        $orderId = $_POST['id'];
        $orderInfo = $this->model->getOrderInfoByOrederId($orderId);
        $fullName = $orderInfo[0]['fullName'];
        $email = $orderInfo[0]['email'];
        $amount = $orderInfo[0]['amount'];
        $productsArr = array();
        $productsPricesArr = array();
        $productsCountQty = array();
        foreach($orderInfo as $key => $item) {
            array_push($productsArr, $item['name']);
            array_push($productsPricesArr, $item['price']);
            array_push($productsCountQty, $item['count_qty']);
        }
        $this->sendCheckOrderMail($fullName, $email, $amount, $productsArr, $productsPricesArr, $productsCountQty);
        header("Location: /cabinet");
    }
}

public function sendDeleteOrderMail($fullName, $email, $amount, $products, $prices, $qty) {

    if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
        header("Location: /");
    }

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $emailText = file_get_contents(ROOT . $this->mailDeleteTpl);
    $emailText = str_replace('%fullName%', $fullName, $emailText);
    $emailText = str_replace('%amount%', $amount, $emailText);
    $productsList = "";
    foreach($products as $key => $product) {
        $productsList .= "<li>" . $product . " - " . $prices[$key] . " грн. - " . "В количестве: " . $qty[$key] . " шт. </li>";
    }
    $emailText .= "<ul style='margin:0; padding:0'>" . $productsList . "</ul>";
    mail($email, "Ваш заказ был отклонен", $emailText, $headers);
}

public function deleteOrder() {

    if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
        header("Location: /");
    }

    if(isset($_POST['id'])) {
        $orderId = $_POST['id'];
        $orderInfo = $this->model->getOrderInfoByOrederId($orderId);
        $fullName = $orderInfo[0]['fullName'];
        $email = $orderInfo[0]['email'];
        $amount = $orderInfo[0]['amount'];
        $productsArr = array();
        $productsPricesArr = array();
        $productsCountQty = array();
        foreach($orderInfo as $key => $item) {
            array_push($productsArr, $item['name']);
            array_push($productsPricesArr, $item['price']);
            array_push($productsCountQty, $item['count_qty']);
        }
        $this->sendDeleteOrderMail($fullName, $email, $amount, $productsArr, $productsPricesArr, $productsCountQty);
        $this->model->deleteOrder($orderId);
        header("Location: /cabinet");
    }
}

}
