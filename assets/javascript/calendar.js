$(function(){
   $(".day").on("click",function(){

      $("#day-popup-wrapper").css("display" , "block");

      $("#day-popup-wrapper").fadeTo( 250 , 1, function() {
       console.log("done");
      });
   })

   $("#popup-head span").on("click",function(){


      $("#day-popup-wrapper").fadeTo( 250 , 0, function() {
       $("#day-popup-wrapper").css("display" , "none");
      });


   })

   $("#btn-add").on("click", noteFadein);
   $("table tr").on("click", noteFadein);

   function noteFadein (){


         $("#note-popup-wrapper").css("display" , "block");

         $("#note-popup-wrapper").fadeTo( 250 , 1, function() {
          console.log("done");
         });
   }

   $("#btn-note-cancel").on("click",function(){


      $("#note-popup-wrapper").fadeTo( 250 , 0, function() {
       $("#note-popup-wrapper").css("display" , "none");
      });


   })

   $("#logout").on("click",function(){
      window.location.href = "index.html";
   })
});
