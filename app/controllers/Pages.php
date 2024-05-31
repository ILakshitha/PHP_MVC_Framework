<?php
class Pages extends Controller {
    public function __construct(){
        //echo'this is the pages controllers';
    }

    public function index(){

    }

    public function about($name,$age){
        //echo'Hi, '.$name;
        $data=[
            'userName' => $name,
            'userAge'=> $age
        ];
        $this->view('v_about',$data);

    }
}
?>