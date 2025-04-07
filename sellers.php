<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sellers/seller.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <?php include_once "./header/header.php" ?>

    <div class="sellercontainer">
        <div>
            <?php include_once "./sidebar/sidebar.php" ?>
        </div>
        <div class="sellerspage">
            <div class="sellermain">
                <div>
                    <h2>Become a Seller</h2>
                    <p class="subtext">Join us and start selling your products to a wider audience.</p>
                    <p class="subtext">Fill out the form below to get started.</p>
                </div>
                <form id="interestForm" method="POST" action="submit.php">
                    <input type="text" name="full_name" placeholder="Full Name" required />
                    <input type="email" name="email" placeholder="Email Address" required />
                    <input type="text" name="phone" placeholder="Phone Number" required />
                    <input type="text" name="business_name" placeholder="Business Name (optional)" />
                    <input type="text" name="furniture_type" placeholder="Furniture Type (e.g., Sofas, Beds)" />
                    <input type="text" name="city" placeholder="City / Location" />
                    <textarea name="message" placeholder="Your message (optional)"></textarea>
                    <label><input type="checkbox" required /> I want to be contacted about selling my furniture.</label>
                    <button type="submit">Submit Interest</button>
                </form>
            </div>
            <?php include_once "footer/footer.html" ?>
        </div>
    </div>


</body>

</html>