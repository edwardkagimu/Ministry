$("#desktop1").click(function(){
  $(document).ready(function(){
    load_user_data();
     function load_user_data(){
       var action = "fetch";
       $.ajax({
         url:"./assets/action.php",
         method:"POST",
         data:{action:action},
         success:function(data){
           $("#user_data").html(data);
         }

       })
     }
  });
});

$("#header").click(function(){
  alert("Am clicked hello");
})
