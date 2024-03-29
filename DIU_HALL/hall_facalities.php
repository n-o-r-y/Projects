<?php
if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Suggestions = $_POST['suggestions'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'diu_hall';

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $sql = "INSERT INTO suggestion (name, email, suggestions) values ('$Name', '$Email', '$Suggestions')";
    mysqli_query($conn, $sql);

}


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Hall Facalities</title>
      <link rel="stylesheet" href="hall_facalities.css">
      <link rel="stylesheet" href="payment.css">
      <link rel="stylesheet" href="footer.css">
      <?php
         include 'boostrap_css.php';
          ?>
   </head>
   <body>
      <div>
         <?php
            include 'navbar.php';
            ?>
      </div>
      <center>
         <h2>DIU Hall Facilities</h2>
         <h5> Located in Ashuliya, DIU Smart City</h5>
      </center>
      <div class="form">
         <br>
         <br><br>
         <label>
            <center>
               <h2>Facilities </h2>
            </center>
         </label>
         <br><br>
         <ul class="list">
            <li>
               <button id="myButton">
               General
               </button>
               <div id="myPopup" class="popup">
                  <div class="popup-content">
                     <h4 style="color:rgb(0, 0, 0);">
                        <ul>
                           <li>One Bed per Student shall be offered</li>
                           <li>Fully furnished rooms with beds & underbed drawers</li>
                           <li>Study tables & Chair</li>
                           <li> Tube lights & Fan</li>
                           <li>Dustbin in each room</li>
                        </ul>
                     </h4>
                     <button id="closePopup">
                     X
                     </button>
                  </div>
               </div>
            </li>
            <br>
            <li>
               <button id="myButton2">
               Security
               </button>
               <div id="myPopup2" class="popup2">
                  <div class="popup-content2">
                     <h4 style="color:rgb(0, 0, 0);">
                        <ul>
                           <li>CCTV Cameras</li>
                           <li>Security Guard</li>
                           <li>24 Hour Security (incl CCTV)</li>
                        </ul>
                     </h4>
                     <button id="closePopup2">
                     Close
                     </button>
                  </div>
               </div>
            </li>
            <br>
            <li>
               <button id="myButton3">
               Entertainmaint
               </button>
               <div id="myPopup3" class="popup3">
                  <div class="popup-content3">
                     <h4 style="color:rgb(0, 0, 0);">
                        <ul>
                           <li>Common Room</li>
                           <li>Indoor games like carrom , chess, table tennis etc.</li>
                        </ul>
                     </h4>
                     <button id="closePopup3">
                     Close
                     </button>
                  </div>
               </div>
            </li>
            <br>
         </ul>
      </div>
      <div class="form2">
         <h3>
            Self Help Amenities
         </h3>
         <br>
         <ul>
            <li>Laundry Service</li>
            <li>Filter Water Facility to be provided</li>
            <li>Medical facility avaiable with first aid/provided to sick Residents</li>
            <li>Doctor on call number(s) to be shared with the Students</li>
            <li>Dining area</li>
         </ul>
         <br><br>
         <h3>
            Housekeeping
         </h3>
         <br>
         <ul>
            <li>Rooms</li>
            <li>Washrooms</li>
            <li>Common areas are cleaned on a daily basis</li>
         </ul>
         <br><br>
      </div>
      <div class="container">
        <div class="brand-logo"></div>
        <div class="brand-title">Any Facilitis Suggetions ? </div>
  <div class="inputs">
    <form action="#" method="POST">
      
    Name: <input type="text" name="name"> <br>
    Email: <input type="email" name="email"><br>
    Suggestions: <input type="text" name="suggestions"><br>
    <input type="submit" name="submit" id="btnform" value="Send">
    </br>
    </form>
   </div>
 
 </div>

      <div class="foot">
         <?php
            include 'footer.php';
            ?>
      </div>
      <script>
         myButton.addEventListener("click", function () {
             myPopup.classList.add("show");
         });
         closePopup.addEventListener("click", function () {
             myPopup.classList.remove("show");
         });
         window.addEventListener("click", function (event) {
             if (event.target == myPopup) {
                 myPopup.classList.remove("show");
             }
         });
         
         
         
         myButton2.addEventListener("click", function () {
             myPopup2.classList.add("show");
         });
         closePopup2.addEventListener("click", function () {
             myPopup2.classList.remove("show");
         });
         window.addEventListener("click", function (event) {
             if (event.target == myPopup2) {
                 myPopup2.classList.remove("show");
             }
         });
         
         
         
         myButton3.addEventListener("click", function () {
             myPopup3.classList.add("show");
         });
         closePopup3.addEventListener("click", function () {
             myPopup3.classList.remove("show");
         });
         window.addEventListener("click", function (event) {
             if (event.target == myPopup3) {
                 myPopup3.classList.remove("show");
             }
         });
      </script>
   </body>
</html>