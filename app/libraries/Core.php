<?php
class Core{
    //Url format
    protected $currentController = 'pages';
    protected $currentMethod ='index';
    protected $param =[];

    public function __construct() {
        $this->getURL();

    }

    public function geturl(){
        echo $_GET['url'];
        
    }
}
?>