<?php
class Core{
    //Url format
    protected $currentController = 'pages';
    protected $currentMethod ='index';
    protected $param =[];

    public function __construct() {
        //print_r($this->getURL());
       $url = $this->getURL();

       if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
        $this->currentController = ucwords($url[0]);
         
        //unset the controller in the url
        unset($url[0]);

        //call the controller
        require_once '../app/controllers/'.$this->currentController.'.php';

        //instentate the controller
        $this->currentController = new $this->currentController;

        //check whether the method exist in the controller or not

        if(isset($url[1])){
            if(method_exists($this->currentController,$url[1])){
                $this->currentMethod = $url[1];

                unset($url[1]);
            }
        }
      //Get params list
      $this->params = $url ? array_values($url) : [];

      //call method and pass the paramater list
      call_user_func_array([$this->currentController,$this->currentMethod], $this->params);
    
    }
    }

    public function geturl(){
        if(isset( $_GET['url'])){
            $url = rtrim($_GET['url'],'/');

            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);

            return $url;
        }
    }
}
?>