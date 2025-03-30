<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="sidebar.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <div class="sidebar-container">
        <section class="category">
            <div class="headCategory">Latest</div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="utilities/images/slid.jpg" class="d-block w-100 displayImage" alt="more links ">
                    </div>
                    <div class="carousel-item " data-bs-interval="3000">
                        <img src="utilities/images/slide12.png" class="d-block w-100 displayImage" alt="four slide">
                    </div>
                    <div class="carousel-item " data-bs-interval="3000">
                        <img src="utilities/images/slide11.png" class="d-block w-100 displayImage" alt="fifth slide">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="utilities/images/slide2.jpg" class="d-block w-100 displayImage" alt="sixth slide">
                    </div>
                </div>
        </section>
    </div>

    <script src="sidebar.js?v=<?php echo time(); ?>"></script>

    </script>
</body>

</html>