
  <link rel="stylesheet" href="../css/lightboxgallery-min.css">

<section class="subbody">
	<div class="container">
           <div class="center">
               <h2>사진첩</h2>
               <p class="lead"></p>
            </div>
  
	<br/>
	

		<div class="row">
			
			<div class="container">
				<div class="row">
					<div class="service-title col-md-12 text-center m-padding20">
			<!-- 	
				<div id="gallery2" style="display:none;">
	
<?php
//p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
				/*	if (count ( $galleryPhotos ) > 0) {
					
						foreach ( $galleryPhotos as $galleryPhoto_data ) {
							
							echo '<img alt="'.$galleryPhoto_data ['title'].'"'
							.'		src="../'.$galleryPhoto_data ['file_path'].$galleryPhoto_data ['file_name'].'"'
							.'				data-image="../'.$galleryPhoto_data ['file_path_big'].$galleryPhoto_data ['file_name'].'"'
							.'						data-description="'.$galleryPhoto_data ['description'].'"'
							.'								style="display:none">';
							
						
						}					
					}*/
?>

	</div> -->
		 <div class="lightboxgallery-gallery clearfix">
	
<?php
//p.id, p.title, p.div, p.description,pfs.photo_id,pfs.file_path,pfs.file_name
					if (count ( $galleryPhotos ) > 0) {
					
						foreach ( $galleryPhotos as $galleryPhoto_data ) {
							
							/*echo '<img alt="'.$galleryPhoto_data ['title'].'"'
							.'		src="../'.$galleryPhoto_data ['file_path'].$galleryPhoto_data ['file_name'].'"'
							.'				data-image="../'.$galleryPhoto_data ['file_path_big'].$galleryPhoto_data ['file_name'].'"'
							.'						data-description="'.$galleryPhoto_data ['description'].'"'
							.'								style="display:none">';
							*/
							echo '<a class="lightboxgallery-gallery-item" target="_blank" href="../'.$galleryPhoto_data ['file_path_big'].$galleryPhoto_data ['file_name'].'" data-title="'.$galleryPhoto_data ['title'].'" data-alt="'.$galleryPhoto_data ['title'].'" data-desc="'.$galleryPhoto_data ['description'].'">'
							.'<div>'
							.'<img src="../'.$galleryPhoto_data ['file_path'].$galleryPhoto_data ['file_name'].'" title="'.$galleryPhoto_data ['title'].'" alt="'.$galleryPhoto_data ['title'].'">'
							.'<div class="lightboxgallery-gallery-item-content">'
							.'</div>'
							.'</div>'
							.'</a>';
						}					
					}
?>

	</div>

     
      
     
         
 
     	
					</div>

				</div>
			</div>
			
			
			<div class="col-md-12">			
				<div class="col-md-12 m-padding20 text-center">				
				<button class="m_button " onclick="goBack()">Go Back</button>
				</div>
			</div>
</div></div>
</section>

	
	<!-- <script type='text/javascript' src='../css/themes/tiles/ug-theme-tiles.js'></script> -->
	  <script src="../js/lightboxgallery-min.js"></script>
	<script type="text/javascript">

		jQuery(document).ready(function(){

		/*	jQuery("#gallery2").unitegallery({
				gallery_theme: "tiles",
				tiles_nested_optimal_tile_width:200,
				tiles_type:"nested"
			});
*/
			$(document).on('click', '.lightboxgallery-gallery-item', function(event) {
			      event.preventDefault();
			      $(this).lightboxgallery({
			        showCounter: true,
			        showTitle: true,
			        showDescription: true
			      });
			    });





			

		});

		function goBack() {
		    window.history.back();
		}
		
	</script>
