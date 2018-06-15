<?php


class VideoController extends Controller
{
    public $data=array();
    public $page_size = 4;
    public $page_list_size = 4;
    
    
 	/*
	 * video sub video_pastor
	 *
	 */
	public function video() {
		$data = array ();
		$data ['subpage_title']='videoPastor';
	
		$first_no = 0;
		if (isset ( $data ['first_no'] )) {
			$first_no = $data ['first_no'];
		}
		
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'video' );
		
		$data ['pastor'] ['pastorVideo'] = $pageModel->getPastorVideo ( $data, $this->page_size );
		$data ['pastor'] ['pastorVideoTotalRow'] = $pageModel->getPastorVideoTotalRow ();
		$data ['pastor'] ['page_list_size'] = $this->page_list_size;
		$data ['pastor'] ['first_no'] = $first_no;
		$data ['pastor'] ['page_size'] = $this->page_size;
		$data ['pastor'] ['total_page'] = $this->total_page ( $data ['pastor'] ['pastorVideoTotalRow'], $this->page_size );
		$data ['pastor'] ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		/*$data ['praise'] ['praiseVideo'] = $pageModel->getpraiseVideo ( $data, $this->page_size );
		$data ['praise'] ['page_list_size'] = $this->page_list_size;
		$data ['praise'] ['first_no'] = $first_no;
		$data ['praise'] ['page_size'] = $this->page_size;
		$data ['praise'] ['praiseVideoTotalRow'] = $pageModel->getpraiseVideoTotalRow ();
		$data ['praise'] ['total_page'] = $this->total_page ( $data ['praise'] ['praiseVideoTotalRow'], $this->page_size );
		$data ['praise'] ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		*/
		$templates = array (
				'page/video/video'
		);
		
		App::render ( $templates, $data );		
	}
	public function ajax_video_pastor_list() {
		$data = array ();
		$data = Helper::getPost ();
		$first_no = $data ['first_no'];
		if (! $first_no || $first_no < 0) {
			$first_no = 0;
			$data ['first_no'] = 0;
		}
		
		$pageModel = Load::Model ( 'video' );
		
		$data ['pastorVideo'] = $pageModel->getPastorVideo ( $data, $this->page_size );
		
		$data ['pastorVideoTotalRow'] = $pageModel->getPastorVideoTotalRow ();
		
		$data ['page_list_size'] = $this->page_list_size;
		$data ['first_no'] = $first_no;
		$data ['page_size'] = $this->page_size;
		$data ['total_page'] = $this->total_page ( $data ['pastorVideoTotalRow'], $this->page_size );
		$data ['current_page'] = $this->current_page ( $this->page_size, $first_no );
		
		$jSONerror = null;
		
		echo json_encode ( array (
				'errormsg' => $jSONerror,
				'results' => $data 
		) );
	}
	
	/*
	 * public function ajax_video_list_perpage(){
	 *
	 * $data = array();
	 * $data = Helper::getPost();
	 * $video_page = $data['first_no'];
	 *
	 * if(!$video_page || $video_page <0) {$video_page = 0; $data['first_no']=0;}
	 *
	 *
	 * $pageModel = Load::Model('page');
	 *
	 * $data['pastorVideo'] = $pageModel->getPastorVideo($data,19);
	 *
	 * $jSONerror = null;
	 *
	 * echo json_encode(array('errormsg' => $jSONerror, 'results' => $data));
	 *
	 *
	 * }
	 */
	
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
