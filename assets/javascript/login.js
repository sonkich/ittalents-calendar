$(function(){

   $("#btn-login-form").on("click",function(){
    $(".login").toggleClass("clicked-login");
   })

   $("#btn-register-form").on("click",function(){
      $(".register").toggleClass("clicked-register");
   })


   $( ".register" ).on( "submit", function( event ) {

      event.preventDefault();
      var data = $( this ).serialize();



      $.ajax({

         type : 'POST',
         url  : 'register.php',
         dataType: "json" ,
         data : data,

      }).then(function(data){
            console.log(data);
            if(data.errors.length == 0){
               $("#register-acc").val("");
               $("#email").val("");
               $("#name").val("");
               $("#register-password").val("");
               $("#register-password2").val("");
               $("#register-errors p").html("Registration is successful you can log in now");
               $("#register-errors p").css("color","green");

               setTimeout(function(){
                  $(".register").toggleClass("clicked-register");
                  $(".login").addClass("clicked-login");
               },1000);

            }else{

               $("#register-errors p").css("color","#ED5449");
               $("#register-errors p").html(data.errors[0]);
            }



		   },function(){

            throw new Error("Server error");
      });


   });


   $( ".login" ).on( "submit", function( event ) {
      event.preventDefault();
      var data = $( this ).serialize();



      $.ajax({

         type : 'POST',
         url  : 'login.php',
         dataType: "json" ,
         data : data,

      }).then(function(data){

            if(data.errors.length == 0){
               $("#login-acc").val("");

               localStorage.setItem("firstname",data.firstname);
               localStorage.setItem("username",data.username);
                window.location.href = "calendar.php";
            }else{
               $("#login-errors p").html(data.errors[0]);
            }



		   },function(){

            throw new Error("Server error");
      });


   });





});
