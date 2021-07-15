angular.module("CamApp", ['ngStorage'])	 
   .controller("LoginPageCtrl",['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		var sname = $localStorage.Name;
		console.log(sname);
		if(sname == null | sname == "undefined")
		{
			first="SIGN IN";
		}
		var str = "How are you doing today?";
		var first = sname.split(" ", 1);
		console.log(first);
		// console.log(sname);
		// var index = sname.indexOf(" ");
		// var  first = sname.substr(0, index);
		if (sname === "SIGN IN")
		{
			$scope.studName = "SIGN IN";
		}
		else
		{
			$scope.studName = "hi, "+first;
		}
		$scope.hoverIn = function()
		{
			if ($scope.studName != "SIGN IN")
			{
				$scope.studName = "LOGOUT";
			}
		};
		$scope.hoverOut = function()
		{
			if ($scope.studName == "LOGOUT")
			{
				$scope.studName = "hi, "+first;
			}
		};
		
		$scope.LoginPage = function() 
		{
			$localStorage.Name = "SIGN IN" ;
			$localStorage.regsId = null;
			$window.location.href = "Login.html";
		}
		$scope.showlogout = function() 
		{
			
		}
		$scope.show = true;

$scope.closeAlert = function(index) {
    $scope.show = false;
};
		/*$scope.showlogout = function() 
		{
			
		}*/
		   	    
   }])
   
   
   .controller('SeminarCtrl',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		 $http({     
            method : "post",
			url: 'http://localhost/mainpro/service/user/getSeminar',
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.semi = response.data;
			  }, function errorCallback(response) {
			  });

		
	}])

	.controller('libraryCtrl',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		 $http({     
            method : "post",
			url: 'http://localhost/mainpro/service/Book/getBooks',
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.semi = response.data;
			  }, function errorCallback(response) {
			  });
			  
			$scope.store = function(value1) {
				$http({
					method : "post",
					url: 'http://localhost/mainpro/service/Book/bookStatus',
					data: {"bookno":value1},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						if(response.data[0].count >=1)
						{
							alert("Book is not in library");
						}
						else
						{
							alert("Book is in library");
						}
					}, function errorCallback(response) {
						swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});	
		 });
            } 

		
	}])
	
	
	
	.controller('feedbackCtrl',['$scope','$http','$window','$localStorage','$timeout',
	function ($scope,$http,$window,$localStorage,$timeout) {
		
		 $scope.submitfeedbackForm = function() 
		{
			swal({
				  title: "Conformation",
				  text: "Are you want to submit",
				  showCancelButton: true,
				  confirmButtonText: "Yes",
				  cancelButtonText: "No",
				  closeOnConfirm: false,
				  showLoaderOnConfirm: true,
				},
				function(){
				
			var  name = $scope.sname;
			var email = $scope.email;
			var command = $scope.cmd
			console.log(name);
			$http({
            method : "post",
			url: "http://localhost/mainpro/service/user/feedBackAdd",
            data: {"name":name,"email":email,"command":command},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				swal({
				   title: "Success",
				   text: "Feedback submitted successfuly",
				   type: "success",
				   showCancelButton: false,
				   showConfirmButton: false});
				 //swal("Success","Feedback submitted","success");
				$timeout(function() { 
					$scope.displayErrorMsg = true;
					$window.location.href = 'index.html';
				}, 1500);
			  }, function errorCallback(response) {
				  $window.alert("Error in Submission");
			  }); 

		
		});
		}

	}])

