$(document).ready(function(){
	//alert("Thanks");
	$.ajax({  
	//type: 'GET',
	  type: "POST",
	  data: {
	    'action': 'getAllUsers'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
		 var json_obj = $.parseJSON(data);
		 var user_detail = "";
			user_detail += '<tbody><tr>'+
				'<th>Register NO</th>'+
				'<th>Name</th>'+
				'<th>Date of Birth</th>'+
				'<th>Sex</th>'+
				'<th>Branch</th>'+
				'<th>Semester</th>'+
			'</tr>';
		 for (var i in json_obj) 
			{
				user_detail += 
				'<tr><td>'+json_obj[i].Regno+'</td>'+
				'<td>'+json_obj[i].Name+'</td>'+
				'<td>'+json_obj[i].DOB+'</td>'+
				'<td>'+json_obj[i].Sex+'</td>'+
				'<td>'+json_obj[i].Branch+'</td>'+
				'<td>'+json_obj[i].Semester+'</td></tr>';
				$('#Studenttable').html(user_detail);
			}
			 $("#print").append('<input type="submit" id="submit" value="Print" onclick="printData()" class="btn btn-success" style="float: right;"/>')
	  
	}
});
	$("#addStudent").on('submit',function(e){
		var regno = $( "#regno" ).val();
		var name  = $( "#name" ).val();
		var day = $('#day').val();
		var month = $('#month').val();
		var year = $('#year').val();
		var dob = day+"-"+month+"-"+year;
		var sex  = $( '#sex:checked' ).val();
		var branch  = $( "#branch" ).val();
		var sem  = $( "#sem" ).val();
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'StudentAddition',
				 'regno' : regno,
				 'name' : name,
				 'dob' : dob,
				 'sex' : sex,
				 'branch' : branch,
				 'sem' : sem                  
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Student added Successfully.");
				
			}
		});
	//	
	});
});
$(document).ready(function(){
	//alert("Thanks");
	$.ajax({  
	//type: 'GET',
	  type: "POST",
	  data: {
	    'action': 'getAllUsers'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
		var json_obj = $.parseJSON(data);
			
			//alert(data);
	   		 for (var i in json_obj) 
			{
				
				 $('select[name="StudentList"]').append('<option value="'+json_obj[i].Regno+'">' +json_obj[i].Name+ "</option>");
			}
		}
	  
	});
	$("#StudentList").on('click',function(e){
		var regno = $( "#StudentList" ).val();
				$.ajax({
					//type: 'GET',
					type: "POST",
					data: {
						 'action': 'getUserByID',
						 'regno' : regno 
						},
					url: "mainpro_Service_call.php",
					success:function(data){
						//alert(data);
					var json_obj = $.parseJSON(data);
					var day=json_obj[0].DOB.split("-");
					$("#regno").val(json_obj[0].Regno);
					$("#name").val(json_obj[0].Name);
					$("#day").val(day[0]);
					$("#month").val(day[1]);
					$("#year").val(day[2]);
					$('input[name="sex"][value="'+json_obj[0].Sex+'"]').prop('checked',true);
					$("#branch").val(json_obj[0].Branch);
					$("#sem").val(json_obj[0].Semester);
				}

				});
			
		
	});
	$("#modifyStudent").on('submit',function(e){
		var regno = $( "#regno" ).val();
		var name  = $( "#name" ).val();
		var day = $('#day').val();
		var month = $('#month').val();
		var year = $('#year').val();
		var dob = day+"-"+month+"-"+year;
		var sex  = $( '#sex:checked' ).val();
		var branch  = $( "#branch" ).val();
		var sem  = $( "#sem" ).val();
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'StudentModification',
				 'regno' : regno,
				 'name' : name,
				 'dob' : dob,
				 'sex' : sex,
				 'branch' : branch,
				 'sem' : sem                  
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Student modified Successfully.");
				
			}
		});
	//	
	});	
	
});
$(document).ready(function(){
	//alert("Thanks");
	$.ajax({  
	//type: 'GET',
	  type: "POST",
	  data: {
	    'action': 'getAllUsers'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
		var json_obj = $.parseJSON(data);
			
			//alert(data);
	   		 for (var i in json_obj) 
			{
				
				 $('select[name="DeleteStudent"]').append('<option value="'+json_obj[i].Regno+'">' +json_obj[i].Name+ "</option>");
			}
		}
	  
	});
	$("#DeleteStudent").on('click',function(e){
		var regno = $( "#DeleteStudent" ).val();

				$.ajax({

					//type: 'GET',

					type: "POST",

					data: {
						 'action': 'getUserByID',
						 'regno' : regno
						},
					url: "mainpro_Service_call.php",
					success:function(data){
						var json_obj = $.parseJSON(data);
					var day=json_obj[0].DOB.split("-");
					$("#regno").val(json_obj[0].Regno);
					$("#name").val(json_obj[0].Name);
					$("#day").val(day[0]);
					$("#month").val(day[1]);
					$("#year").val(day[2]);
					$('input[name="sex"][value="'+json_obj[0].Sex+'"]').prop('checked',true);
					$("#branch").val(json_obj[0].Branch);
					$("#sem").val(json_obj[0].Semester);
						//alert("Deleted Successfully");
						//alert(data);
						//window.location.href = "http://localhost/mainpro/deleteStudent.php";

					}

				});	
	});
	$("#deleteStudent").on('submit',function(e){
		var regno = $( "#regno" ).val()
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				
				 'action': 'deleteStudent',
				'regno': regno      
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Deleted Successfully.");
				
			}
		});
	//	
	});	
	
});
$(document).ready(function(){
	//alert("Thanks");
	$.ajax({  
	//type: 'GET',
	  type: "POST",
	  data: {
	    'action': 'getUserByID'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
		 var json_obj = $.parseJSON(data);
		 var user_detail = "";
			user_detail += '<tbody><tr>'+
				'<th>Register NO</th>'+
				'<th>Name</th>'+
				'<th>Date of Birth</th>'+
				'<th>Sex</th>'+
				'<th>Branch</th>'+
				'<th>Semester</th>'+
			'</tr>';
		 for (var i in json_obj) 
			{
				user_detail += 
				'<tr><td>'+json_obj[i].Regno+'</td>'+
				'<td>'+json_obj[i].Name+'</td>'+
				'<td>'+json_obj[i].DOB+'</td>'+
				'<td>'+json_obj[i].Sex+'</td>'+
				'<td>'+json_obj[i].Branch+'</td>'+
				'<td>'+json_obj[i].Semester+'</td></tr>';
				$('#Printtable').html(user_detail);
			}
			 $("#print").append('<input type="submit" id="submit" value="Submit" onclick="printData()" class="btn btn-success" style="float: right;"/>')
	  
	}
});
});
