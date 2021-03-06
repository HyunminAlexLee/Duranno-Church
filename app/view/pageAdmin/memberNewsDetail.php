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
			교우 소식 상세 <small>교우 소식  상세</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">교우 소식</a></li>
			<li class="active">교우 소식 상세</li>
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
					<div><span class="col-xs-3">id</span><span><?= $memberNewsDetail['id']?></span></div>
						<div><span class="col-xs-3">title</span><span><?= $memberNewsDetail['title']?></span></div>
						<div><span class="col-xs-3">div</span><span><?= $memberNewsDetail['div']?></span></div>
						<div><span class="col-xs-3">description</span><span><?= $memberNewsDetail['description']?></span></div>
						<div><span class="col-xs-3">planed_date</span><span><?= $memberNewsDetail['planed_date'] ?></span></div>
						<div><span class="col-xs-3">planed_start_date</span><span><?= $memberNewsDetail['planed_start_date']?></span></div>
						<div><span class="col-xs-3">planed_end_date</span><span><?= $memberNewsDetail['planed_end_date']?></span></div>
						<div><span class="col-xs-3">status</span><span><?= $memberNewsDetail['create_date']?></span></div>
						<div><span class="col-xs-3">status</span><span><?= $memberNewsDetail['status']?></span></div>
						
					</div>
					<!-- /.box-header -->
				 <div>
             	<input type="button" class="j_button" value ="Go to List" onClick="parent.location='/admin/memberNewsList'">
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
