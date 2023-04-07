<?php

class OrderingModel extends Model {


	public function createOrder($user_id, $amount, $method, $region, $branch, $email){
        $sql = "INSERT INTO orders (user_id, amount, method, region, branch, email)
        VALUES (:user_id, :amount, :method, :region, :branch, :email)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->bindValue(":amount", $amount, PDO::PARAM_INT);
        $stmt->bindValue(":method", $method, PDO::PARAM_STR);
        $stmt->bindValue(":region", $region, PDO::PARAM_STR);
        $stmt->bindValue(":branch", $branch, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function addProductToOrder($order_id, $product_id, $count_qty){
        $sql = "INSERT INTO productinorders (order_id, product_id, count_qty)
        VALUES (:order_id, :product_id, :count_qty)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":order_id", $order_id, PDO::PARAM_INT);
        $stmt->bindValue(":product_id", $product_id, PDO::PARAM_INT);
        $stmt->bindValue(":count_qty", $count_qty, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getOrderId(){
        $sql = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();

    }



}
