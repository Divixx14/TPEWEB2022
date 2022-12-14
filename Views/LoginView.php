<?php

require_once 'libs/Smarty.class.php';
require_once 'AuthHelper/AuthHelper.php';

class LoginView{

	private $smarty;
	private $Helper;


	public function __construct(){
		
		$this->smarty = new Smarty();
	}

	

	public function ShowLogin($error=""){
		$this->smarty->assign('session','');
		$this->smarty->assign('error',$error);
		$this->smarty->display('templates/login.tpl');

	}


}