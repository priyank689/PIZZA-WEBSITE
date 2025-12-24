let cart = JSON.parse(localStorage.getItem("cart")) || [];
let cartItemsDiv = document.getElementById("cartItems");
let total = 0;

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

document.getElementById("total").innerText =
  cart.length ? "Total: ₹" + total : "";

function removeItem(index) {
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  location.reload();
}

function clearCart() {
  localStorage.removeItem("cart");
  location.reload();
}

function placeOrder() {
  if (cart.length === 0) {
    alert("🛒 Your cart is empty!");
    return;
  }

  alert("🍕 Your order is successful!\nThank you for ordering from Pizzon ❤️");
  localStorage.removeItem("cart");
  location.reload();
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
