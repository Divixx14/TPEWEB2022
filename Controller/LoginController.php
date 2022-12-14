<?php

include_once 'Models/UsersModel.php';
include_once 'Views/LoginView.php';
include_once 'AuthHelper/AuthHelper.php';
class LoginController{

	private $UserModel;
	private $UserView;
	private $Helper;

	public function __construct(){

		$this->UserModel = new UsersModel();
		$this->UserView = new LoginView();
		$this->Helper = new AuthHelper();
	}


	public function ShowLogin(){
		$this->Helper->is_logged();
		$this->UserView->ShowLogin();
	}


	public function verify(){

		if(!empty($_POST['email']) && !empty($_POST['password'])){

			$email = $_POST['email'];
			$pwd = $_POST['password'];

			$user = $this->UserModel->getUser($email);

			if($user && password_verify($pwd, $user->password)){
				$this->Helper->setUser($user->email);
				header("Location: ".BASE_URL."home");
			}else{
				$this->UserView->ShowLogin('Email o Contraseña invalida!');
			}

		}

	}

	public function LogOut(){
		session_start();
		session_destroy();
		header('Location:'.BASE_URL.'home');
	}


}