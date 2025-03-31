<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="headerStyles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="headermobile.css?v=<?php echo time(); ?>">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="cart-overlay" id="cart-overlay" onclick="removeRemoveList()"></div>
    <div class="header">
      <img src="utilities/icons/logoImage.png" alt="logo" class="logo" />
      <div class="search">
        <input type="search" placeholder="Search MoreLinks">
        <span><img src="utilities/icons/search.png" alt="Search MoreLinks" class="searchIcon"></span>
      </div>
      <div class="cart" id="cartIcon" onclick="toggleCart()">
        <img src="utilities/icons/cart.png" alt="shopping cart">
        <span class="cartItems" id="cart-count">0</span>
      </div>
      <div class="headerlinks">
        <ul>
          <li>
            <a href="contact.html">
              <img src="utilities/icons/contact.png" alt="Contact us">
              Contact Us
            </a>
          </li>
          <!-- <li>
            <a href="register.html">
              <img src="utilities/icons/handshake.png" alt="">
              Sale Online</a>
          </li> -->
          <li>
            <a href="signin.html">
              <img src="utilities/icons/user.png" alt="">
              Register
            </a>
          </li>
          <li>
            <a href="support.html">
              <img src="utilities/icons/handshake.png" alt="">
              <span>Ask me</span>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- <swiper-container slides-per-view="10">
      <swiper-slide><a href="index.html">Furniture</a></swiper-slide>
      <swiper-slide><a href="about.html">Cusion</a></swiper-slide>
      <swiper-slide><a href="services.html">Tables</a></swiper-slide>
      <swiper-slide><a href="news.html">Bedroom</a></swiper-slide>
      <swiper-slide><a href="news.html">Office</a></swiper-slide>
      <swiper-slide><a href="news.html">Outdoor</a></swiper-slide>
      <swiper-slide><a href="news.html">Kitchen</a></swiper-slide>
      <swiper-slide><a href="news.html">Bathroom</a></swiper-slide>
      <swiper-slide><a href="news.html">Lighting</a></swiper-slide>
      <swiper-slide><a href="news.html">Decor</a></swiper-slide>
      <swiper-slide><a href="news.html">Kitchen</a></swiper-slide>
      <swiper-slide><a href="news.html">Bathroom</a></swiper-slide>
      <swiper-slide><a href="news.html">Lighting</a></swiper-slide>
      <swiper-slide><a href="news.html">Decor</a></swiper-slide>
    </swiper-container> -->
    <div class="cart-container" id="cart">
      <div class="cart-header">
        <h2>Shopping Cart</h2>
        <i class="fa-solid fa-circle-xmark" onclick="removeRemoveList()" title="Close"></i>
      </div>

      <div id="cart-items" class="cart-items">
        <div class="emptyCart">
          <h3>Empty Cart</h3>
          <i class="fa-solid fa-box-open"></i>
          <p>Select your favourite furnitures to see them here</p>
        </div>
      </div>

      <div class="totatCheckout">
        <h4>Total: $<span id="total-price">0.00</span></h4>
        <button class="checkout-btn" onclick="checkout()">Checkout</button>
      </div>
    </div>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="header/headerScript.js"></script>
</body>

</html>