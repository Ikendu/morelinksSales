<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="ask.css" />
  <title>Document</title>
</head>

<body>
  <div class="askhead">
    <?php include "header/header.php" ?>
  </div>
  <div class="advert">
    <?php include "sidebar/sidebar.php" ?>
  </div>
  <div class="askmain">
    <div class="askcontainer">
      <div class="askhead">
        <h2>Frequently Ask Questions</h2>
        <p class="subtext">Checkout our list of Frequently asked questions and see if you get the anwser you are looking for</p>
      </div>
      <div class="askpage">
        <section>
          <?php include_once "faq/general.html" ?>
        </section>

        <section>
          <?php include_once "faq/order.html" ?>
        </section>

        <section>
          <?php include_once "faq/return.html" ?>
        </section>
      </div>
    </div>
    <?php include "footer/footer.html" ?>
  </div>
  </div>


  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>