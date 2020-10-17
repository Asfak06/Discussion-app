<?php
include "db.php";
include "libs/dbcon.php";
if(!isset($_SESSION['id'])):
  header("location: login.php");
endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="nirvana1.jpeg">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
    
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
    
    <div class="container text-dark">
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="display-3 ">Hello,
              <?php 
              if(isset($_SESSION['nam'])){
                 echo $_SESSION['nam']; 
               }
              ?>
             </h1>
             <input type="hidden" id="name" value="<?php echo $_SESSION['nam']; ?>">
             <textarea class="form-control mb-2" id="post_text" placeholder="Compose a post"></textarea>
             <button id="post_submit" class="btn btn-primary">Post it</button>
          </div>
        </div>
      </div>
      <!-- Close row -->

      <!-- posts row start-->
      <div class="row" id="main">
     
      </div>
       <!-- posts row ends-->

<!-- comment modal -->

  <div class="modal fade" id="commentModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="myModalLabel">
           write a comment
          </h4>
          <button class="close" data-dismiss="modal">
          &times;
          </button>
        </div>
        <div class="message text-danger text-center mt-1"></div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="name" name="name" value="<?php echo $_SESSION['nam']; ?>">
            <input class="form-control" type="text" id="comment" maxlength="100">
          </div>
        </div>
        <div class="modal-footer">
          <input class="btn btn-info" id="sub" value="Comment">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


       <a class="btn btn-danger btn-lg mt-1" href="logout.php" role="button">Logout</a>
       
    </div>
    <!-- Close container -->

    <script src="js/bootstrap.min.js"></script>
    <script src="comment.js"></script>
    <script>

$(document).ready(function(){  
      readposts();     
      setInterval(readposts,3000);
        // readposts();

        $("#post_submit").click(function(){
         var text=$("#post_text").val();
         var name=$("#name").val();
         if(text!=""){
          $.ajax({
            url:"libs/process.php",
            type:'post',
            data:{text:text,name:name},
            success:function(response){
              $("#post_text").val("");
              readposts();
            }
          });
         }else{
          alert("Post can not be blank");
         }
        });
});
      
function readposts(){
  var rd="rd";
  $.ajax({
    url:"libs/process.php",
    type:"post",
    data:{rd:rd},
    success:function(data,status){
      $("#main").html(data);
    }
  });
}

    </script>
  </body>
</html>