
    <section id="contact-info">
        <div class="center">     
        <h2>오시는 길</h2>           
            <h3>How to Reach Us?</h3>
           <!--  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="gmap">
                        
                        <div id="map" style="height: 100%"></div>
						<div id="directions-panel"></div>
                        
                            <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe> -->
                        </div>
                       
                    </div>
 <div class="col-sm-6 text-center">
                     
                         <div class="gmap">
                        
                        <div ><img src="../images/durannoLocation.png" class="img-responsive">            </div>
						           
                            <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe> -->
                        </div>
                    </div>
                    
                    <div class="col-sm-8 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5>Address</h5>
                                    <p>89 Finch W <br>
                                    North York, ON M2N2H6</p>
                                    <p>Phone:647-980-5791  <br>
                                    Email Address:kanghwa73@gmail.com
                                 <p>   입구	큰길(Finch Ave W)쪽 정문으로 들어와주세요. 주차장쪽 뒷문은 출입구가 아닙니다.	 <br><br>
                                 
                                    자가 89 Finch Ave W로 오시면 코너스톤 북스토어(Finch선상 South방향 쪽에 있음) 주차안내  건물 뒤편에 주차장이 마련되어 있습니다.  <br>
                                    자리가 없는 경우, 주말에는 건물뒤편 Talbot Rd선상에 무료 Street파킹이 가능합니다 (단, 소방밸브주의).  <br>
                                    그래도 없는 경우는, Finch W로 한 블럭 더 가시면 Community센터 뒤편 무료주차장이 있는데 이를 활용해주시기 바랍니다
                                    
                                    </p>
                                       TTC	36번 타고  'Finch Ave West at Talbot Rd' 에서 내리시면 (정류장 3개 2분 소요) 바로 길건너 입니다. 	 <br>
                                    
                                </address>                               
                            </li>
                        </ul>
                    </div>
                     <div class="col-sm-4 map-content">
                                         		<!-- about us slider -->
                    		<div class="row">
                    		<br><br>
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
					    <li data-target="#carousel-slider" data-slide-to="3"></li>
					    <li data-target="#carousel-slider" data-slide-to="4"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="../images/page/location_1.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="../images/page/location_2.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="../images/page/location_3.jpg" class="img-responsive" alt=""> 
					   </div> 
					    <div class="item">
							<img src="../images/page/location_4.jpg" class="img-responsive" alt=""> 
					   </div> 
					    <div class="item">
							<img src="../images/page/location.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider--></div>
			</div>
                </div>
            </div>
        </div>
        
        
    </section>  <!--/gmap_area -->   
 
<script>

                                                
                                                function initMap() {
                                                	  var customMapType = new google.maps.StyledMapType([
                                                	      {
                                                	        stylers: [
                                                	          {hue: '#ffffee'},
                                                	          {visibility: 'simplified'},
                                                	          {gamma: 0.5},
                                                	          {weight: 0.5}
                                                	        ]
                                                	      },
                                                	      {
                                                	        elementType: 'labels',
                                                	        stylers: [{visibility: 'on'}]
                                                	      },
                                                	      {
                                                	        featureType: 'water',
                                                	        stylers: [{color: '#ffffee'}]
                                                	      }
                                                	    ], {
                                                	      name: 'Custom Style'
                                                	  });
                                                	  var customMapTypeId = 'custom_style';

                                                	  var map = new google.maps.Map(document.getElementById('map'), {
                                                	    zoom: 17,
                                                	    center: {lat: 43.777857, lng: -79.423081},  // Brooklyn.
                                                	    mapTypeControlOptions: {
                                                	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
                                                	    }
                                                	  });

                                                	  map.mapTypes.set(customMapTypeId, customMapType);
                                                	  map.setMapTypeId(customMapTypeId);


                                                	  marker = new google.maps.Marker({
                                                		    map: map,
                                                		    draggable: true,
                                                		    animation: google.maps.Animation.DROP,
                                                		    position: {lat: 43.777857, lng: -79.423081}
                                                		  });
                                                		  marker.addListener('click', toggleBounce);

                                                	  
                                                	}
                                                function toggleBounce() {
                                                	  if (marker.getAnimation() !== null) {
                                                	    marker.setAnimation(null);
                                                	  } else {
                                                	    marker.setAnimation(google.maps.Animation.BOUNCE);
                                                	  }
                                                	}
                                                	

</script>
   <script async defer
	src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyAtb0KSz8xJ4MvqJusjgUpJLaJn8AEjiC4&callback=initMap"></script>
    
    