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
			gallery Detail <small>gallery Detail</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">gallery</a></li>
			<li class="active">gallery Detail</li>
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
					<div><span class="col-xs-3">id</span><span><?= $galleryDetail['id']?></span></div>
						<div><span class="col-xs-3">title</span><span><?= $galleryDetail['title']?></span></div>
						<div><span class="col-xs-3">div</span><span><?= $galleryDetail['div']?></span></div>
						<div><span class="col-xs-3">description</span><span><?= $galleryDetail['description'] ?></span></div>
						<div><span class="col-xs-3">path</span><span><?= $galleryDetail['path']?></span></div>
						<div><span class="col-xs-3">create_date</span><span><?= $galleryDetail['create_date']?></span></div>
						<div><span class="col-xs-3">status</span><span><?= $galleryDetail['status']?></span></div>
						
					</div>
					<div>
					<?php 					
					if(isset($galleryphotoList)){
						foreach($galleryphotoList as $galleryphoto){
					
				?>
				<span class="col-xs-3"><?= $galleryphoto['photo_id']?></span>
				<span class="col-xs-3"><?= $galleryphoto['file_name']?></span>
				<span class="col-xs-3"><?= $galleryphoto['file_size']?></span>
				<span class="col-xs-3"><?= $galleryphoto['status']?></span>
				<?php 
						
						
					}
					
					}
					?>
					
					
					</div>
					
					
					<!-- /.box-header -->
				 <div>
             	<input type="button" class="j_button" value ="Go to List" onClick="parent.location='/admin/galleryList'">
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
