<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CAM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Student.js" ></script>
<style type="text/css">

hr {
	border-top: 2px solid #3c8dbc;
	margin-top: 15px;
	margin-bottom: 0px;
}
.selected {
	background-color: #367fa9;
	font-weight: bold;
}
a {
	color: #333;
	text-decoration: none;
}
a:hover {
	color: #666;
	text-decoration: none;
}
.in_line
{
	border-radius: 0px;
	display: inline-block;
    width: 32%;
}
.whyus_icon{
  border-radius: 150px;
  color: #000;
  display: inline-block;
  height: 150px;  
  text-align: center;
  width: 100px;
}
.whyus_icon span{
  display: inline-block;
  font-size: 70px;
  height: 100%;
  line-height: 160px;
  width: 100%;
  color: #367fa9;
}
.single_whyus_top{
  text-align: center;
  border:solid 1px #367fa9;
	margin-top: 20px;
}

</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	
  <header class="main-header" style="background-color: #fff;">
    <!-- Logo -->
    <!--<h6 class="logo" style="
    margin-top: 0px;
    margin-bottom: 0px; font-weight: bold; font-size: 200%;
">CAM</h6>-->
	<a href="" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><img src="logo.png" style="height: 25px; width: 25px;" alt="cam"></img></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>CAM</b></span>
</a>
	
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"  style="background-color: #65aed8;">
      <!-- Sidebar toggle button-->
       
      <div class="navbar-custom-menu" style="float: left; margin-left: 7px; display:inline-block;">
		<p><a href="#" data-toggle="offcanvas"><i class="fa fa-bars" style="color: #fff; font-size: 25px; margin-top: 11px;"></i></a></p>
      </div>
	  <p id="date"></p>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class=" treeview">
          <a href="index.php" class="selected" >
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class=" treeview">
          <a href="studentreg.php">
            <i class="fa fa-users"></i> <span>Student Registration</span>
           <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="studentreg.php"><i class="fa fa-circle-o"></i>Student List</a></li>
            <li><a href="addStudent.php"><i class="fa fa-circle-o"></i>Add Student</a></li>
	    <li><a href="modifyStudent.php"><i class="fa fa-circle-o"></i>Modify Student</a></li>
            <li><a href="deleteStudent.php"><i class="fa fa-circle-o"></i>Delete Student</a></li>  
        </ul>
        </li>

        <li class=" treeview">
          <a href="request.html">
            <i class="fa fa-book"></i> <span>Library</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="active"><a href="addBook.php"><i class="fa fa-circle-o"></i>Add Books</a></li>
            <li><a href="issueBook.php"><i class="fa fa-circle-o"></i>Issue Books</a></li>
            <li><a href="resubmitBook.php"><i class="fa fa-circle-o"></i>Resubmit Books</a></li>
            <li><a href="deleteBook.php"><i class="fa fa-circle-o"></i>Delete Books</a></li>  
        </ul>
        </li>

        <li class=" treeview">
          <a href="eventListA.php">
            <i class="fa fa-music"></i> <span>Arts</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="active"><a href="eventListA.php"><i class="fa fa-circle-o"></i>Event List</a></li>
	    <li><a href="addEventA.php"><i class="fa fa-circle-o"></i>Add Event</a></li>
            <li><a href="deleteEventA.php"><i class="fa fa-circle-o"></i>Delete Event</a></li>
            <li><a href="addResultA.php"><i class="fa fa-circle-o"></i>Add Result</a></li>
            <li><a href="modifyResultA.php"><i class="fa fa-circle-o"></i>Modify Result</a></li>  
        </ul>
        </li>



        <li class=" treeview">
          <a href="eventListS.php">
            <i class="fa fa-flag"></i> <span>Sports</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="active"><a href="eventListS.php"><i class="fa fa-circle-o"></i>Event List</a></li>
	    <li><a href="addEventS.php"><i class="fa fa-circle-o"></i>Add Event</a></li>
            <li><a href="deleteEventS.php"><i class="fa fa-circle-o"></i>Delete Event</a></li>
            <li><a href="addResultS.php"><i class="fa fa-circle-o"></i>Add Result</a></li>
            <li><a href="modifyResultS.php"><i class="fa fa-circle-o"></i>Modify Result</a></li>  
        </ul>
        </li>
        <li class=" treeview">
          <a href="request.html">
            <i class="fa fa-paperclip"></i> <span>Seminar Report</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="active"><a href="addReport.php"><i class="fa fa-circle-o"></i>Add Report</a></li>
            <li><a href="deleteReport.php"><i class="fa fa-circle-o"></i>Delete Report</a></li>
        </ul>
        </li>
	 <li class=" treeview">
          <a href="request.html">
            <i class="fa fa-envelope"></i> <span>Feedback</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="active"><a href="listFeedback.php"><i class="fa fa-circle-o"></i>List Feedback</a></li>
        </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <!-- <small>Control panel</small> -->
      </h1>
	 	<hr>
 
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
    <section class="col-lg-12 connectedSortable">
		<div class="col-sm-3">
      <a href="studentreg.php">
       <div class="single_whyus_top wow">
       		<div class="whyus_icon"><span class="glyphicon glyphicon-user"></span></div>
      	<h4 style="color: #10baeb;">Student Registration</h4></a>
      </div>
    </div>
		<div class="col-sm-3">
      <a href="addBook.php">
       <div class="single_whyus_top wow">
       		<div class="whyus_icon"><span class="glyphicon glyphicon-book"></span></div>
      	<h4 style="color: #10baeb;">Library Management</h4></a>
      </div>
    </div>
		<div class="col-sm-3">
      <a href="eventListA.php">
       <div class="single_whyus_top wow">
       		<div class="whyus_icon"><span class="glyphicon glyphicon-music"></span></div>
      	<h4 style="color: #10baeb;">Arts Management</h4></a>
      </div>
    </div>
        </section>
      </div>
	 <div class="row">
    <section class="col-lg-12 connectedSortable">
		<div class="col-sm-3">
      <a href="eventListS.php">
       <div class="single_whyus_top wow">
       		<div class="whyus_icon"><span class="glyphicon glyphicon-flag"></span></div>
      	<h4 style="color: #10baeb;">Sports Management</h4></a>
      </div>
    </div>
		<div class="col-sm-3">
      <a href="addReport.php">
       <div class="single_whyus_top wow">
       		<div class="whyus_icon"><span class="glyphicon glyphicon-paperclip"></span></div>
      	<h4 style="color: #10baeb;">Seminar Topics</h4></a>
      </div>
    </div>
		<div class="col-sm-3	">
      <a href="listFeedback.php">
       <div class="single_whyus_top wow">
       		<div class="whyus_icon"><span class="glyphicon glyphicon-envelope"></span></div>
      	<h4 style="color: #10baeb;">Feedback</h4></a>
      </div>
    </div>
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2017 <a href="">Registered</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script type="text/javascript">
function isNumberKey(evt){
	var charCode= (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();
if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;
var today = day + "-" + month + "-" + year;
document.getElementById('date').value = today;
</script>

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
