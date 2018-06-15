<?php


class ContactController extends Controller
{
    public $data=array();

    public function location()
    {
        $data = array();              
        $templates = array('page/contact/location');
        App::render($templates, $data);
    }
    public function contactUs()
    {
    	$data = array();
    	
    	$templates = array('page/contact/contact');
     App::render($templates, $data);
    }
    
    
    
    public function sendMail(){
    	    	
    	$data = array();
    	$data = Helper::getPost();
    	 
    	$from = $data['email']; //$data['email']
    	$from_name = $data['name'];
    	$to = "duranno.church15@gmail.com";
    	$to_name = "info";
    	 
    	$data['mail']['name'] = $to_name;
    	$data['mail']['email'] = $to;
    	 
    	$template =  $data['subject'].'<br>'.$data['phone']; //Load::getContents('worker/mails/apply_submit', $data['mail']);
    	$subject = '[info]'.$data['subject'];
    	$data['email_result'] = $this->sendEmail($from,$from_name,$to,$to_name,$template,$subject);
    	 
    	 
    	$jSONerror = null;
    
    	echo json_encode(array('errormsg' => $jSONerror, 'results' => $data['email_result']));
    	
    }   
    
}

?>
