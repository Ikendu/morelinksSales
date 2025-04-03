  <?php include 'header/header.php' ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactstyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet" />
  </head>

  <body>

    <div class="contactpage">
      <div class="contactdetails">
        <div>
          <i class="fa-solid fa-arrow-left" onclick="goBack()"></i>
        </div>
        <h3>Contact Us</h3>
        <div>
          <p>We are here to help you achieve your aims</p>
          <p>Feel free to reach out using any of the methods below—we're excited to hear from you!</p>
          <h4>Get in Touch</h4>
          <div class="contacts">
            <div class="contact-titles">
              <p>Phone:</p>
              <p>Mobile:</p>
              <p>Email:</p>
              <p>Location:</p>
            </div>
            <div>
              <p> 08070958827</p>
              <p>08061632276</p>
              <p>service@morelinks.com.ng</p>
              <p>5 Aku Road, <span>Beside Shanaham Hospital, Close to Trafic light,</span> Nsukka</p>
            </div>
          </div>
        </div>
        <div>
          <p>You may want to checkout our <a href="ask-me.php">question and answer section</a> to see if your question has been answered there. Thank you</p>
        </div>

      </div>


      <div class="container">
        <h2 class="fade-in">Reach out to us by filling thisform</h2>
        <form id="contactForm" class="slide-in" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />

          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required />

          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>

          <button type="submit" class="btn-hover">Send Message</button>
          <!-- <input type="submit" value="Submit"> -->
        </form>
        <p id="response" class="fade-in"></p>
      </div>
    </div>
    <?php include_once "footer/footer.html" ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script src="contactscript.js"></script>

  </body>


  </html>