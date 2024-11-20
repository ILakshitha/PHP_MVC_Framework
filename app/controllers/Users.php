<?php
class Users extends controller
{
    private $userModel;
    public function __construct(){
        $this->userModel = $this->model('M_User');

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
            if(empty($data['name'])){
                $data['name_err'] ='please enter the name';
            }
              
            //validate email
            if(empty($data['email'])){
                $data['email_err'] ='please enter the email';
            }
            else{

            
            
            //cheak email is already registered or not
            if ($this->userModel->findUserByEmail($data['email'])) {
                $data['email_err'] ='Email have already registered';
                # code...

            }

            //validate password
            if (empty($data['password'])) {
                $data['password_err'] ='please enter the password';
            }elseif(empty($data['password'])) {
                $data['repeat_password_err'] ='please enter the confirm password';

            }
            else{
                if($data['password'] = $data['repeat_password']){
                    $data['repeat_password'] ="Password not matching";
                }
            }

            if(empty($data["name_err"]) && empty($data['email_err'])&& empty($data['password_err']) && empty($data['repeat_password_err'])){
                //encript password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //register user
            }

            }
            
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