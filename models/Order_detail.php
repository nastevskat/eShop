<?php

class Order_detail extends Model{
	var $order_id;
	var $product_id;
	var $qty;
	var $price;

	public function getForOrder($order_id){
		$SQL = 'SELECT Order_detail.order_detail_id, Order_detail.qty,Product.*, filename FROM Order_detail JOIN Product  ON Order_detail.product_id = Product.product_id LEFT JOIN Picture ON Product.default_picture = Picture.picture_id WHERE Order_detail.order_id = :order_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['order_id'=> $order_id]);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Order_detail');
		return $stmt->fetchAll();
	}


	public function create(){
		$SQL = 'INSERT INTO Order_detail(order_id, product_id, qty, price) VALUE(:order_id, :product_id, :qty, :price) ON DUPLICATE KEY UPDATE qty=qty+:qty';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['order_id'=>$this->order_id,'product_id'=>$this->product_id,'qty'=>$this->qty,'price'=>$this->price]);
		return $stmt->rowCount();

		}

	public function find($order_detail_id){
	  $SQL = 'SELECT * FROM Order_detail  WHERE order_detail_id = :order_detail_id';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['order_detail_id'=>$order_detail_id]);
	  $stmt->setFetchMode(PDO::FETCH_CLASS, 'Order_detail');
	  return $stmt->fetch();
	} 	

	public function update(){
		$SQL = 'UPDATE Order_detail SET qty = :qty, price = :price WHERE order_detail_id = :order_detail_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['qty'=>$this->qty,'price'=>$this->price,'order_detail_id'=>$this->order_detail_id]);
		return $stmt->rowCount();

		}

	public function delete(){
		$SQL = 'DELETE FROM Order_detail WHERE order_detail_id = :order_detail_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['order_detail_id'=>$this->order_detail_id]);
		return $stmt->rowCount();

	}
}

?>