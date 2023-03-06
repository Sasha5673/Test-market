<?php

class ProductController extends Controller {
	private $pageTpl = '/views/products.tpl.php';

	public function __construct(){

		$this->model = new ProductModel();
		$this->view = new View();

	}

	public function index(){

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
			header("Location: /");
		}
		$this->pageData['title'] = "Товары";
		$product = $this->model->getAllProducts();
		$this->pageData['products'] = $product;

		$this->view->render($this->pageTpl, $this->pageData);

	}

	public function saveProduct(){

		if(!$_SESSION['user']) {
			header("Location: /");
			return;
		}

		$this->model->editAllProducts();

		header("Location: /cabinet/product");

	}

	public function deleteProducts(){

		if(!$_SESSION['user']) {
			header("Location: /");
			return;
		}

		$id = $_POST['id'];
   		$this->model->deleteProduct($id);
   		header("Location: /cabinet/product");

	}

	public function addProducts(){

		if(!$_SESSION['user']) {
			header("Location: /");
			return;
		}
		$name = $_POST['name'];
		$price = $_POST['price'];
		$count_product = $_POST['count_product'];
		$description = $_POST['description'];
		$this->model->addProduct($name, $price, $count_product, $description);

		header("Location: /cabinet/product");

	}


}
