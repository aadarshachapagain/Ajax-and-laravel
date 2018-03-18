<?php 

$con=new mysqli("localhost","root","","ajax");

 $id=$_POST['id'];
 $sql="delete from student where id= $id";

 if($con->query($sql))
 {

 	// echo "record deleted sucessfully";

 }

?>	
