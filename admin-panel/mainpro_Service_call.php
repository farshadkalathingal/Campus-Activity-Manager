<?php
//	require_once("../Common.php"); 	
	if(isset($_POST['action']) && !empty($_POST['action'])) {
		$action = $_POST['action'];
		switch($action) {
			case 'getAllUsers' : getAllUsers();break;
			case 'StudentAddition' : addUser();break;
			case 'getUserByID' : getUserByID();break;
			case 'deleteStudent' : deleteStudent();break;
			case 'StudentModification' : StudentModification();break;
			case 'getAllEvents' : getAllEvents();break;
			case 'EventAddition' : EventAddition();break;
			case 'deleteEvent' : deleteEvent();break;
			case 'getEventByID' : getEventByID();break;
			case 'getEventDetails' : getEventDetails();break;
			case 'addResult' : addResult();break;
			case 'getAllResults' : getAllRsults();break;
			case 'getResultDetails' : getResultDetails();break;
			case 'modifyResult' : modifyResult();break;
			case 'AddBook' : AddBook();break;
			case 'IssueBook' : IssueBook();break;
			case 'SubmitBook' : SubmitBook();break;
			case 'getAllBooks' : getAllBooks();break;
			case 'getBookByID' : getBookByID();break;
			case 'deleteBook' : deleteBook();break;
			case 'getAllFeedback' : getAllFeedback();break;
			case 'AddSeminar' : AddSeminar();break;
			case 'DeleteSeminar' : DeleteSeminar();break;
			case 'getAllSeminar' : getSeminar();break;
			case 'getReportByName' : getReportByName();break;
			case 'deleteReport' : deleteReport();break;
			case 'CheckBook' : CheckBook();break;
			case 'getAllEventsSports' : getAllEventsSports();break;
			case 'EventAdditionSports' : EventAdditionSports();break;
			case 'deleteEventSports' : deleteEventSports();break;
			case 'getEventByIDSports' : getEventByIDSports();break;
			case 'getEventDetailsSports' : getEventDetailsSports();break;
			case 'addResultSports' : addResultSports();break;
			case 'getAllResultSports' : getAllResultSports();break;
			case 'getResultDetailsSports' : getResultDetailsSports();break;
			case 'modifyResultSports' : modifyResultSports();break;
			// ...etc...
		}
	}
	/**************************************************All Staff List***********************************************/
	function getAllUsers(){
		$data = array("User_id" => "");
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/user/getAllUsers');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }
	/************************************************** Add Staff *******************************************************/
	function addUser(){
		//$user_id = $_POST['id'];
		//echo "Hello";
		$regno = $_POST['regno'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$sex = $_POST['sex'];
		$branch = $_POST['branch'];
		$sem = $_POST['sem'];
		//$state = $_POST['state'];
		//$user_email = $_POST['user_email'];
		//$password = $_POST['password'];
		//$profpath = $_POST['profpath'];
		
		$data = array("Regno"=>$regno,"Name"=>$name,"DOB"=>$dob,"Sex"=>$sex,"Branch"=>$branch,"Semester"=>$sem);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/user/addUser');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/**************************************************All Customer List***********************************************/
	
	function getUserByID(){
		$regno = $_POST['regno'];	
		$data = array("Regno" =>$regno);
		$data_string = json_encode($data);
		  //echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/user/getUserByID');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }
	 
	 /**************************************************Get CustomerArea List***********************************************/
	
	function deleteStudent(){
		$regno = $_POST['regno'];	
		$data = array("Regno" =>$regno);
		$data_string = json_encode($data);
		//  echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/user/deleteUser');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
     }
	 
	/************************************************** Add Customer *******************************************************/
	
	function StudentModification(){
		//$user_id = $_POST['id']; 
		$regno = $_POST['regno'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$sex = $_POST['sex'];
		$branch = $_POST['branch'];
		$sem = $_POST['sem'];
		$data = array("Regno"=>$regno,"Name"=>$name,"DOB"=>$dob,"Sex"=>$sex,"Branch"=>$branch,"Semester"=>$sem);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/user/updateUser');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
	
	/********************************************** Add addCustomerArea ***********************************************/
	
	function getAllEvents(){
		$data = array("Name"=>"");
		$data_string = json_encode($data);
		$ch = curl_init('http://localhost/mainpro/service/arts/getAllEvents');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get TA_Request ***********************************************/
	
	function EventAddition(){
		$name = $_POST['name'];
		$nature = $_POST['nature'];
		$data = array("Name"=>$name,"Nature"=>$nature);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/addEvent');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get DA_Request ***********************************************/
	
	function deleteEvent(){
		$Event_id = $_POST['Event_id'];
		$data = array("Event_id"=>$Event_id);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/deleteEvent');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get All LeaveRequest ***********************************************/
	
	function getEventByID(){
		$Event_id = $_POST['Event_id'];
		$data = array("Event_id"=>$Event_id);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/getEventByID');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	
	/********************************************** Get Executive ***********************************************/
	
	function getEventDetails(){
		$Name = $_POST['Name'];
		$data = array("Name"=>$Name);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/getEventDetails');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get TransationList ***********************************************/
	
	function addResult(){
		$Name = $_POST['Name'];
		$First = $_POST['First'];
		$Second = $_POST['Second'];
		$Third = $_POST['Third'];
		$data = array("Name"=>$Name,"First"=>$First,"Second"=>$Second,"Third"=>$Third);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/addResult');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	/********************************************** Get TransationList ***********************************************/
	
	function getAllResults(){
		$data = array();
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/getAllResult');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	
	/********************************************** Get TransationList ***********************************************/
	
	function getResultDetails(){
		$Name = $_POST['Name'];
		$data = array("Name"=>$Name);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/getResultByName');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	/********************************************** Get TransationList ***********************************************/
	
	function modifyResult(){
		$Name = $_POST['Name'];
		$First = $_POST['First'];
		$Second = $_POST['Second'];
		$Third = $_POST['Third'];
		$data = array("Name"=>$Name,"First"=>$First,"Second"=>$Second,"Third"=>$Third);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/arts/modifyResult');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	
	/********************************************** Get All Messages ***********************************************/
	
	function AddBook(){
		$Book = $_POST['book'];
		$Author = $_POST['author'];
		$Subject = $_POST['subject'];
		$data = array("Book"=>$Book,"Author"=>$Author,"Subject"=>$Subject);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/book/addBook');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Send Messages ***********************************************/
	
	function IssueBook(){
		$book_no = $_POST['bookno'];
		$regno = $_POST['regno'];
		$date = $_POST['date'];
		$data = array("Book_id"=>$book_no,"Register_no"=>$regno,"Date"=>$date);
		$data_string = json_encode($data);
		echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/book/issueBook');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
	
	/********************************************** View Messages ***********************************************/
	
	function SubmitBook(){
		
		$book_no = $_POST['bookno'];
		$date = $_POST['date'];
		$data = array("Book_id"=>$book_no,"Date"=>$date);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/book/submitBook');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
	
	/********************************************** Send Reply ***********************************************/
	
	function getAllBooks(){
		
		$data = array();
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/book/getAllBooks');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
	
	
	/********************************************** Send Reply ***********************************************/
	
	function getBookByID(){
		$book_no = $_POST['bookno'];
		$data = array("Book_id"=>$book_no);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/book/getBookByID');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
/********************************************** Send Reply ***********************************************/
	
	function deleteBook(){
		$book_no = $_POST['bookno'];
		$data = array("Book_id"=>$book_no);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/book/deleteBook');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
/********************************************** Send Reply ***********************************************/
/********************************************** Send Reply ***********************************************/
/********************************************** Send Reply ***********************************************/
	
	function getAllFeedback(){
		$data = array();
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/user/getFeedback');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result;
	
	}
	 /************************************************* Login ****************************************/
	 	function loginStudent(){
		//$user_id = $_POST['id'];
		//echo "Hello";
		$regno = $_POST['regno'];
		$dob = $_POST['dob'];
		//$state = $_POST['state'];
		//$user_email = $_POST['user_email'];
		//$password = $_POST['password'];
		//$profpath = $_POST['profpath'];
		
		$data = array("Regno"=>$regno,"DOB"=>$dob);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/user/loginStudent');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	
	 /*************************************** seminar service **************************************/
	 function getSeminar(){
		$data = array("User_id" => "");
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/user/getSeminar');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }

	 /*************************************** seminar service **************************************/
	 function AddSeminar(){
		$name = $_POST['name'];
		$descr = $_POST['descr'];
		$branch = $_POST['branch'];
		$data = array("Name"=>$name,"Description"=>$descr,"Branch"=>$branch);
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/seminar/addSeminar');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }
	 /*************************************** seminar service **************************************/
	 function DeleteSeminar(){
		$name = $_POST['name'];
		$descr = $_POST['descr'];
		$branch = $_POST['branch'];
		$data = array("Name"=>$name,"Description"=>$descr,"Branch"=>$branch);
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/seminar/addSeminar');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }

 /*************************************** seminar service **************************************/
	 function getReportByName(){
		$name = $_POST['name'];
		$data = array("Name"=>$name);
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/seminar/getReportByName');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }
/*************************************** seminar service **************************************/
	 function deleteReport(){
		$name = $_POST['name'];
		$data = array("Name"=>$name);
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/seminar/deleteReport');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }

/*************************************** seminar service **************************************/
	 function CheckBook(){
		$book_no = $_POST['bookno'];
		$data = array("Book_id"=>$book_no);
		$data_string = json_encode($data);
		  //echo $data_string;
		//$ch = curl_init('http://qhawk.sinnonteq.com/user/getUserByID');
		$ch = curl_init('http://localhost/mainpro/service/book/checkBook');
	  	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
     }

/********************************************** Add addCustomerArea ***********************************************/
	
	function getAllEventsSports(){
		$data = array("Name"=>"");
		$data_string = json_encode($data);
		$ch = curl_init('http://localhost/mainpro/service/sports/getAllEvents');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get TA_Request ***********************************************/
	
	function EventAdditionSports(){
		$name = $_POST['name'];
		$nature = $_POST['nature'];
		$data = array("Name"=>$name,"Nature"=>$nature);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/addEvent');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get DA_Request ***********************************************/
	
	function deleteEventSports(){
		$Event_id = $_POST['Event_id'];
		$data = array("Event_id"=>$Event_id);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/deleteEvent');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get All LeaveRequest ***********************************************/
	
	function getEventByIDSports(){
		$Event_id = $_POST['Event_id'];
		$data = array("Event_id"=>$Event_id);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/getEventByID');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	/********************************************** Get Executive ***********************************************/
	
	function getEventDetailsSports(){
		$Name = $_POST['Name'];
		$data = array("Name"=>$Name);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/getEventDetails');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	/********************************************** Get TransationList ***********************************************/
	
	function addResultSports(){
		$Name = $_POST['Name'];
		$First = $_POST['First'];
		$Second = $_POST['Second'];
		$Third = $_POST['Third'];
		$data = array("Name"=>$Name,"First"=>$First,"Second"=>$Second,"Third"=>$Third);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/addResult');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	/********************************************** Get TransationList ***********************************************/
	
	function getAllResultSports(){
		$data = array();
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/getAllResult');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	/********************************************** Get TransationList ***********************************************/
	
	function getResultDetailsSports(){
		$Name = $_POST['Name'];
		$data = array("Name"=>$Name);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/getResultByName');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}

	/********************************************** Get TransationList ***********************************************/
	
	function modifyResultSports(){
		$Name = $_POST['Name'];
		$First = $_POST['First'];
		$Second = $_POST['Second'];
		$Third = $_POST['Third'];
		$data = array("Name"=>$Name,"First"=>$First,"Second"=>$Second,"Third"=>$Third);
		$data_string = json_encode($data);
		//echo $data_string;
		$ch = curl_init('http://localhost/mainpro/service/sports/modifyResult');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	  	curl_setopt($ch, CURLOPT_HTTPHEADER,
	 	array(   'Content-Type: application/json',
	   			'Content-Length: ' .strlen($data_string)) 
			 );
	  	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	  	//execute post  
		$result = curl_exec($ch);
 		$errmsg = curl_error($ch);		 
 		//close connection 
		curl_close($ch);
	  	echo $result; 
	
	}
	
?>
