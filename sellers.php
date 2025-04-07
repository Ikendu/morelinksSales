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
                <h2>Become a Seller</h2>
                <p class="subtext">Join us and start selling your products to a wider audience.</p>
                <p class="subtext">Fill out the form below to get started.</p>
            </div>
            <?php include_once "footer/footer.html" ?>
        </div>
    </div>


</body>

</html>