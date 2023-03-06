<?php

class ProfileModel extends Model {

	public function getAccountInfo($id) {
		$result = array();
		$sql = "SELECT id, login, fullName, email FROM users WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

		public function updateProfile($id, $login, $fullName,$email) {
		$sql = "UPDATE users
				SET login = :login, fullName = :fullName, email = :email
				WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->bindValue(":fullName", $fullName, PDO::PARAM_STR);
		$stmt->bindValue(":email", $email, PDO::PARAM_STR);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
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

		public function updatePassword($id, $password) {
		$sql = "UPDATE users
				SET password = :password
				WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return true;
	}

}
