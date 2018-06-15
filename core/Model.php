<?php

abstract class Model{
    protected $db;
     protected $db_config = array();

    private function setDB()
    {
      //  $this->db_config = array('localhost','duranno','root','');
      
    }

    public function connectDB()
    {    	
    	
    //	$this->setDB();
        $hosttmp = "mysql:host=".'localhost'.";dbname=".'duranno'.";charset=utf8";

        try{
            $this->db = new PDO($hosttmp,'root','');           
            $this->db->exec("set names utf8");
            
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnectDB()
    {
        $this->db = null;
    }
    

    public function passwordLib() {
    	require 'lib/passwordLibClass.php';
    }
}
?>
