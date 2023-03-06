<?php

class ProfileController extends Controller {
	private $pageTpl = '/views/profile.tpl.php';

	public function __construct(){

		$this->model = new ProfileModel();
		$this->view = new View();

	}

	public function index(){

		if(!$_SESSION['user']) {
			header("Location: /login");
		}
		$userId = $_SESSION['userId'];
		$userInfo = $this->model->getAccountInfo($userId);
		$this->pageData['userInfo'] = $userInfo;
		$this->pageData['title'] = "Мой аккаунт";
		$this->view->render($this->pageTpl, $this->pageData);

	}

	public function updateProfile() {
    if(!$_SESSION['user']) {
        header("Location: /login");
    }

    $id = $_POST['id'];
    $login = $_POST['login'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];


    // Check if the email or login already exists in the database
    if($this->model->emailCheakExist($email) && $this->model->loginCheakExist($login)){
        $_SESSION['message'] = 'Пользователь с таким login или email уже существует!';
        header("Location: /profile");
        die();
    } else{
        $_SESSION['message'] = 'Успешно изменен';
    }

    $this->model->updateProfile($id, $login, $fullName, $email);

    header("Location: /profile");

	}

	public function updatePassword() {
    	if(!$_SESSION['user']) {
    	    header("Location: /login");
    	}
    	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    	    $id = $_POST['userId'];
    	    $password = $_POST['newpass'];
    	    $_SESSION['message'] = 'Пароль успешно изменен';
    	    $this->model->updatePassword($id, md5($password));
    	    header("Location: /profile");
    	} else {
    	    $userInfo = $this->model->getAccountInfo($_SESSION['userId']);
    	    $this->pageData['userInfo'] = $userInfo;
    	    $this->pageData['title'] = "Сменить пароль";
    	    $this->view->render($this->pageTpl, $this->pageData);
    	}
	}

	public function logout(){

		session_destroy();
		header("Location: /");

	}


}
