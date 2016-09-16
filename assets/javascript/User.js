function User (){
   var username = localStorage.getItem("firstname");
   var name = localStorage.getItem("username");


   var today = new Date();
   var curDate = today;
   this.calendar = new CurrentMonth(curDate);

   this.getToday = function(){
      return today;
   }
}

User.prototype.changeMonth = function(date){
   this.calendar = new CurrentMonth(date);
}
