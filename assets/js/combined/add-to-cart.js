"use strict";
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
// local host and changing cart functionality
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
const addToCartBTNS = document.querySelectorAll(".add-to-cart-BTN");
// Save Data to Local Storage
let cartItems = [];
// localStorage.setItem("cart-items", "test");
// Read Data from Local Storage
// let lastname = localStorage.getItem(key);
// console.log(JSON.parse(localStorage.getItem("cart-items")));
// Remove Data from Local Storage
// localStorage.removeItem(key);
// Remove All (Clear Local Storage)
// localStorage.clear();

function settingUpTempDict() {
  if (localStorage.getItem("cart-items")) {
    cartItems = JSON.parse(localStorage.getItem("cart-items"));
  }
}
function update_localStorage() {
  if (cartItems.length != 0) {
    localStorage.setItem("cart-items", JSON.stringify(cartItems));
  } else {
    clearCart();
  }
}

function apparel_add_to_cart(event) {
  const targetEvent = event.target;
  function findActiveSize(size) {
    if (size.classList.contains("active-bubble")) {
      return size;
    }
  }
  function findActiveColor(size) {
    if (size.classList.contains("active-border")) {
      return size;
    }
  }
  const quantity = Number(
    targetEvent.parentElement.parentElement.children[0].children[1].innerHTML
  );
  const imgType =
    targetEvent.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].children[0].src.split(
      "."
    )[
      targetEvent.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].children[0].src.split(
        "."
      ).length - 1
    ];

  const productSize =
    [
      ...targetEvent.parentElement.parentElement.parentElement.children[0]
        .children[0].children[1].children,
    ].filter(findActiveSize).length === 0
      ? null
      : [
          ...targetEvent.parentElement.parentElement.parentElement.children[0]
            .children[0].children[1].children,
        ].filter(findActiveSize)[0].children[1].innerHTML;
  const productColor =
    [
      ...targetEvent.parentElement.parentElement.parentElement.children[0]
        .children[1].children[1].children,
    ].filter(findActiveColor).length === 0
      ? null
      : [
          ...targetEvent.parentElement.parentElement.parentElement.children[0]
            .children[1].children[1].children,
        ].filter(findActiveColor)[0].children[0].defaultValue;
  const productTitle =
    targetEvent.parentElement.parentElement.parentElement.parentElement
      .children[0].innerHTML;
  const productCost = Number(
    targetEvent.parentElement.parentElement.parentElement.parentElement.children[1].innerHTML.slice(
      1
    )
  );
  //   ////////////////////////
  if (productSize === null || productColor === null) return;
  const tempItem = {
    title: productTitle,
    quantity: quantity,
    size: productSize,
    color: productColor,
    cost: productCost,
    img_type: imgType,
    item_type: "merchandise",
  };

  if (cartItems.length != 0) {
    function cartFilter(item) {
      if (
        item.title === tempItem.title &&
        item.color === tempItem.color &&
        item.size === tempItem.size
      ) {
        return item;
      }
    }
    const isInCart = cartItems.filter(cartFilter);
    if (isInCart.length != 0) {
      isInCart[0].quantity += tempItem.quantity;
    } else {
      cartItems.push(tempItem);
    }
  } else {
    cartItems.push(tempItem);
  }

  update_localStorage();
  showCart();
}

function bottle_add_to_cart(event) {
  const targetEvent = event.target;
  const quantity = Number(
    targetEvent.parentElement.parentElement.children[0].children[1].innerHTML
  );
  const productTitle =
    targetEvent.parentElement.parentElement.parentElement.children[0].innerHTML;
  const productCost = Number(
    targetEvent.parentElement.parentElement.parentElement.children[1].innerHTML.slice(
      1
    )
  );

  const imgType =
    targetEvent.parentElement.parentElement.parentElement.parentElement.children[0].children[0].src.split(
      "."
    )[
      targetEvent.parentElement.parentElement.parentElement.parentElement.children[0].children[0].src.split(
        "."
      ).length - 1
    ];

  //   ////////////////////////

  const tempItem = {
    title: productTitle,
    quantity: quantity,
    cost: productCost,
    img_type: imgType,
    item_type: "spirits",
  };

  if (cartItems.length != 0) {
    function cartFilter(item) {
      if (item.title === tempItem.title) {
        return item;
      }
    }
    const isInCart = cartItems.filter(cartFilter);
    if (isInCart.length != 0) {
      isInCart[0].quantity += tempItem.quantity;
    } else {
      cartItems.push(tempItem);
    }
  } else {
    cartItems.push(tempItem);
  }

  update_localStorage();
  showCart();
}

function addToCart(event) {
  const targetEvent = event.target;

  if (targetEvent.classList.contains("apparel")) {
    apparel_add_to_cart(event);
  } else if (targetEvent.classList.contains("bottle")) {
    bottle_add_to_cart(event);
  }
}

//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
// local host and changing cart functionality
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
// showing cart when clicked and when added to cart
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////

