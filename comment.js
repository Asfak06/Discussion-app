var id;
$(document).on("click",".com",function(event){
 id=$(this).val();
 $('#commentModal').modal('show'); 
});


 $("#sub").click(function(){
   var comment= $('#comment').val();
   var name= $('#name').val();
   if(comment!=""){
      $.ajax({
      url:"libs/comment.php",
      type:"post",
      data:{id:id,comment:comment,name:name},
      success:function(data,status){
         readposts();
         $('#commentModal').modal('hide');
         $('#comment').val("");
        }
      });
   }else{
    $('.message').html('<p><strong>Please write something.</strong></p>');
   }

 });