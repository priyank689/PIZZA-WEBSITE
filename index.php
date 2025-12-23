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
        header("Location: index.php");
        exit();
    } 
}
?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Pizzon</title>
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
            <li id="pages-section" >PAGES</li>
            <li><i class="fa-solid fa-phone"></i>+91 5896412357</li>
            <li id="ccart"><i class="fa-solid fa-bag-shopping" ></i>0 items - $0.00</li>
         </ul>
         <button id="ccart1">ORDER ONLINE</button>
      </nav>
      <div
         id="carouselExampleIndicators"
         class="carousel slide"
         data-bs-interval="2000"
         >
         <div class="carousel-indicators">
            <button
               type="button"
               data-bs-target="#carouselExampleIndicators"
               data-bs-slide-to="0"
               class="active"
               aria-current="true"
               aria-label="Slide 1"
               ></button>
            <button
               type="button"
               data-bs-target="#carouselExampleIndicators"
               data-bs-slide-to="1"
               aria-label="Slide 2"
               ></button>
            <button
               type="button"
               data-bs-target="#carouselExampleIndicators"
               data-bs-slide-to="2"
               aria-label="Slide 3"
               ></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img
                  src="slider41.png"
                  class="d-block w-100"
                  alt="..."
                  style="height: 45rem"
                  />
            </div>
            <div class="carousel-item">
               <img
                  src="slider21.png"
                  class="d-block w-100"
                  alt="..."
                  style="height: 45rem"
                  />
            </div>
            <div class="carousel-item">
               <img
                  src="slider51.png"
                  class="d-block w-100"
                  alt="..."
                  style="height: 45rem"
                  />
            </div>
         </div>
         <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
            >
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
            >
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
         </button>
      </div>
      <div class="secondpart">
         <div class="order">
            <i class="fa-solid fa-utensils"></i>
            <h2>Order your Food</h2>
            <p>
               Satisfy your cravings with just a few clicks! Order your favorite
               cuisine from a diverse menu, customized to your taste, and enjoy swift
               delivery or convenient pickup options. Indulge in a delightful dining
               experience, right at your fingertips
            </p>
         </div>
         <!-- <div class="second"> -->
         <div class="delivery">
            <i class="fa-solid fa-truck-fast"></i>
            <h2>DELIVERY OR PICK UP</h2>
            <p>
               Choose your preferred way to enjoy your meal! Opt for hassle-free
               delivery to your doorstep or quick and convenient pick-up, ensuring
               your culinary cravings are satisfied just the way you like
            </p>
         </div>
         <div class="delicious">
            <i class="fa-solid fa-pizza-slice"></i>
            <h2>DELICIOUS RECIPES</h2>
            <p>
               Discover a world of flavors with our delicious recipes! From gourmet
               delights to quick and easy meals, explore a diverse range of culinary
               creations that will tantalize your taste buds and inspire your inner
               chef.
            </p>
         </div>
      </div>
      <div class="span">
         <h2>Fresh From Pizzon</h2>
      </div>
      <div class="span">
         <h1>OUR SPECIALITY</h1>
      </div>
      <div class="third">
         <div>
            <img src="one.png" alt="" id="jsburger"/>
            <h2>BURGERS</h2>
         </div>
         <div>
            <img src="two.png" alt="" id="jsdeserts"/>
            <h2>DESERTS</h2>
         </div>
         <div>
            <img src="three.png" alt="" id="jsdcp"/>
            <h2>DOUBLE CHEESE PIZZA</h2>
         </div>
      </div>
      <div class="viewmore"><button class="view" id="view">VIEW MORE</button></div>
      <div class="span" style="margin-top: 1rem">
         <h2>Fresh From Pizzon</h2>
      </div>
      <div class="span">
         <h1>OUR SPECIAL MENU</h1>
      </div>
      <div class="navbarstyleouter">
         <div class="navbarstyle" style="width: 45%; margin-left: 27%;">
            <h5 class="all" style="border-radius: 5rem;"><button class="all" id="all-navbar">ALL</button></h5>
            <h5><button class="button2" id="nav-burger">BURGERS</button></h5>
            <h5><button class="button2" id="nav-deserts">DESERTS</button></h5>
            <h5><button class="button2" id="nav-drinks">DRINKS</button></h5>
            <h5><button class="button2" id="nav-pasta">PASTA</button></h5>
            <h5><button class="button2" id="nav-pizzas">PIZZAS</button></h5>
            <h5 style="border-radius: 5rem;"><button class="button2" id="nav-salads">SALADS</button></h5>
         </div>
      </div>
      <div class="fourth ">
         <div class="first product">
            <img src="meatsalad.png" alt="" style="padding-left: 2rem" />
            <h5 style="padding-left: 1rem">MEAT SALAD</h5>
            <p style="padding-left: 2rem; color: rgb(183, 177, 177)">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $30.00</h7>
            <button  onclick="addToCart('MEAT SALAD', 2705)">ORDER NOW</button>
         </div>
         <div class="first2 product">
            <img src="lemonjuice.png" alt="" style="padding-left: 2rem" />
            <h5 style="padding-left: 1rem">LEMON JUICE</h5>
            <p style="padding-left: 2rem">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $16.00</h7>
            <button  onclick="addToCart('LEMON JUICE', 1442)">ORDER NOW</button>
         </div>
         <div class="first product">
            <img src="sollowburger.png" alt="" style="padding-left: 1.rem" />
            <h5 style="padding-left: 0.2rem">SOLLOW BURGER</h5>
            <p style="padding-left: 2rem; color: rgb(183, 177, 177)">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $10.00</h7>
            <button  onclick="addToCart('SOLLOW BURGER', 901)">ORDER NOW</button>
         </div>
         <div class="first product">
            <img src="greensalad.png" alt="" style="padding-left: 1.6rem" />
            <h5 style="padding-left: 0.7rem">GREEN SALAD</h5>
            <p style="padding-left: 2rem; color: rgb(183, 177, 177)">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $50.00</h7>
            <button  onclick="addToCart('GREEN SALAD', 4509)">ORDER NOW</button>
         </div>
         <div class="first product">
            <img src="olivesalad.png" alt="" style="padding-left: 1.8rem" />
            <h5 style="padding-left: 1rem; padding-top: 0.7rem">OLIVE SALAD</h5>
            <p style="padding-left: 2rem; color: rgb(183, 177, 177)">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $20.00</h7>
            <button  onclick="addToCart('OLIVE SALAD', 1803)">ORDER NOW</button>
         </div>
         <div class="first1 product">
            <img src="specialdrink.png" alt="" />
            <h5 style="padding-left: 1rem">SPECIAL DRINK</h5>
            <p style="padding-left: 2rem">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $90.00</h7>
            <button  onclick="addToCart('SPECIAL DRINK', 8116)">ORDER NOW</button>
         </div>
         <div class="first product">
            <img src="gultenfreepasta.png" alt="" style="padding-left: 1.rem;  margin-top: 0.7rem;" />
            <h5 style="padding-left: 0.4rem">GULTEN-FREE PASTA</h5>
            <p style="padding-left: 2rem; color: rgb(183, 177, 177)">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $10.00</h7>
            <button  onclick="addToCart('GULTEN-FREE PASTA', 901)">ORDER NOW</button>
         </div>
         <div class="first product">
            <img src="freshburger.png" alt="" style="padding-left: 1.3rem;  margin-top: 0.6rem;" />
            <h5 style="padding-left: 0.7rem">GREEN SALAD</h5>
            <p style="padding-left: 2rem; color: rgb(183, 177, 177)">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
               tellus, luctus…
            </p>
            <h7 style="color: orange; margin-left: 10.5rem"> $12.00</h7>
            <button  onclick="addToCart('GREEN SALAD', 1082)">ORDER NOW</button>
         </div>
      </div>
      <div class="viewmore">
         <button class="view" id="viewmore1" style="margin-bottom: 3rem; margin-top: 3rem; margin-left: 3rem;">LOAD MORE</button>
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
      <div class="sixth">
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
      <div class="eighth">
         <h2>Recent Events</h2>
         <h1 style="margin-bottom: 3rem;">LATEST NEWS</h1>
      </div>
      <div class="eighth-one" style="background-color: white;">
         <div class="first" style="background-color: white;">
            <img src="recentevent1.png" alt="" />
            <div>
               <p>By Pizadmin</p>
               <p class="comment">1 Comments</p>
            </div>
            <h5 id="crust">Pizzon Where Crust Meets Creativity.</h5>
            <div id="crust" class="readmore">READ MORE</div>
         </div>
         <div class="first" style="background-color: white;">
            <img src="recentevent2.png" alt="" />
            <div>
               <p>By Pizadmin</p>
               <p class="comment">3 Comments</p>
            </div>
            <h5 id="comparison">Possession so comparison inquietu</h5>
            <div id="comparison" class="readmore">READ MORE</div>
         </div>
         <div class="first" style="background-color: white;">
            <img src="recentevent3.png" alt="" />
            <div>
               <p>By Pizadmin</p>
               <p class="comment">5 Comments</p>
            </div>
            <h5 id="kids">OFFERS MADE SPECIALLY FOR KIDS</h5>
            <div id="kids" class="readmore">READ MORE</div>
         </div>
      </div>
      </div>
      <div class="span">
         <h2 style="margin-top: 7.5rem;">What Say Our Clients</h2>
      </div>
      <div class="span">
         <h1>CUSTOMER REVIEWS</h1>
      </div>
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
      <div class="tenth" style="background-color: white;">
         <div class="inner" style="background-color: white; margin-top: 5rem;">
            <div class="span" >
               <h2 style="background-color: white;">Delicious Restaurant</h2>
            </div>
            <div class="span" >
               <h1 style="background-color: white;color: black;">ABOUT PIZZON</h1>
            </div>
            <p style="color: rgb(72, 71, 71); text-align: start; width: 60%; margin-left: 11rem;margin-top: 1.8rem; background-color: white;">Founded on a passion for delivering not just pizzas, but memorable moments, Pizzon is more than a pizza place—it’s a culinary journey. Join us in savoring the artistry of flavors, where every bite tells a story of quality, creativity, and devotion. Come, indulge in the pizza experience you deserve. Welcome to the home of extraordinary pizzas, where every slice is an invitation to culinary delight.</p>
         </div>
         <div class="inner" style="background-color: white;">
            <img src="bestimage.png" alt="" style="margin: 2rem 0 2rem 14rem; height: 38rem; background-color: white;">
         </div>
      </div>
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
               6.00 am – 10.00 pm
            </p>
            <p>Wednes – Thurs :
               6.00 am – 10.00 pm
            </p>
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

      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
         crossorigin="anonymous"
         ></script>
      <script src="script.js"></script>
      <script>
         let cart = JSON.parse(localStorage.getItem("cart")) || [];
let cartItemsDiv = document.getElementById("cartItems");
let total = 0;

/* ✅ RUN ONLY ON CART PAGE */
if (cartItemsDiv) {

  if (cart.length === 0) {
    cartItemsDiv.innerHTML = "<p class='empty-cart'>🍕 Your cart is empty</p>";
  } else {
    cart.forEach((item, index) => {
      total += item.price * item.qty;
      cartItemsDiv.innerHTML += `
        <div class="cart-item">
          <span>${item.name} - ₹${item.price} × ${item.qty}</span>
          <button onclick="removeItem(${index})">❌</button>
        </div>
      `;
    });
  }

  let totalDiv = document.getElementById("total");
  if (totalDiv) {
    totalDiv.innerText = cart.length ? "Total: ₹" + total : "";
  }
}

function addToCart(name, price) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  cart.push({
    name: name,
    price: price,
    qty: 1
  });

  localStorage.setItem("cart", JSON.stringify(cart));

  alert(name + " added to cart");
}

      </script>
   </body>
</html>