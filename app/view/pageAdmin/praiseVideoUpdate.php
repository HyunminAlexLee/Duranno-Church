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
			Praise Video update <small>Praise Video update</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Praise Video</a></li>
			<li class="active">Praise Video update</li>
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
						<form action ="updatePraiseVideo" method="post">
						<div><span class="col-xs-3">title*</span></div>
						<div><span><input type="text" name="title"  value =""></span></div>
						<div><span class="col-xs-3">div</span></div><div><span><input type="text" name="div"  value =""></span></div>
						<div><span class="col-xs-3">description</span></div><div><span><textarea cols="100" rows="10" name="description"></textarea> </span></div>
						<div><span class="col-xs-3">path*</span></div><div><span><input type="text" name="path"  value =""> ex>https://www.youtube.com/embed/2xiZhkqN_I4</span></div>
						<div><span class="col-xs-3">create_date</span></div><div><span><input type="text" name="create_date"  value =""></span></div>
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

