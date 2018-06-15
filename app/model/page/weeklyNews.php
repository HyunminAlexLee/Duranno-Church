<?php
Class weeklyNewsModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }

  public function getDurannoWeeklyNews($data,$page_size)
    {
    
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	// 	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    //				FROM photo p left join  (select * from photo_file_small group by photo_id) pfs on p.id=pfs.photo_id ORDER BY id DESC LIMIT 0,3";
    
    	$first_no = $data['first_no'];
    	$query = "  SELECT id, week, division, title, description, file_path, file_name,division,left(file_name,8) file_name2
    				FROM weekly_newspaper GROUP BY week  ORDER BY id desc, week desc, division asc LIMIT ".$first_no.",".$page_size;
    	
       	
    	$stmt =$this->db->prepare($query);
    	
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
  public function getNewsTotalRow()
    {
    
    	$query = "
    				 SELECT count(*) cnt FROM (SELECT  week FROM weekly_newspaper GROUP BY week) we;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    
    
}

?>
