<?php

class IndexModel extends Model {

	public function getAllProductsMain($searchQuery = '', $animal = '', $weight = '', $brand = ''){
		$sql = "SELECT * FROM product";
    $params = [];

    if (!empty($searchQuery)) {
     $sql .= " WHERE name LIKE ?";
     array_push($params, "%$searchQuery%");
   }

   if (!empty($animal)) {
     $sql .= " WHERE animal = ?";
     array_push($params, $animal);
   }

   if (!empty($weight)) {
     $sql .= " WHERE weight = ?";
     array_push($params, $weight);
   }

   if (!empty($brand)) {
     $sql .= " WHERE brand = ?";
     array_push($params, $brand);
   }

   $stmt = $this->db->prepare($sql);
   $stmt->execute($params);

   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

   return $result;
 }

}
