<?php
class Users extends controller
{
    public function __construct(){

    }
    public function register(){

        // $this->view('users/v_login', $data);
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //form is submitting

            //validate the data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //input data
            $data=[
                'name'=> trim($_POST['name']),
                'email'=>trim($_POST['email']),
                'username'=>trim($_POST['username']),
                'password'=>trim($_POST['password']),
                'repeat_password'=>trim($_POST['repeat_password']),

                'name_err'=>'',
                'email_err'=>'',
                'username_err'=>'',
                'password_err'=>'',
                'repeat_password_err'=>''

            ];
            //validate each inputs
            //validate name
            // if(empty($data['name'])){
            //     date['name_err'] ='please enter the name';
            // }
            
            // //validate email
            // if(empty($data['name'])){
            //     date['name_err'] ='please enter the name';
            // }
            
            //cheak email is already registered or not
            
        }else{
            //initial form
            $data=[
                'name'=>'',
                'email'=>'',
                'username'=>'',
                'password'=>'',
                'repeat_password'=>'',

                'name_err'=>'',
                'email_err'=>'',
                'username_err'=>'',
                'password_err'=>'',
                'repeat_password_err'=>''

            ];
            //load view
            $this->view('users/v_register', $data);
        }
    }

    public function login(){
        $data =[];

        $this->view('users/v_login', $data);
    }
}


?>