$(document).ready(function(){
	//alert("Thanks");
$("#addReport").on('submit',function(e){
		var name  = $( "#reportname" ).val();
		var descr  = $( '#description' ).val();
		var branch  = $( '#branch' ).val();
		//alert(name);
		//alert(nature);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'AddSeminar',
				 'name' : name,
				 'descr' : descr,
				'branch' : branch               
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert(data);
				alert("Seminar added Successfully.");
				
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
	    'action': 'getAllSeminar'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
			 var json_obj = $.parseJSON(data);
		 for (var i in json_obj) 
			{
				
				 $('select[name="deleteReport"]').append('<option value="'+json_obj[i].topic+'">' +json_obj[i].topic+ "</option>");
			}
	  
	}
	});
	$("#deleteReport").on('click',function(e){
		var name = $( "#deleteReport" ).val();
				$.ajax({
					//type: 'GET',
					type: "POST",
					data: {
						 'action': 'getReportByName',
						 'name' : name 
						},
					url: "mainpro_Service_call.php",
					success:function(data){
					//	alert(data);
					var json_obj = $.parseJSON(data);
					$("#description").val(json_obj[0].Descr);
					$("#branch").val(json_obj[0].Branch);
				}

				});
			
		
	});
	$("#DeleteReport").on('submit',function(e){
		var name = $( "#deleteReport" ).val();
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'deleteReport',
				 'name' : name             
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Deleted Successfully.");
				
			}
		});
	//	
	});
});
