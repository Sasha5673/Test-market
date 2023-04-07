<?php

class RegisterModel extends Model {

	public function registerUsers($id, $login, $fullName, $email, $password, $role_id){


		$sql = "INSERT INTO users (login, fullName, email, password, role_id)
		VALUES (:login, :fullName, :email, :password, :role_id)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->bindValue(":fullName", $fullName, PDO::PARAM_STR);
		$stmt->bindValue(":email", $email, PDO::PARAM_STR);
		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
		$stmt->bindValue(":role_id", $role_id, PDO::PARAM_INT);
		$stmt->execute();
		return true;
	}

	public function emailCheakExist($email){

		$sql = "SELECT * FROM users
		WHERE email = :email";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":email", $email, PDO::PARAM_STR);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if($result){
			return true;
		} else {
			return false;
		}

	}

	public function loginCheakExist($login){

		$sql = "SELECT * FROM users
		WHERE login = :login";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if($result){
			return true;
		} else {
			return false;
		}

	}

}
