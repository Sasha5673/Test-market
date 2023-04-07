<?php

class OrderingController extends Controller {
	private $pageTpl = '/views/ordaring.tpl.php';

	public function __construct(){
        $this->model = new OrderingModel($apiKey);
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
            $branch = $_POST['branch'];
            $email = $_POST['email'];

            // Create new order
            $this->model->createOrder($user_id, $amount, $method, $region, $branch, $email);

            // Add product to order
            $order_id = $this->model->getOrderId();
            foreach ($_SESSION['cart'] as $id => $item) {
                $this->model->addProductToOrder($order_id, $item['id'], $item['qty']);
            }

            $to      = $email;
            $subject = 'Оформление заказа';
            $message = 'Здравствуйте вы оформили заказ на сайте интернет магазина GingerZoo. Проверка существующего пользователя. Ответе на email котороый вам прислал письмо "+", после возьмем в обработку ваш заказ и вам прийдет уведомление что заказ в обработке.';
            $headers = 'From: Kisszoom@yandex.ru' . "\r\n" .
            'Reply-To: Kisszoom@yandex.ru' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            unset($_SESSION['cart']);
            unset($_SESSION['cart.qty']);
            unset($_SESSION['cart.sum']);
            $_SESSION['message'] = 'Вы успешно сделали заказ, на ваш email поступило письмо об обработке.';
            header('Location: /ordering');
            exit;

        }

        $this->view->render($this->pageTpl, $this->pageData);
    }

}
