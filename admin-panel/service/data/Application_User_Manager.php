<?php
require_once("Connect_Db.php");

class Application_User_Manager{
	public function __construct() { 
	   
	}
	public function addUser($Regno,$Name,$DOB,$Sex,$Branch,$Sem)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `register` (`Reg_NO`, `Name`, `DOB`, `Sex`, `Branch`, `Semester`) VALUES ('".$Regno."', '".$Name."', '".$DOB."', '".$Sex."', '".$Branch."', '".$Sem."')";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function updateUser($Regno,$Name,$DOB,$Sex,$Branch,$Sem)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "UPDATE `register` set Reg_NO='".$Regno."', Name='".$Name."', DOB='".$DOB."', Sex='".$Sex."', Branch='".$Branch."', Semester='".$Sem."' where Reg_NO='".$Regno."'";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function getUserByID($Regno)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * from register where Reg_NO='".$Regno."'";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Regno'=>$row['Reg_NO'],
				     'Name'=>$row['Name'],
				     'DOB'=>$row['DOB'],
				     'Sex'=>$row['Sex'],
				     'Branch'=>$row['Branch'],
				     'Semester'=>$row['Semester']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function getAllUsers()
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * from register";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Regno'=>$row['Reg_NO'],
				     'Name'=>$row['Name'],
				     'DOB'=>$row['DOB'],
				     'Sex'=>$row['Sex'],
				     'Branch'=>$row['Branch'],
				     'Semester'=>$row['Semester']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function deleteUser($Regno)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "DELETE from register where Reg_NO='".$Regno."'";
		$result = $Conn->query($sql);
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function getSeminar()
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * from seminar";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'topic'=>$row['Topic'],
				     'desc'=>$row['Desc'],
				     'branch'=>$row['Branch']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	public function feedBackAdd($name,$email,$command)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `feedback` (`StudName`, `Email`, `Command`) VALUES ('".$name."', '".$email."', '".$command."')";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	
	
	public function loginStudent($Regno,$DOB)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT count(*),Name FROM `register` where Reg_NO='".$Regno."' and DOB ='".$DOB."'";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'count'=>$row['count(*)'],
					 'Name'=>$row['Name']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	
	public function getFeedback()
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * from feedback";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Name'=>$row['StudName'],
				     'Email'=>$row['Email'],
					 'Command'=>$row['Command']);   
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
