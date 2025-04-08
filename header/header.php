<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/5108a58a34.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./header/headerStyles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="./header/headermobile.css?v=<?php echo time(); ?>">
  <title>Document</title>
</head>

<body>
  <header>
    <div class="cart-overlay" id="cart-overlay" onclick="removeRemoveList()"></div>
    <div class="header">
      <a href="index.php">
        <img src="utilities/icons/logoImage.png" alt="logo" class="logo" />
      </a>

      <div class="search">
        <input type="search" placeholder="Search MoreLinks">
        <span id="search"><img src="utilities/icons/search.png" alt="Search MoreLinks" class="searchIcon"></span>
      </div>
      <div class="cart" id="cartIcon" onclick="toggleCart()">
        <img src="utilities/icons/cart.png" alt="shopping cart">
        <span class="cartItems" id="cart-count">0</span>
      </div>
      <div class="headerlinks">
        <ul>
          <li>
            <a href="contact-us.php">
              <img src="utilities/icons/contact.png" alt="Contact us">
              Contact Us
            </a>
          </li>
          <li>
            <a href="sellers.php">
              <img src="utilities/icons/user.png" alt="">
              Sell with us
            </a>
          </li>
          <li>
            <a href="ask-me.php">
              <img src="utilities/icons/handshake.png" alt="">
              <span>Ask me</span>
            </a>
          </li>
          <li>
            <a href="services.php">
              <i class="fa-solid fa-business-time"></i>
              <span>Services</span>
            </a>
          </li>

        </ul>
      </div>
      <div class="menu-toggle"><img src="utilities/icons/menus.png" alt=""></div>

      <!-- Navbar for Mobile view -->
      <div class="mobilenav" id="mobilenav">
        <a href="contact-us.php">
          <i class="fa-solid fa-phone-volume"></i>
          Contact Us
        </a>
        <a href="sellers.php">
          <i class="fa-regular fa-user"></i>
          Sell with us
        </a>

        <a href="ask-me.php">
          <i class="fa-regular fa-handshake"></i>
          <span>Ask me</span>
        </a>
        <a href="services.php">
          <i class="fa-solid fa-business-time"></i>
          <span>Services</span>
        </a>
        <div class="divider">
          <div class="divide"></div>
        </div>
        <a href="news.html">Office</a>
        <a href="news.thml">Kitchen</a>
        <a href="news.thml">Bedroom</a>
        <a href="news.thml">Kid Conner</a>
        <a href="news.thml">Living Room</a>

      </div>

      <div class="overlay" id="overlay"></div>

    </div>
    <swiper-container slides-per-view="4" breakpoints='{"460": {"slidesPerView": 6},  "600": {"slidesPerView": 8}, "1024": {"slidesPerView": 10} }' navigation="true" class="swiper-container">
      <swiper-slide>&nbsp; &nbsp; &nbsp;<a href="pro-furniture.php">Furnitures</a></swiper-slide>
      <swiper-slide><a href="pro-food.php">Foods</a></swiper-slide>
      <swiper-slide><a href="services.html">Others</a></swiper-slide>
      <swiper-slide>|</swiper-slide>
      <swiper-slide><a href="news.html">Office</a></swiper-slide>
      <swiper-slide><a href="news.html">Outdoor</a></swiper-slide>
      <swiper-slide><a href="news.html">Kitchen</a></swiper-slide>
      <swiper-slide><a href="news.html">Bathroom</a></swiper-slide>
      <swiper-slide><a href="news.html">Lighting</a></swiper-slide>
      <swiper-slide><a href="news.html">Decor</a></swiper-slide>
      <swiper-slide><a href="news.thml">Kitchen</a></swiper-slide>
      <swiper-slide><a href="news.html">Bathroom</a></swiper-slide>
      <swiper-slide><a href="news.html">Lighting</a></swiper-slide>
      <swiper-slide><a href="news.html">Decor</a></swiper-slide>
    </swiper-container>
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