const cart_BTN = document.querySelectorAll(".cart");
const cart_container = document.querySelector(".cart-slideout");
const productsContainer = document.querySelector(".products-container");

// false means cart is not out
let cartPos = false;

function isCartFull() {
  const cartIcon = document.querySelectorAll(".item-count");

  if (localStorage.getItem("cart-items")) {
    cartIcon.forEach((icon) => {
      icon.style.display = "block";
    });
    return true;
  } else {
    cartIcon.forEach((icon) => {
      icon.style.display = "none";
    });
    return false;
  }
}

function showCart() {
  if (!cartPos) {
    cart_container.style.transform = "translateX(0)";
  }
  let html;
  if (isCartFull()) {
    const cartItems = JSON.parse(localStorage.getItem("cart-items"));

    let CartTotal = 0;
    html = `
        <div class="topbar">
            <div class="logo"></div>
            <img src="${x_icon}" alt="" class="close-sidebar">
        </div>
        <div class="products-container">
        
            <div class="product-scroll-container">`;
    cartItems.forEach((item) => {
      html += `<div class="product">
            <div class="product-img">
                <img src="<?= get_template_directory_uri()?>/assets/images/ecommerce/${item.title}.${item.img_type}" alt="" srcset="">
            </div>
            <div class="text-container">
                <span class="title">${item.title}</span>`;
      if (item.size) {
        html += `<span class="size">${item.size}</span>`;
        html += `<span class="size">${item.color}</span>`;
      }
      html += `<div id="quantityBar-cartSlideout">
                    <span class="movement subtraction">-</span>
                    <span class="number">${item.quantity}</span>
                    <span class="movement addition">+</span>
                </div>
            </div>
            <span class="price">$${item.cost}</span>
        </div>
        `;
      CartTotal += item.cost * item.quantity;
    });

    html += `</div> </div>
    <div class="bottom">
        <div class="sub-total">
            <span>Cart Subtotal</span>
            <span class="total">$${CartTotal.toFixed(2)}</span>
        </div>
        <div class="message">
            <span>Taxes and shipping calculated at checkout</span>
            <span>*Free Shipping on all orders $250+</span>
        </div>
        <div class="checkout-BTN">
        <a href="./checkout-page.php">Check out</a>
        </div>
    </div>`;
  } else {
    html = `
    <div class="topbar">
        <div class="logo"></div>
        <img src="${x_icon}" alt="" class="close-sidebar">
    </div>
    <div class="products-container">
 
     <span class='no-items-in-cart'> No items are in your cart</span>

    </div>
    </div>`;
  }
  cart_container.innerHTML = "";
  cart_container.insertAdjacentHTML("beforeend", html);
  cartPos = true;
  cart_container.style.top = `${window.pageYOffset}px`;
  document.body.style.overflowY = "hidden";
  closeCart();
  updateQuantityInCart();
}

function closeCart() {
  const close_cart_BTN = document.querySelector(".close-sidebar");
  function closeCartButton() {
    cart_container.style.transform = "translateX(400px)";
    cartPos = false;
    document.body.style.overflowY = "auto";
  }
  close_cart_BTN.addEventListener("click", closeCartButton);
}

function updateQuantityInCart() {
  const allQuantityBars = document.querySelectorAll(
    "#quantityBar-cartSlideout"
  );
  if (allQuantityBars.length === 0) return;

  function updateQuantity(event) {
    const targetEvent = event.target;
    const item_container = targetEvent.parentElement.parentElement.children;

    function cartFilter(item) {
      if (item.color) {
        if (
          item.title === item_container[0].innerHTML &&
          item.color === item_container[2].innerHTML &&
          item.size === item_container[1].innerHTML
        ) {
          return item;
        }
      } else {
        if (item.title === item_container[0].innerHTML) return item;
      }
    }
    const [cartItem] = cartItems.filter(cartFilter);

    if (!targetEvent.classList.contains("movement")) return;
    if (targetEvent.classList.contains("addition")) cartItem.quantity += 1;
    else cartItem.quantity -= 1;
    if (cartItem.quantity === 0) {
      if (Number(cartItems.indexOf(cartItem)) === 0) cartItems.shift();
      else {
        cartItems.splice(
          cartItems.indexOf(cartItem),
          cartItems.indexOf(cartItem)
        );
      }
    }

    update_localStorage();
    showCart();
  }

  allQuantityBars.forEach((quantity) => {
    quantity.addEventListener("click", updateQuantity);
  });
}

function clearCart() {
  localStorage.clear();
  cartItems = [];
}

//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
// showing cart when clicked and when added to cart
//////////////////////////////////////////////
//////////////////////////////////////////////
//////////////////////////////////////////////
addToCartBTNS.forEach((button) => {
  button.addEventListener("click", addToCart);
});

settingUpTempDict();

cart_BTN.forEach((button) => {
  button.addEventListener("click", showCart);
});
isCartFull();

window.addEventListener("load", function () {
  cart_container.style.transform = "translate(400px)";
  cart_container.style.display = "flex";
});
