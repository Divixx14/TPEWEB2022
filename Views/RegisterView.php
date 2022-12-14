<?php

require_once 'libs/Smarty.class.php';



class RegisterView{

	private $smarty;
	
	public function __construct(){

		$this->smarty = new Smarty();

	}

	public function ShowRegister($error=""){
		$this->smarty->assign('session','');
		$this->smarty->assign('error',$error);
		$this->smarty->display('templates/Register.tpl');

	}

}