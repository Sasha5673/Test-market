<?php

class IndexController extends Controller {
	private $pageTpl = '/views/main.tpl.php';

	public function __construct(){

		$this->model = new IndexModel();
		$this->view = new View();

	}

	public function index(){

		$this->pageData['title'] = "Итернет магазин Malias";
		$product = $this->model->getAllProductsMain();
		$this->pageData['products'] = $product;
		$this->view->render($this->pageTpl, $this->pageData);

	}

	public function cart(){
		if (isset($_GET['cart'])) {
   		 switch ($_GET['cart']) {
       		 case 'add':
            	$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
            	echo json_encode(['code' => 'OK', 'answer' => 'Error product']);
            	break;
    	 }
		}


	}
}
