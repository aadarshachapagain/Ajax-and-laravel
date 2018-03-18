<?php 

$con=new mysqli("localhost","root","","ajax");
	// $_POST['name'];
	
$id=$_POST['id'];
$text=$_POST['text'];
$column_name=$_POST['column_name'];

$sql= "Update student SET ".$column_name."='".$text."' Where id='".$id."'";



 if($con->query($sql))
 {

 	echo "Updated sucessfully";

 }
// $contact=$_POST['contact'];	
	
	// if(isset($con))
	// {

	// 	echo "Connection succesfully";

	// 	if(isset($_POST))
	// 	{

	// 		echo("</br> post set");

	// 	 echo $_POST['name'];



	// 	}
	// }
 else{

 		echo("Query executed bhayana");
 }
	




?>