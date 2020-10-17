<?php
include('dbcon.php');

if(isset($_POST['text'])){
	$text=$_POST['text'];
	$name=$_POST['name'];
	$query="insert into posts (text,name) values ('$text','$name')";
	$run=mysqli_query($conn,$query);
}

// if(isset($_POST['pid']) && isset($_POST['comm'])){
//   $id=$_POST['pid'];
//   $comment=$_POST['comm'];
//   $name=$_POST['name'];
//   $query="insert into comment (comment_author,comment,post_id) values ('$name','$comment','$id')";
//   $run=mysqli_query($conn,$query);
// }




if(isset($_POST['rd'])){
	  $output="";
    $query="select * from posts order by post_id desc";
    $run=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($run)) {
      $output.= "<div class='col-md-12'>
                  <div id='post' class='bg-light rounded p-1 mt-2'>
                     <p class='lead'><span class='text-primary'>By ".$row[2]." ,</span><br>".$row[1]."</p>
                  </div> ";
      $post_id=$row[0];
      $quem="select * from comment where post_id = $post_id " ;
      $rn=mysqli_query($conn,$quem);
      $total_rows=mysqli_num_rows($rn);
      if($total_rows>0){
      while ($ro=mysqli_fetch_array($rn)) {  
      $output.= "<div id='comment_box' class='w-75 bg-secondary float-right rounded p-2 text-light 
                  border-bottom border-dark '>
                 <div class='comments'>
                  <span class='text-warning'>".$ro[1]." : </span>
                  ".$ro[2]."
                 </div>
                 </div> ";                          
      }
     }
     $output.="<div class='footer float-right  w-75'>
                  <button class='com btn btn-secondary float-right' 
                   value='$post_id'>Comment
                  </button>                            
               </div>
               </div>";
    } 
  echo $output;
}

?>