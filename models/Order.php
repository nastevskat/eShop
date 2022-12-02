<?php

class Order extends Model{
	var $user_id;
	var $status;
	var $payment_id;

	public function get(){
		$SQL = 'SELECT * FROM `Order` ';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Order');
		return $stmt->fetchAll();
	}


	public function create(){
		$SQL = 'INSERT INTO `Order`(user_id, status, payment_id) VALUE(:user_id, :status, :payment_id)';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['user_id'=>$this->user_id,'status'=>$this->status,'payment_id'=>$this->payment_id]);
		$this->order_id = self::$_connection->lastInsertId();
		return $stmt->rowCount();

		}

	public function findUserCart($user_id){
	  $SQL = 'SELECT * FROM `Order` WHERE user_id = :user_id && status = :status';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['user_id'=>$user_id, 'status'=>'cart']);
	  $stmt->setFetchMode(PDO::FETCH_CLASS, 'Order');
	  return $stmt->fetch();
	}

	public function find($order_id){
	  $SQL = 'SELECT * FROM `Order` WHERE order_id = :order_id';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['order_id'=>$order_id]);
	  $stmt->setFetchMode(PDO::FETCH_CLASS, 'Order');
	  return $stmt->fetch();
	}	

	public function update(){
		$SQL = 'UPDATE `Order` SET status = :status, payment_id = :payment_id WHERE order_id = :order_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['status'=>$this->status,'payment_id'=>$this->payment_id,'order_id'=>$this->order_id]);
		return $stmt->rowCount();

		}

	public function delete(){
		$SQL = 'DELETE FROM `Order` WHERE order_id = :order_id';
		$stmt = self::$_connection->prepare($SQL);
		$stmt->execute(['order_id'=>$this->order_id]);
		return $stmt->rowCount();

	}
}

?>