.controller('ShowStudItem',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		$http({
					method : "post",
					url: 'http://localhost/mainpro/service/Sports/ShowStudItem',
					data: {"regno":$localStorage.regsId},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						$scope.student= response.data;
						console.log(response.data)
					}, function errorCallback(response) {
						alert("Something went wrong try again")	
		 });
		
	}])	
	.controller('ShowStudEvent',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		$http({
					method : "post",
					url: 'http://localhost/mainpro/service/Arts/ShowStudEvent',
					data: {"regno":$localStorage.regsId},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						$scope.student= response.data;
						console.log(response.data)
					}, function errorCallback(response) {
						alert("Something went wrong try again")	
		 });
		
	}])	
		
	.controller('ArtsRegCtrl',['$scope','$http','$window','$localStorage','$timeout',
	function ($scope,$http,$window,$localStorage,$timeout) {
		
		$scope.indicount;
		$scope.groupcount;
		
		$http({
					method : "post",
					url: 'http://localhost/mainpro/service/Arts/getGroupcount',
					data: {"Category":"Group","regno":$localStorage.regsId},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						$scope.groupcount= response.data[0].count;
					}, function errorCallback(response) {
						swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
		 });
		 $http({
					method : "post",
					url: 'http://localhost/mainpro/service/Arts/getGroupcount',
					data: {"Category":"Individul","regno":$localStorage.regsId},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						$scope.indicount = response.data[0].count;
					}, function errorCallback(response) {
						swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
					
		 });	
		
		 $scope.submitArtsRegForm = function(selected,selected1) { 
			 swal({
				  title: "Conformation",
				  text: "Are you want to submit",
				  showCancelButton: true,
				  confirmButtonText: "Yes",
				  cancelButtonText: "No",
				  closeOnConfirm: false,
				  showLoaderOnConfirm: true,
				},
				function(){
				var regno = $localStorage.regsId;
				var name=$localStorage.Name;
				if($localStorage.regsId != null)
				{
					
					$scope.result = angular.equals(selected, "group");
					if($scope.result)
					{
						var grnum = parseInt($scope.groupcount)
						if(grnum >= 2)
						{
							swal({
								title: "Error",
								text: "You registered 2 Group events",
								type: "error",
								timer:2000,
								showCancelButton: false,
								showConfirmButton: false});
						}
						else	
						{
							$http({
								method : "post",
								url: 'http://localhost/mainpro/service/Arts/EventRegadd',
								data:{"regno":regno,"name":name,"eventName":selected1,"eventNature":selected},
								headers : {'Content-Type':'application/x-www-form-urlencoded'}
								}).then(function successCallback(response) {
									swal({
									   title: "Success",
									   text: "Event Registered",
									   type: "success",
									   showCancelButton: false,
									   showConfirmButton: false});
									 //swal("Success","Feedback submitted","success");
									$timeout(function() { 
										$scope.displayErrorMsg = true;
										$window.location.href = 'ArtsPage.html';
									}, 1500);
								}, function errorCallback(response) {
									swal({
									  title: "Error",
									  text: "Something went wrong try again",
									  type: "error"
									});
								
								});
						 }
					 }
					 else
					 {
						var intnum = parseInt($scope.indicount)
						if(intnum >= 3)
						{
							swal({
								title: "Error",
								text: "You registered 3 Indivigual events",
								type: "error",
								timer:2000,
								showCancelButton: false,
								showConfirmButton: false});
						}
						else	
						{
							$http({
								method : "post",
								url: 'http://localhost/mainpro/service/Arts/EventRegadd',
								data:{"regno":regno,"name":name,"eventName":selected1,"eventNature":selected},
								headers : {'Content-Type':'application/x-www-form-urlencoded'}
								}).then(function successCallback(response) {
									swal({
									   title: "Success",
									   text: "Event Registered",
									   type: "success",
									   showCancelButton: false,
									   showConfirmButton: false});
									 //swal("Success","Feedback submitted","success");
									$timeout(function() { 
										$scope.displayErrorMsg = true;
										$window.location.href = 'ArtsPage.html';
									}, 1500);
								}, function errorCallback(response) {
									swal({
									  title: "Error",
									  text: "Something went wrong try again",
									  type: "error"
									});
								});
						 }
					 }	
			}
			else
			{
				swal({
					title: "Error",
					text: "Sign in needed !! please Login",
					type: "error",
					showCancelButton: false,
					showConfirmButton: false});
					$timeout(function() { 
						$scope.displayErrorMsg = true;
						$window.location.href = 'Login.html';
					}, 1500);	
			}
		
		
		});
		}
		$scope.updateList = function(selected) {    
			$http({
            method : "post",
			url: 'http://localhost/mainpro/service/Arts/getEventCat',
            data: {"Category":selected},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.Events = response.data;
			  }, function errorCallback(response) {
				  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
              
			  });
		}
	}])
	
