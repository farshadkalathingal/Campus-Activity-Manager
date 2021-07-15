<?php
require_once("api.php");
require_once("../data/Application_User_Manager.php");
	class Application_User_api extends API{ 
		public function __construct() { 
	 
			parent::__construct();  
		}


		public function addUser()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Regno= $input["Regno"]; 
			$Name= $input["Name"];
			$DOB= $input["DOB"];  
			$Sex= $input["Sex"];
			$Branch= $input["Branch"];
			$Sem= $input["Semester"];
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->addUser($Regno,$Name,$DOB,$Sex,$Branch,$Sem);
			echo parent::encodeToJson($result);
		}
		public function updateUser()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Regno= $input["Regno"]; 
			$Name= $input["Name"];
			$DOB= $input["DOB"];  
			$Sex= $input["Sex"];
			$Branch= $input["Branch"];
			$Sem= $input["Semester"];
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->updateUser($Regno,$Name,$DOB,$Sex,$Branch,$Sem);
			echo parent::encodeToJson($result);
		}
		public function getUserByID()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Regno= $input["Regno"];   
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->getUserByID($Regno);
			echo parent::encodeToJson($result);
		}
		public function getAllUsers()
		{ 
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->getAllUsers();
			echo parent::encodeToJson($result);
		}
		public function deleteUser()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);   
			$Regno= $input["Regno"];
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->deleteUser($Regno);
			echo parent::encodeToJson($result);
		}
		public function loginStudent()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Regno= $input["Regno"]; 
			$DOB= $input["DOB"];  
			alert($Regno);
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->loginStudent($Regno,$DOB);
			echo parent::encodeToJson($result);
		}
		public function feedBackAdd()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$name= $input["name"]; 
			$email= $input["email"];
			$command= $input["command"];  
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->feedBackAdd($name,$email,$command);
			echo parent::encodeToJson($result);
		}
		public function getFeedback()
		{ 
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->getFeedback();
			echo parent::encodeToJson($result);
		}
		public function getSeminar()
		{ 
			$application_user_manager = new Application_User_Manager;
			$result = $application_user_manager->getSeminar();
			echo parent::encodeToJson($result);
		}		
	}
	
	$api = new Application_User_api;
	$api->processApi();
?>
