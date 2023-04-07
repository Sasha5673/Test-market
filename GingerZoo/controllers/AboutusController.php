<?php

class AboutusController extends Controller {
	private $pageTpl = '/views/aboutus.tpl.php';

	public function __construct(){

		$this->model = new AboutusModel();
		$this->view = new View();

	}

	public function index(){

		$this->pageData['title'] = "Итернет магазин GingerZoo";
		// Check if a search query has been submitted
		$searchQuery = isset($_GET['product']) ? $_GET['product'] : '';
		$animal = isset($_GET['animal']) ? $_GET['animal'] : '';
		$weight = isset($_GET['weight']) ? $_GET['weight'] : '';

		$product = $this->model->getAllProductsMain($searchQuery, $animal, $weight);

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
