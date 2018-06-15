<?php
Class HomeModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }

  
    public function getDurannoNews ()
    {
    	     	
    	$query = "
    				SELECT `id`, `title`, `planed_date`,`div`, `description`   	
    				FROM news ORDER BY id DESC LIMIT 0,5";
    	$stmt =$this->db->prepare($query); 
    	    	
    	
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);   	
    
    	return $result;
    }   
    public function getMemberNews ()
    {
    	 
    	$query = "
    				SELECT `id`, `title`, `planed_date`,`div`, `description`
    				FROM member_news ORDER BY id DESC LIMIT 0,5";
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    
    public function getGallery()
    {
    	 
    	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    				FROM photo p left join  (select * from photo_file_small group by photo_id) pfs on p.id=pfs.photo_id where p.status = 1 ORDER BY id DESC LIMIT 0,8";
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    public function getPastorVideo()
    {
    	 
    	$query = "
    				SELECT `id`, `title`, `div`, `description`, `path`, `speech_date`, split_str(`path`, '/',5) path_img 
    				FROM video ORDER BY id DESC LIMIT 0,1";
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    	return $result;
    }
}

?>
