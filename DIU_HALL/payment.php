<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="payment.css">
  <link rel="stylesheet" href="footer.css">
  <title>DIU HALL</title>
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


  <section class="main-section">
    <h1 class="payment">Payment for Hall Allocation</h1> <br>
    <p>To Pay</p><br>
    <p id="taka">18,000/=</p> <br>
    <p>Select a payment method </p>
  </section>

  <div class="button-container">
    <button class="rounded-button">Pay</button> <br>
    <table class="button-table">
      <tr>
        <td class="button-cell">
          <!-- Add your logo for By Card here -->
          <img src="./pay-by-card.png" alt="By Card Logo" class="logo">
        </td>
        <td class="button-cell">
          <!-- Add your logo for By Bkash here -->
          <img src="./BKash-Icon2-Logo.wine.png" alt="By Bkash Logo" class="logo2">
        </td>
      </tr>
      <tr>
        <td class="button-cell">
          <button class="card">By Card</button>
        </td>
        <td class="button-cell">
          <button class="card">By Bkash</button>
        </td>
      </tr>
    </table>
  </div>
  <?php
  include 'footer.php';
  ?>

</body>

</html>