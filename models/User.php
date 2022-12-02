<?php

class User extends Model{
	var $email;
	var $password_hash;

	public function find($user_id){
	  $SQL = 'SELECT * FROM User WHERE user_id = :user_id';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['user_id'=>$user_id]);
	  $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
	  return $stmt->fetch();
	}	

	public function findUser($email){
	  $SQL = 'SELECT * FROM User WHERE email = :email';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['email'=>$email]);
	  $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
	  return $stmt->fetch();
	}	

	public function create(){
	  $SQL = 'INSERT INTO User(email,password_hash) VALUES(:email,:password_hash)';
	  $stmt = self::$_connection->prepare($SQL);
	  $stmt->execute(['email'=>$this->email,'password_hash'=>$this->password_hash]);
	  return $stmt->rowCount();
	}	
}

?>