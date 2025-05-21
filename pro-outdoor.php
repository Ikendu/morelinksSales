<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main/content.css">
    <link rel="stylesheet" href="productutilities/furniture.css">
    <title>More-links - Out-doors</title>
</head>

<body>
    <?php include_once "header/header.php" ?>
    <div class="furniture">
        <div class="back-button">
            <i class="fa-solid fa-arrow-left" onclick="window.history.back()"></i>
        </div>
        <div class="furniture-head">
            <h3>Style Meets the Open Air</h3>
            <h5>Transform your outdoor spaces with durable, weather-friendly furniture perfect for relaxation, hosting, and making memories under the sky.</h5>
        </div>

        <section class="goods">
            <!-- Display one -->
            <div class="goodsdisplay">
                <img src="utilities/images/out1.jpg" alt="" />
                <div class="discription">
                    <h4>Durable Fit</h4>
                    <p>Sit out space</p>
                    <div class="price">
                        <h5>₦ 200,000</h5>
                        <div class="addMore">
                            <button onclick="updateProductQuantity('Product1', 20, 1, 'out1.jpg')">+</button>
                            <span id="quantityProduct1">0</span>
                            <button onclick="updateProductQuantity('Product1', 20, -1, 'out1.jpg')">-</button>
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
                        <button class="cartBtn" id="Product1" onclick="addToCart('Product1', 20, 'out1.jpg',)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display one -->

            <!-- Display second -->
            <div class="goodsdisplay">
                <img src="utilities/images/out2.jpg" alt="" />
                <div class="discription">
                    <h4>Excel Space</h4>
                    <p>Living room / cushion / decoration</p>
                    <div class="price">
                        <h5>₦ 400,000</h5>
                        <div class="addMore">
                            <button onclick="updateProductQuantity('Product2', 40, 1, 'out2.jpg')">+</button>
                            <span id="quantityProduct2">0</span>
                            <button onclick="updateProductQuantity('Product2', 40, -1, 'out2.jpg')">-</button>
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
                        <button class="cartBtn" id="Product2" onclick="addToCart('Product2', 40, 'out2.jpg',)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display second -->

            <!-- Display Third -->
            <div class="goodsdisplay">
                <img src="utilities/images/out3.jpg" alt="" />
                <div class="discription">
                    <h4>Durable Fit</h4>
                    <p>Sit out space</p>
                    <div class="price">
                        <h5>₦ 200,000</h5>
                        <div class="addMore">
                            <button onclick="updateProductQuantity('Product3', 20, 1, 'out3.jpg')">+</button>
                            <span id="quantityProduct3">0</span>
                            <button onclick="updateProductQuantity('Product3', 20, -1, 'out3.jpg')">-</button>
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
                        <button class="cartBtn" id="Product3" onclick="addToCart('Product3', 20, 'out3.jpg',)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display Third -->

            <!-- Display fourth -->
            <div class="goodsdisplay">
                <img src="utilities/images/out4.jpg" alt="" />
                <div class="discription">
                    <h4>Excel Space</h4>
                    <p>Living room / cushion / decoration</p>
                    <div class="price">
                        <h5>₦ 4,000,000</h5>
                        <div class="addMore">
                            <button onclick="updateProductQuantity('Product4', 40, 1, 'out4.jpg')">+</button>
                            <span id="quantityProduct4">0</span>
                            <button onclick="updateProductQuantity('Product4', 40, -1 , 'out4.jpg')">-</button>
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
                        <button class="cartBtn" id="Product4" onclick="addToCart('Product4', 40, 'out4.jpg',)">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- End of Display fourth -->

            <!-- Display fifth -->

            <!-- End of Display fifth -->
        </section>
    </div>
    <?php include_once "footer/footer.html" ?>
    <script src="productutilities/furniture.js"></script>
</body>

</html>