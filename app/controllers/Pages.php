<?php
class Pages extends Controller {
    public function __construct(){
        $this->pagesModel = $this->model('M_Pages');
        //echo'this is the pages controllers';
    }

    public function index(){

    }

    public function about(){
        $users = $this->pagesModel->getUsers();
        $data=[
           "users"=>$users
        ];
        $this->view('v_about',$data);

    }
}
?>