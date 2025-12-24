<?php
include 'admin/db.php';

if (isset($_POST['submit'])) {

    $Name   = $_POST['Name'];
    $Email  = $_POST['Email'];
    $Person = $_POST['Person'];
    $Date   = $_POST['Date'];
    


    $sql = "INSERT INTO `booking_Of_table` (`Name`, `Email`, `Person`, `Date`) 
            VALUES ('$Name', '$Email', '$Person', '$Date')";

    if ($conn->query($sql)) {
        header("Location: Menu-Pasta.php");
        exit();
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu-Pasta</title>
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
      <img src="menubackgrround.pnng.jpg" alt="" />
      <h1 class="top-text">MENU</h1>
    </div>

<!-- FORM -->

    <div class="navbarstyleouter" style="margin-top: 7rem; background-color: white;">
      <div class="navbarstyle" style="width: 45%; margin-left: 27%;">
        <h5 class="all" style="border-radius: 5rem;"><button class="all1" id="all-navbar">ALL</button></h5>
        <h5 ><button class="button2" class="all1" id="nav-burger">BURGERS</button></h5>
        <h5><button class="button2" id="nav-deserts">DESERTS</button></h5>
        <h5><button class="button2" id="nav-drinks">DRINKS</button></h5>
        <h5><button class="button2" style="background-color: orange; color: white;" id="nav-pasta">PASTA</button></h5>
        <h5><button class="button2" id="nav-pizzas">PIZZAS</button></h5>
        <h5 style="border-radius: 5rem;"><button class="button2" id="nav-salads">SALADS</button></h5>
      </div>
    </div>

<!-- menu section -->







  <div class="fourth" style="height: 31rem; padding-bottom: 4rem;background-color: white;margin-bottom: 3rem;">
      
   <div class="first product" style="background-color: white;">
        <img src="gultenfreepasta.png" alt="" style="padding-left: 1rem; margin-top: 0.7rem;background-color: white;" />
        <h5 style="padding-left: 0.4rem;background-color: white;color: black;">GULTEN-FREE PASTA</h5>
        <p style="padding-left: 2rem; color: rgb(183, 177, 177);background-color: white;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
          tellus, luctus…
        </p>
        <h7 style="color: orange; margin-left: 10.5rem;background-color: white;"> $10.00</h7>
        <button onclick="addToCart('GULTEN-FREE PASTA', 1893)">ORDER NOW</button>
      </div>

      <div class="first product" style="margin-top: 3.1rem;background-color: white;">
        <img src="quattro formaggi pasta.png" alt="" style="padding-left: 2rem; width: 19rem;background-color: white; height: 16rem;" />
        <h5 style="padding-left: 1rem; padding-top: 1.5rem;background-color: white;color: black;">QUATTRO FORMAGGI</h5>
        <p style="padding-left: 2rem; color: rgb(183, 177, 177);background-color: white;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
          tellus, luctus…
        </p>
        <h7 style="color: orange;background-color: white; margin-left: 10.5rem"> $30.00</h7>
        <button onclick="addToCart('QUATTRO FORMAGGI', 1893)">ORDER NOW</button>
      </div>
      <!--  -->
      <div class="first product" style=" margin-top: 3.9rem;background-color: white;">
        <img src="vegetarian pasta.png" alt="" style="padding-left: 2rem;width: 18rem; height: 15rem;background-color: white;" />
        <h5 style="padding-left: 1rem; padding-top: 1.5rem;background-color: white;color: black;">VEGETARIAN PASTA</h5>
        <p style="padding-left: 2rem; color: rgb(183, 177, 177);background-color: white;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
          tellus, luctus…
        </p>
        <h7 style="color: orange; margin-left: 10.5rem;background-color: white;"> $30.00</h7>
        <button onclick="addToCart('VEGETARIAN PASTA', 1893)">ORDER NOW</button>
      </div>

       <div class="first product" style="margin-top: 4rem;background-color: white;">
        <img src="sea food pasta.png" alt="" style="padding-left: 2.5rem;background-color: white; margin-left: 3rem; width: 17rem; height: 15rem;" />
        <h5 style="padding-left: 1rem; padding-top: 1.5rem;background-color: white;color: black;">SEA FOOD PASTA</h5>
        <p style="padding-left: 2rem; color: rgb(183, 177, 177);background-color: white;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
          tellus, luctus…
        </p>
        <h7 style="color: orange; margin-left: 10.5rem;background-color: white;"> $30.00</h7>
        <button onclick="addToCart('SEA FOOD PASTA', 1893)">ORDER NOW</button>
      </div>



    </div>


     <div class="fifth">
      <div class="fifthone">
        <h2>Fresh From Pizzon</h2>
        <h1>BOOK ONLINE</h1>
        <p>
          Elevate your dining experience with ease! Reserve a table at our
          restaurant, where exquisite cuisine meets inviting ambiance. Enjoy
          impeccable service and create memorable moments with your loved ones,
          ensuring a delightful and unforgettable mealtime.
        </p>
        <h2 class="pno">
          <i class="fa-solid fa-phone-volume"></i>+91 7689009865
        </h2>
      </div>
      <div class="fifthtwo">
        <h3>BOOK A TABLE</h3>
        <form action="" method="post" style="background-color:white">
        <input type="text" name="Name" id="" placeholder="NAME" />
        <br />
        <input type="email" name="Email" placeholder="Email" />
        <br />
        <input type="number" name="Person" placeholder="How many person?" />
        <br />
        <input type="text" name="Date" placeholder="Date" />
        <br />
        <button name="submit">BOOK NOW</button>
</form>
      </div>
    </div>

    <div class="sixth" style="margin-top: 1rem;">
      <h2>Meet our experts</h2>
      <h1>OUR BEST CHEF</h1>
    </div>
    <div class="seventh">
      <div class="carous">
        <div class="group">
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef1.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">HANKI GETHER</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="cheif2.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">TANNY GULIT</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef3.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">DANTAN MARKE</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef4.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">SAM TIFFER</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef5.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">ALINA DECUSE</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef6.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">JULIA CILD</p>
              </div>
            </div>
          </div>
        </div>
        <div aria-hidden class="group">
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef1.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">HANKI GETHER</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="cheif2.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">TANNY GULIT</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef3.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">DANTAN MARKE</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef4.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">SAM TIFFER</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef5.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">ALINA DECUSE</p>
              </div>
            </div>
          </div>
          <div class="card1">
            <div class="card" style="width: 18rem">
              <img class="card-img-top" src="chef6.png" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">JULIA CILD</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   

    <!-- last line-->
    <div class="eleventh" style="margin-top: 6rem">
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
    <script src="js_menu.js"></script>
  </body>
</html>