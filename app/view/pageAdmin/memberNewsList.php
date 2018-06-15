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
        교우 소식 리스트
        <small>교우 소식 리스트</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">교우 소식</a></li>
        <li class="active">교우 소식  리스트</li>
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
             	<input type="button" class="j_button" value ="UPDATE" onClick="parent.location='/admin/memberNewsUpdate'">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-2" class="table table-bordered table-striped">
                <thead>
                <tr>                 
                  <th>제목</th>
                  <th>구분</th>
                  <th>상세설명</th>
                  <th>계획일</th>
                   <th>시작일</th>
                  <th>종료일</th>                  
                   <th>생성일</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>    			
                 <?php
                 //user_id,user_group_id,firstname,lastname,email,phone, address_id, status
            if(isset($memberNewsList)){
                foreach($memberNewsList as $memberNews){
                	?>
                <tr>                 
                  <td><?= $memberNews['title']?></td>
                    <td><?= $memberNews['div']?></td>
                     <td><?= $memberNews['description']?></td>
                      <td><?= $memberNews['planed_date']?></td>
                  <td><?= $memberNews['planed_start_date'] ?></td>    
                  <td><?= $memberNews['planed_end_date']?></td>
                    <td><?= $memberNews['create_date']?></td>
                       <td>
                   <input type="button" class="j_button" value ="DETAIL" onClick="parent.location='/admin/memberNewsDetail?id=<?=$memberNews['id']?>'"> 
                   <input type="button" class="j_button" value ="DELETE" onClick="parent.location='/admin/deleteMemberNews?id=<?=$memberNews['id']?>'">
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
</div></body>
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
