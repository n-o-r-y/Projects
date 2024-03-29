<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Room Selection</title>
      <style>
         /* Reset some default styles */
         body, h1, p, ul, li {
         margin: 0;
         padding: 0;
         font-family: Verdana, Geneva, Tahoma, sans-serif;
         }
         body {
         background-color:  #f3f0ee;;
         }
         /* Apply styles to the header */
         /* Navbar Section */
         .navbar {
         background-color: #064789;
         height: 75px;
         display: flex;
         justify-content: space-between;
         align-items: center;
         }
         .logo3 {
         width: 150px; /* Adjust the width as needed */
         height: auto;
         float: left;
         margin-bottom: 0px; /* Adjust margin as needed */
         border-radius: 0%; /* Add border-radius for a circular shape (optional) */
         /* Add a border for style (optional) */
         margin-top: 0px;
         }
         .icon {
         color: #FFFFFF;
         width: 200px;
         margin-left: 30px;
         }
         .menu {
         margin-right: 10%;
         }
         .menu ul {
         list-style: none;
         display: flex;
         }
         .menu ul li {
         margin-left: 25px;
         }
         .menu ul li a {
         text-decoration: none;
         font-weight: bold;
         color: #fff;
         position: relative;
         z-index: 1;
         transition: color 0.4s ease-in-out;
         }
         .menu ul li a:hover {
         color: orange;
         }
         /* ############################### */
         div.scroll-container {
         overflow: auto;
         white-space: nowrap;
         width: 900px;
         height: 800px;
         margin-top: 20px;
         margin-left: 40px;
         float: left;
         display: inline;
         }
         div.scroll-container img {
         padding: 10px;
         border-radius: 50px;
         background-size: cover;
         }
         .data{
         float: right;
         margin-left: none;
         margin-top: 50px;
         text-align:center;
         display: inline;
         width: 600px;
         }
      
         .icon:hover {
         background-color: orange; 
         color: black; 
         cursor: pointer; 
         }
         
         .icon {
         display: inline-block;
         margin-top: 60px;
         text-align: center;
         border-radius: 15px;
         border: none;
         box-shadow: 1px 1px 2px black;
         padding-top: 15px;
         padding-bottom: 10px;
         margin-bottom: 60px;
         transition: background-color 0.3s, color 0.3s;
         color: black; 
         }
         .icon1 {
         color: #FFFFFF;
         width: 150px;
         margin-left: 30px;
         box-shadow: none;
         border: none;
         }
         a{
         text-decoration: none;
         color: #064789;
         font-weight: bolder;
         }
         a:hover{
         color: orange;
         }
         p{
         margin-top: 5px;
         }
         input {
         text-align: center;
         border-radius: 15px;
         margin-bottom: 20px;
         width: 250px;
         height: 50px;
         font-size: 1em;
         border: 1px transparent;
         background-color: rgb(228, 233, 242);
         }
         .info{
         text-align:center ;
         font-size: 1.2em;
         font-weight: bolder;
         }
         .but2{
         width: 450px;
         height: 50px;
         border-radius: 50px;
         font-size: 1.2em;
         background-color: #064789;
         color: #fff;
         border: #064789;
         font-weight: bolder;
         }
         .but2:hover {
         box-shadow: 1px 1px 3px black;
         border: none;
         font-size: 1.25em;
         }
         .but1{
         margin-top: 80px;
         width: 450px;
         height: 50px;
         border-radius: 50px;
         font-size: 1.2em;
         background-color: rgb(228, 233, 242);
         color: black;
         border: black;
         font-weight: bolder;
         }
         .but1:hover {
         box-shadow: 1px 1px 3px black;
         border: none;
         font-size: 1.25em;
         }
         /* Footer Main */
         .footer {
         background-color: #000;
         color: #fff;
         padding: 30px 0;
         display: flex;
         justify-content: space-around;  
         align-items: baseline;
         flex-wrap: wrap;
         }
         .footer-section {
         flex: 1;
         padding: 0 20px;
         }
         .footer .footer-location h2, .footer-contact h2, 
         .footer-links h2 {
         font-size: 20px;
         margin-top: 20px;
         margin-bottom: 20px;
         color: orange;
         }
         .footer-section p, a {
         font-size: 16px;
         line-height: 1.7;
         }
         /* Footer Location Section */
         .footer-section ul {
         list-style: none;
         padding: 0;
         }
         .footer-links ul li {
         margin-bottom: 10px;
         }
         .footer-links ul a {
         color: #fff;
         text-decoration: none;
         transition: color 0.3s;
         }
         .footer-links ul a:hover {
         color: orange;
         }
         /* Footer Bottom */
         .footer-bottom {
         background-color: #064789;
         color: #fff;
         text-align: center;
         padding: 15px 0;
         margin-top: 0;
         }
      </style>
   </head>
   <body>
      <div class="navbar">
         <div class="icon1">
            <img src="./Logo.png" alt="" class="logo3">
            <!-- <h2 class="logo">DIU HALL</h2> -->
         </div>
         <div class="menu">
            <ul>
               <ul>
                  <li><a href="home.php">Home</a></li>
                  <li><a href="hall_facalities.php">Hall Facilities</a></li>
                  <li><a href="room_facalities.php">In-Room Facilities</a></li>
                  <li><a href="location.php">Location</a></li>
                  <li><a href="https://pd.daffodilvarsity.edu.bd/support_ticket">Contact</a></li>
                  <li><a href="https://hall.daffodilvarsity.edu.bd/hall-portal.html">Hall Portal</a></li>
               </ul>
            </ul>
         </div>
      </div>
      <div class="scroll-container">
         <img src="HALL 1.png">
         <img src="HALL 3.png">
         <img src="HALL 4.png">
         <img src="HALL 5.jpg">
      </div>
      <div class="data">
         <h1>Hall Room Selection</h1>
         <a target="" href="">
            <div class="icon">
               <img src="bookmark.png" alt="Bookmark" width="100" height="100px"/>
               <br>
               <p>Bookmark</p>
            </div>
         </a>
         <a target="" href="">
            <div class="icon">
               <img src="compass.png" alt="nav" width="100" height="100px"/>
               <br>
               <p>Navigate</p>
            </div>
         </a>
         <br>
         <div class="info">
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="">
            <br>
            <label for="checkout">Check-out Date:</label>
            <input type="date">
            <br>
         </div>
         <div class="btn">
            <button class="but1" id="details" onclick="redirectToBooking2()">Details</button>
            <br>
            <br>
            <button class="but2" id="book" onclick="redirectToBooking()">Book Now</button>
         </div>
         <br><br>
      </div>
      <br>
      <br><br>
      <script>
         function redirectToBooking() {
           window.location.href = "apply.php";
         }
         function redirectToBooking2() {
           window.location.href = "hall_facalities.php";
         }
      </script>
   </body>
</html>