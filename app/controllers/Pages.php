<?php
class Pages extends Controller {
    public function __construct(){
        //echo'this is the pages controllers';
    }

    public function index(){

    }

    public function about($name){
        //echo'Hi, '.$name;
        $this->view('v_about');

    }
}
?>