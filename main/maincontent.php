<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <div class="maincontent" id="maincontent">
        <div class="contentHead">
            <h3>More-Links Furnitures and Home Comfort Utilites</h3>
            <p>New products, more collections.</p>
            <p>Visit different category to navigate your choice destination</p>
        </div>
        <section class="goods">
            <!-- Display one -->
            <div class="goodsdisplay">
                <img src="utilities/images/2.jpg" alt="">
                <div class="discription">
                    <h4>Durable Fit</h4>
                    <p>Sit out space</p>
                    <div class="price">
                        <h5>₦ 200,000</h5>
                        <div class="addMore">
                            <button onclick="updateQuantity(1, 1)">+</button>
                            <span id="one">0</span>
                            <button onclick="updateQuantity(1, -1)">-</button>
                        </div>
                    </div>
                    <div class="btnSales">
                        <button class="reachUsBtn">
                            <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp">
                            <span>Reach us for this</span>
                        </button>
                        <button class="cartBtn" onclick="addToCart('Product 1', 1000, 1)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display one -->

            <!-- Display second -->
            <div class="goodsdisplay">
                <img src="utilities/images/15.jpg" alt="">
                <div class="discription">
                    <h4>Excel Space</h4>
                    <p>Living room / cushion / decoration</p>
                    <div class="price">
                        <h5>₦ 400,000</h5>
                        <div class="addMore">
                            <button onclick="updateQuantity(2, 1)">+</button>
                            <span id='two'>0</span>
                            <button onclick="updateQuantity(2, -1)">-</button>
                        </div>
                    </div>
                    <div class="btnSales">
                        <button class="reachUsBtn">
                            <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp">
                            <span>Reach us for this</span>
                        </button>
                        <button class="cartBtn" onclick="addToCart('Product 2', 2000, 2)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display second -->

            <!-- Display Third -->
            <div class="goodsdisplay">
                <img src="utilities/images/11.jpg" alt="">
                <div class="discription">
                    <h4>Durable Fit</h4>
                    <p>Sit out space</p>
                    <div class="price">
                        <h5>₦ 200,000</h5>
                        <div class="addMore">
                            <button onclick="updateQuantity(3, 1)">+</button>
                            <span id="three">0</span>
                            <button onclick="updateQuantity(3, -1)">-</button>
                        </div>
                    </div>
                    <div class="btnSales">
                        <button class="reachUsBtn">
                            <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp">
                            <span>Reach us for this</span>
                        </button>
                        <button class="cartBtn" onclick="addToCart('Product 3', 3000, 3)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display Third -->

            <!-- Display fourth -->
            <div class="goodsdisplay">
                <img src="utilities/images/3.jpg" alt="">
                <div class="discription">
                    <h4>Excel Space</h4>
                    <p>Living room / cushion / decoration</p>
                    <div class="price">
                        <h5>₦ 4,000,000</h5>
                        <div class="addMore">
                            <button onclick="updateQuantity(4, 1)">+</button>
                            <span id="four">0</span>
                            <button onclick="updateQuantity(4, -1)">-</button>
                        </div>
                    </div>
                    <div class="btnSales">
                        <button class="reachUsBtn">
                            <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp">
                            <span>Reach us for this</span>
                        </button>
                        <button class="cartBtn" onclick="addToCart('Product 4', 1000, 4)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display fourth -->


            <!-- Display fifth -->
            <div class="goodsdisplay">
                <img src="utilities/images/8.jpg" alt="">
                <div class="discription">
                    <h4>Excel Space</h4>
                    <p>Living room / cushion / decoration</p>
                    <div class="price">
                        <h5>₦ 4,000,000</h5>
                        <div class="addMore">
                            <button onclick="updateQuantity(5, 1)">+</button>
                            <span id="five">0</span>
                            <button onclick="updateQuantity(5, -1)">-</button>
                        </div>
                    </div>
                    <div class="btnSales">
                        <button class="reachUsBtn">
                            <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp">
                            <span>Reach us for this</span>
                        </button>
                        <button class="cartBtn" onclick="addToCart('Product 5', 2000, 5)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display fifth -->

            <!-- Display sixth -->
            <div class="goodsdisplay">
                <img src="utilities/images/9.jpg" alt="">
                <div class="discription">
                    <h4>Excel Space</h4>
                    <p>Living room / cushion / decoration</p>
                    <div class="price">
                        <h5>₦ 4,000,000</h5>
                        <div class="addMore">
                            <button onclick="updateQuantity(6, 1)">+</button>
                            <span id="six">0</span>
                            <button onclick="updateQuantity(6, -1)">-</button>
                        </div>
                    </div>
                    <div class="btnSales">
                        <button class="reachUsBtn">
                            <img src="utilities/icons/whatsapp.png" alt="More-Link Whatsapp">
                            <span>Reach us for this</span>
                        </button>
                        <button class="cartBtn" onclick="addToCart('Product 6', 3000, 6)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display sixth -->



        </section>
    </div>

    <!-- <script src="main/main.js"></script>
    <script src="header/headerScript.js"></script> -->
</body>

</html>