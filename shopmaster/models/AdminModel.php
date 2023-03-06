<?php

class AdminModel extends Model {

	public function checkUser(){

		$login = $_POST['login'];
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM users WHERE login = :login AND password = :password AND role_id = 1";

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
		$stmt->execute();

		$res = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($res)){
			$_SESSION['auth'] = true;
			$_SESSION['user'] = $_POST['login'];
			$_SESSION['role'] = $_POST['role_id'];
			header("Location: /cabinet");

		} else {
			return false;
		}
	}

}
