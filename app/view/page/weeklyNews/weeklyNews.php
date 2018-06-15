 
 <script type="text/javascript" src="../js/pdfobject.js"></script>
 
 <style>

/*
PDFObject appends the classname "pdfobject-container" to the target element.
This enables you to style the element differently depending on whether the embed was successful.
*/
.pdfobject-container {
	width: 100%;
	max-width: 600px;
	height: 600px;
	margin: 2em 0;
}

/* PDFObject automatically assigns the class name "pdfobject" to the <embed> element */
.pdfobject { border: solid 1px #666; }

</style>
  <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>교회활동</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
         <div class="col-sm-12 wow fadeInDown">
		
		                    <div class="accordion">
                        <h2>두란노소식</h2>
                        <div id="accordion_g">
                        <div class="panel-group" id="accordion1">
                          	<?php            
	        	// `id`, `title`, `planed_date`,`div`, `description`
	
                          	if (count ( $news['news'] ) > 0) {
                          	
                          		foreach ( $news['news'] as $new ) {
                          			
                          	 ?>

	           			      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" onClick ="open_pdf('<?= $new['id']?>','<?= $new['file_path'];?>','<?= $new['file_name2'];?>','<?= $new['division'];?>')" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?= $new['id']?>">
                                 <?= $new['week']?> <?= $new['title']?> 
                                 <!--  <i class="pull-right">//$new['week'] </i> -->
                                </a>
                              </h3>
                            </div>

                            <div id="collapse<?= $new['id']?>" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <div class="media accordion-inner">                                       
                                        <div class="media-body">
                                        <?php  if($new['division']=="3"){  ?>                                 
                                          <div id="pdf<?= $new['id']?>1"></div>
                                        <?php  } else{ ?>  
                                            <div id="pdf<?= $new['id']?>1"></div>
											<div id="pdf<?= $new['id']?>2"></div>             
                                           
                                      
                                         <?php  }  ?>  
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

	           				<?php
	           				   
                          			} }?>    
                          
                    
                
                         
                        </div><!--/#accordion1-->
                        		<div class ="col-md-12 m_page text-center">
				<?php
				
				$page_list_size = $news ['page_list_size'];
				$total_page = $news ['total_page'];
				$current_page = $news ['current_page'];
				$page_size = $news ['page_size'];
				$first_no = $news ['first_no'];
				//echo $page_list_size;
				$start_page = floor ( ($current_page - 1) / $page_list_size ) * $page_list_size + 1;
				//echo "<br/>start_page==>".$start_page;
				//echo "<br/>page_list_size==>".$page_list_size;
				
				$end_page = $page_list_size;//$start_page + $page_list_size + 1;
				//echo "<br/>end_page==>".$end_page;
				//echo "<br/>total_page==>".$total_page;
				//echo "<br/>first_no==>".$first_no;
				if ($total_page < $end_page)
					$end_page = $total_page;
				
				$prev_list = 0;
				
				
				//echo "<br/>start_page>=page_list_size".$start_page.'>='.$page_list_size;
				if ($start_page >= $page_list_size) {
					$prev_list = ($start_page - 2) * $page_size;
					echo "<div id='page_list'><span class='page_prev' id='page_prev' onclick = 'page_change(" . $prev_list . ");'><label>&lt;</label></span>";
				}
				
				for($i = $start_page; $i <= $end_page; $i ++) {
					$page = ($i - 1) * $page_size;
					//echo "<br/>page==>".$page;
					
					if ($first_no != $page) {
						echo "<span class='page_num' id='page_num' onclick = 'page_change(" . $page . ");'>";
					}
					echo "<label>".$i."</label>";
					if ($first_no != $page) {
						echo "</span>";
					}
				}
				
				if ($total_page > $end_page) {
					$next_list = $end_page * $page_size;
					echo "<span  class='page_next' id='page_next' onclick = 'page_change(" . $next_list . ");'><label>&gt;</label></span></div>";
				}
				
				?>	
					</div></div>
                    </div>
                </div>    
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->
  
      <script>

    		 

    /* $(document).ready(function(){

    	 var size = {
       		  width: window.innerWidth || document.body.clientWidth
         }
    	
		var w = 500,h = 400;
    	if(size.width < 767 && size.width >= 480  ){
			w = 300; h=200;
		}else if(size.width < 480){
			w = 260; h=200;
		}		
		//$('a.media').media({width:w, height:h});
    	$('a.media').media();
     });
*/

function open_pdf(id,path,name2,div){

	var options = {
			page: 2,
			pdfOpenParams: {
				navpanes: 1,
				view: "FitH",
				pagemode: "thumbs"
			}
	};

	if(div==3){
		PDFObject.embed("../../"+path+name2+".pdf", "#pdf"+id+"1", options);
	}else{
		PDFObject.embed("../../"+path+"/"+name2+"-1.pdf", "#pdf"+id+"1", options);
		PDFObject.embed("../../"+path+"/"+name2+"-2.pdf", "#pdf"+id+"2");
	}
	
}
      
     
      function media_recall(){
    	  var size = {
           		  width: window.innerWidth || document.body.clientWidth           		  
             }
    	  var w = 500,h = 400;
      	if(size.width < 767 && size.width >= 480  ){
  			w = 300; h=200;
  		}else if(size.width < 480){
  			w = 280; h=200;
  		}

  			   	  $('a.media').media({width:500, height:400});
    	      }
      
      
      function page_change(now_page){

    	  var url = "/weeklyNews/ajax_weeklyNews_list";
    	
    	  $('#nowpage').val(now_page);


    	  var allData ={"first_no":now_page };
    	   
    	  $.ajax({url: url,
    	  	type:"POST",
    	      data: allData,
    	      dataType: "json",
    	      success: function(oData){
    	      	
    	          if(oData.errormsg != null){
    	              alert('failed: ' + oData.errormsg); 
    	              
    	          }else{	
    	  	   
    	  	        $html_temp = '';	
    	  	      $html_temp +=  '<div class="panel-group" id="accordion1">';
    	  			if (oData.results['news'].length > 0) {						
    	  									
    	  				for ($i =0; oData.results['news'].length > $i ;$i++) {	
    	  				
    	  								$html_temp +='  <div class="panel panel-default">';
    	  									$html_temp +=			'    <div class="panel-heading">';
    	  									$html_temp +=			'     <h3 class="panel-title">';
    	  									$html_temp +=			'     <a class="accordion-toggle"  onClick ="open_pdf('+  oData.results['news'][$i]['id']+',\''+  oData.results['news'][$i]['file_path']+'\',\''+  oData.results['news'][$i]['file_name2']+'\','+  oData.results['news'][$i]['division']+')"  data-toggle="collapse" data-parent="#accordion1" href="#collapse'+oData.results['news'][$i]['id']+'">'+ oData.results['news'][$i]['title']+' '+oData.results['news'][$i]['week'];
    	  								//	$html_temp +=			' <i class="pull-right">'+ oData.results['news'][$i]['week']+'</i>';
    	  									$html_temp +=			' </a>';
    	  									$html_temp +=			' </h3>';
    	  									$html_temp +=			' </div>';

    	  									$html_temp +=			'<div id="collapse'+  oData.results['news'][$i]['id']+'" class="panel-collapse collapse">';
    	  									$html_temp +=			' <div class="panel-body">';
    	  									$html_temp +=			'  <div class="media accordion-inner">    ' ;                                  
    	  									$html_temp +=			' <div class="media-body">  '       ;                                    

    	  									$html_temp +=		' <div id="pdf'+oData.results['news'][$i]['id']+'1"></div>'   ;
    	  		    	  					if(oData.results['news'][$i]['division']!= "3"){
    	  		    	  					$html_temp +=			' <div id="pdf'+oData.results['news'][$i]['id']+'2"></div>'   ;
    	  									}
    	  									$html_temp +=			'   </div>';
    	  									$html_temp +=			' </div>';
    	  									$html_temp +=			' </div>';
    	  									$html_temp +=			'</div>';
    	  									$html_temp +=			'  </div>';


    	  							
    	  							}					
    	  						
    	  					}
    	  						




    	  			$html_temp +='</div>'


	  				
    	  				$page_list_size = oData.results['page_list_size'];
    	  				$total_page = oData.results['total_page'];
    	  				$current_page = oData.results['current_page'];
    	  				$page_size = oData.results['page_size'];
    	  				$first_no =oData.results['first_no'];
    	  				
    	  				$start_page = Math.floor ( ($current_page - 1) / $page_list_size ) * $page_list_size + 1;
    	  				
    	  				$end_page = $start_page + $page_list_size - 1;


    	  				$html_temp +='<div class ="col-md-12 m_page text-center" >'
    	  				
    	  				if ($total_page < $end_page)
    	  					$end_page = $total_page;
    	  				
    	  				$prev_list = 0;
    	  				if ($start_page >= $page_list_size) {
    	  					console.log("<br/>start_page==>"+$start_page);
    	  					console.log( "<br/>page_list_size==>"+$page_list_size);
    	  					
    	  					$prev_list = ($start_page - 2) * $page_size;
    	  				//	$prev_list = $start_page -  $page_list_size;

    	  					console.log( "<br/>prev_list==>"+$prev_list);
    	  					

    	  					
    	  					$html_temp += "<div id='page_list'><span  class='page_prev' id='page_prev' onclick = 'page_change("+$prev_list+ ");'><label>&lt;</label></span>";
    	  				}
    	  				
    	  				for($i = $start_page; $i <= $end_page; $i ++) {
    	  					$page = ($i - 1) * $page_size;
    	  					if ($first_no != $page) {
    	  						$html_temp += "<span  class='page_num' id='page_num' onclick = 'page_change(" + $page + ");'>";
    	  					}
    	  					$html_temp += "<label>"+ $i+"</label>";
    	  					if ($first_no != $page) {
    	  						$html_temp += "</span>";
    	  					}
    	  				}
    	  				
    	  				if ($total_page > $end_page) {
    	  					console.log("<br/>total_page==>"+$total_page);
    	  					console.log( "<br/>end_page==>"+$end_page);
    	  					
    	  					$next_list = $end_page * $page_size;
    	  					console.log( "<br/>next_list==>"+$next_list);
    	  					
    	  					$html_temp += "<span   class='page_next' id='page_next' onclick = 'page_change("+ $next_list+ ");'><label>&gt;</label></span></div>";
    	  				}				
    	  				
    	  					$html_temp +='</div>'
    	  	        $('#accordion_g').show().html($html_temp).fadeIn();           

    	  					//media_recall();
    	          }
    	      }
    	  });
    	  }
          
        </script>