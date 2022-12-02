<?php 	
/**
 	@accessFilter:{LoginFilter}
 */

	class HomeController extends Controller{

	
		public function index(){
			
			$items = $this->model('item')->getForUser($_SESSION['user_id']);

			$this->view('home/index', ['items'=>$items]);

		} 

		public function create(){

			if(isset($_POST['action'])){
				$newItem = $this->model('Item');
				$newItem->name = $_POST['name'];
				$newItem->user_id = $_SESSION['user_id'];
				$newItem->create();
				header('location:/home/index');
			}else{
				$this->view('home/create');
			}
		}

		/**
 	@accessFilter:{itemOwner}
 */

		public function detail($item_id){
			
			  $theItem = $this->model('Item')->find($item_id);
			  if($theItem->user_id != $_SESSION['user_id']){
			  	header('location:/home/index');
			  	return;
			  }
			  $this->view('home/detail', $theItem);
			}


		public function edit($item_id){
			
			$theItem = $this->model('Item')->find($item_id);
			if($theItem->user_id != $_SESSION['user_id']){
			  	header('location:/home/index');
			  	return;
			  }
			if(isset($_POST['action'])){
				
				$theItem->name = $_POST['name'];
				$theItem->update();
				header('location:/home/index');
			}else{
				$this->view('home/edit', $theItem);
			}
		}

		public function delete($item_id){
			

			$theItem = $this->model('Item')->find($item_id);
			if($theItem->user_id != $_SESSION['user_id']){
			  	header('location:/home/index');
			  	return;
			  }
			if(isset($_POST['action'])){
				$theItem->delete();
				header('location:/home/index');
			}else{
				$this->view('home/delete', $theItem);
			}
		}

}

?>