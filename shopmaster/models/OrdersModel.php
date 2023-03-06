<?php

class OrdersModel extends Model {

	public function getOrderInfoByOrederId($orderId){

		$result = array();
		$sql = "SELECT users.fullName, users.email, orders.amount, orders.method, orders.region, orders.city, orders.street, orders.house, product.name, product.price
				FROM users
				INNER JOIN orders ON orders.user_id = users.id
				INNER JOIN productInOrders ON orders.id = productInOrders.order_id
				INNER JOIN product ON productInOrders.product_id = product.id
				WHERE orders.id = :orderId";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":orderId", $orderId, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;

	}

}
