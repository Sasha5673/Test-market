<?php

class UsersController extends Controller {
	private $pageTpl = '/views/users.tpl.php';

	public function __construct(){

		$this->model = new UsersModel();
		$this->view = new View();

	}

	public function index(){

		if(!$_SESSION['auth'] == true || $_SESSION['role'] == 1) {
			header("Location: /");
		}
		$this->pageData['title'] = "Пользователи";
		$users = $this->model->getAllUsers();
		$this->pageData['users'] = $users;

		$this->view->render($this->pageTpl, $this->pageData);

	}

		public function saveUser(){

		if(!$_SESSION['user']) {
			header("Location: /");
			return;
		}

		$id = $_POST['id'];
		$login = $_POST['login'];
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$this->model->editAllUsers($id, $login, $fullName, $email, $password);

		header("Location: /cabinet/users");

	}

		public function deleteUser(){

		if(!$_SESSION['user']) {
			header("Location: /");
			return;
		}

		$id = $_POST['id'];
   		$this->model->deleteUsers($id);
   		header("Location: /cabinet/users");

	}

public function addUser(){
    // Check if the user is logged in
    if(!$_SESSION['user']) {
        header("Location: /");
        return;
    }

    // Get the input values from the form
    $id = $_POST['id'];
    $login = $_POST['login'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role_id = $_POST['role_id'];

    // Check if the email or login already exists in the database
    if($this->model->emailCheakExist($email) || $this->model->loginCheakExist($login)){
        $_SESSION['message'] = 'Пользователь с таким email или login уже существует!';
        header("Location: /cabinet/users");
        die();
    }

    // Add the user to the database
    $this->model->addUsers($id, $login, $fullName, $email, $password, $role_id);

    // Redirect the user to the user list page
    header("Location: /cabinet/users");
}

}
