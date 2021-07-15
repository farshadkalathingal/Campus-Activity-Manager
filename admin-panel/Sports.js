$(document).ready(function(){
	//alert("Thanks");
	$.ajax({  
	//type: 'GET',
	  type: "POST",
	  data: {
	    'action': 'getAllEventsSports'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
			 var json_obj = $.parseJSON(data);
		 var user_detail = "";
			user_detail += '<tr>'+
				'<th>Event ID</th>'+
				'<th>Event Name</th>'+
				'<th>Event Nature</th>'+
				'</tr>';
		 for (var i in json_obj) 
			{
				user_detail += 
				'<tr><td>'+json_obj[i].Event_id+'</td>'+
				'<td>'+json_obj[i].Name+'</td>'+
				'<td>'+json_obj[i].Nature+'</td></tr>';
				$('#Artstable').html(user_detail);
			}
	  
	}
});
$("#addEvent").on('submit',function(e){
		var name  = $( "#name" ).val();
		var nature  = $( '#type:checked' ).val();
		alert(name);
		alert(nature);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'EventAdditionSports',
				 'name' : name,
				 'nature' : nature                
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Event added Successfully.");
				
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
	    'action': 'getAllEventsSports'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
		var json_obj = $.parseJSON(data);
			
			//alert(data);
	   		 for (var i in json_obj) 
			{
				
				 $('select[name="DeleteEvent"]').append('<option value="'+json_obj[i].Event_id+'">' +json_obj[i].Name+ "</option>");
			}
		}
	  
	});
	$("#DeleteEvent").on('click',function(e){
		var event_id = $( "#DeleteEvent" ).val();

				$.ajax({

					//type: 'GET',

					type: "POST",

					data: {
						 'action': 'getEventByIDSports',
						 'Event_id' : event_id
						},
					url: "mainpro_Service_call.php",
					success:function(data){
						var json_obj = $.parseJSON(data);
					$("#name").val(json_obj[0].Name);
					$('input[name="type"][value="'+json_obj[0].Nature+'"]').prop('checked',true);
					}

				});	
	});
	$("#deleteEvent").on('submit',function(e){
		var event_id = $( "#DeleteEvent" ).val();
		alert(event_id);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				
				 'action': 'deleteEventSports',
				'Event_id': event_id      
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Deleted Successfully.");
				//alert(data);
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
	    'action': 'getAllEventsSports'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
			 var json_obj = $.parseJSON(data);
		 for (var i in json_obj) 
			{
				
				 $('select[name="selectEvent"]').append('<option value="'+json_obj[i].Name+'">' +json_obj[i].Name+ "</option>");
			}
	  
	}
	});
	$("#selectEvent").on('select',function(e){
		var event_id = $( "#selectEvent" ).val();

		$.ajax({
			type: "POST",
			data: {
				
				 'action': 'getEventDetailsSports',
				'Name': event_id      
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				//alert("hi");
				alert(data);
				 var json_obj = $.parseJSON(data);
		 		for (var i in json_obj) 
			{
				
				 $('select[name="first"]').append('<option value="'+json_obj[i].Reg_No+'">' +json_obj[i].Reg_No+ "</option>");
				 $('select[name="second"]').append('<option value="'+json_obj[i].Reg_No+'">' +json_obj[i].Reg_No+ "</option>");
				 $('select[name="third"]').append('<option value="'+json_obj[i].Reg_No+'">' +json_obj[i].Reg_No+ "</option>");
			}
			}
					
						
		});
	});
	$("#addResult").on('submit',function(e){
		var event_name = $( "#selectEvent" ).val();
		var first = $( "#first" ).val();
		var second = $( "#second" ).val();
		var third = $( "#third" ).val();
		//alert(event_id);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				
				 'action': 'addResultSports',
				'Name': event_name ,
				'First': first,
				'Second': second,
				'Third': third     
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Result added Successfully.");
				//alert(data);
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
	    'action': 'getAllEventsSports'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
			 var json_obj = $.parseJSON(data);
		 for (var i in json_obj) 
			{
				
				 $('select[name="selectEvent"]').append('<option value="'+json_obj[i].Name+'">' +json_obj[i].Name+ "</option>");
			}
	  
	}
	});
	$("#selectEvent").on('select',function(e){
		var event_id = $( "#selectEvent" ).val();

		$.ajax({
			type: "POST",
			data: {
				
				 'action': 'getResultDetailsSports',
				'Name': event_id      
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				//alert("hi");
				alert(data);
				 var json_obj = $.parseJSON(data);
		 		$("#first").val(json_obj[0].First);
		 		$("#second").val(json_obj[0].Second);
		 		$("#third").val(json_obj[0].Third);
			}
					
						
		});
	});
	$("#addResult").on('submit',function(e){
		var event_name = $( "#selectEvent" ).val();
		var first = $( "#first" ).val();
		var second = $( "#second" ).val();
		var third = $( "#third" ).val();
		//alert(event_id);
		alert(first,second,third);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				
				 'action': 'modifyResultSports',
				'Name': event_name ,
				'First': first,
				'Second': second,
				'Third': third     
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Result added Successfully.");
				//alert(data);
			}
		});
	//	
	});
});
