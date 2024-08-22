<?php
class M_Pages{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function findUserByEmail($email){
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