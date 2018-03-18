 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ajax with PHP and Sql</title>
 	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
 	<script type="text/javascript">

 		

 		$(document).ready(function(){

 			
 		
 			fetchdata(); 		
 			function fetchdata(){ // this function is created so  
 			// that updated data can be seen in index without refresh	
 				
 				
 			$.ajax({

 					url:"select.php",
	 				// method:"POST",
	 				
	 				data:"",
	 				// data:$('form').serialize(),
	 				dataType:"text",
	 				success:function(select){

	 				$('#message').append(select)		

	 				}


 			})

 			}

 			

 			$('#insert').click( function(event) {

 				event.preventDefault();


	 			$.ajax({

	 				url:"insert.php",
	 				method:"post",
	 				data:$('form').serialize(),
	 				dataType:"text",
	 				success: function(strDate){   // whatever printed via php is caught by the funation  and held in varaible in this case in strDate
	 					

	 					$('#message').html(strDate)
	 					fetchdata();
	 					
	 				}
	 			})

	 			

 			});


 		
 			$(document).on('click', '.dell', function(){	
 				event.preventDefault();
 				var id= $(this).data("id1");
 				if(confirm("Are you sure you want to delete this?"))
 				{
	 			$.ajax({
	 				url:"delete.php",
	 				method:"post",
	 				data:{id:id},
	 				dataType:"text",
	 				success: function(anythingfromphp){   // whatever printed via php is caught by the funation  and held in varaible in this case in strDate
	 					
	 						document.getElementById("message").innerHTML="";
 							fetchdata();

	 					$('#message').append(anythingfromphp)
	 			
	 				}
	 			})
		 		}	
	 			
 			});

 			//-----------

 			function edit_data(id,text, column_name)
 				{
 					alert(text);
 					$.ajax({
	 				url:"edit.php",
	 				method:"post",
	 				data:{id:id,text:text,column_name:column_name},
	 				dataType:"text",
	 				success: function(anythingfromphp){   // whatever printed via php is caught by the funation  and held in varaible in this case in strDate
	 						document.getElementById("message").innerHTML="";
 							fetchdata();

	 					$('#message').append(anythingfromphp)	 					
	 				}
	 			})

 				}

 			//--------

 			var name_edit;
 			$(document).on('blur','#name_sel',function(){ 
 				var id=$(this).data("id3");

 				// var name_edit=$(this).attr("text");

 					 name_edit=$(this).val();
 				edit_data(id, name_edit,"name");
 				fetchdata();
 				
 			});

 			// ----------------------------

 			var email_edit;
 			$(document).on('blur','#email_sel',function(){ 
 				fetchdata();
 				var id=$(this).data("id4");

 				// var name_edit=$(this).attr("text");

 					 email_edit=$(this).val();
 				edit_data(id, email_edit,"email");	
 				
 			});

 			var contact_edit;
 			$(document).on('blur','#contact_sel',function(){ 
 				fetchdata();
 				var id=$(this).data("id5");

 				// var name_edit=$(this).attr("text");

 					 contact_edit=$(this).val();
 				edit_data(id, contact_edit,"contact");	
 				
 			});




 		})

 	</script>
 </head>
 <body>
 	<h1>Ajax With Php and My Sql</h1>


 	<div id="message">   </div>
	<form  action="insert.php"  method="post" name="f1" id="f1">

			
 			<table border=1 cellpadding="5" cellspacing="5">

				 <tr><td>Name</td>
					<td>Email</td>
					<td>Contact</td>
					<td>Operation</td>
				</tr>


				<tr>
					<td><input  name="name" id=" name" type="text" value=""></td>
					<td><input  name="email" id="email" type="email" value=""></td>
					<td> <input  name="contact" id=" contact" type="text" value=""></td>
					<td><input id="insert" type="submit" name="insert" onclick="validate12()"  value="Add"></td>	

				</tr>

				<tr id="message"></tr> 

				
 			</table>	
 		</form>

 		
 </body>

 <script type="text/javascript">
 	

 	function validate12()

 		{	
 			// alert("hello");
 			// document.f1.reset();
 			

 			// fetchdata();
 			alert(hello);
 			// return false;

 					
 		}

 </script>
 	

 	
 </html>