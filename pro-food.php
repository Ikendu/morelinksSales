<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="main/content.css">
  <link rel="stylesheet" href="foods/foods.css">
  <title>Document</title>
</head>

<body>
  <?php include_once "header/header.php" ?>
  <div class="foods">
    <div class="back-button">
      <i class="fa-solid fa-arrow-left" onclick="window.history.back()"></i>
    </div>
    <div class="food-head">
      <h2>Feed Fresh</h2>
      <h3>MoreLinks welcomes you to Naija Fresh Foods!</h3>
      <h5>Your #1 Source for Affordable, Locally-Grown Food Items</h5>
    </div>

    <section class="goods">
      <!-- Display zero -->
      <div class="goodsdisplay">
        <img src="utilities/images/fegg.jpg" alt="" />
        <div class="discription">
          <h4>Durable Fit</h4>
          <p>Sit out space</p>
          <div class="price">
            <h5>₦ 200,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product1', 20, 1, 'fegg.jpg')">+</button>
              <span id="quantityProduct1">0</span>
              <button onclick="updateProductQuantity('Product1', 20, -1, 'fegg.jpg')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product1" onclick="addToCart('Product1', 20, 'fegg.jpg',)">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display one -->
      <!-- Display one -->
      <div class="goodsdisplay">
        <img src="utilities/images/fbeans.png" alt="" />
        <div class="discription">
          <h4>Durable Fit</h4>
          <p>Sit out space</p>
          <div class="price">
            <h5>₦ 200,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product1', 20, 1, 'fbeans.png')">+</button>
              <span id="quantityProduct1">0</span>
              <button onclick="updateProductQuantity('Product1', 20, -1, 'fbeans.png')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product1" onclick="addToCart('Product1', 20, 'fbeans.png',)">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display one -->

      <!-- Display second -->
      <div class="goodsdisplay">
        <img src="utilities/images/frice.jpg" alt="" />
        <div class="discription">
          <h4>Excel Space</h4>
          <p>Living room / cushion / decoration</p>
          <div class="price">
            <h5>₦ 400,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product2', 40, 1, 'frice.jpg')">+</button>
              <span id="quantityProduct2">0</span>
              <button onclick="updateProductQuantity('Product2', 40, -1, 'frice.jpg')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product2" onclick="addToCart('Product2', 40, 'frice.jpg',)">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display second -->

      <!-- Display Third -->
      <div class="goodsdisplay">
        <img src="utilities/images/fgarri1.png" alt="" />
        <div class="discription">
          <h4>Durable Fit</h4>
          <p>Sit out space</p>
          <div class="price">
            <h5>₦ 200,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product3', 20, 1, 'fgarri1.png')">+</button>
              <span id="quantityProduct3">0</span>
              <button onclick="updateProductQuantity('Product3', 20, -1, 'fgarri1.png')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product3" onclick="addToCart('Product3', 20, 'fgarri1.png',)">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display Third -->

      <!-- Display fourth -->
      <div class="goodsdisplay">
        <img src="utilities/images/fgarri2.png" alt="" />
        <div class="discription">
          <h4>Excel Space</h4>
          <p>Living room / cushion / decoration</p>
          <div class="price">
            <h5>₦ 4,000,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product4', 40, 1, 'fgarri2.png')">+</button>
              <span id="quantityProduct4">0</span>
              <button onclick="updateProductQuantity('Product4', 40, -1 , 'fgarri2.png')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product4" onclick="addToCart('Product4', 40, 'fgarri2.png',)">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display fourth -->

      <!-- Display fifth -->
      <div class="goodsdisplay">
        <img src="utilities/images/8.jpg" alt="" />
        <div class="discription">
          <h4>Excel Space</h4>
          <p>Living room / cushion / decoration</p>
          <div class="price">
            <h5>₦ 4,000,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product5', 40, 1, '8.jpg')">+</button>
              <span id="quantityProduct5">0</span>
              <button onclick="updateProductQuantity('Product5', 40, -1, '8.jpg')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product5" onclick="addToCart('Product5', 40, '8.jpg')">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display fifth -->

      <!-- Display sixth -->
      <div class="goodsdisplay">
        <img src="utilities/images/9.jpg" alt="" />
        <div class="discription">
          <h4>Excel Space</h4>
          <p>Living room / cushion / decoration</p>
          <div class="price">
            <h5>₦ 4,000,00000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product6', 40, 1, '9.jpg')">+</button>
              <span id="quantityProduct6">0</span>
              <button onclick="updateProductQuantity('Product6', 40, -1, '9.jpg')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product6" onclick="addToCart('Product6', 40, '9.jpg')">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display sixth -->

      <!-- Display seventh -->
      <div class="goodsdisplay">
        <img src="utilities/images/10.jpg" alt="" />
        <div class="discription">
          <h4>Excel Space</h4>
          <p>Living room / cushion / decoration</p>
          <div class="price">
            <h5>₦ 1,000,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product7', 10, 1, '10.jpg')">+</button>
              <span id="quantityProduct7">0</span>
              <button onclick="updateProductQuantity('Product7', 10, -1, '10.jpg')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product7" onclick="addToCart('Product7', 10, '10.jpg')">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display sevent -->

      <!-- Display eight -->
      <div class="goodsdisplay">
        <img src="utilities/images/12.jpg" alt="" />
        <div class="discription">
          <h4>Excel Space</h4>
          <p>Living room / cushion / decoration</p>
          <div class="price">
            <h5>₦ 5,000,000</h5>
            <div class="addMore">
              <button onclick="updateProductQuantity('Product8', 50, 1, '12.jpg')">+</button>
              <span id="quantityProduct8">0</span>
              <button onclick="updateProductQuantity('Product8', 50, -1, '12.jpg')">-</button>
            </div>
          </div>
          <div class="btnSales">
            <button class="reachUsBtn">
              <a
                href="https://wa.me/2348061632276?text=Hello%20there!%20I%20need%20a%20furniture"
                target="_blank">
                <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp" />
                <span>Chat us</span>
              </a>
            </button>
            <button class="cartBtn" id="Product8" onclick="addToCart('Product8', 50, '12.jpg')">
              Add to cart
            </button>
          </div>
        </div>
      </div>
      <!-- End of Display eight -->
    </section>
  </div>
  <?php include_once "footer/footer.html" ?>
</body>

</html>