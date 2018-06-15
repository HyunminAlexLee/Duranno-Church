
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>설교 말씀</h2>
               <p class="lead">이강화 목사님 주일 설교</p>
            </div>
        

           

            <div class="row">

		
			<div class=" col-md-12 text-center">
				<div id="video_iframe" class="video_iframe text-center">
	<?php	if (count ( $pastor['pastorVideo'] ) > 0) {
							?>
							<iframe src="<?=$pastor['pastorVideo'][0]['path'];?>?enablejsapi=1" frameborder="0" allowfullscreen id="pastor_video_iframe"></iframe>
								<?php 
							
						}?>
				</div>						
			</div>
					
			<div class="service-title col-md-12 text-center">
				<div>
					<div id = "pastorVideoList" class="pastorVideoList col-md-12 text-left m_h2">
					
					<?php					
				
					if (count ( $pastor['pastorVideo'] ) > 0) {
						
						foreach ( $pastor['pastorVideo'] as $pastorVideo_data ) {							
							echo '<div class="col-xs-6 col-sm-6  col-md-3 col-lg-3 text-center"  onclick="videoPlay(\'' . $pastorVideo_data ['path'] .'\');"><img src="http://img.youtube.com/vi/'.$pastorVideo_data ['path_img'].'/1.jpg"><br/><h4 class="m_title">' . $pastorVideo_data ['title'] . '</h4></div>';
						}					
					}
					
					?>
					
					
				<?php
								
				$pastor_page_list_size = $pastor ['page_list_size'];
				$pastor_total_page = $pastor ['total_page'];
				$pastor_current_page = $pastor ['current_page'];
				$pastor_page_size = $pastor ['page_size'];
				$pastor_first_no = $pastor ['first_no'];
				
				//echo "<br/>count:" . count ( $pastor['pastorVideo'] );
				
				//echo "<br/>====>".$pastor_current_page ."===". $pastor_page_list_size ;
				$pastor_start_page = floor ( ($pastor_current_page - 1) / $pastor_page_list_size ) * $pastor_page_list_size + 1;
				//echo "<br/>start_page==>".$pastor_start_page;
			//	echo "<br/>page_list_size==>".$pastor_page_list_size;
				
				$pastor_end_page = $pastor_page_list_size;//$pastor_start_page + $pastor_page_list_size + 1;
				//echo "<br/>end_page==>".$pastor_end_page;
				//echo "<br/>".$pastor_total_page;echo "<br/>";echo "<br/>";
				
				
				echo '<div class ="col-xs-12 col-sm-12 col-md-12 m_page text-center " >';
				
				if ($pastor_total_page < $pastor_end_page)
					$pastor_end_page = $pastor_total_page;
				
				$pastor_prev_list = 0;
				if ($pastor_start_page >= $pastor_page_list_size) {
					$pastor_prev_list = ($pastor_start_page - 2) * $pastor_page_size;
					echo "<div  id='pastor_page_list'><span  class='page_prev m_h2'  id='pastor_page_prev' onclick = 'pastor_page_change(" . $pastor_prev_list . ");'><label>&lt;</label></span>";
				}
				
				for($i = $pastor_start_page; $i <= $pastor_end_page; $i ++) {
					$page = ($i - 1) * $pastor_page_size;
					if ($pastor_first_no != $page) {
						echo "<span  class='page_num' id='pastor_page_num' onclick = 'pastor_page_change(" . $page . ");'>";
					}
					echo "<label class='m_h2'>".$i."</label>";
					if ($pastor_first_no != $page) {
						echo "</span>";
					}
				}
				
				if ($pastor_total_page > $pastor_end_page) {
					$pastor_next_list = $pastor_end_page * $pastor_page_size;
					echo "<span  class='page_next m_h2' id='pastor_page_next' onclick = 'pastor_page_change(" . $pastor_next_list . ");'><label>&gt;</label></span></div>";
				}
				echo "</div>";
				
				?>	
					
				</div>
				</div>
			
</div>



            </div>
        </div>
    </section><!--/#portfolio-item-->
 <script>



function videoPlay(data){



	$video_iframe_temp = '<iframe src="'+data+'?autoplay=1" frameborder="0" allowfullscreen id="pastor_video_iframe"></iframe>'
	
	 $('#video_iframe').html($video_iframe_temp).fadeIn();    

}

