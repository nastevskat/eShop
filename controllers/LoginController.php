<?php
	class LoginController extends Controller{

		public function index(){
			//login form & process user input
			if(isset($_POST['action'])){
				$theUser = $this->model('User')->findUser($_POST['email']);
				if($theUser !=null && password_verify($_POST['password'], $theUser->password_hash)){
					$_SESSION['user_id'] = $theUser->user_id;
					$_SESSION['role'] = $theUser->role;
					header('location:/product/index');
				}else{
					$this->view('login/index', 'Incorrect email/password combination!');
				}
			}else
			$this->view('login/index');
		}

		public function signup(){
			//register form & process new registration
			if(isset($_POST['action'])){
				$newUser = $this->model('User');
				$theUser = $newUser->findUser($_POST['email']);
				if($theUser == null && $_POST['password'] == $_POST['password_confirm']){
					$newUser->email = $_POST['email'];
					$newUser->password_hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
					$newUser->create();
					header('location:/login/index');
				}
				
				$this->view('login/signup', 'Email already in use or passwords did not match');

			}else
			$this->view('login/signup');
		}

		public function logout(){
			// process logout requests
			session_destroy();
			header('location:/login/index');
		}

	}

?>