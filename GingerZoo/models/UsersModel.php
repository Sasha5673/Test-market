<?php

class UsersModel extends Model {

	public function getAllUsers($searchQuerys = '') {
		$result = array();
		$sql = "SELECT * FROM users";

		if (!empty($searchQuerys)) {
			$sql .= " WHERE login LIKE :search";
		}

		$stmt = $this->db->prepare($sql);

		if (!empty($searchQuerys)) {
			$searchQuerys = '%' . $searchQuerys . '%';
			$stmt->bindParam(':search', $searchQuerys, PDO::PARAM_STR);
		}

		$stmt->execute();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}

		return $result;
	}

	public function editAllUsers($id, $login, $fullName, $email, $password){

		$sql = "UPDATE users
		SET login = :login, fullName = :fullName, email = :email, password = :password
		WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->bindValue(":fullName", $fullName, PDO::PARAM_STR);
		$stmt->bindValue(":email", $email, PDO::PARAM_STR);
		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return true;
	}

	public function deleteUsers($id){
		$sql = "DELETE FROM users WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return true;

	}

	public function addUsers($id, $login, $fullName, $email, $password, $role_id){

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
