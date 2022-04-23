<?php
require '../core/connection.php';
session_start();

  if(!logged_in()){
    redirect('index.php');
  }
  $sess_username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADRON HOMES AND PROPERTIES | Admin</title>
    <link rel="icon" href="../img/core-img/vp.ico">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/body.css">

    <script src="assets/js/jquery-2.1.4.min.js"></script>
<!--     <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 -->    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="main.php" class="site_title"><i class="fa fa-paw"></i> <span>Adron Properties</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../img/core-img/vp new.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin Adron</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?main">Main</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-globe"></i> Website Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=view&link=visitors">View visitors</a></li>
                      <li><a href="?mod=view&link=stat">Statistics</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-building"></i> Property Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=add&link=property">Add property</a></li>
                      <li><a href="?mod=view&link=property">View all Properties</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-envelope"></i> Message Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=view&link=contactmessage">View contact messages</a></li>
                      <li><a href="?mod=view&link=propertymessage">View property messages</a></li>
                      <li><a href="?mod=view&link=propertyusermessage">View property User messages</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> User Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?mod=view&link=staff">View Users</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../img/core-img/vp new.png" alt=""><?php echo "$sess_username"; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="javascript:;">
                        <span>Change Password</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <?php
        if (isset($_GET['mod']) && $_GET['mod'] == 'add' && isset($_GET['link']) && $_GET['link'] == 'property') {
          include'pages/properties.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'property'){
          include'pages/viewproperties.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'contactmessage'){
          include'pages/viewcontact.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'visitors'){
          include'pages/viewvisitors.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'stat'){
          include'pages/viewstat.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'propertymessage'){
          include'pages/propertymessage.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'propertyusermessage'){
          include'pages/propertyusermessage.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'add' && isset($_GET['link']) && $_GET['link'] == 'staff'){
          include'pages/addstaff.php';
        }elseif(isset($_GET['mod']) && $_GET['mod'] == 'view' && isset($_GET['link']) && $_GET['link'] == 'staff'){
          include'pages/viewstaff.php';
        }else{
          include'pages/main.php';
        }

        ?>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Vibadia Properties Admin Panel
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    
  </body>
</html>
