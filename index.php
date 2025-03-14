<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Cinzel|Fauna+One" rel="stylesheet">
    <link rel="stylesheet" href="styles.css?&<?php time() ?>">
    <title>Document</title>
</head>

<body>
    <div class="contain">
        <?php include 'header/header.php' ?>
        <div class="main">
            <?php include 'sidebar/sidebar.php' ?>
            <?php include 'main/mainpage.php' ?>
        </div>

    </div>

    <!-- <div>Hello You are welcome</div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>