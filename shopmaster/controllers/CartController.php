<?php

class CartController extends Controller {
	private $pageTpl = '/views/cart.tpl.php';

	public function __construct(){

		$this->model = new CartModel();
		$this->view = new View();

	}

	public function index(){

		if (isset($_GET['cart'])) {
   		 switch ($_GET['cart']) {
       		 case 'add':
            	$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            	$product = $this->model->getProduct($id);

            	if (!$product) {
            		echo json_encode(['code' => 'error', 'answer' => 'Error product']);
            	} else{
            		$this->model->addToCart($product);
            	echo json_encode(['code' => 'OK', 'answer' => $product]);
            	}
            	break;
    	 }
		}

	}

	public function deleteCart()
	{
		unset($_SESSION['cart']);
		unset($_SESSION['cart.qty']);
		unset($_SESSION['cart.sum']);
		header("Location: /");
	}


}
