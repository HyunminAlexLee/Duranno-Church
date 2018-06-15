<?php
Class videoModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }
    public function getPastorVideo($data,$page_size)
    {
    	 
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	 
    	 
    	$first_no = $data['first_no'];
    	 
    	
    	
    	
    	$query = "
    				SELECT `id`, `title`, `div`, `description`, `path`  , split_str(`path`, '/',5) path_img
    				FROM video ORDER BY id DESC LIMIT ".$first_no.",".$page_size;
    	
    	
    	
    	
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	 
    	return $result;
    }
    public function getPastorVideoTotalRow()
    {
    
    	$query = "
    				SELECT  count(*) cnt
    				FROM video
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    
}

?>
