<?php

class OrderingModel extends Model {

	public function createOrder($user_id, $amount, $method, $region, $city, $street, $house){
        $sql = "INSERT INTO orders (user_id, amount, method, region, city, street, house)
                VALUES (:user_id, :amount, :method, :region, :city, :street, :house)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->bindValue(":amount", $amount, PDO::PARAM_INT);
        $stmt->bindValue(":method", $method, PDO::PARAM_STR);
        $stmt->bindValue(":region", $region, PDO::PARAM_STR);
        $stmt->bindValue(":city", $city, PDO::PARAM_STR);
        $stmt->bindValue(":street", $street, PDO::PARAM_STR);
        $stmt->bindValue(":house", $house, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function addProductToOrder($order_id, $product_id){
        $sql = "INSERT INTO productinorders (order_id, product_id)
                VALUES (:order_id, :product_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":order_id", $order_id, PDO::PARAM_INT);
        $stmt->bindValue(":product_id", $product_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getOrderId(){
        $sql = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();

	}
}
