<?php 

$con=new mysqli("localhost","root","","ajax");//new mysqli($servername, $username, $password, $dbname);

if (isset($_POST))
{

	$name  = $_POST['name'];
	$email = $_POST['email'];
	$cont  = $_POST['contact'];


}


$strSql = "Insert into  student values( null,'$name','$email','$cont')";


if($con->query($strSql)){


		
	// echo "record sucessfully inserted";



	  
}else
{

echo mysql_error();

}

?>