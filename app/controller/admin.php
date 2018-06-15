<?php


class AdminController extends Controller
{
	
	public function index_admin()
    {
    	$data=array();    
    	$data['is_logged']=true;
    	$data['signUp_res']="";
    	app::renderAdmin('commonAdmin/login', $data);
    }
    
    
    public function admin()
    {
    	$data=array();
    	 
    	app::renderAdmin('admin/index', $data);
    }
    
    
    
    public function signUp()
    {
    	$data= Helper::getPost();
    	$adminModel= Load::ModelAdmin('admin');
    	$admin = $adminModel->addManager($data);
    
    	
    	$data['signUp_res']=$admin;
    	$data['is_logged']="";
    	app::renderAdmin('commonAdmin/login', $data);
    
    }
    public function login()
    {
    	$data= Helper::getPost();
    	$adminModel= Load::ModelAdmin('admin');
    	$admin = $adminModel->getUser($data);
    
    	if($admin['is_logged']){
    		Session::flushSession();
    		Session::Reg($admin);
    		
    		$this->admin();
    		 
    
    	}else {    		
    		   
    		$data['is_logged']='false';    	
    		$data['signUp_res']="";
    		app::renderAdmin('commonAdmin/login', $data);
    	}
    
    }
    public function logout()
    {
    	Session::flushSession();
    	Helper::setHeader('Location: /home');
    }
    
    /*
     * 
     * videoPastor
     * 
     * 
     */
    
    
    public function videoPastorList()
    {
    	$data=array();
    	 
    	$modelAdmin = Load::ModelAdmin('admin');
    	
    	$pastorVideoList = $modelAdmin->getVideoPastorList($data);
    	$data['pastorVideoList'] = $pastorVideoList;
    	
    	
    	$templates = array (
    			'pageAdmin/pastorVideoList'
    	);
    	
    	App::renderAdmin ( $templates, $data );
    }

        
    public function videoPastorUpdate()
    {
    	$data=array();
    
    	
    	 
    	$templates = array (
    			'pageAdmin/pastorVideoUpdate'
    	);
    	 
    	App::renderAdmin ( $templates, $data );
    }
    
    public function videoPastorDetail()
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    	
    	//helper::getArrayData($data['get']); 
    	
