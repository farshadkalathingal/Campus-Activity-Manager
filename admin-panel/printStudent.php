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
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<style type="text/css">
table {
    border: 1px solid #fff;
}

th {
    padding-top: .6em;
    padding-bottom: .6em;
	background-color: #65aed8;
	color: #fff;
	 border: 1px solid #dddddd;
	 text-align:center;
}
td {
    padding-top: .6em;
    padding-bottom: .6em;
	 border: 1px solid #dddddd;
	 text-align:center;
}
.odd {
	background-color: #aecee0;
}
.even {
	background-color: #d5d8da;
}
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
}
a:hover {
	color: #666;
}
.in_line
{
	border-radius: 0px;
	display: inline-block;
    width: 32%;
}
/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.6s ease;
    -moz-transition: all 0.6s ease;
    -o-transition: all 0.6s ease;
    transition: all 0.6s ease;
    
}

#wrapper.toggled {
    padding-left: 200px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background-color:#312A25 !Important;
   
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 0;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 10px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-left:-250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    right:15px;
    width: 200px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: #312A25;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 220px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 200px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 40px;
        
        
    }

#wrapper.toggled span {
        visibility:hidden;
        
    }
  #wrapper.toggled   i {
 float:right;
 } 

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}


@media(max-width:414px) {

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right:60px;
}

#wrapper.toggled {
    padding-right: 60px;
}

 #wrapper {
        padding-left: 20px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 50px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 140px;
        
        
    }
    
    #wrapper.toggled span {
        visibility:visible;
        position:relative;
        left:70px;
        bottom:13px;
        
    }

#wrapper span {
        visibility:hidden;
        
    }
  #wrapper.toggled   i {
 float:right;
 } 
 
  #wrapper   i {
 float:right;
 } 

    #page-content-wrapper {
        padding: 5px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }




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
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class=" treeview">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class=" treeview">
          <a href="studentreg.php" class="selected" >
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
        Print Student
        <!-- <small>Control panel</small> -->
      </h1>
	 	<hr>
 
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
	<table id="table" style="width:100%;">		
					<tr>
							<th>Select Student</th>
							<td><select id="DeleteStudent" name="DeleteStudent" class="form-control" required>
							<!--<option>One</option>-->
							<option value="">Select Name</option>
							</select></td>
						</tr></table>
   		<table id="Printtable" style="width:100%;"></table>
		<div id="print"></div>
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
function printData()
{
   var divToPrint=document.getElementById("Printtable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

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