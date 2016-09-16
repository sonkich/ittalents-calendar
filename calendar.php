<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>IT calendar</title>
   <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/calendar.css">
   <link rel="stylesheet" href="assets/css/screen-calendar.css">
   <script type="text/javascript" src="assets/javascript/Note.js"></script>
   <script type="text/javascript" src="assets/javascript/Day.js"></script>
   <script type="text/javascript" src="assets/javascript/CurrentMonth.js"></script>
   <script type="text/javascript" src="assets/javascript/User.js"></script>

   <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
   <script type="text/javascript" src="assets/javascript/calendar.js"></script>
</head>
<body>
   <div id="wrapper">
      <header class="white-trans">
         <div id="header-wrapper" class="pink-head">

            <h1><span id="username-head">Name's</span> Calendar</h1>

            <div id="logout">

               <span class="fa fa-power-off"></span>

            </div>
         </div>
      </header>
      <div id="date-select">
         <div id="selects">
            <div class="select">
               <span class="arr"></span>
               <select  name="date-select" id="month-select" class="date-selectors">
                  <option value="0">January</option>
                  <option value="1">February</option>
                  <option value="2">March</option>
                  <option value="3">April</option>
                  <option value="4">May</option>
                  <option value="5">June</option>
                  <option value="6">July</option>
                  <option value="7">August</option>
                  <option value="8">September</option>
                  <option value="9">October</option>
                  <option value="10">November</option>
                  <option value="11">December</option>
               </select>
            </div>


            <div class="select">
               <span class="arr"></span>
               <select  name="date-select" id="year-select" class="date-selectors">
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
               </select>
            </div>


         </div>
      </div>
      <div id="content" class="white-trans">
         <div id="day-names">
            <div>Monday</div>
            <div>Tuesday</div>
            <div>Wednesday</div>
            <div>Thursday</div>
            <div>Friday</div>
            <div>Saturday</div>
            <div>Sunday</div>
         </div>
         <div id="day-content">
            <!-- auto complate by js -->
         </div>
      </div> <!-- end of content -->


   </div>
   <div id="day-popup-wrapper">
      <div id="day-popup" class="white-trans">
         <div id="popup-head">
            <p>
               12.12.1994
            </p>
            <span class="fa fa-times"></span>
         </div>

         <div id="popup-content">
            <div id="thead">
               <span>time</span><span>title</span>
            </div>
            <table>

               <tbody>

                  <tr>

                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                     <td>
                        id
                     </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>
                  <tr>
                     <td> 6 : 30</td>
                     <td> sometextheretoview </td>
                     <td> <span class="fa fa-trash-o"></span> </td>
                  </tr>

               </tbody>
            </table>

         </div>
         <div class="popup-footer">
            <button type="button" name="button" id="btn-add">Add</button>
         </div>
      </div>
   </div>
   <div id="note-popup-wrapper">
      <div id="note-popup">
         <div>
            <label for="note-title">Title</label>
            <input type="text" name="note-title" id="note-title">
         </div>
         <div>
            <label for="note-time">Time</label>
            <div id="note-hours">
               <input type="text" name="hours" id="hours" maxlength="2">
               <input type="text" name="minutes" id="minutes" maxlength="2">
            </div>
         </div>
         <div>
            <label for="note-text">Note</label>
            <textarea name="note-text" rows="5" cols="40"></textarea>
         </div>
         <div>
            <div id="note-btns">
               <button type="button" name="btn-note-add" id="btn-note-add">Save</button>
               <button type="button" name="btn-note-cancel" id="btn-note-cancel">Cancel</button>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