    	$pastorVideoDetail = $modelAdmin->getVideoPastorDetail($data['get']);
    	$data['pastorVideoDetail'] = $pastorVideoDetail;
    
    
    	app::renderAdmin('pageAdmin/pastorVideoDetail', $data);
    }
    public function updatePastorVideo()
    {
    	$data=array();
    	$data = $_POST;
    	
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    	 
    	//helper::getArrayData($data['get']);
    	 
    	if($data['title'] != "" && $data['path'] != "" ){
    		$modelAdmin->updatePastorVideo($data);
    	}    	
    	    
    	$this->videoPastorList();    	
    }
    public function deletePastorVideo()
    {
    	$data=array();
    	$data = $_GET;
    	 
    	$modelAdmin = Load::ModelAdmin('admin');    	
    	
    	$modelAdmin->deletePastorVideo($data);
    	
    	$this->videoPastorList();
    }
    
    
      
    /*
     * 
     * videoPraise
     * 
     * 
     */
    
    public function videoPraiseList()
    {
    	$data=array();
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	 
    	$praiseVideoList = $modelAdmin->getVideoPraiseList($data);
    	$data['praiseVideoList'] = $praiseVideoList;
    	 
    	 
    	$templates = array (
    			'pageAdmin/praiseVideoList'
    	);
    	 
    	App::renderAdmin ( $templates, $data );
    }
    
    
    public function videoPraiseUpdate()
    {
    	$data=array();
    
    	 
    
    	$templates = array (
    			'pageAdmin/praiseVideoUpdate'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function videoPraiseDetail()
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    	 
    	//helper::getArrayData($data['get']);
    	 
    	$praiseVideoDetail = $modelAdmin->getVideoPraiseDetail($data['get']);
    	$data['praiseVideoDetail'] = $praiseVideoDetail;
    
    
    	app::renderAdmin('pageAdmin/praiseVideoDetail', $data);
    }
    public function updatePraiseVideo()
    {
    	$data=array();
    	$data = $_POST;
    	 
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" && $data['path'] != "" ){
    		$modelAdmin->updatePraiseVideo($data);
    	}
    		
    	$this->videoPraiseList();
    }
    public function deletePraiseVideo()
    {
    	$data=array();
    	$data = $_GET;
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	 
    	$modelAdmin->deletePraiseVideo($data);
    	 
    	$this->videoPraiseList();
    }
    
    /*
     *
     * weeklyNewsPaper
     *
     *
     */

    public function weeklyNewsPaperList()
    {
    	$data=array();
    
    	$modelAdmin = Load::ModelAdmin('admin');
    
    	$weeklyNewsPaperList = $modelAdmin->getWeeklyNewsPaperList($data);
    	$data['weeklyNewsPaperList'] = $weeklyNewsPaperList;
    
    
    	$templates = array (
    			'pageAdmin/weeklyNewsPaperList'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    
    
    public function weeklyNewsPaperUpdate()
    {
    	$data=array();
    
    	 
    
    	$templates = array (
    			'pageAdmin/weeklyNewsPaperUpdate'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function updateWeeklyNewsPaper()
    {
	    $data= array();
	    $data = Helper::getPost();
	    $data_file = Helper::getFile();
	    	   
	    $target_dir = "duranno/weeklyPdf/";	 
	  	 
	    $uploadRes1 = false;
	    $uploadRes2 = false;
	    $uploadRes3 = false;
	    
	//    Helper::getArrayData($data);
	  //  Helper::getArrayData($data_file);
	    
	   // echo "<br/> result:".$uploadRes1 . "-".$uploadRes2."-".$uploadRes3."<br/>";
	     
	   // echo  "<br/> result:".$data_file['file1'],$target_dir,"pdf"."<br/>";
	     
	    if($data_file['file1']['size'] > 0){
	    	$uploadRes1 = $this->fileUpload($data_file['file1'],$target_dir,"pdf");
	    	$uploadRes2 = $this->fileUpload($data_file['file2'],$target_dir,"pdf");
    	}
    	if($data_file['file3']['size'] > 0){
	    	$uploadRes3 = $this->fileUpload($data_file['file3'],$target_dir,"pdf");
    	}
	    $modelAdmin = Load::ModelAdmin('admin');
	  
	   
	    if($uploadRes1 && $uploadRes2){
	    	if($data['title'] != "" && $data_file['file1']['name'] != ""&& $data_file['file2']['name'] != "" ){
	    		$modelAdmin->updateWeeklyNewsPaper($data,$data_file);
	    	}
	    }	 
	   
	    if($uploadRes3){
	    	if($data['title'] != "" && $data_file['file3']['name'] != "" ){	    			    		
	    		$modelAdmin->updateWeeklyNewsPaperNew($data,$data_file);
	    	}
	    }
	    header('Location: weeklyNewsPaperList');
	    $this->weeklyNewsPaperList();	
    }
    
    /*
     *
     * Donation Info
     *
     *
     */
    
    

    public function donationList()
    {
    	$data=array();
    
    	$modelAdmin = Load::ModelAdmin('admin');
    
    	$donationList = $modelAdmin->getDonationList($data);
    	$data['donationList'] = $donationList;
    
    
    	$templates = array (
    			'pageAdmin/donationList'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function donationUpdate()
    {
    	$data=array();
    
    
    
    	$templates = array (
    			'pageAdmin/donationUpdate'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }

    /*
     *
     * Gallery Info
     *
     *
     */
    
    
    
    public function galleryList()
    {
    	$data=array();
    
    	$modelAdmin = Load::ModelAdmin('admin');
    
    	$galleryList = $modelAdmin->getGalleryList($data);
    	$data['galleryList'] = $galleryList;
    
    
    	$templates = array (
    			'pageAdmin/galleryList'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function galleryUpdate()
    {
    	$data=array();
    
    
    
    	$templates = array (
    			'pageAdmin/galleryUpdate'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function galleryDetail()
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    	 
    	//helper::getArrayData($data['get']);
    	 
    	$galleryDetail = $modelAdmin->getGalleryDetail($data['get']);
    	$data['galleryDetail'] = $galleryDetail;
    	$galleryphotoList = $modelAdmin->getGalleryPhotoList($data['get']);
    	$data['galleryphotoList'] = $galleryphotoList;
    
    	app::renderAdmin('pageAdmin/galleryDetail', $data);
    }
    public function updateGallery()
    {
    	$data=array();
    	$data = Helper::getPost();
	    $data_file = Helper::getFile();
    	
    	/*
    	 * database upload
    	 */
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    	
    	//helper::getArrayData($data['get']);
    	
    	if($data['title'] != ""){
    		$insert_id = $modelAdmin->updateGallery($data);
    		
    		$data['photo_id'] = $insert_id;
    	
    	
    	/*
    	 * file upload  
    	 */
    	
    	    
    	$target_sub_dir = $insert_id;
    	 
    	
    	$target_dir_big = "duranno/photos/".$target_sub_dir."/big/";
    	$target_dir_small = "duranno/photos/".$target_sub_dir."/small/";
    	
    	
    	//mkdir("/path/to/my/dir", 0700);
    	
    	
    	
    	if(!is_dir("duranno/photos/".$target_sub_dir)){
    		mkdir("duranno/photos/".$target_sub_dir, 0777);
    		mkdir($target_dir_big, 0777);
    		mkdir($target_dir_small, 0777);
    	}
    	    	
    	$file_ary = array();
    	$file_count = count($data_file['filesToUpload']['name']);
    	$file_keys = array_keys($data_file['filesToUpload']);
    	
    	for ($i=0; $i<$file_count; $i++) {
    		foreach ($file_keys as $key) {
    			$file_ary[$i][$key] = $data_file['filesToUpload'][$key][$i];
    		}
    	}    
    	
    	
    	if(count($file_ary) > 0) {
    		foreach ($file_ary as $file) {
    			$modelAdmin->updatePhotoFile($data,$file,$target_dir_big,$target_dir_small);
    			$this->imageUploadwithSmallImg(200,$file,$target_dir_big,$target_dir_small);    			    			
    		}
    	}
    	//$this->galleryUpdate();
    	//$this->galleryList();
    	 header('Location: galleryList');
    	}
    }
    public function deleteGallery()
    {
    	$data=array();
    	$data = $_GET;
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	 
    	$modelAdmin->deleteGallery($data);
    	 
    	$this->galleryList();
    }
   
    
    /*
     *
     * 두란노 소식 
     *
     *
     */
    
    
    public function durannoNewsList()
    {
    	$data=array();
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	 
    	$durannoNewsList = $modelAdmin->getDurannoNewsList($data);
    	$data['durannoNewsList'] = $durannoNewsList;
    	 
    	 
    	$templates = array (
    			'pageAdmin/durannoNewsList'
    	);
    	 
    	App::renderAdmin ( $templates, $data );
    }
    
    
    public function durannoNewsUpdate()
    {
    	$data=array();
    
    	 
    
    	$templates = array (
    			'pageAdmin/durannoNewsUpdate'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function durannoNewsDetail()
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    	 
    	//helper::getArrayData($data['get']);
    	 
    	$durannoNewsDetail = $modelAdmin->getDurannoNewsDetail($data['get']);
    	$data['durannoNewsDetail'] = $durannoNewsDetail;
    
    
    	app::renderAdmin('pageAdmin/durannoNewsDetail', $data);
    }
    public function updateDurannoNews()
    {
    	$data=array();
    	$data = $_POST;
    	 
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" ){
    		$modelAdmin->updateDurannoNews($data);
    	}
    		
    	$this->durannoNewsList();
    }
    public function deleteDurannoNews()
    {
    	$data=array();
    	$data = $_GET;
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	 
    	$modelAdmin->deleteDurannoNews($data);
    	 
    	$this->durannoNewsList();
    }
    
    

    /*
     *
     * 두란노가족 소식
     *
     *
     */
    
    
    public function memberNewsList()
    {
    	$data=array();
    
    	$modelAdmin = Load::ModelAdmin('admin');
    
    	$memberNewsList = $modelAdmin->getMemberNewsList($data);
    	$data['memberNewsList'] = $memberNewsList;
    
    
    	$templates = array (
    			'pageAdmin/memberNewsList'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    
    public function memberNewsUpdate()
    {
    	$data=array();
    
    
    
    	$templates = array (
    			'pageAdmin/memberNewsUpdate'
    	);
    
    	App::renderAdmin ( $templates, $data );
    }
    
    public function memberNewsDetail()
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	$memberNewsDetail = $modelAdmin->getMemberNewsDetail($data['get']);
    	$data['memberNewsDetail'] = $memberNewsDetail;
    
    
    	app::renderAdmin('pageAdmin/memberNewsDetail', $data);
    }
    public function updateMemberNews()
    {
    	$data=array();
    	$data = $_POST;
    
    	$modelAdmin = Load::ModelAdmin('admin');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" ){
    		$modelAdmin->updateMemberNews($data);
    	}
    
    	$this->memberNewsList();
    }
    public function deleteMemberNews()
    {
    	$data=array();
    	$data = $_GET;
    
    	$modelAdmin = Load::ModelAdmin('admin');
    
    	$modelAdmin->deleteMemberNews($data);
    
    	$this->memberNewsList();
    }
    
    
}

?>
