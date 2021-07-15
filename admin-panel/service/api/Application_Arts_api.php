<?php
require_once("api.php");
require_once("../data/Application_Arts_Manager.php");
	class Application_Arts_api extends API{ 
		public function __construct() { 
	 
			parent::__construct();  
		}

		public function getAllEvents()
		{
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->getAllEvents();
			echo parent::encodeToJson($result);
		}
		public function getEventByID()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Event_id= $input["Event_id"];
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->getEventByID($Event_id);
			echo parent::encodeToJson($result);
		}
		public function addEvent()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"];
			$Nature= $input["Nature"]; 
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->addEvent($Name,$Nature);
			echo parent::encodeToJson($result);
		}
		public function deleteEvent()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Event_id= $input["Event_id"]; 
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->deleteEvent($Event_id);
			echo parent::encodeToJson($result);
		}
		public function getEventDetails()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"];
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->getEventDetails($Name);
			echo parent::encodeToJson($result);
		}
		public function addResult()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"];
			$First= $input["First"];
			$Second= $input["Second"];
			$Third= $input["Third"];
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->addResult($Name,$First,$Second,$Third);
			echo parent::encodeToJson($result);
		}
		public function modifyResult()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"];
			$First= $input["First"];
			$Second= $input["Second"];
			$Third= $input["Third"];
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->modifyResult($Name,$First,$Second,$Third);
			echo parent::encodeToJson($result);
		}
		public function getResultByName()
		{
			$inputJSON = file_get_contents('php://input');
		 	$input = json_decode($inputJSON,TRUE);
			$Name= $input["Name"];
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->getResultByName($Name);
			echo parent::encodeToJson($result);
		}
		public function getAllResult()
		{
			$application_Arts_manager = new Application_Arts_Manager;
			$result = $application_Arts_manager->getAllResult();
			echo parent::encodeToJson($result);
		}
	}
	$api = new Application_Arts_api;
	$api->processApi();
?>
