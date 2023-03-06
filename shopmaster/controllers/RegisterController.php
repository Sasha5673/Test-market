<?php

class RegisterController extends Controller {
	private $pageTpl = '/views/register.tpl.php';

	public function __construct(){

		$this->model = new RegisterModel();
		$this->view = new View();

	}

	public function index(){

		if($_SESSION['user']) {
			header("Location: /profile");
		}

		$this->pageData['title'] = "Регистрация";


		$this->view->render($this->pageTpl, $this->pageData);

	}

	public function registerUser()
	{
		$id = $_POST['id'];
        $login = $_POST['login'];
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $role_id = $_POST['role_id'];

        if ($this->model->emailCheakExist($email) || $this->model->loginCheakExist($login)) {
            $_SESSION['message'] = 'User with such email or login already exists';
            header('Location: /register');
            exit;
        }

        // Create new user in the database
        $result = $this->model->registerUsers($id, $login, $fullName, $email, $password, $role_id);
        if ($result) {
            $_SESSION['message'] = 'Registration successful';
            header('Location: /login');
            exit;
        } else {
            $_SESSION['message'] = 'Registration failed';
            header('Location: /register');
            exit;
        }

	}

}
