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
        Donation List
        <small>all Donation list</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Donation</a></li>
        <li class="active">Donation List</li>
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
             	<input type="button" class="j_button" value ="UPDATE" onClick="parent.location='/admin/donationUpdate'">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-2" class="table table-bordered table-striped">
                <thead>
                <tr>                 
                  <th>name</th>
                  <th>email</th>
                  <th>donation</th>
                  <th>title</th>
                  <th>description</th>
                   <th>status</th>
                  <th>date</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                 //user_id,user_group_id,firstname,lastname,email,phone, address_id, status
            if(isset($donationList)){
                foreach($donationList as $donation){
                	?>
                <tr>           
               
                  <td><?= $donation['name']?></td>
                  <td><?= $donation['email'] ?></td>
                  <td><?= $donation['donation']?></td>
                  <td><?= $donation['title']?></td>
                  <td><?= $donation['description']?></td>
                   <td><?= $donation['create_date']?></td>                     
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
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
