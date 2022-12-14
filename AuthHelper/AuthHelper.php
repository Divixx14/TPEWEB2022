<?php

class AuthHelper{

    //ABM
	public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location:' . BASE_URL . 'Login');
            die();
        }
    }

    //No mostrar login ni registro si ya esta loggeado
    public function is_logged(){
    	session_start();
    	if(isset($_SESSION['user'])){
    		header('Location:'.BASE_URL.'home');
    		die();
    	}
    	
    }

    //Obtine la sesion para actualizar las variables $_SESSION
    public function getSession(){
        if (!isset($_SESSION))
            session_start();
    }

    //Setea el user por registro/login
    public function setUser($email){

        session_start();
        $_SESSION['user'] = $email;
        $_SESSION['session'] = true;

    }


}
