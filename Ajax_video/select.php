<?php

$con=new mysqli("localhost","root","","ajax");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql="select * from student";
$results=$con->query($sql);

// print_r($results);

$output="";
foreach ($results as $result) {


	$a=$result['name'];
	$b=$result['email'];
	$c=$result['contact'];

	$output .='<tr>';



	$output .='<td><input  data-id3="'.$result['id'].'"  name="name" id="name_sel" value="" type="text" placeholder="'. $a .'"></td>';

	$output .='<td><input  data-id4="'.$result['id'].'" name="email" id="email_sel" type="text" placeholder="'. $b. '"></td>';
	
	$output .='<td><input  name="contact" data-id5="'.$result['id'].'" id="contact_sel" type="text" placeholder="'. $c . '"></td>';
	
	$output .= '<td><input id="dell" data-id1="'.$result['id'].'" class="dell" type="button" name="delete " value="Del"> </td>';
	// $output .= '<td><input id="hidden" type="text" name="delete " value="'.$result['id'].'"> </td>';
	// $output .= '<td><input id="Edit"  data-id2="'.$result['id'].'" type="button" name="edit " value="Edit"> </td>';
	 

	 $output .='</tr><br>';
}

echo $output;

?> 