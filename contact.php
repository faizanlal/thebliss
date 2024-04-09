<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Include CSS files, meta tags, etc. -->
    <link href="contact.css" rel="stylesheet" />
</head>
<body>
    <?php include 'navbar.php'; ?>
    <!-- Your page content goes here -->
</body>
</html>


    <div class="company-info">
      <div class="logo-container">
        <img src="image/logo.png" alt="Company Logo" />
      </div>
      <div class="info">
        <h2>The Bliss</h2>
        <p>123 Main Street</p>
        <p>+123-456-7890</p>
      </div>
    </div>

    <div class="custom-contact-form">
      <div class="custom-container">
        <div class="custom-main">
          <div class="custom-content">
            <h1 class="text-center">
              Contact <span class="theme-text">Us</span>
            </h1>
            <form action="https://api.web3forms.com/submit" method="POST">
              <input
                type="hidden"
                name="access_key"
                value="656131bb-6947-4c6c-af3c-41b68ce54ede"
              />
              <input
                type="text"
                name="name"
                placeholder="Enter Your Name"
                required
              />
              <input
                type="email"
                name="email"
                placeholder="Enter Your Email"
                required
              />
              <textarea
                name="message"
                placeholder="Your Message"
                required
              ></textarea>
              <button type="submit" class="custom-btn">Send</button>
            </form>
          </div>
          <div class="custom-form-img">
            <img src="image/contact1.jpg" alt="Contact Image" />
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="bottom-bar">
        <p>&copy; 2024 The Bliss. All rights reserved</p>
      </div>
    </footer>
  </body>
</html>
