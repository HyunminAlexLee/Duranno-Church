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
        Weekly NewsPaper List
        <small>all Weekly NewsPaper list</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Weekly NewsPaper</a></li>
        <li class="active">Weekly NewsPaper List</li>
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
             	<input type="button" class="j_button" value ="UPDATE" onClick="parent.location='/admin/weeklyNewsPaperUpdate'">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-2" class="table table-bordered table-striped">
                <thead>
                <tr>                 
                  <th>title</th>
                  <th>file_name</th>
                  <th>issue_year</th>
                  <th>issue_month</th>
                  <th>issue_day</th>
                   <th>create_date</th>
                   <th>create_id</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                 //user_id,user_group_id,firstname,lastname,email,phone, address_id, status
            if(isset($weeklyNewsPaperList)){
                foreach($weeklyNewsPaperList as $weeklyNewsPaper){
                	?>
                <tr>                
                
                
                 <td><?= $weeklyNewsPaper['title']?></td>
                  <td><?= $weeklyNewsPaper['file_name']?></td>
                  <td><?= $weeklyNewsPaper['issue_year']?></td>
                  <td><?= $weeklyNewsPaper['issue_month'] ?></td>
                  <td><?= $weeklyNewsPaper['issue_day']?></td>
                 
                 
                   <td><?= $weeklyNewsPaper['create_date']?></td>
                    <td><?= $weeklyNewsPaper['create_id']?></td>
                    
                       <td>
                   <input type="button" class="j_button" value ="DETAIL" onClick="parent.location='/admin/videoPastorDetail?id=<?=$weeklyNewsPaper['id']?>'"> 
                   <input type="button" class="j_button" value ="DELETE" onClick="parent.location='/admin/deletePastorVideo?id=<?=$weeklyNewsPaper['id']?>'">
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
