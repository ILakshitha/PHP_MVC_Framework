<?php
class Users extends controller
{
    public function __construct(){

    }
    public function register(){
        $data =[];

        $this->view('users/v_register', $data);
    }

    public function login(){
        $data =[];

        $this->view('users/v_login', $data);
    }
}


?>