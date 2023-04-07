<?php

class CartModel extends Model {

	public function getProduct()
	{
		$id = $_GET['id'];
		$sql = "SELECT * FROM product WHERE id = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":id", $id, PDO::PARAM_INT);
		$stmt->execute([$id]);

		return $stmt->fetch();

	}

	public function addToCart($product): void
	{

		if (isset($_SESSION['cart'][$product['id']])) {
			$_SESSION['cart'][$product['id']]['qty'] += 1;
		} else {
			$_SESSION['cart'][$product['id']] = [
				'id' => $product['id'],
				'name' => $product['name'],
				'price' => $product['price'],
				'qty' => 1 < 5,
				'description' => $product['description'],
				'img' => $product['img'],
				'weight' => $product['weight'],
				'animal' => $product['animal'],
				'brand' => $product['brand']
			];
		}
		$_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
		$_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];

	}

}
