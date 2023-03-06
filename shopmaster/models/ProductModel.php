<?php

class ProductModel extends Model {

	public function getAllProducts(){

		$result = array();
		$sql = "SELECT * FROM product";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}
		return $result;
	}

	public function editAllProducts(){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$count_product = $_POST['count_product'];
		$description = $_POST['description'];

		$sql = "UPDATE product
				SET name = :name, price = :price, count_product = :count_product, description = :description
				WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":name", $name, PDO::PARAM_STR);
		$stmt->bindValue(":price", $price, PDO::PARAM_INT);
		$stmt->bindValue(":count_product", $count_product, PDO::PARAM_INT);
		$stmt->bindValue(":description", $description, PDO::PARAM_STR);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return true;
	}

	public function deleteProduct($id){
    	$sql = "DELETE FROM product WHERE id = :id";
    	$stmt = $this->db->prepare($sql);
    	$stmt->bindValue(":id", $id, PDO::PARAM_INT);
    	$stmt->execute();
   		 return true;

	}

	public function addProduct($name, $price, $count_product, $description){

		$sql = "INSERT INTO product (name, price, count_product, description)
				VALUES (:name, :price, :count_product, :description)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":name", $name, PDO::PARAM_STR);
		$stmt->bindValue(":price", $price, PDO::PARAM_INT);
		$stmt->bindValue(":count_product", $count_product, PDO::PARAM_INT);
		$stmt->bindValue(":description", $description, PDO::PARAM_STR);
		$stmt->execute();
		return true;

	}

}
