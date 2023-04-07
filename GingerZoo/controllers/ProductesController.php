<?php

class ProductesController extends Controller {
	private $pageTpl = '/views/productes.tpl.php';

	public function __construct(){

		$this->model = new ProductesModel();
		$this->view = new View();

	}

	public function index(){

		$this->pageData['title'] = "Каталог";

		if(isset($_GET['productId'])){

			$productId = $_GET['productId'];
			$this->pageData['productInfo'] = $this->model->getProductesId($productId);
		}

		$this->view->render($this->pageTpl, $this->pageData);

	}

}
