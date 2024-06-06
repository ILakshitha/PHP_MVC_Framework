<?php
class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_NAME;
    private $dbname = DB_NAME;

    private $dbh;
    private $statement;
    private $error;

    public function __constuct(){
        $dsn = 'mysql:host ='.$this->host.';dbname ='.$this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT -> true,
            PDO::ATTR_ERRMODE -> PDO::ERRMODE_EXCEPTION
        );

        //Instantiate PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);

        } catch (\Throwable $th) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}
?>