//sports controller 
.controller('SportssRegCtrl',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		$scope.indicount;
		$scope.groupcount;
		$http({
					method : "post",
					url: 'http://localhost/mainpro/service/Sports/getItemcount',
					data: {"Category":"Group","regno":$localStorage.regsId},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						$scope.groupcount= response.data[0].count;
						console.log($scope.groupcount);
						console.log(response.data);
					}, function errorCallback(response) {
						swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
		 });
		 $http({
					method : "post",
					url: 'http://localhost/mainpro/service/Sports/getItemcount',
					data: {"Category":"Single","regno":$localStorage.regsId},
					headers : {'Content-Type':'application/x-www-form-urlencoded'}
					}).then(function successCallback(response) {
						$scope.indicount = response.data[0].count;
						console.log($scope.indicount);
						console.log(response.data);
					}, function errorCallback(response) {
					
		 });	
		 $scope.submitSportsRegForm = function(selected,selected1) { 
				var regno=$localStorage.regsId;
				console.log(selected1+"    "+selected);
				var name=$localStorage.Name;
				console.log("his");
				if($localStorage.regsId != null)
				{
					
					$scope.result = angular.equals(selected, "Group");
					if($scope.result)
					{
						var grnum = parseInt($scope.groupcount)
						if(grnum >= 2)
						{
							
							alert("You registered 2 Group events");
							
						}
						else	
						{
							$http({
								method : "post",
								url: 'http://localhost/mainpro/service/Sports/ItemRegadd',
								data:{"regno":regno,"name":name,"eventName":selected1,"eventNature":selected},
								headers : {'Content-Type':'application/x-www-form-urlencoded'}
								}).then(function successCallback(response) {
									console.log(response.data);
									alert("Event Registered");
									$window.location.href = 'SportsPage.html';
								}, function errorCallback(response) {
									swal({
									  title: "Error",
									  text: "Something went wrong try again",
									  type: "error"
									});
								
								});
						 }
					 }
					 else
					 {
						var intnum = parseInt($scope.indicount)
						if(intnum >= 3)
						{
							alert("You registered 3 Indivigual events");
						}
						else	
						{
							$http({
								method : "post",
								url: 'http://localhost/mainpro/service/Sports/ItemRegadd',
								data:{"regno":regno,"name":name,"eventName":selected1,"eventNature":selected},
								headers : {'Content-Type':'application/x-www-form-urlencoded'}
								}).then(function successCallback(response) {
									console.log(response.data);
									alert("Event Registered");
									$window.location.href = 'SportsPage.html';
								}, function errorCallback(response) {
									swal({
									  title: "Error",
									  text: "Something went wrong try again",
									  type: "error"
									});
								});
						 }
					 }	
			}
			else
			{
				alert("Sign in needed !! please Login");
				$window.location.href = 'Login.html';
			}
		}
		$scope.updateList = function(selected) {  
		
			$http({
            method : "post",
			url: 'http://localhost/mainpro/service/Sports/getItemCat',
            data: {"Category":selected},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.Events = response.data;
			  }, function errorCallback(response) {
				  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
			  });
		}
	}])
	
	.controller('SportsdelCtrl',['$scope','$http','$window','$localStorage','$timeout',
	function ($scope,$http,$window,$localStorage,$timeout) {
		var regno=$localStorage.regsId;
		console.log("jdfevjhfg");
		$http({
            method : "post",
			url: 'http://localhost/mainpro/service/Sports/showRegItems',
            data: {"Category":regno},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.Del_Items = response.data;
				console.log(response.data);
			  }, function errorCallback(response) {
				  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
			  });
			  	  
			$scope.submitSportsDelForm = function(selected) {  
			$http({
            method : "post",
			url: 'http://localhost/mainpro/service/Sports/DeleteSportsItem',
            data: {"regno":regno,"itemName":selected},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				alert("Event Deleted");
				console.log(response.data);
				$window.location.href = 'SportsDelete.html';
			  }, function errorCallback(response) {
				  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
			  });
		}
		
		
		
	}])
	//end
	 .controller('ArtsdelCtrl',['$scope','$http','$window','$localStorage','$timeout',
	function ($scope,$http,$window,$localStorage,$timeout) {
		var regno=$localStorage.regsId;
		console.log("jdfevjhfg");
		$http({
            method : "post",
			url: 'http://localhost/mainpro/service/Arts/showRegEvents',
            data: {"Category":regno},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.Del_Events = response.data;
				console.log(response.data);
			  }, function errorCallback(response) {
				  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
			  });
			  
			$scope.submitArtsDelForm = function(selected) {  
			$http({
            method : "post",
			url: 'http://localhost/mainpro/service/Arts/DeleteArtsItem',
            data: {"regno":regno,"itemName":selected},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				alert("Event Deleted");
				$window.location.href = 'ArtsDelete.html';
			  }, function errorCallback(response) {
				  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
			  });
		}
		
		
		
		
	}])
	
// end of sports controller 

.controller('AsrtsResultCtrl',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		 $http({     
            method : "post",
			url: 'http://localhost/mainpro/service/Arts/getArtsResult',
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.semi = response.data;
			  }, function errorCallback(response) {
			  });

		
	}])
.controller('SportsResultCtrl',['$scope','$http','$window','$localStorage',
	function ($scope,$http,$window,$localStorage) {
		
		 $http({     
            method : "post",
			url: 'http://localhost/mainpro/service/Sports/getSportsResult',
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.semi = response.data;
			  }, function errorCallback(response) {
			  });

		
	}])


    .controller('loginCtrl',['$scope','$http','$window','$localStorage','$timeout',
	function ($scope,$http,$window,$localStorage,$timeout) {
	   
	   $scope.submitLoginForm = function() 
		{
			var  reg = $scope.form.regno;
			var dobs = $scope.form.dob;
			
			$http({
            method : "post",
			url: "http://localhost/mainpro/service/user/loginStudent",
            data: {"Regno":reg,"DOB":dobs},
			headers : {'Content-Type':'application/x-www-form-urlencoded'}
			}).then(function successCallback(response) {
				$scope.posts = response.data;
				var result =response.data[0].count ;
                if(result == 1)
                {
					
					$window.alert("Login Success");
					//$timeout( function(){}, 5000 );
					$scope.show = true;
					$localStorage.Name = response.data[0].Name;
					$localStorage.regsId = reg;

					$window.location.href = 'index.html';
                }
                else
                {
					$scope.alertshow = true;
                }
			  }, function errorCallback(response) {
                  swal({
					  title: "Error",
					  text: "Something went wrong try again",
					  type: "error"
					});
			  }); 	
	         
    }
   }]);
   