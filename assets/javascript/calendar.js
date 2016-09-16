$(function(){

   $("#username-head").html(localStorage.getItem("firstname")+'\'s');
   var user = new User();
   initSelectorSetter(user);
   function initSelectorSetter(user){
      var month = $("#month-select").val(user.getToday().getMonth());

      var year = $("#year-select").val(user.getToday().getFullYear());
   }
   $(".day").on("click",dayClick);

   function dayClick(){

      $("#day-popup-wrapper").css("display" , "block");

      $("#day-popup-wrapper").fadeTo( 250 , 1, function() {});
   }

   $(".date-selectors").on("change",function(){
      var month = $("#month-select").val();
      var year = $("#year-select").val();
      var date = new Date(year,month,1);
      user.changeMonth(date);
      $(".day").on("click",dayClick);
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

      localStorage.clear();

      $.ajax({

         type : 'POST',
         url  : 'logout.php'

      }).then(function(data){

                window.location.href = "index.html";

		   },function(){

            throw new Error("Server error");
      });
   })
});
