<?php

      
class OfferingController extends Controller
{
    public $data=array();


    public function offering()
    {
    	$data = array();
    	
    	$templates = array('page/offering/offering');
     App::render($templates, $data);
    }
    
        
    public function sendMailDonation(){
    
    	$data = array();
    	$data = Helper::getPost();
    
    	$from = $data['email']; //$data['email']
    	$from_name = $data['name'];
    	$to = "duranno.church15@gmail.com";
    	$to_name = "info";
    
    	$data['mail']['name'] = $to_name;
    	$data['mail']['email'] = $to;
    
    	$template =  $data['message']; //Load::getContents('worker/mails/apply_submit', $data['mail']);
    	$subject = '[donation]'.$data['subject'];
    	$data['email_result'] = $this->sendEmail($from,$from_name,$to,$to_name,$template,$subject);
    
    
    	$jSONerror = null;
    
    	echo json_encode(array('errormsg' => $jSONerror, 'results' => $data['email_result']));
    
    
    }  
    
}

?>
