$(function(){
   console.log("ready");
   $("#btn-login-form").on("click",function(){


    $(".login").toggleClass("clicked-login");


   })

   $("#btn-register-form").on("click",function(){
      $(".register").toggleClass("clicked-register");
   })
});
