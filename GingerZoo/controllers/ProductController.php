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
		$this->pageData['titles'] = "Кабинет";

		// Check if a search query has been submitted
		$searchQuery = isset($_GET['q']) ? $_GET['q'] : '';

		$product = $this->model->getAllProducts($searchQuery);
		$this->pageData['products'] = $product;

		$this->view->render($this->pageTpl, $this->pageData);

	}

	public function saveProduct(){

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
			header("Location: /");
		}

		$id = $_POST['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$count_product = $_POST['count_product'];
		$description = $_POST['description'];
		$img_path = '';
		$weight = $_POST['weight'];
		$animal = $_POST['animal'];
		$brand = $_POST['brand'];

		if (!empty($_FILES['img']['name'])) {
			$img = $_FILES['img']['name'];
			$img_path = '/images/product/mediam/' . $img;
			move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $img_path);
		} else {
    	    // If no new image is uploaded, keep the existing image path
			$product = $this->model->getProductById($id);
			$img_path = $product['img'];
		}

		$this->model->editAllProducts($id, $name, $price, $count_product, $description, $img_path, $weight, $animal, $brand);

		header("Location: /cabinet/product");

	}

	public function deleteProducts(){

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
			header("Location: /");
		}

		$id = $_POST['id'];
		$this->model->deleteProduct($id);
		header("Location: /cabinet/product");

	}

	public function addProducts(){

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
			header("Location: /");
		}

		$name = $_POST['name'];
		$price = $_POST['price'];
		$count_product = $_POST['count_product'];
		$description = $_POST['description'];
		$img = $_FILES['img']['name'];
		$img_path = '/images/product/mediam/' . $img;
		move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $img_path);
		$weight = $_POST['weight'];
		$animal = $_POST['animal'];
		$brand = $_POST['brand'];

		$this->model->addProduct($name, $price, $count_product, $description, $img_path, $weight, $animal, $brand);

		header("Location: /cabinet/product");

	}


}
