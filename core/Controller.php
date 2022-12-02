<?php 

class Controller{

	protected function model($model){
		if(file_exists('eshop/models/' . $model . '.php')){
			require_once 'eshop/models/' . $model . '.php';
			return new $model();
		}
		else {
			return null;
		}
	}

	protected function view($name, $data=[]){


		if(file_exists('eshop/views/' . $name . '.php')){
			include('eshop/views/' . $name . '.php');
		}else{
			echo "ERROR: the view $name does not exist";
		}
	}
}


?>
