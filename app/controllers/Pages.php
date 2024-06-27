<?php
class Pages extends Controller {
    public function __construct(){
        $this->pagesModel = $this->model('M_Pages');
        //echo'this is the pages controllers';
    }

    public function index(){

    }

    public function about(){
        $Users = $this->pagesModel->getUsers();
        $data=[
           "users"->$Users
        ];
        $this->view('v_about',$data);

    }
}
?>