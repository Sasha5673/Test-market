<?php

class ContactusModel extends Model {

	public function getAllProductsMain($searchQuery = '', $animal = '', $weight = ''){
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

   $stmt = $this->db->prepare($sql);
   $stmt->execute($params);

   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

   return $result;
 }

}
