<?php

class ProductesModel extends Model {

	public function getProductesId($productId){

		$sql = "SELECT * FROM product WHERE id = :productId";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":productId", $productId, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);

	}

}
