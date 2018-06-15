<?php
Class AdminModel extends Model
{
	
	
    function __construct()
    {
        $this->connectDB();
      
    }


    
  
    
    public function getUser($data=array())
    {
    	 
    	 
    	$query = "SELECT * FROM admin_users WHERE email = :email";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			"email" => $data['email']
    	);
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);    	
    	
    	
    	$auth_check = password_verify($data['password'], $result['password']);    
    	
    	if($auth_check){
    		$result['is_logged'] = True;
    		unset($result['password']);
    		$this->updateLoginHistory($result);
    		return $result;
    	} else {
    		return false;
    	}
    }
    public function updateLoginHistory($data=array())
    {
    	try {
    		$this->db->beginTransaction();
    		$query = "INSERT INTO `admin_login_history` (`admin_id`, `ip`) VALUES (:admin_id, :ip)";
    		$stmt = $this->db->prepare($query);
    		$input = array(
    				'admin_id' => $data['email'],
    				'ip' => $_SERVER['REMOTE_ADDR']
    		);
    		$stmt->execute($input);
    		$this->db->commit();
    	} catch (PDOException $e){
    		$this->db->rollback();
    		echo "an Error has occurred". $e->getMessage();
    	}
    }
    
    
    
    
    public function addManager($data) {
    	try {
    			
    			
    		$return = true;
    		$this->db->beginTransaction ();
    		/*\
    		 * tel:"333"  / email:"222"  / city:"Toronto"  / full_name:"111"
    		 * 	"password" => password_hash ( $data ['password'], PASSWORD_DEFAULT ),
    		 */
    		$query = "
 									INSERT INTO admin_users(
 										email
									  	,user_name
										,password
    									,auth
									) VALUES (
									   :email
									  ,:user_name
									  ,:password
									  ,:auth					 				
									)";
    
    
    		$insert = array (
    				"email" => $data ['email'],
    				"user_name" => $data ['userName'],
    				"password" => password_hash ( $data ['password'], PASSWORD_DEFAULT ),
    				"auth" => 0    				
    		);
    
    
    		$stmt = $this->db->prepare ( $query );
    		$stmt->execute ( $insert );
    
    		if(!$return){
    			$this->db->rollback();
    		}else{
    			$this->db->commit();
    		}
    		
    		return $return;
    
    	} catch ( PDOException $e ) {
    		$this->db->rollback ();
    		//echo "an Error has occurred" . $e->getMessage ();
    		return false;
    	}
    }
    
    /*
     *
     *
     * Pastor Video
     *
     *
     * */
    public function getVideoPastorList()
    {
    	     	
    	$query = "
    				SELECT `id`, `title`, `div`, `description` ,`path`, `create_date`  	,`speech_date` , `status`
    				FROM video ORDER BY id desc";
    	$stmt =$this->db->prepare($query); 
    	    	
    	
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);   	
    
    	return $result;
    }     
    
    public function getVideoPastorDetail($data)
    {
    	    	
    	
    	$query = "
    				SELECT `id`, `title`, `div`, `description` ,`path`, `create_date` ,`speech_date` , `status`
    				FROM video WHERE id = :id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    	 
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;    	
    }
    public function updatePastorVideo($data)
    {
    
    	$query = "INSERT INTO video (`title`, `div`, `description` ,`path`,  `speech_date` ,`status`) ".
    			"VALUES (:title, :div, :description, :path, :speech_date,:status)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'title' => $data['title'],
    			'div' => $data['div'],
    			'description' => $data['description'],
    			'path' => $data['path'],
    			'speech_date' => $data['speech_date'],
    			'status' =>1    			
    	);
    	$stmt->execute($input);    	
    }
    public function deletePastorVideo($data)
    {
    
    	$query = "UPDATE video SET status = 0 WHERE id = :id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']  
    	);
    	$stmt->execute($input);
    }
    
    
    /*
     * 
     * 
     * Praise Video
     * 
     * 
     * */
    
    public function getVideoPraiseList()
    {
    	 
    	$query = "
    				SELECT `id`, `title`, `div`, `description` ,`path`, `create_date`  	, `status`
    				FROM praise ORDER BY id DESC ";
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    public function getVideoPraiseDetail($data)
    {
    
    	 
    	$query = "
    				SELECT `id`, `title`, `div`, `description` ,`path`, `create_date` , `status`
    				FROM praise WHERE id = :id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    public function updatePraiseVideo($data)
    {
    
    	$query = "INSERT INTO praise (`title`, `div`, `description` ,`path`, `create_date` ,`status`) ".
    			"VALUES (:title, :div, :description, :path, :create_date, :status)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'title' => $data['title'],
    			'div' => $data['div'],
    			'description' => $data['description'],
    			'path' => $data['path'],
    			'create_date' => $data['create_date'],
    			'status' =>1
    	);
    	$stmt->execute($input);
    }
    public function deletePraiseVideo($data)
    {
    
    	$query = "UPDATE praise SET status = 0 WHERE id = :id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    	$stmt->execute($input);
    }
    


    /*
     *
     *
     * WeeklyNewsPaper PDF
     *
     *
     * */
    
    
    public function getWeeklyNewsPaperList()
    {
    
    	$query = "
    				SELECT `id`, `issue_year`, `issue_month`, `issue_day`, `division`, `file_name`, `file_path`, `title`, `description`, `create_date`, `create_id`
    				FROM weekly_newspaper ORDER BY issue_year  DESC,issue_month  DESC, issue_day  DESC ";
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function updateWeeklyNewsPaper($data,$data_file)
    {
    
    	
     
    	//$date = explode("/", $data['week']); 	
    	
    	
    	$query = "INSERT INTO weekly_newspaper (`issue_year`, `issue_month`, `issue_day`,week, `division`, `file_name`, `file_path`, `title`, `description`, `create_date`, `create_id`) ".
    			"VALUES (:issue_year, :issue_month, :issue_day,:week, :division, :file_name, :file_path, :title, :description, now(), :create_id)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'issue_year' => '',//$date[2],
    			'issue_month' => '',//$date[0],
    			'issue_day' =>'',//$date[1],
    			'week' => $data['week'],
    			'division' => 1,
    			'file_name' => $data_file['file1']['name'],
    			'file_path' => 'duranno/weeklyPdf/',
    			'title' => $data['title'],
    			'description' => $data['description'],    			
    			'create_id' => 'admin'
    	);
    	$stmt->execute($input);
    	
    	$query2 = "INSERT INTO weekly_newspaper (`issue_year`, `issue_month`, `issue_day`,week, `division`, `file_name`, `file_path`, `title`, `description`, `create_date`, `create_id`) ".
    			    			"VALUES (:issue_year, :issue_month, :issue_day,:week, :division, :file_name, :file_path, :title, :description, now(), :create_id)";
    	$stmt2 = $this->db->prepare($query2);
    	$input2 = array(
    			'issue_year' => '',//$date[2],
    			'issue_month' => '',//$date[0],
    			'issue_day' =>'',//$date[1],
    			'week' => $data['week'],
    			'division' => 2,
    			'file_name' => $data_file['file2']['name'],
    			'file_path' => 'duranno/weeklyPdf/',
    			'title' => $data['title'],
    			'description' => $data['description'],    			
    			'create_id' => 'admin'
    	);
    	$stmt2->execute($input2);
    }
    public function updateWeeklyNewsPaperNew($data,$data_file)
    {
    
    	 
    	 
    	$date = explode("/", $data['week']);
    	 
    	 
    	$query = "INSERT INTO weekly_newspaper (`issue_year`, `issue_month`, `issue_day`,`week`, `division`, `file_name`, `file_path`, `title`, `description`, `create_date`, `create_id`) ".
    			"VALUES (:issue_year, :issue_month, :issue_day,:week, :division, :file_name, :file_path, :title, :description, now(), :create_id)";
    	$stmt = $this->db->prepare($query);
    	
    
    	$input = array(
    			'issue_year' => $date[2],
    			'issue_month' => $date[0],
    			'issue_day' =>$date[1],
    			'week' => $data['week'],
    			'division' => 3,
    			'file_name' => $data_file['file3']['name'],
    			'file_path' => 'duranno/weeklyPdf/',
    			'title' => $data['title'],
    			'description' => $data['description'],
    			'create_id' => 'admin'
    	);
    	
    	
    	$stmt->execute($input);    	
    }
    /*
     *
     *
     * Danation Info 
     *
     *
     * */
    
    public function getDonationList()
    {
    
    	$query = "
    				SELECT `id`, `name`, `email`, `donation`, `title`, `description`, `create_date`
    				FROM danation ORDER BY create_date";
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    /*
     *
     *
     * Gallery
     *
     *`photo`(`id`, `name`, `title`, `div`, `group_id`, `description`, `path`, `create_date`)
     *
     * */
    public function getGalleryList()
    {
    	 
    	$query = "
    				SELECT `id`,`title`, `div`, `group_id`, `description`, `path`, `create_date`,`status`
    				FROM photo ORDER BY id desc ";
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    
    public function getGalleryPhotoList($data)
    {
    
    	$query = "
    				SELECT `id`, `photo_id`, `file_name`, `file_size`, `status`
    				FROM photo_file_big WHERE photo_id = :photo_id ORDER BY id desc ";
    	$stmt =$this->db->prepare($query);
    
    	$input = array(
    			'photo_id' => $data['id']
    	);
    	
    	$stmt->execute($input);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    public function getGalleryDetail($data)
    {
    
    	 
    	$query = "
    				SELECT `id`,`title`, `div`, `group_id`, `description`, `path`, `create_date`,`status`
    				FROM photo WHERE id = :id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    public function updateGallery($data)
    {
    
    	$query = "INSERT INTO photo ( `title`, `div`, `group_id`, `description`, `path`, `create_date`,`status`) ".
    			"VALUES ( :title, :div, :group_id, :description, :path, now(),:status)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			
    			'title' => $data['title'],
    			'div' => $data['div'],
    			'group_id' => '',
    			'description' => $data['description'],
    			'path'  => '',
    			'status' => 1
    	);
    	$stmt->execute($input);  
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	
    	$insert_id =  $this->db->lastInsertId();
    	
    	return $insert_id;
    }
    
    public function updatePhotoFile($data,$data_file,$target_dir_big,$target_dir_small)
    {
    
    	
    		
		    	$query = "INSERT INTO photo_file_big (`photo_id`, `file_name`, `file_size`, `file_path`, `status`) ".
		    			"VALUES (:photo_id, :file_name, :file_size, :file_path, :status)";
		    	$stmt = $this->db->prepare($query);
		    	$input = array(
		    			'photo_id' => $data['photo_id'],
		    			'file_name' => $data_file['name'],
		    			'file_size' => $data_file['size'],   
		    			'file_path' =>$target_dir_big,
		    			'status' => 1
		    	);
		    	$stmt->execute($input);
    		
		    	$query = "INSERT INTO photo_file_small (`photo_id`, `file_name`, `file_size`, `file_path`, `status`) ".
		    			"VALUES (:photo_id, :file_name, :file_size, :file_path, :status)";
		    	$stmt = $this->db->prepare($query);
		    	$input = array(
		    			'photo_id' => $data['photo_id'],
		    			'file_name' => $data_file['name'],
		    			'file_size' => '',
		    			'file_path' =>$target_dir_small,
		    			'status' => 1
		    	);
		    	$stmt->execute($input);
    	
    }
    
    public function deleteGallery($data)
    {
    
    	$query = "UPDATE photo SET status = 0 WHERE id = :id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    	$stmt->execute($input);
    }
    
    

    /*
     *
     *
     * duranno news 
     *
     *
     * */
    public function getDurannoNewsList()
    {
    	 
    	$query = "
    				SELECT `id`, `title`, `planed_start_date`, `div`, `description`, `create_date`, `planed_end_date`, `planed_date`, `status`
    				FROM news ORDER BY id desc ";
    	$stmt =$this->db->prepare($query);
    
    	 
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    public function getDurannoNewsDetail($data)
    {
    
    	 
    	$query = "
    				SELECT `id`, `title`, `planed_start_date`, `div`, `description`, `create_date`, `planed_end_date`, `planed_date`, `status`
    				FROM news WHERE id = :id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    public function updateDurannoNews($data)
    {
    
    	$query = "INSERT INTO news (`title`, `planed_start_date`, `div`, `description`,  `planed_end_date`, `planed_date`) ".
    			"VALUES (:title, :planed_start_date, :div, :description, :planed_end_date, :planed_date)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'title' => $data['title'],
    			'planed_start_date' => $data['planed_start_date'],
    			'div' => $data['div'],
    			'description' => $data['description'],
    			'planed_end_date' => $data['planed_end_date'],
    			'planed_date' =>  $data['planed_date']
    	);
    	$stmt->execute($input);
    }
    public function deleteDurannoNews($data)
    {
    
    	$query = "UPDATE news SET status = 0 WHERE id = :id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    	$stmt->execute($input);
    }
    /*
     *
     *
     * member news
     *
     *
     * */
    public function getMemberNewsList()
    {
    
    	$query = "
    				SELECT `id`, `title`, `planed_start_date`, `div`, `description`, `create_date`, `planed_end_date`, `planed_date`, `status`
    				FROM member_news ORDER BY id desc";
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    
    public function getMemberNewsDetail($data)
    {
    
    
    	$query = "
    				SELECT `id`, `title`, `planed_start_date`, `div`, `description`, `create_date`, `planed_end_date`, `planed_date`, `status`
    				FROM member_news WHERE id = :id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    public function updateMemberNews($data)
    {
    
    	$query = "INSERT INTO member_news (`title`, `planed_start_date`, `div`, `description`,  `planed_end_date`, `planed_date`) ".
    			"VALUES (:title, :planed_start_date, :div, :description, :planed_end_date, :planed_date)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'title' => $data['title'],
    			'planed_start_date' => $data['planed_start_date'],
    			'div' => $data['div'],
    			'description' => $data['description'],
    			'planed_end_date' => $data['planed_end_date'],
    			'planed_date' =>  $data['planed_date']
    	);
    	$stmt->execute($input);
    }
    public function deleteMemberNews($data)
    {
    
    	$query = "UPDATE member_news SET status = 0 WHERE id = :id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'id' => $data['id']
    	);
    	$stmt->execute($input);
    }
    
}

?>
