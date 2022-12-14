<?php

include_once 'Models/UsersModel.php';
include_once 'Views/RegisterView.php';
include_once 'AuthHelper/AuthHelper.php';

class RegisterController{

	private $UserModel;
	private $RegisterView;
	private $Helper;
	public function __construct(){

		$this->UserModel = new UsersModel();
		$this->RegisterView = new RegisterView();
		$this->Helper = new AuthHelper();
	}

	public function ShowRegister(){
		$this->Helper->is_logged();
		$this->RegisterView->ShowRegister();
	}

	public function RegisterUser(){

		if(isset($_POST['email']) && isset($_POST['password'])){

			$email = $_POST['email'];
			$pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
			if(!$this->UserModel->getUSer($email)){
				$this->UserModel->setUser($email,$pwd);
				$this->Helper->setUser($email);
				header("Location: ".BASE_URL."home");
			}else{
				$this->RegisterView->ShowRegister("El email ya esta en uso!");
			}
			

		}


	}


}