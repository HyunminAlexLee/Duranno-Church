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
			두란노 소식 update <small>두란노 소식 update</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">두란노 소식</a></li>
			<li class="active">두란노 소식 update</li>
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
						<form action ="updateDurannoNews" method="post">
						<div><span class="col-xs-3">*title</span></div>
						<div><span><input type="text" name="title"  value =""></span></div>
						<input type="hidden" name="div"  value ="1">
						<!-- <div><span class="col-xs-3">div</span></div>
						<div><span><input type="text" name="div"  value =""></span></div> -->
						<div><span class="col-xs-3">*description</span></div>
						<div><span><textarea cols="100" rows="10" name="description"></textarea> </span></div>
					 	<div><span class="col-xs-3"> </span></div>		
					 	<div><span class="col-xs-8">*하루 일정일 경우 계획일만 넣어주시면 됩니다.<br/>					 	
					 	*이틀이상 일정일 경우 계획일과 시작일에 처음 시작하는 날짜를  종료일에는 종료하는 날짜를 넣어주세요.</span></div>	
					 	<div><span class="col-xs-3">*계획 </span></div>						
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="planed_date"  name="planed_date" style="width:300px"/>
                		</div>   </span>  </div> 
                		    
                		 <div> </div>
                		 
						<div><span class="col-xs-3">시작일</span></div>					
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="planed_start_date"  name="planed_start_date" style="width:300px"/>
                		</div>   </span>  </div>     
						<div><span class="col-xs-3">종료일</span></div>					
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="planed_end_date"  name="planed_end_date" style="width:300px"/>
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
//Date picker
$('#planed_date').datepicker({
  autoclose: true
});
$('#planed_end_date').datepicker({
	  autoclose: true
	});
$('#planed_start_date').datepicker({
	  autoclose: true
	});
</script>