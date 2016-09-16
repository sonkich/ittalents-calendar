function CurrentMonth (date){
   var curDate = date;
   var emptyDays = getEmptyDays(curDate);
   var daysLength = calcMaxDays(curDate);
   var days = createDays(curDate , daysLength);
   createEmptyDivs();
   createEmptyDaysDivs();
   console.log(curDate);

   function getEmptyDays(date){
      var d = new Date(date.getFullYear(),date.getMonth(),1);

      var day = d.getDay();

      if(day == 0){
         return 6;
      }

      return day-1;
   }
   function createEmptyDaysDivs() {

      console.log(daysLength);

      for(var i = 0 ; i < daysLength ; i++){
         $("#day-content").append("<div class='day' id="+(i + 1)+"><div class='day-header'><p>"+(i + 1) +"</p></div><div class='day-content'></div></div>");
      }
   }

   function createEmptyDivs(){
      console.log(emptyDays);
      $("#day-content").empty();

      for(var i = 0 ; i < emptyDays ; i++){
         $("#day-content").prepend("<div class='empty'></div>");
      }
   }

   function createDays(curDate , daysLength){
      // TODO взимане на вс бележки от дб ( айакс ) и генериране на дните за месеца
      return days;
   }

   function calcMaxDays(date){

      var mTemp = date.getMonth();
      var yTemp = date.getFullYear();
      var d = new Date(yTemp, mTemp + 1, 0);
      return d.getDate();

   }




}

CurrentMonth.prototype.changeDate = function (){
   // TODO при смяна на селектите да се генерира нови дни и бележки и да се актуализира страницата
}
