<body class="hold-transition skin-white sidebar-mini">
    <div class="wrapper">
            <?= $top_menu; ?>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <?= $left_menu; ?>
        </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			목사님 설교영상 <small>Pastor Video update</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Pastor Video</a></li>
			<li class="active">Pastor Video update</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Table With Full Features</h3>
					</div>
					

					<!-- /.box-header -->
					<div class="box-body">
						<form action ="updatePastorVideo" method="post">
						<div><span class="col-xs-3">*title</span></div>
						<input type="hidden" name="div"  value ="1">
						<div><span><input type="text" name="title"  value =""></span></div>
						<!-- <div><span class="col-xs-3">div</span></div><div><span><input type="text" name="div"  value =""></span></div> -->
						<div><span class="col-xs-3">description</span></div><div><span><textarea cols="100" rows="10" name="description"></textarea> </span></div>
						<div><span class="col-xs-3">*설교영상 you tube 에서 가져오는 방법 </span></div>
						<div><span class="col-xs-9">1. 해당 유투브 영상에서 마우스 우클릭후 소스코드 복사를 한다.<br/>
						2. 복사후 붙여 넣기를 하면 아래와 같이 소스 코드가 보여진다.<br/>
						3. "< iframe width="854" height="480" src="<span style="color:red">https://www.youtube.com/embed/qy2vsYRZ5DI</span>" frameborder="0" allowfullscreen>< / iframe>"<br/>
						4. 해당 소스 코드중에  빨갛게 표시된<span style="color:red"> https://www.youtube.com/embed/qy2vsYRZ5DI</span> 부분만을 Path 에 적어 넣는다.</span></div>
						
						<div><span class="col-xs-3">path*</span></div><div><span><input type="text" name="path"  value ="" style ="width:350px"> ex>https://www.youtube.com/embed/2xiZhkqN_I4</span></div>
						<div><span class="col-xs-3">*speech_date</span></div>						
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="speech_date"  name="speech_date" style="width:300px"/>
                		</div>   </span>  </div>   
						<div><input type="submit"> </div>
					
						</form>
					</div>
					<!-- /.box-header -->
				
				
				
				
				
				
				</div>

				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
$('#speech_date').datepicker({
	  autoclose: true
	});
</script>
