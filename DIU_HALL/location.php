<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Design</title>
    <link rel="stylesheet" href="location.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

<div class="navbar">
    <div class="icon">
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

<div class="main"> 
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
         
          <img src="Younus Khan-Scholar-Garden-1-Block A.png" style="width:100%">
          <div class="text">Younus Khan-Scholar-Garden-1</div>
        </div>
      
        <div class="mySlides fade">
          
          <img src="Rowshan-Ara-Scholar-Garden.png" style="width:100%">
          <div class="text">Rowshan-Ara-Scholar-Garden</div>
        </div>
      
        <div class="mySlides fade">
          <img src="Younus-Khan-Scholar-Garden-2.png" style="width:100%">
          <div class="text">Younus-Khan-Scholar-Garden-2</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="prevSlide()">&#10094;</a>
        <a class="next" onclick="showSlides()">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
</div>

<div class="form">

    <label>
        <h3>Location</h3>
    </label>


    <br><br>

    
    <ul class="list">
        <li> <button type="submit" id="myButton">Younus Khan-Scholar-Garden-1 </button>
        <div id="myPopup" class="popup">
            <div class="popup-content">
                <h4 style="color:rgb(0, 0, 0);">
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.3804959898885!2d90.32361443557004!3d23.876122
                    66454732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23be3037b03%3A0xa20a6bf223986cd4!2sYounus%20Khan%20Scholars
                    '%20Garden%2C%20DIU!5e0!3m2!1sen!2sbd!4v1634635303210!5m2!1sen!2sbd" width="600" height="600" style="border: 5px solid rgb(0, 0, 0); border-radius: 30px;" allowfullscreen="" loading="fast"></iframe>
                    
                    
                  </h4>
                
                <button id="closePopup">
                      X
                  </button>
            </div>
        </div></li><br>


        <li><button id="myButton2">
            Younus-Khan-Scholar-Garden-2
          </button>
        <div id="myPopup2" class="popup2">
            <div class="popup-content2">
                <h4 style="color:rgb(0, 0, 0);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.299748161975!2d90.32118971862054!3d23.87898735473068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c37ee749ff91%3A0x3ba6f00f068d5883!2sYunus%20Khan%20Scholars'%20Garden%20-2%2C%20DIU!5e0!3m2!1sen!2
                    sbd!4v1634636358973!5m2!1sen!2sbd" width="600" height="600" style="border: 5px solid rgb(0, 0, 0); border-radius: 30px;" allowfullscreen="" loading="fast"></iframe>
                  </h4>
                
                <button id="closePopup2">
                      X
                  </button>
            </div>
        </div>
        <br><br>


        <li>
            <button id="myButton3">
                Rowshan-Ara-Scholar-Garden
              </button>
            <div id="myPopup3" class="popup3">
                <div class="popup-content3">
                    <h4 style="color:rgb(0, 0, 0);">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d912.0781044180213!2d90.3222074!3d23
                        .8785379!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c35d97934b07%3A0xbee477fa815b9cfc!2sRowshan%20Ara%20
                        Scholars%20Garden!5e0!3m2!1sen!2sbd!4v1634636546598!5m2!1sen!2sbd"width="600" height="600" style="border: 5px solid rgb(0, 0, 0); border-radius: 30px;" allowfullscreen="" loading="fast"></iframe>
                      </h4>

                    <button id="closePopup3">
                          X
                      </button>
                </div>
            </div>
            </li><br>
    </ul>

  
    <br><br>

    
   
    
</div>




<?php include 'footer.php'; ?>
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




var timeOut = 2000;
        var slideIndex = 0;
        var autoOn = true;

        autoSlides();

        function autoSlides() {
            timeOut = timeOut - 20;

            if (autoOn == true && timeOut < 0) {
                showSlides();
            }
            setTimeout(autoSlides, 20);
        }
    
      function prevSlide() {

            timeOut = 2000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex--;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            if (slideIndex == 0) {
                slideIndex = 3
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function showSlides() {

            timeOut = 2000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
</script>
</body>

</html>