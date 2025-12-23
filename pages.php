<?php
include 'admin/db.php';

if (isset($_POST['submit'])) {

    $Name   = $_POST['Name'];
    $Email  = $_POST['Email'];
    $Person = $_POST['Person'];
    $Date   = $_POST['Date'];

    $subject   = $_POST['subject'];
    $email  = $_POST['email'];
    $phone = $_POST['phone'];
    $message   = $_POST['message'];
    


    $sql = "INSERT INTO `booking_Of_table` (`Name`, `Email`, `Person`, `Date`) 
            VALUES ('$Name', '$Email', '$Person', '$Date')";

    $sql = "INSERT INTO `contact_us` (`subject`, `email`, `phone`, `message`) 
            VALUES ('$subject', '$email', '$phone', '$message')";

    if ($conn->query($sql)) {
        header("Location: pages.php");
        exit();
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PAGES-Pizzon</title>
    <link rel="stylesheet" href="style.css" />
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
      <h1 class="top-text">ABOUT US</h1>
    </div>

    <div class="aboutcontainer">
      <div class="img"><img src="about-1.jpg" alt=""></div>
      <div class="text">
        <h2 class="span">Delicious Restaurant</h2>
        <h1>ABOUT PIZZON</h1>
        <p>Founded on a passion for delivering not just pizzas, but memorable moments, Pizzon is more than a pizza place—it’s a culinary journey. Join us in savoring the artistry of flavors, where every bite tells a story of quality, creativity, and devotion. Come, indulge in the pizza experience you deserve. Welcome to the home of extraordinary pizzas, where every slice is an invitation to culinary delight.</p>
      </div>
    </div>

    <div class="aboutstory">
      <h2>Discover</h2>
      <h1>OUR STORY</h1>
      <p>At Pizzon, our story begins with a passion for perfecting the art of pizza. Founded by food enthusiasts who dreamed of bringing an exceptional culinary experience to pizza lovers worldwide, our journey started with a commitment to quality and innovation. Inspired by traditional recipes and guided by a desire to explore new flavors, we embarked on a quest to create pizzas that not only tantalize taste buds but also tell a story with each slice. Our chefs, driven by creativity and expertise, meticulously craft every pizza, from the handcrafted dough to the finest, locally sourced ingredients</p>
      <img src="signature.png" alt="">
    </div>

    <div class="newdiv">
      <div class="video">
        <iframe width="700" height="500" src="https://www.youtube.com/embed/jxRHo0OIgng?si=vYRPHaMYmzFar-5m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="text">
        <h2>Modern Cuisine</h2>
        <h1>Experience</h1>
        <p>Our commitment to excellence ensures every pizza is a masterpiece, meticulously prepared for your delight. Whether you prefer thin crust or deep-dish, traditional or exotic toppings, we cater to diverse tastes, creating a personalized pizza journey just for you. At Pizzon, we redefine your pizza expectations with unparalleled quality and impeccable service. From the first bite to the last, savor the perfect blend of crispiness, freshness, and mouthwatering flavors. Discover a world of taste that transcends the ordinary – your best pizza experience starts here.</p>
      </div>
    </div>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
    <div class="span"><h2 style="margin-top: 7.5rem;">What Say Our Clients</h2></div>
    <div class="span"><h1>CUSTOMER REVIEWS</h1></div>

    <div class="ninth">
  <div class="inner">
    <img src="review1.png" alt="">
    <p style="color: orange;">JOHN</p>
    <p>What a fantastic pizza experience! The variety of pizzas on the menu is impressive, and I love how you can customize your own. The online ordering process was seamless, and the staff was friendly and accommodating. The pizza tasted amazing - it's evident they use high-quality ingredients. I'll definitely be ordering from here again!</p>
  </div>
  <div class="inner">
    <img src="review2.png" alt="">
    <p style="color: orange;">ALINA</p>
    <p>This pizza site exceeded my expectations! The pizza arrived well-packaged and piping hot. The flavors were well-balanced, and the cheese was perfectly melted. I appreciate the attention to detail in every bite. The website is user-friendly, making the ordering process quick and easy. Overall, a top-notch pizza delivery service that I would recommend to everyone!</p>
  </div>
  <div class="inner">
    <img src="review3.png" alt="">
    <p style="color: orange;">SIKUDA</p>
    <p>Our pizza experience was exceptional! The crust was thin and crispy, just how we like it, and the array of fresh, high-quality toppings was impressive. The online ordering process was effortless, and the delivery was prompt, ensuring our pizza arrived piping hot. A true gourmet delight – we'll be ordering again soon!</p>
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

<!-- ------------------------------------- -->

    <div class="contactpage richresturant">
      <img src="contact.png" alt="" />
     <h1 class="text">CONTACT</h1>
    </div>

    <div class="contactone">
      <div class="contactdetail" style="background-color: white; width: 30%; margin: 10rem 0 0 5rem">
        <h2 style="background-color: white;" >Contact Details</h2>
        <p style="background-color: white;">Have a question or craving our delicious pizzas? Get in touch with us effortlessly! Reach out for orders, inquiries, or special requests through our user-friendly website or call our friendly customer support team. We’re here to make your pizza experience exceptional.</p>
        <h6 style="background-color: white;"><i class="fa-solid fa-house"></i> 55 Drumburgh Ave, Carlisle CA3 0PD, UK</h6>
        <h6 style="background-color: white;"><i class="fa-solid fa-phone"></i> +91 123 456 7890, +91 123 456 789</h6>
        <h6 style="background-color: white;"><i class="fa-solid fa-envelope"></i> Info@gmail.com</h6>
        <h6 style="background-color: white;"><i class="fa-regular fa-clock"></i> Monday:  Friday: 10 am – 10pm</h6>
        <h6 style="background-color: white;"><i class="fa-regular fa-clock"></i> Sunday: 11 am – 9pm</h6>
      </div>
      <div class="contact" style="background-color: white;">
        <h2 style="background-color: white;">Get in touch</h2>
        <h1 style="background-color: white;">CONTACT US</h1>
        <form action="" method="post" style="background-color:white">
        <input type="email" name="email" id="" placeholder="Email" style="background-color: white; margin-top: 1rem;" required/>
        <br />
        <input type="text" name="subject" placeholder="Subject" style="background-color: white;" required/>
        <br />
        <input type="number" name="phone" placeholder="Phone" style="background-color: white;" required/>
        <br />
        <input type="text" name="message" placeholder="Message" style="background-color: white; height: 12rem;" required/>
        <br />
        <button name="submit">SEND MESSAGE</button>
        </form>
      </div>
    </div>

    <div class="contactpage richresturant">
      <img src="account.png" alt="" />
     <h1 class="text">MY ACCOUNT</h1>
    </div>

    <div class="login" style="background-color: white;">
      <h1 style="background-color: white;">LOGIN</h1>
      <label for="username" style="background-color: white;">Username or email address </label>
      <input type="email" id="username" style="background-color: white;">
      <label for="password" style="background-color: white;">Password</label>
      <input type="password" id="password" style="background-color: white;">
      <button>LOG IN</button>
    </div>
    

    <iframe
  src="https://www.google.com/maps/embed?pb=YOUR_MAP_EMBED_CODE"
  width="100%"
  height="450"
  style="border:0;"
  allowfullscreen=""
  loading="lazy">
</iframe>
<!-- ------------------------------------------------------------------------- -->

    <!-- -------------------------------------------------------------- -->
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
    <script>
      let all7=document.getElementById("menu-section");
let all8=document.getElementById("home-section");
let all9=document.getElementById("blog-section");
let all10=document.getElementById("reservation-section");
let all11=document.getElementById("pages-section");

all7.addEventListener("click", function () {
  window.location.href = "menu.php";
});
all8.addEventListener("click", function () {
  window.location.href = "index.php";
});
all9.addEventListener("click", function () {
  window.location.href = "blog.html";
});
all10.addEventListener("click", function () {
  window.location.href = "reservation.php";
});
all11.addEventListener("click", function () {
  window.location.href = "pages.php";
});


    </script>
    <script src="newcart.js"></script>
  </body>
</html>
