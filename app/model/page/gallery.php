<?php
Class GalleryModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }

  public function getgalleryDetail($data)
    {
    
    	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name,REPLACE(pfs.file_path, 'small', 'big') AS file_path_big
    				FROM photo p left join  photo_file_small pfs on p.id=pfs.photo_id WHERE p.id = :id  AND pfs.status = 1  ORDER BY id DESC";
    	
    	
    	
    	
    	$stmt =$this->db->prepare($query);
    
    
    	$insert = array(
                'id'    => $data['id']               
            );
            $stmt->execute($insert);
    	
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getgallery($data,$page_size)
    {
    
    	//$first_no= ($data['first_no']*$page_size)-$page_size;
    	// 	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    //				FROM photo p left join  (select * from photo_file_small group by photo_id) pfs on p.id=pfs.photo_id ORDER BY id DESC LIMIT 0,3";
    
    	$first_no = $data['first_no'];
    	$query = "  SELECT p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
    				FROM photo p left join  (select * from photo_file_small WHERE status = 1 group by photo_id) pfs on p.id=pfs.photo_id WHERE p.status = 1 ORDER BY id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getgalleryTotalRow()
    {
    
    	$query = "
    				 SELECT  count(*) cnt
    				FROM  photo  WHERE status = 1;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    
}

?>
