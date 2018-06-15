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
			Weekly NewsPaper update <small>Weekly NewsPaper update</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Weekly NewsPaper</a></li>
			<li class="active">Weekly NewsPaper update</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<form action ="updateWeeklyNewsPaper" method="post" enctype="multipart/form-data">
						<div><span class="col-xs-3">제목*</span></div>
						<div><span><input type="text" name="title"  value =""></span></div>
						<div><span class="col-xs-3">발행 주일(날짜)*</span></div>
					   <div><span> <div class="input-group date">             
					    	<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                  			</div>
                  			<input type="text" class="form-control " id="datepicker"  name="week" style="width:300px"/>
                		</div>   </span>  </div>          		
						<div><span class="col-xs-3">설명</span></div><div><span><textarea cols="100" rows="3" name="description"></textarea> </span></div>
						<div><span class="col-xs-3">*</span></div>
						<div><span> 파일은 PDF 파일만 가능. 다른 파일 업로드시 에러.</span></div>
						
						 주보가 1개의 pdf 로 되어있을때
						<div><span class="col-xs-3">소식/말씀 (주보)</span></div><div><span><input type="file" name="file3"> </span></div>
						 주보가 2개의 pdf 로 되어있을때
						<div><span class="col-xs-3">소식( 주보 1)</span></div><div><span><input type="file" name="file1"> </span></div>
						<div><span class="col-xs-3">말씀( 주보 2)</span></div><div><span><input type="file" name="file2"> </span></div>
									
						
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
$('#datepicker').datepicker({
  autoclose: true
});
</script>

