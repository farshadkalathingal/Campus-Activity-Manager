$(document).ready(function(){
	//alert("Thanks");
	$.ajax({  
	//type: 'GET',
	  type: "POST",
	  data: {
	    'action': 'getAllFeedback'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
			 var json_obj = $.parseJSON(data);
		//	alert(data);
		 var user_detail = "";
			user_detail += '<tr>'+
				'<th>Name</th>'+
				'<th>Email</th>'+
				'<th>Comment</th>'+
				'<th></th>'+
				'</tr>';
		 for (var i in json_obj) 
			{
				user_detail += 
				'<tr><td>'+json_obj[i].Name+'</td>'+
				'<td>'+json_obj[i].Email+'</td>'+
				'<td>'+json_obj[i].Command+'</td>'+
				'<td><a href="mailto:'+json_obj[i].Email+'">Reply</a></td></tr>';
				$('#Feedbacktable').html(user_detail);
			}
	  
	}
});
});
