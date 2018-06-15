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
        gallery List
        <small>all gallery list</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">gallery</a></li>
        <li class="active">gallery List</li>
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
            <div>
             	<input type="button" class="j_button" value ="UPDATE" onClick="parent.location='/admin/galleryUpdate'">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-2" class="table table-bordered table-striped">
                <thead>
                <tr>      <th>id</th>          
                
                  <th>title</th>
                  <th>div</th>
                  <th>group_id</th>
                  <th>path</th>
                   <th>create_date</th>
                   <th>status</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                 //user_id,user_group_id,firstname,lastname,email,phone, address_id, status
            if(isset($galleryList)){
                foreach($galleryList as $gallery){
                	?>
                <tr>                
               
                 <td><?= $gallery['id']?></td>                 
                  <td><?= $gallery['title']?></td>
                  <td><?= $gallery['div'] ?></td>
                  <td><?= $gallery['group_id']?></td>
                 
                 
                   <td><?= $gallery['path']?></td>
                    <td><?= $gallery['create_date']?></td>
                     <td><?= $gallery['status']?></td>
                       <td>
                   <input type="button" class="j_button" value ="DETAIL" onClick="parent.location='/admin/galleryDetail?id=<?=$gallery['id']?>'"> 
                   <input type="button" class="j_button" value ="DELETE" onClick="parent.location='/admin/deleteGallery?id=<?=$gallery['id']?>'">
                      </td>
                </tr>
              <?php
                }  // end foreach
            }// end if
              ?>
                </tbody>               
              </table>
            </div>
            <!-- /.box-body -->
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
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
