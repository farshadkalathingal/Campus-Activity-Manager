<?php
require_once("Connect_Db.php");

class Application_Seminar_Manager{
	public function __construct() { 
	   
	}
	public function addSeminar($Name,$Desc,$Branch)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `seminar` (`sl_no`, `Topic`, `Desc`, `Branch`) VALUES (NULL, '".$Name."', '".$Desc."', '".$Branch."');";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function getReportByName($Name)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `seminar` WHERE `Topic`='".$Name."';";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Name'=>$row['Topic'],
				     'Descr'=>$row['Desc'],
				     'Branch'=>$row['Branch']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
 	public function deleteReport($Name)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "DELETE FROM `seminar` WHERE Topic='".$Name."';";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	}
?>

