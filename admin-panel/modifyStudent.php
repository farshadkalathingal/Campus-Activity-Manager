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
        Modify Student
        <!-- <small>Control panel</small> -->
      </h1>
 		<hr>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
    <section class="col-lg-5 connectedSortable">
		
		<form action="" id="modifyStudent" method="post">
 			<table style="width: 100%;">
						<tr>
							<th>Select Student</th>
							<td><select id="StudentList" name="StudentList" class="form-control" required>
							<!--<option>One</option>-->
							<option value="">Select Name</option>
							</select></td>
						</tr>
						<tr>
							<th>Register Number</th>
							<td><input id="regno" type="text" class="form-control" onkeypress="return isNumberKey(event)" required></td>
						</tr>
						<tr>
							<th>Name</th>
							<td><input id="name" type="text" class="form-control" onkeypress="return isCharKey(event)" required></td>
						</tr>
						<tr>
							<th>DOB</th>
							<td><select id="day" title="Day" name="day" class="form-control in_line " required>
				<option value="1" selected>Day</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>
				<select name="month" id="month" title="Month" class="form-control in_line" onchange="validday()" required>
				<option value="1" selected>Month</option>
				<option value="1">Jan</option>
				<option value="2">Feb</option>
				<option value="3">Mar</option>
				<option value="4">Apr</option>
				<option value="5">May</option>
				<option value="6">Jun</option>
				<option value="7">Jul</option>
				<option value="8">Aug</option>
				<option value="9">Sept</option>
				<option value="10">Oct</option>
				<option value="11">Nov</option>
				<option value="12">Dec</option>
				</select>
				<select name="year" id="year" title="Year" class="form-control in_line" required>
				<option value="1980" selected>Year</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>
			</select></td>
						</tr>
						<tr>
							<th>Sex</th>
							<td><input type="radio" id="sex" name="sex" checked value="M" required>
							    <label class="radio_but">Male</label>
							    <input type="radio" id="sex" name="sex" value="F">
							  <label  class="radio_but">Female</label></td>
						</tr>
						<tr>
							<th>Branch</th>
							<td><select id="branch" name="branch" class="form-control bor wid_cen" required>
                <option  value="mech" selected>Branch</option>
                  <option value="mech">Mechanical</option>
              <option value="civil">Civil</option>
                <option value="comp">Computer</option>
                <option value="elect">Electronics</option>
                  <option value="electr">Electrical</option>
                  <option value="auto">Automobile</option>
           </select></td>
						</tr>
						<tr>
							<th>Semester</th>
							<td>  <select id="sem" name="sem" class="form-control bor wid_cen" required>
     <option  value="1" selected >Semester</option>
     <option value="1">One</option>
     <option value="2">Two</option>
      <option value="3">Three</option>
       <option value="4">Four</option>
        <option value="5">Five</option>
         <option value="6">Six</option>
     </select></td>
						</tr>
						<tr>
							<th></th>
							<td><input type="submit" id="submit" value="Modify" class="btn btn-warning" style="float: right;"/></td>
						</tr>
					</table>
				</form>
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
function isCharKey(evt){
	var charCode= (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return true;
	return false;
}
function validday(){
   var y = document.getElementById("year").value;
   var m = document.getElementById("month").value;
  // if(m==2)
 //alert(m);
 if((y % 4==0)&&(m==2))
        {disableDay1();}
 else if(m==2||m==4||m==6||m==9||m==11)
        {disableDay2(m);}
 else
        {ableDay();}
 }
function disableDay1(){
 var op = document.getElementById("day").getElementsByTagName("option");
  op[30].disabled = true;
  op[31].disabled = true;
}

function disableDay2(d){
 var op = document.getElementById("day").getElementsByTagName("option");
 if(d==2)
 {
  op[29].disabled = true;
  op[30].disabled = true;
  op[31].disabled = true;
}
else{op[31].disabled = true;}
}
function ableDay(){
 var op = document.getElementById("day").getElementsByTagName("option");
 op[29].disabled = false;
  op[30].disabled = false;
  op[31].disabled = false;
}
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
