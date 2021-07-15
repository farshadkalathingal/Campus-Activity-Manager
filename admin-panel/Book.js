$(document).ready(function(){
	//alert("Thanks");
	$("#addBook").on('submit',function(e){
		var bookname = $( "#bookname" ).val();
		var authorname  = $( "#authorname" ).val();
		var subject = $('#subject').val();
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'AddBook',
				 'book' : bookname,
				 'author' : authorname,
				 'subject' : subject,                 
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Book added Successfully.");
				
			}
		});
	//	
	});
});
$(document).ready(function(){
	$('#bookno').focusout(function(e){
		var bookno  = $( "#bookno" ).val();
		//alert(regno);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'CheckBook',
				 'bookno' : bookno,                
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				//alert(data);
				if(data==404)
				{
					alert("Book is Out");
				}
				
			}
		});
	//	
	});
		
	//alert("Thanks");
	$("#issueBook").on('submit',function(e){
		var regno = $( "#regno" ).val();
		var bookno  = $( "#bookno" ).val();
		var date = $('#date').val();
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'IssueBook',
				 'regno' : regno,
				 'bookno' : bookno,
				 'date' : date,                 
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Book added Successfully.");
				
			}
		});
	//	
	});
});
$(document).ready(function(){
	//alert("Thanks");
	$("#submitBook").on('submit',function(e){
		var bookno  = $( "#bookno" ).val();
		var date = $('#date').val();
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				 'action': 'SubmitBook',
				 'bookno' : bookno,
				 'date' : date,                 
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Book added Successfully.");
				
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
	    'action': 'getAllBooks'
          },
	  url: "mainpro_Service_call.php",
	  success:function(data){
		var json_obj = $.parseJSON(data);
			
			//alert(data);
	   		 for (var i in json_obj) 
			{
				
				 $('select[name="deleteBook"]').append('<option value="'+json_obj[i].Number+'">' +json_obj[i].Number+ "</option>");
			}
		}
	  
	});
	$("#deleteBook").on('click',function(e){
		var bookno = $( "#deleteBook" ).val();

				$.ajax({

					//type: 'GET',

					type: "POST",

					data: {
						 'action': 'getBookByID',
						 'bookno' : bookno
						},
					url: "mainpro_Service_call.php",
					success:function(data){
						var json_obj = $.parseJSON(data);
					$("#bookname").val(json_obj[0].Name);
					$("#authorname").val(json_obj[0].Author);
					$("#subject").val(json_obj[0].Subject);
						//alert("Deleted Successfully");
						//alert(data);
						//window.location.href = "http://localhost/mainpro/deleteStudent.php";

					}

				});	
	});
	$("#deleteBook").on('submit',function(e){
		alert("hi");
		var bookno = $( "#deleteBook" ).val();
		alert(bookno);
		$.ajax({
			//type: 'GET',
			type: "POST",
			data: {
				
				 'action': 'deleteBook',
				'bookno': bookno      
				},
			url: "mainpro_Service_call.php",
			success:function(data){
				alert("Deleted Successfully.");
				
			}
		});
	//	
	});	
	
});
