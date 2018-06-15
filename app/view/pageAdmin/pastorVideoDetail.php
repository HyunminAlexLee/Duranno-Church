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
			Pastor Video Detail <small>Pastor Video Detail</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Pastor Video</a></li>
			<li class="active">Pastor Video Detail</li>
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
					<div><spen class="col-xs-3">id</spen><spen><?= $pastorVideoDetail['id']?></spen></div>
						<div><spen class="col-xs-3">title</spen><spen><?= $pastorVideoDetail['title']?></spen></div>
						<div><spen class="col-xs-3">div</spen><spen><?= $pastorVideoDetail['div']?></spen></div>
						<div><spen class="col-xs-3">description</spen><spen><?= $pastorVideoDetail['description'] ?></spen></div>
						<div><spen class="col-xs-3">path</spen><spen><?= $pastorVideoDetail['path']?></spen></div>
						<div><spen class="col-xs-3">create_date</spen><spen><?= $pastorVideoDetail['create_date']?></spen></div>
						<div><spen class="col-xs-3">status</spen><spen><?= $pastorVideoDetail['status']?></spen></div>
						
					</div>
					<!-- /.box-header -->
				 <div>
             	<input type="button" class="j_button" value ="Go to List" onClick="parent.location='/admin/videoPastorList'">
            </div>
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

<!-- page script -->
<script>
  $(function () {
    $('#table-2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
