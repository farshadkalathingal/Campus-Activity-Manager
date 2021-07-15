<?php
require_once("Connect_Db.php");

class Application_Book_Manager{
	public function __construct() { 
	   
	}
	public function getAllBooks()
	{
		$Name = array();
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `Book_Entry`;";
		if($result = $Conn->query($sql))
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
					'Number'=>$row['sl_no'],
				     'Name'=>$row['Book_name'],
				     'Author'=>$row['Author'],
					 'Subject'=>$row['Subject']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
		    
	}
	public function getBookByID($Book_id)
	{
		$Name = array();
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `Book_Entry` WHERE `sl_no` = ".$Book_id.";";
		if($result = $Conn->query($sql))
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Name'=>$row['Book_name'],
				     'Author'=>$row['Author'],
					 'Subject'=>$row['Subject']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
		    
	}
	public function issueBook($Book_id,$Reg_no,$Date)
	{
		$Name = array();
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `book_issue` (`sl_no`, `student_regNo`, `Book_no`, `Date`) VALUES (NULL, '".$Reg_no."', '".$Book_id."', '".$Date."');";
		$sql1 = "INSERT INTO `book_issue1` (`sl_no`, `student_regNo`, `Book_no`, `Date`) VALUES (NULL, '".$Reg_no."', '".$Book_id."', '".$Date."');";
		if(($result = $Conn->query($sql)) && ($result = $Conn->query($sql1)))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function addBook($book_name,$author,$subject)
	{
		$Name = array();
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `Book_Entry` (`sl_no`, `Book_name`, `Author`, `Subject`) VALUES (NULL, '".$book_name."', '".$author."', '".$subject."');";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function submitBook($Book_id,$Date)
	{
		$Name = array();
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `book_resubmit` (`sl_no`, `book_number`, `date`, `student_regNo`) VALUES (NULL, '".$Book_id."', '".$Date."', '');";
		$sql2 = "UPDATE `book_resubmit` SET student_regNo = (SELECT student_regNo FROM `book_issue` WHERE book_no='".$Book_id."') WHERE book_number='".$Book_id."';";
		$sql1 = "DELETE FROM `book_issue1` WHERE Book_no='".$Book_id."' AND student_regNo=(SELECT student_regNo FROM `book_issue` WHERE book_no='".$Book_id."')";
		if (($result = $Conn->query($sql)) && ($result2 = $Conn->query($sql1)))
		{
			if ($result1 = $Conn->query($sql2))
			{	
				return $statusCode = 204;
			}
			else
			{
				return $statusCode = 404;
			}
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function deleteBook($Book_id)
	{
		$Name = array();
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "DELETE FROM `Book_Entry` WHERE `sl_no` = ".$Book_id.";";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
		    
	}
	public function checkBook($Book_id)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		//$sql = "SELECT * FROM book_issue JOIN book_resubmit ON book_issue.Book_no=book_resubmit.book_number WHERE book_issue.Book_no='".$Book_id."' AND book_issue.student_regNo=(SELECT student_regNo FROM book_issue WHERE Book_no='".$Book_id."');";
		$sql = "SELECT * FROM `book_issue1` WHERE Book_no='".$Book_id."'";
		$sql1= "SELECT * from Book_Entry WHERE sl_no='".$Book_id."'";
		$result1 =  $Conn->query($sql1);
		$result = $Conn->query($sql);
		if ($result1->num_rows >0)
		{
			if ($result->num_rows >0)
			{	
				return $statusCode = 404;
			}
			else
			{
				return $statusCode = 204;
			}
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
		    
	}
	
}
