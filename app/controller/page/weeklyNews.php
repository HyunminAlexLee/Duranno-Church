<?php


class WeeklyNewsController extends Controller
{
    public $data=array();
    public $weeklynews_page_size = 8;
    public $weeklynews_page_list_size = 5;
    
    public function weeklyNews()
    {
        $data = array();     
        
        $first_no = 0;
        if (isset ( $data ['first_no'] )) {
        	$first_no = $data ['first_no'];
        }
        
        if (! $first_no || $first_no < 0) {
        	$first_no = 0;
        	$data ['first_no'] = 0;
        }
        
        
        
        $homeModel = Load::Model('weeklyNews');
        
        
        
        $data['news']['news'] =  $homeModel->getDurannoWeeklyNews($data, $this->weeklynews_page_size);
        $data['news']['newsTotalRow'] = $homeModel->getNewsTotalRow();
       
       
        
        $data['news']['page_list_size'] = $this->weeklynews_page_list_size;
        $data['news']['first_no'] = $first_no;
        $data['news']['page_size'] = $this->weeklynews_page_size;
        $data['news']['total_page'] = $this->total_page ( $data['news']['newsTotalRow'], $this->weeklynews_page_size );
        $data['news']['current_page'] = $this->current_page ( $this->weeklynews_page_size, $first_no );
     
     
     /*  $data ['gallery']['gallery'] = $pageModel->getgallery ( $data, $this->gallery_page_size );
        
        $data ['gallery']['galleryTotalRow'] = $pageModel->getgalleryTotalRow ();
        $data ['gallery']['page_list_size'] = $this->gallery_page_list_size;
        $data ['gallery']['first_no'] = $first_no;
        $data ['gallery']['page_size'] = $this->gallery_page_size;
        $data ['gallery']['total_page'] = $this->total_page ( $data['gallery']['galleryTotalRow'], $this->gallery_page_size );
        $data ['gallery']['current_page'] = $this->current_page ( $this->gallery_page_size, $first_no );
        */
        
        $templates = array('page/weeklyNews/weeklyNews');
        App::render($templates, $data);
    }    
    
    public function ajax_weeklyNews_list() {
    	$data = array ();
    	$data = Helper::getPost ();
    	$first_no = $data ['first_no'];
    	if (! $first_no || $first_no < 0) {
    		$first_no = 0;
    		$data ['first_no'] = 0;
    	}
    
    	$pageModel = Load::Model ( 'weeklyNews' );
    
    	$data ['news'] = $pageModel->getDurannoWeeklyNews ( $data, $this->weeklynews_page_size );    	
    	$data ['newsTotalRow'] = $pageModel->getNewsTotalRow ();
    
    	
   
    	$data ['page_list_size'] = $this->weeklynews_page_list_size;
    	$data ['first_no'] = $first_no;
    	$data ['page_size'] = $this->weeklynews_page_size;
    	$data ['total_page'] = $this->total_page ( $data ['newsTotalRow'], $this->weeklynews_page_size );
    	$data ['current_page'] = $this->current_page ( $this->weeklynews_page_size, $first_no );
    
    	$jSONerror = null;
    
    	echo json_encode ( array (
    			'errormsg' => $jSONerror,
    			'results' => $data
    	) );
    }
    
    /*
     * related to paging
     *
     */
    public function total_page($total_row, $page_size) {
    	if (! $total_row || $total_row <= 0)
    		$total_row = 0;
    		$total_row = ceil ( $total_row / $page_size );
    		return $total_row;
    }
    public function current_page($page_size, $first_no) {
    	$current_page = ceil ( ($first_no + 1) / $page_size );
    	return $current_page;
    }
}

?>
