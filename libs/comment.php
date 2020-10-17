<?php
include('dbcon.php');


if(isset($_POST["comment"])){ 

	$comment = $_POST["comment"];
	$id=$_POST['id'];
	$name=$_POST['name'];
	$query="insert into comment (comment_author,comment,post_id) values ('$name','$comment','$id')";
	$run=mysqli_query($conn,$query);
}

?>