function pastor_page_change(now_page){

var url = "/video/ajax_video_pastor_list";

var allData ={"first_no":now_page };

$.ajax({url: url,
	type:"POST",
    data: allData,
    dataType: "json",
    success: function(oData){
    	
        if(oData.errormsg != null){
            alert('failed: ' + oData.errormsg); 
            
        }else{	
	   
	        $pastor_html_temp = '';

	       
					if (oData.results['pastorVideo'].length > 0) {
						
						for ($i =0; oData.results['pastorVideo'].length > $i ;$i++) {
							$pastor_html_temp += '<div  class="col-xs-6 col-sm-6  col-md-3 text-center"   onclick="videoPlay(\'' + oData.results['pastorVideo'][$i]['path']+'\');"><img  src="http://img.youtube.com/vi/'+oData.results['pastorVideo'][$i]['path_img']+'/1.jpg"><br/><h4 class="m_title">' + oData.results['pastorVideo'][$i]['title'] + "</h4></div>";
						}
					}
									
				
					
				
				$pastor_page_list_size = oData.results['page_list_size'];  // 보여지는 페이지 번호  4
				$pastor_total_page = oData.results['total_page'];
				$pastor_current_page = oData.results['current_page'];
				$pastor_page_size = oData.results['page_size'];   // 보여지는 데이터 갯수 3
				$pastor_first_no =oData.results['first_no'];
				
				$pastor_start_page = Math.floor ( ($pastor_current_page - 1) / $pastor_page_list_size ) * $pastor_page_list_size + 1;
				
				$pastor_end_page = $pastor_start_page + $pastor_page_list_size - 1;
				console.log("1. common:  start_page==>"+$pastor_start_page);
				console.log("2. common:  end_page==>"+$pastor_end_page);
				console.log("3. common:  pastor_current_page==>"+$pastor_start_page);
				console.log("4. common:  pastor_total_page==>"+$pastor_end_page);

				$pastor_html_temp +='<div class ="col-xs-12 col-sm-12 col-md-12 m_page text-center" >';
				
				if ($pastor_total_page < $pastor_end_page)
					$pastor_end_page = $pastor_total_page;
				
				$pastor_prev_list = 0;
				if ($pastor_start_page >= $pastor_page_list_size) {
					
					console.log( "2. page_list_size==>"+$pastor_page_list_size);
					console.log( "3. pastor_page_size==>"+$pastor_page_size);
					$pastor_prev_list = ($pastor_start_page - 2) * $pastor_page_size;
				//	$pastor_prev_list = $pastor_start_page -  $pastor_page_list_size;

					console.log( "4. prev_list==>"+$pastor_prev_list);
					

					
					$pastor_html_temp += "<div id='pastor_page_list'><span class='page_prev' id='pastor_page_prev' onclick = 'pastor_page_change("+$pastor_prev_list+ ");'><label>&lt;</label></span>";
				}
				
				for($i = $pastor_start_page; $i <= $pastor_end_page; $i ++) {
					$page = ($i - 1) * $pastor_page_size;
					if ($pastor_first_no != $page) {
						$pastor_html_temp += "<span class='page_num' id='pastor_page_num' onclick = 'pastor_page_change(" + $page + ");'>";
					}
					$pastor_html_temp += "<label>"+$i+"</label>";
					if ($pastor_first_no != $page) {
						$pastor_html_temp += "</span>";
					}
				}
				
				if ($pastor_total_page > $pastor_end_page) {
					console.log( "1. total_page==>"+$pastor_total_page);
				
					console.log( "3. pastor_page_size==>"+$pastor_page_size);
					$pastor_next_list = $pastor_end_page * $pastor_page_size;
					console.log( "4. next_list==>"+$pastor_next_list);
					
					$pastor_html_temp += "<span  class='page_next' id='pastor_page_next' onclick = 'pastor_page_change("+ $pastor_next_list+ ");'><label>&gt;</label></span></div>";
				}				
			
				$pastor_html_temp +='</div>';
	        $('#pastorVideoList').show().html($pastor_html_temp).fadeIn();           

	        
        }
    }
});
}


</script>