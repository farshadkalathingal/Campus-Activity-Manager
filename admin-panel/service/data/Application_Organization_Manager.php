<?php
require_once("Connect_Db.php");

class Application_Organization_Manager{
	public function __construct() { 
	   
	}
	public function addOrganization($Organization_id,$Name,$Organization_code,$Organization_type,$Status)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "INSERT INTO `Organization` (`OrganizationID`, `Name`, `OrganizationCode`, `OrganizationType`, `Status`) VALUES ('".$Organization_id."', '".$Name."', '".$Organization_code."', '".$Organization_type."', '".$Status."')";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function updateOrganization($Organization_id,$Name,$Organization_code,$Organization_type,$Status)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "UPDATE `Organization` set OrganizationID='".$Organization_id."', Name='".$Name."', OrganizationCode='".$Organization_code."', OrganizationType='".$Organization_type."', Status='".$Status."' where OrganizationID='".$Organization_id."'";
		if($result = $Conn->query($sql))
		{	
			return $statusCode = 204;
	  	} 
		else
		{
			return $statusCode = 404;
		}
		    
	}
	public function getOrganizationDetail($organization_id)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * from Organization where OrganizationID='".$organization_id."'";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'OrganizationID'=>$row['OrganizationID'],
					'Name'=>$row['Name'],
					'OrganizationCode'=>$row['OrganizationCode'],
					'OrganizationType'=>$row['OrganizationType'],
					'Status'=>$row['Status']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}
	/*public function getOrganizations($organization_id)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "SELECT * from Organization where OrganizationID='".$organization_id."'";
		$result = $Conn->query($sql);
		if ($result->num_rows >0)  {
	      		while($row = $result->fetch_assoc())    {
			       $business_locations[] = array(
				     'Name'=>$row['Name']);   
			}
		return $business_locations;
	  	} 
		else
		{
		return $statusCode = 404;
		}
		    
	}*/
	public function deleteOrganization($organization_id)
	{
		$connectDb = new Connect_Db();
		$Conn = $connectDb->Connect();
		$sql = "DELETE from Organization where OrganizationID='".$organization_id."'";
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
}
?>
