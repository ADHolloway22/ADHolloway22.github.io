<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  
  <!-- Custom font used here -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="nav.css" />
</head>

<body>
   <?php include "header.html"; ?>

  <main>
    <div class="contact-container">
      <h2>Get In Touch</h2>
      <p class="subtitle">We'd love to hear from you. Fill out the form below and we'll get back to you soon.</p>

      <form action="#" method="POST">
        <!-- Title Dropdown -->
        <div class="form-group">
          <label for="title">Title *</label>
          <select id="title" name="title" required>
            <option value="">Select your title</option>
            <option value="mr">Mr.</option>
            <option value="ms">Ms.</option>
            <option value="mrs">Mrs.</option>
            <option value="dr">Dr.</option>
            <option value="prof">Prof.</option>
            <option value="mx">Mx.</option>
          </select>
        </div>

        <!-- Full Name -->
        <div class="form-group">
          <label for="fullname">Full Name *</label>
          <input 
            type="text" 
            id="fullname" 
            name="fullname" 
            placeholder="Enter your full name" 
            required
          />
        </div>

        <!-- Email Address -->
        <div class="form-group">
          <label for="email">Email Address *</label>
          <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="your.email@example.com" 
            required
          />
        </div>

        <!-- Message -->
        <div class="form-group">
          <label for="message">Message *</label>
          <textarea 
            id="message" 
            name="message" 
            placeholder="Tell us what's on your mind..." 
            required
          ></textarea>
        </div>

        <!-- Select Button (Preferred Contact Method) -->
        <div class="form-group">
          <label>Preferred Contact Method *</label>
          <div class="radio-group">
            <div class="radio-option">
              <input 
                type="radio" 
                id="contact-email" 
                name="contact-method" 
                value="email" 
                required
              />
              <label for="contact-email">Email</label>
            </div>
            <div class="radio-option">
              <input 
                type="radio" 
                id="contact-phone" 
                name="contact-method" 
                value="phone"
              />
              <label for="contact-phone">Phone</label>
            </div>
            <div class="radio-option">
              <input 
                type="radio" 
                id="contact-either" 
                name="contact-method" 
                value="either"
              />
              <label for="contact-either">Either</label>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Send Message</button>
      </form>
    </div>
  </main>

  <?php include "footer.html"; ?>
</body>
</html>