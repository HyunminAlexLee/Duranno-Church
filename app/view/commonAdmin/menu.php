<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">  
      <p><?=  $_SESSION['user_name']?><br/><?=  $_SESSION['email']?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
 search form -->

   <!-- sidebar menu: : style can be found in sidebar.less 2016/5/4 -->
   <ul class="sidebar-menu">
    <li class="header">Duranno Church NAVIGATION</li>
    <li class="active  treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Duranno Church</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> 설교/찬송 <i class="fa fa-angle-left pull-right"></i></a>
          <ul class=" treeview-menu" style="display: block;">
            <li><a href="/admin/videoPastorList"><i class="fa fa-circle-o"></i> 담임목사님 설교영상 리스트 </a></li>
            <li><a href="/admin/videoPraiseList"><i class="fa fa-circle-o"></i> 찬송영상 리스트 </a></li>           
          </ul>
        </li>
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> 사진첩 <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu"  style="display: block;">
            <li><a href="/admin/galleryList"><i class="fa fa-circle-o"></i> 사진첩 리스트</a></li>
            <li><a href="/admin/galleryUpdate"><i class="fa fa-circle-o"></i> 사진첩 업데이트</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> 주보 <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu"  style="display: block;">
           <li><a href="/admin/weeklyNewsPaperList"><i class="fa fa-circle-o"></i> 주보리스트</a></li>
            <li><a href="/admin/weeklyNewsPaperUpdate"><i class="fa fa-circle-o"></i> 주보 업데이트</a></li>           
           
          </ul>
        </li>
       <!--  <li>
          <a href="#"><i class="fa fa-circle-o"></i> 온라인헌금 <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu"  style="display: block;">
           <li><a href="/admin/donationList"><i class="fa fa-circle-o"></i>온라인헌금현황</a></li>
           
          </ul>
        </li> -->
       <!--   <li>
          <a href="#"><i class="fa fa-circle-o"></i> 두란노 가족 <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu"  style="display: block;">
           <li><a href="/order/newOrderList"><i class="fa fa-circle-o"></i>새가족</a></li>
            <li><a href="/order/orderList"><i class="fa fa-circle-o"></i> 새가족등록</a></li>
           
          </ul>
        </li> -->
         <li>
          <a href="#"><i class="fa fa-circle-o"></i> 두란노 소식 <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu"  style="display: block;">
           <li><a href="/admin/durannoNewsList"><i class="fa fa-circle-o"></i> 두란노 소식</a></li>
            <li><a href="/admin/memberNewsList"><i class="fa fa-circle-o"></i> 교우소식</a></li>
           
          </ul>
        </li>
      </ul>
    </li>
  </ul>

  <!-- sidebar menu: : style can be found in sidebar.less -->


  <!--
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="/admin/index"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        <li><a href="/admin/index2"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Layout Options</span>
        <span class="label label-primary pull-right">4</span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages/layout/top-nav"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
        <li><a href="/admin/pages/layout/boxed"><i class="fa fa-circle-o"></i> Boxed</a></li>
        <li><a href="/admin/pages/layout/fixed"><i class="fa fa-circle-o"></i> Fixed</a></li>
        <li><a href="/admin/pages/layout/collapsed-sidebar"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
      </ul>
    </li>
    <li>
      <a href="/admin/pages/widgets">
        <i class="fa fa-th"></i> <span>Widgets</span>
        <small class="label pull-right bg-green">new</small>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Charts</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages/charts/chartjs"><i class="fa fa-circle-o"></i> ChartJS</a></li>
        <li><a href="/admin/pages/charts/morris"><i class="fa fa-circle-o"></i> Morris</a></li>
        <li><a href="/admin/pages/charts/flot"><i class="fa fa-circle-o"></i> Flot</a></li>
        <li><a href="/admin/pages/charts/inline"><i class="fa fa-circle-o"></i> Inline charts</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>UI Elements</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages/UI/general"><i class="fa fa-circle-o"></i> General</a></li>
        <li><a href="/admin/pages/UI/icons"><i class="fa fa-circle-o"></i> Icons</a></li>
        <li><a href="/admin/pages/UI/buttons"><i class="fa fa-circle-o"></i> Buttons</a></li>
        <li><a href="/admin/pages/UI/sliders"><i class="fa fa-circle-o"></i> Sliders</a></li>
        <li><a href="/admin/pages/UI/timeline"><i class="fa fa-circle-o"></i> Timeline</a></li>
        <li><a href="/admin/pages/UI/modals"><i class="fa fa-circle-o"></i> Modals</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i> <span>Forms</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages/forms/general"><i class="fa fa-circle-o"></i> General Elements</a></li>
        <li><a href="/admin/pages/forms/advanced"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
        <li><a href="/admin/pages/forms/editors"><i class="fa fa-circle-o"></i> Editors</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-table"></i> <span>Tables</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages/tables/simple"><i class="fa fa-circle-o"></i> Simple tables</a></li>
        <li><a href="/admin/pages/tables/data"><i class="fa fa-circle-o"></i> Data tables</a></li>
      </ul>
    </li>
    <li>
      <a href="/admin/pages/calendar">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
        <small class="label pull-right bg-red">3</small>
      </a>
    </li>
    <li>
      <a href="/admin/pages/mailbox/mailbox">
        <i class="fa fa-envelope"></i> <span>Mailbox</span>
        <small class="label pull-right bg-yellow">12</small>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-folder"></i> <span>Examples</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages/examples/invoice"><i class="fa fa-circle-o"></i> Invoice</a></li>
        <li><a href="/admin/pages/examples/profile"><i class="fa fa-circle-o"></i> Profile</a></li>
        <li><a href="/admin/pages/examples/login"><i class="fa fa-circle-o"></i> Login</a></li>
        <li><a href="/admin/pages/examples/register"><i class="fa fa-circle-o"></i> Register</a></li>
        <li><a href="/admin/pages/examples/lockscreen"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
        <li><a href="/admin/pages/examples/404"><i class="fa fa-circle-o"></i> 404 Error</a></li>
        <li><a href="/admin/pages/examples/500"><i class="fa fa-circle-o"></i> 500 Error</a></li>
        <li><a href="/admin/pages/examples/blank"><i class="fa fa-circle-o"></i> Blank Page</a></li>
        <li><a href="/admin/pages/examples/pace"><i class="fa fa-circle-o"></i> Pace Page</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
    <li><a href="/admin/documentation/index"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  </ul>
  -->
</section>
<!-- /.sidebar -->
