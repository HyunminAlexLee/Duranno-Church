<?php


class HomeController extends Controller
{
    public $data=array();

    public function index()
    {
        $data = array();              
        
        $homeModel = Load::Model('home');
     //   Session::flushSession();
        
       
       // Session::reg(array('work'=>'22222'));
       
       // Helper::getArrayData($_SESSION);
        
       // Load::Language('home');
        $data['news'] =  $homeModel->getDurannoNews();
        $data['member_news'] =  $homeModel->getMemberNews();
        $data['gallery'] =  $homeModel->getGallery();
        $data['pastorVideo'] =  $homeModel->getPastorVideo();
        
        
        $templates = array('page/home/index');
        App::render($templates, $data);
    }
    public function contact()
    {
    	$data = array();
    	
    	$templates = array('page/contact');
     App::render($templates, $data);
    }
    
    
    public function getNotices() {
    	
    	
    	$data = array();
    	$data = Helper::getPost();
    
    	
    	$data['header'] = Load::getContents('common/head');
    	$data['menu'] = Load::getContents('common/leftMenu');
    	$data['footer'] = Load::getContents('common/footer');
    	
    	
    	$data['totalPageList'] = 10;
    	
    	if(!isset($data['page'])){    		
    		$data['page'] = 1;
    	}
    	
    	
    	$modelPage = Load::Model('page'); 
    	$noticeTotalCnt = $modelPage->getNoticeTotalCnt();	    	
    	$notices = $modelPage->getNotices($data);    
    	$data['notices'] = $notices;    	
    	$data['noticeTotalCnt'] = $noticeTotalCnt;
    	
    	
    	
    	$templates = array('page/noticeBoardList');
    	App::render($templates, $data);
    
    
    }
    

    public function getNotices_ajax() {    	 
    	 
    	$data = array();
    	$data = Helper::getPost();
    	 
    	$data['totalPageList'] = 10;    	 
    	 
    	$modelPage = Load::Model('page');
    	$noticeTotalCnt = $modelPage->getNoticeTotalCnt();
    	$notices = $modelPage->getNotices($data);
    	$data['notices'] = $notices;
    	$data['noticeTotalCnt'] = $noticeTotalCnt;
    	 
    	$jSONerror = null;
    	
    	echo json_encode(array('errormsg' => $jSONerror, 'results' => $data));

    }  
    
    public function sendMail(){
    	    	
    	$data = array();
    	$data = Helper::getPost();    	
    	
    	$from = $data['email']; //$data['email']
    	$from_name = $data['name'];
    	$to = "info@emotiontherapies.com";
    	$to_name = "info";
    	
    	$data['mail']['name'] = $to_name;
    	$data['mail']['email'] = $to;
    	
    	$template =  $data['message']; //Load::getContents('worker/mails/apply_submit', $data['mail']);
    	$subject = $data['subject'];
    	$data['email_result'] = $this->sendEmail($from,$from_name,$to,$to_name,$template,$subject);
    	
    	
    	$jSONerror = null;
    	 
    	echo json_encode(array('errormsg' => $jSONerror, 'results' => $data['email_result']));
    	 
    	
    }   
    public function language(){
    
    	$data = array();
    
  
    	 
    }
  
    
}

?>
