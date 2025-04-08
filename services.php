<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="services/services.css" />
  <title>Document</title>
</head>

<body>
  <?php include_once "header/header.php"; ?>
  <div class="service-container">
    <div class="services-header">
      <h1>Our Services</h1>
      <p style="margin-top: 10px">
        At Morelinks Concept, we're making shopping and digital solutions friendlier and easier for
        everyone in Nsukka and beyond!
      </p>
    </div>

    <section class="services-container">
      <!-- Service Cards -->
      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-couch"></i></div>
        <h3>Furniture Sales</h3>
        <p>
          Explore our curated collection of high-quality furniture for homes, offices, and
          commercial spaces. From elegant sofas to functional office desks, our pieces are chosen to
          blend comfort, style, and durability — all at friendly prices.
        </p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-cart-flatbed-suitcase"></i></div>
        <h3>Coming Soon: </h3>
        <h5>Foods, Electronics & More</h5>
        <p>
          We’re expanding beyond furniture to become your everyday online marketplace. Soon, you’ll
          be able to shop for food items, groceries, electronics, clothes and daily essentials — with fast delivery and
          secure checkout.
        </p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-headset"></i></div>
        <h3>Friendly Support</h3>
        <p>
          Need assistance? Reach out anytime! We're available via phone, WhatsApp, or a quick visit
          to our office at 5 Aku Road, Nsukka. We’re always happy to help.
        </p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-truck"></i></div>
        <h3>Custom & Bulk Orders</h3>
        <p>
          Have something specific in mind or need to order in bulk? We provide personalized options
          and great discounts for schools, offices, and event organizers.
        </p>
      </div>h

      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-desktop"></i></div>
        <h3>Website Development</h3>
        <p>
          We design and build responsive websites tailored to your brand. Whether you need an online
          store, a business page, or a portfolio — we’ve got the skills to bring your ideas to life.
        </p>
      </div>

      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-holly-berry"></i></div>
        <h3>Event Decoration</h3>
        <p>
          The last but not the list, We have a dedicated team ready to handle your event at anytime and anywhere.
          You can checkout out our <a href="https://moredeco.com.ng">even decoration website </a>by following this <a href="">link</a> for more details
        </p>
      </div>
    </section>

    <!-- WhatsApp & Chat Buttons -->
    <div class="fixed-buttons">
      <a href="https://wa.me/2348123456789" target="_blank" class="whatsapp-btn">💬 WhatsApp</a>
      <button class="chat-btn" onclick="toggleChat()">💻 Live Chat</button>
    </div>

    <!-- Live Chat Box -->
    <div class="chat-box" id="chatBox">
      <div class="chat-header">Live Chat - Morelinks</div>
      <div class="chat-messages" id="chatMessages">
        <p><strong>Support:</strong> Hello! 👋 How can we assist you today?</p>
      </div>
      <div class="chat-input">
        <input type="text" id="chatInput" placeholder="Type your message..." />
        <button onclick="sendMessage()">Send</button>
      </div>
    </div>
    <?php include_once "footer/footer.html" ?>

    <!-- <footer>
      &copy; 2025 Morelinks Concept. All rights reserved. | Office: 5 Aku Road, Nsukka, Enugu State,
      Nigeria
    </footer> -->
  </div>
  <script src="services/service.js"></script>
</body>

</html>