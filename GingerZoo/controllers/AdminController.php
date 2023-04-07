<?php

class AdminController extends Controller {
	private $pageTpl = '/views/admin.tpl.php';

	public function __construct(){

		$this->model = new AdminModel();
		$this->view = new View();

	}

	public function index(){

		$this->pageData['title'] = "Вход в личный кабинет";

		if(!empty($_POST)){

			if(!$this->login()){
				$this->pageData['error'] = "Неправильный логин или пароль";
			}
		}

		$this->view->render($this->pageTpl, $this->pageData);

	}

	public function login(){

		if(!$this->model->checkUser()){
			return false;
		}

	}

}
