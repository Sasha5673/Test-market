<?php

class IndexModel extends Model {

	public function getAllProductsMain(){

		$result = array();
		$sql = "SELECT * FROM product";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$result[$row['id']] = $row;
		}
		return $result;
	}

}
