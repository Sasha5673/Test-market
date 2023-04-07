<?php

class ProductModel extends Model {

	public function getAllProducts($searchQuery = ''){

		$result = array();
		$sql = "SELECT * FROM product";

		if (!empty($searchQuery)) {
			$sql .= " WHERE name LIKE :search_query";
		}

		$stmt = $this->db->prepare($sql);

		if (!empty($searchQuery)) {
			$searchQuery = '%' . $searchQuery . '%';
			$stmt->bindParam(':search_query', $searchQuery, PDO::PARAM_STR);
		}

		$stmt->execute();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}
		return $result;
	}

	public function getProductById($id) {
		$sql = "SELECT * FROM product WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function editAllProducts($id, $name, $price, $count_product, $description, $img_path, $weight, $animal, $brand){

		$sql = "UPDATE product
		SET name = :name, price = :price, count_product = :count_product, description = :description, img = :img_path, weight = :weight, animal = :animal, brand = :brand
		WHERE id = :id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":name", $name, PDO::PARAM_STR);
		$stmt->bindValue(":price", $price, PDO::PARAM_INT);
		$stmt->bindValue(":count_product", $count_product, PDO::PARAM_INT);
		$stmt->bindValue(":description", $description, PDO::PARAM_STR);
		$stmt->bindValue(":img_path", $img_path, PDO::PARAM_STR);
		$stmt->bindValue(":weight", $weight, PDO::PARAM_STR);
		$stmt->bindValue(":animal", $animal, PDO::PARAM_STR);
		$stmt->bindValue(":brand", $brand, PDO::PARAM_STR);
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

	public function addProduct($name, $price, $count_product, $description, $img, $weight, $animal, $brand){

		$sql = "INSERT INTO product (name, price, count_product, description, img, weight, animal, brand)
		VALUES (:name, :price, :count_product, :description, :img, :weight, :animal, :brand)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":name", $name, PDO::PARAM_STR);
		$stmt->bindValue(":price", $price, PDO::PARAM_INT);
		$stmt->bindValue(":count_product", $count_product, PDO::PARAM_INT);
		$stmt->bindValue(":description", $description, PDO::PARAM_STR);
		$stmt->bindValue(":img", $img, PDO::PARAM_STR);
		$stmt->bindValue(":weight", $weight, PDO::PARAM_STR);
		$stmt->bindValue(":animal", $animal, PDO::PARAM_STR);
		$stmt->bindValue(":brand", $brand, PDO::PARAM_STR);
		$stmt->execute();
		return true;

	}

}
