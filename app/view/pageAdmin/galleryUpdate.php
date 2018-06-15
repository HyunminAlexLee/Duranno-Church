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
			gallery update <small>gallery update</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">gallery</a></li>
			<li class="active">gallery update</li>
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
						<form action ="updateGallery" method="post" enctype="multipart/form-data">
						<div><span class="col-xs-3">title*</span></div>
						<div><span><input type="text" name="title"  value =""></span></div><input type="hidden" name="div"  value ="1">
						 <!-- <div><span class="col-xs-3">div</span></div><div><span><input type="text" name="div"  value =""></span></div> -->
						<div><span class="col-xs-3">description</span></div><div><span><textarea cols="100" rows="10" name="description"></textarea> </span></div>
						<!-- <div><span class="col-xs-3">path</span></div><div><span><input type="text" name="path"  value =""> ex>https://www.youtube.com/embed/2xiZhkqN_I4</span></div> -->
						<!-- <div><span class="col-xs-3">create_date</span></div><div><span><input type="text" name="create_date"  value =""></span></div>-->
						 
					<div><span class="col-xs-3"></span></div>
						<div><span> * 파일은 이미지 파일만 가능 JPG, PNG * 이미자 파일명에 한글이 포함되어 있으면 안됨. 파일명은 영어로... </span></div>
					
					<div><span class="col-xs-3"></span></div>
					<div><span class="col-xs-9"><input type="file" name="filesToUpload[]" id="filesToUpload" multiple onChange="makeFileList();" /></span></div>
					<div><span class="col-xs-3"><input type="submit" value="저장하기"></span></div>
					<div><span class="col-xs-9"><ul id="fileList"><li>No Files Selected</li></ul></span></div>
					
						<div> </div>
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


function makeFileList() {
	var input = document.getElementById("filesToUpload");
	var ul = document.getElementById("fileList");
	while (ul.hasChildNodes()) {
		ul.removeChild(ul.firstChild);
	}
	for (var i = 0; i < input.files.length; i++) {
		var li = document.createElement("li");
		li.innerHTML = input.files[i].name;
		ul.appendChild(li);
	}
	if(!ul.hasChildNodes()) {
		var li = document.createElement("li");
		li.innerHTML = 'No Files Selected';
		ul.appendChild(li);
	}
}




</script>
