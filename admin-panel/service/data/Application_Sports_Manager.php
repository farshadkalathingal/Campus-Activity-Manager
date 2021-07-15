<?php
require_once("Connect_Db.php");

class Application_Sports_Manager{
	public function __construct() { 
	   
	}
	public function getAllEvents()
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `event_spo`";
		if($result = $Conn->query($sql))
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Event_id'=>$row['Event_id'],
				     'Name'=>$row['Event_Name'],
				     'Nature'=>$row['Event_Nature']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function getEventByID($Event_id)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `event_spo` WHERE Event_id=".$Event_id."";
		if($result = $Conn->query($sql))
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Event_id'=>$row['Event_id'],
				     'Name'=>$row['Event_Name'],
				     'Nature'=>$row['Event_Nature']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function addEvent($Name,$Nature)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `event_spo` (`Event_id`, `Event_Name`, `Event_Nature`) VALUES (NULL, '".$Name."', '".$Nature."');";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function deleteEvent($Event_id)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "DELETE FROM `event_spo` WHERE Event_id='".$Event_id."'";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function getEventDetails($Name)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT DISTINCT Reg_No FROM `stud_event_spo` WHERE Event_Name='".$Name."'";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Reg_No'=>$row['Reg_No']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function addResult($Name,$First,$Second,$Third)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `Result_sports` (`id`, `Event_Name`, `First_Prize`, `Second_Prize`, `Third_Prize`) VALUES (NULL, '".$Name."', '".$First."', '".$Second."', '".$Third."');";
		if($result = $Conn->query($sql))
		{
			return $statusCode = 204;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function modifyResult($Name,$First,$Second,$Third)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "UPDATE `Result_sports` SET `First_Prize`='".$First."'`Second_Prize`='".$Second."' `Third_Prize`='".$Third."' WHERE `Event_Name`='".$Name."';";
		if($result = $Conn->query($sql))
		{
			return $statusCode = 204;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function getResultByName($Name)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `Result_sports` WHERE Event_Name='".$Name."';";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Event_Name'=>$row['Event_Name'],
					'First'=>$row['First_Prize'],
					'Second'=>$row['Second_Prize'],
					'Third'=>$row['Third_Prize']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function getAllResult()
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * FROM `Result_sports`;";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Event_Name'=>$row['Event_Name'],
					'First'=>$row['First_Prize'],
					'Second'=>$row['Second_Prize'],
					'Third'=>$row['Third_Prize']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
}

?>
