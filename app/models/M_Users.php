<?php
class M_Pages{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
   //Register User
   public function register($data){
   $sql = 'INSERT INTO users (name, email, username, password, repeat_password) 
   VALUES (:name, :email, :username, :password, :repeat_password) ';


    $this->db->query($sql);

   }

    //Find the User
    public function findUserByEmail($email){
        $this->db->query("SELECT * FROM User Where email= :email");
        $this->db ->bind(':email', $email);

        $row = $this->db->single();

        if($this->db->rowcount() >0){
            return true;
        }
        else {
            
            return false;
        }
    }
}
?>