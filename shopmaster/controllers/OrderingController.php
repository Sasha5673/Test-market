<?php

class OrderingController extends Controller {
	private $pageTpl = '/views/ordaring.tpl.php';

	public function __construct(){

		$this->model = new OrderingModel();
		$this->view = new View();

	}

	    public function index(){
        $this->pageData['title'] = "Оформление заказа";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process the checkout form data

            // Get form data
            $user_id = $_POST['user_id'];
            $amount = $_POST['amount'];
            $method = $_POST['method'];
            $region = $_POST['region'];
            $city = $_POST['city'];
            $street = $_POST['street'];
            $house = $_POST['house'];

            // Create new order
            $this->model->createOrder($user_id, $amount, $method, $region, $city, $street, $house);

            // Add product to order
            $order_id = $this->model->getOrderId();
            foreach ($_SESSION['cart'] as $id => $item) {
                $this->model->addProductToOrder($order_id, $item['id']);
            }

        }

        $this->view->render($this->pageTpl, $this->pageData);
    }

}
