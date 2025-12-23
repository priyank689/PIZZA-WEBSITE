<?php
include 'admin/db.php';

if (isset($_POST['submit'])) {

    $name   = $_POST['name'];
    $comments  = $_POST['comments'];
    $email  = $_POST['email'];
    $date   = $_POST['date'];
    $time = $_POST['time'];
    $phone_no   = $_POST['phone_no'];
    $no_of_people = $_POST['no_of_people'];
    

    $sql = "INSERT INTO `book_table` (`name`, `email`, `comments`, `date`, `time` ,`no_of_people` ,`phone_no`) 
            VALUES ('$name', '$email', '$comments', '$date', '$time', 'no_of_people' ,'phone_no')";

    if ($conn->query($sql)) {
        header("Location: reservation.php");
        exit();
    } 
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION-Pizzon</title>
    <link rel="stylesheet" href="style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mogra&family=Momo+Signature&family=Pacifico&family=Roboto:ital,wdth,wght@1,95.4,500&family=Zalando+Sans+Expanded:ital@0;1&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <img src="logo.png" alt="" />
      <ul type="none">
        <li id="home-section">HOME</li>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item" type="button">Action</button></li>
          <li>
            <button class="dropdown-item" type="button">Another action</button>
          </li>
          <li>
            <button class="dropdown-item" type="button">
              Something else here
            </button>
          </li>
        </ul>
        <li id="menu-section">MENU</li>
        <li id="blog-section">BLOG</li>
        <li id="reservation-section">RESERVATION</li>
        <li id="pages-section">PAGES</li>
        <li><i class="fa-solid fa-phone"></i>+91 5896412357</li>
        <li id="ccart"><i class="fa-solid fa-bag-shopping"></i>0 items - $0.00</li>
      </ul>
      <button id="ccart1">ORDER ONLINE</button>
    </nav>

    <div class="richresturant">
      <img src="richclassicrestaurant.png" alt="" />
      <h1 class="top-text">RESERVATION</h1>
    </div>

    <div class="span" style="background-color: white; margin-top: 4rem;"><h2 style="background-color: white; padding: 0; ">Make Online Reservation</h2></div>
    <div class="span" style="background-color: white; margin: 0;"><h1 style="background-color: white; color: black; letter-spacing: 1px; font-size: 4rem;">BOOK A TABLE</h1></div>
    
<!-- FORM -->
<form action="" method="post" style="background-color:white">
    <div class="form" style="background-image: url(background-imagepart2.png); width: 100%; height: 60rem;">
      
      <div class="one" style="background-color: white;">

        <input type="text" name="name" placeholder="Name">
        
        <input type="number" name="no_of_people" placeholder="Number of people">
      </div>
      <div class="two" style="background-color: white;">
        <input type="date" name="date" placeholder="Date">
        <input type="number" name="phone_no" placeholder="Phone Number" >
      </div>
      <div class="three" style="background-color: white;">
        <input type="time" name="time" placeholder="Time" >
        <input type="email" name="email" placeholder="E-mail Address">
      </div>
      
      <input type="text" name="comments" placeholder="Comments" style>

      <button name="submit">BOOK A TABLE</button>
    
    </div>
    </form>

    <!-- last line-->
    <div class="eleventh">
      <div class="first" style="margin: 5rem 0 0 4rem;">
      <img src="logo.png" alt="">
      <p class="address" style="margin-top:2.3rem;">20 Carrochan Rd, Balloch, Alexandria G83 8EG, UK 69QJ+2F Alexandria, United Kingdom</p>
      <p class="phone">PHONE – +911234567890,+911234567890</p>
      <p class="mail">EMAIL – Info@gmail.com</p>
    </div>
    <div class="first" style="margin: 8rem 0 0 19rem;">
      <h5>OPENING HOURS</h5>
      <p style="margin-top: 1.3rem;">Mon – Tues :
    6.00 am – 10.00 pm</p>
    <p>Wednes – Thurs :
    6.00 am – 10.00 pm</p>
    <p>
    Launch :
    Everyday
    </p>
      <p class="inherit">
    Sunday :
    <p style="color: white;background-color: orange; width: 5rem;text-align: center; margin: -2.4rem 0 0 7rem;">Closed</p>
    </p>
    </div>
    <div class="first" style="margin: 7rem 0 0 19rem;">
        <h5>USEFUL LINKS</h5>
        <p class="orange" style="margin-top: 1.3rem;">Privacy Policy</p>
        <p class="orange">Order Tracking</p>
        <p class="orange">Warranty and Services</p>
        <p class="orange">About Us</p>
        <p class="orange">Contact</p>
        <p class="orange">My account</p>
    </div>
    </div>

    <div class="footer" style="padding-left: 3rem;">
        © Pizzon all Rights Reserved. Designed by Priyanshu 
        <i class="fa-brands fa-facebook" style="margin-left: 49rem;"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-square-linkedin"></i>
        <i class="fa-brands fa-square-twitter"></i>
    </div>
    <script src="scriptreservation.js"></script>
  </body>
</html>
