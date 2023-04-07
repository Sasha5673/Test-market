<?php

class CabinetModel extends Model {

	public function getOrdersCount(){
		$sql = "SELECT COUNT(*) FROM orders";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$res = $stmt->fetchColumn();
		return $res;
	}

	public function getProductsCount(){
		$sql = "SELECT COUNT(*) FROM product";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$res = $stmt->fetchColumn();
		return $res;
	}

	public function getUsersCount(){
		$sql = "SELECT COUNT(*) FROM users";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		$res = $stmt->fetchColumn();
		return $res;
	}

	public function getOrders($searchQuery = ''){
		$sql = "SELECT
		orders.id as id,
		orders.amount as total,
		orders.email as emails,
		users.fullName,
		users.email as user_email
		FROM orders
		LEFT JOIN users ON users.id = orders.user_id";

		if (!empty($searchQuery)) {
			$sql .= " WHERE orders.email LIKE :search";
		}

		$result = array();
		$stmt = $this->db->prepare($sql);

		if (!empty($searchQuery)) {
			$searchQuery = '%' . $searchQuery . '%';
			$stmt->bindParam(':search', $searchQuery, PDO::PARAM_STR);
		}

		$stmt->execute();
		while($raw = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$raw['id']] = $raw;
		}
		return $result;
	}

}
