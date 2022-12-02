<?php

class Product extends Model{
	var $title;
	var $description;
	var $price;

	public function get(){
		$SQL = 'SELECT Product.*, filename FROM Product LEFT JOIN Picture on Product.default_picture = Picture.picture_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
		return $stmt->fetchAll();
	}


	public function create(){
		$SQL = 'INSERT INTO Product(title, description, price) VALUE(:title, :description, :price)';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['title'=>$this->title,'description'=>$this->description,'price'=>$this->price]);
		return $stmt->rowCount();

		}

	public function find($product_id){
	  $SQL = 'SELECT Product.*, filename FROM Product LEFT JOIN Picture on Product.default_picture = Picture.picture_id WHERE Product.product_id = :product_id';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['product_id'=>$product_id]);
	  $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
	  return $stmt->fetch();
	}	

	public function update(){
		$SQL = 'UPDATE Product SET title = :title, default_picture = :default_picture, description = :description,price = :price WHERE product_id = :product_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['title'=>$this->title,'default_picture'=>$this->default_picture,'description'=>$this->description,'price'=>$this->price,'product_id'=>$this->product_id]);
		return $stmt->rowCount();

		}

	public function delete(){
		$SQL = 'DELETE FROM Product WHERE product_id = :product_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['product_id'=>$this->product_id]);
		return $stmt->rowCount();

	}
}

?>