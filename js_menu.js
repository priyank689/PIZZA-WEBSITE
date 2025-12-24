let all55 = document.getElementById("all-navbar");
let all1=document.getElementById("nav-burger");
let all2=document.getElementById("nav-drinks");
let all3=document.getElementById("nav-pasta");
let all4=document.getElementById("nav-salads");
let all5=document.getElementById("nav-deserts");
let all6=document.getElementById("nav-pizzas");
let all7=document.getElementById("menu-section");
let all8=document.getElementById("home-section");
let all9=document.getElementById("blog-section");
let all10=document.getElementById("reservation-section");
let all11=document.getElementById("pages-section");

all55.addEventListener("click", function () {
  window.location.href = "index.php";
});
all1.addEventListener("click", function () {
  window.location.href = "Menu-Burger.php";
});
all2.addEventListener("click", function () {
  window.location.href = "Menu-Drinks.php";
});
all3.addEventListener("click", function () {
  window.location.href = "Menu-Pasta.php";
});
all4.addEventListener("click", function () {
  window.location.href = "Menu-Salads.php";
});
all5.addEventListener("click", function () {
  window.location.href = "Menu-Desert.php";
});
all6.addEventListener("click", function () {
  window.location.href = "Menu-Pizza.php";
});
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
let gotocart1=document.getElementById("ccart");
let gotocart=document.getElementById("ccart1");

gotocart1.addEventListener("click", function () {
  window.location.href = "cart.html";
});
gotocart.addEventListener("click", function () {
  window.location.href = "cart.html";
});