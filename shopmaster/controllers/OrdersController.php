<?php

class OrdersController extends Controller {
	private $pageTpl = '/views/orders.tpl.php';

	public function __construct(){

		$this->model = new OrdersModel();
		$this->view = new View();

	}

	public function index(){

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
			header("Location: /");
		}

		$this->pageData['title'] = "Детали заказа";

		if(isset($_GET['orderId'])){

			$orderId = $_GET['orderId'];
			$this->pageData['orderInfo'] = $this->model->getOrderInfoByOrederId($orderId);
		}

		$this->view->render($this->pageTpl, $this->pageData);

	}

}
