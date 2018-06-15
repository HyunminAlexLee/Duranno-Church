
    <section id="contact-page">
        <div class="container">
            <div class="center wow fadeInDown">   
                <h2>Contact Us</h2>     
                <h3>Drop Your Message</h3>
                <p class="lead">duranno.church15@gmail.com</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" id="name" class="form-control" required="required"  placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" id="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" id="phone"  class="form-control"  placeholder="Phone">
                        </div>       
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" id="subject" class="form-control" required="required"  placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea id="message" required="required" class="form-control" rows="8"  placeholder="Message"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->       
    
    
<script>
	

	$("#submit").click(function(e){
	    e.preventDefault();
	    
	    var allData ={"subject":$("#subject").val(),"name":$("#name").val(),"email":$("#email").val(),"message":$("#message").val(),"phone":$("#phone").val()};
	    var url =  "/contact/sendMail";
	    //window.open("/worker/ordersHistory");
	    $(function(){
	      $.ajax({
	        url: url,
	        type: 'POST',
	        data: allData,
	        dataType: "json",
	        success: function(oData) {
	          
	        	if(oData.errormsg != null){
	                alert('failed: ' + oData.errormsg);
	            }else{
	            	alert(oData.results);
	            	$("#subject").val('');
	             	$("#name").val('');
	             	$("#email").val('');
	             	$("#message").val('');
	             	$("#phone").val('');
	            }
	        }
	      });
	    });
	   
	
});
	</script>                                      