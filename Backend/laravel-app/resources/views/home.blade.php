<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page Design</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Resetting default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body Styles */
body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  background-color: #f7f7f7;
  color: #333;
}

/* Header Styles */
header {
  background-color: #fff;
  padding: 20px 0;
}

.top-bar {
  display: flex;
  justify-content: space-between;
  padding: 10px 20px;
}

.nav a {
  margin-left: 20px;
  text-decoration: none;
  color: #333;
}

.main-nav {
  display: flex;
  justify-content: space-between;
  padding: 20px 50px;
}

.main-nav-links a {
  margin-left: 20px;
  text-decoration: none;
  color: #333;
}

.hero {
  background: url('https://via.placeholder.com/1600x800') no-repeat center center/cover;
  color: white;
  padding: 100px 20px;
  text-align: center;
}

.hero-text h1 {
  font-size: 3em;
  margin-bottom: 20px;
}

.cta-btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 1.2em;
  border-radius: 5px;
}

.about, #services, .testimonials, .portfolio {
  padding: 50px 20px;
  text-align: center;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
}

.service-grid, .portfolio-grid {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  margin-top: 40px;
}

.service-item, .portfolio-item {
  width: 22%;
}

.service-item .icon {
  font-size: 3em;
  margin-bottom: 10px;
}

.testimonial-carousel {
  display: flex;
  justify-content: center;
  gap: 50px;
}

.testimonial-item {
  width: 40%;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.portfolio-item img {
  width: 100%;
  border-radius: 5px;
}

footer {
  background-color: #333;
  color: white;
  padding: 40px 0;
  text-align: center;
}

.footer-nav a {
  color: white;
  margin: 0 15px;
  text-decoration: none;
}

.social-media a {
  color: white;
  margin: 0 15px;
  text-decoration: none;
}

.newsletter input {
  padding: 10px;
  font-size: 1em;
  margin-right: 10px;
  border-radius: 5px;
  border: 1px solid #ddd;
}

.newsletter button {
  padding: 10px 20px;
  font-size: 1em;
  border: none;
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="top-bar">
      <div class="logo">
      <img src="{{ asset('/imges/Your Needs.png') }}" alt="My Image" width="100">



      </div>
      <nav class="nav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="/cdemo">Services</a>
        <a href="/myinfo">Contact</a>
      </nav>
    </div>
    <div class="main-nav">
      <div class="logo-main">YourLogo</div>
      <nav class="main-nav-links">
        <a href="/">Home</a>
        <a href="/demo">About</a>
        <a href="#services">Services</a>
        <a href="/ismail">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Transform Your Space with Our Expert Design</h1>
      <a href="#" class="cta-btn">Get Started</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="about">
    <div class="container">
      <div class="about-text">
        <h2>About Us</h2>
        <p>We are passionate about creating beautiful spaces that inspire.</p>
        <a href="#" class="learn-more">Learn More</a>
      </div>
    </div>
  </section>

  <!-- Featured Services Section -->
  <section id="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="service-grid">
        <div class="service-item">
          <div class="icon">🔨</div>
          <p>Interior Design</p>
        </div>
        <div class="service-item">
          <div class="icon">🛋️</div>
          <p>Furniture Design</p>
        </div>
        <div class="service-item">
          <div class="icon">🎨</div>
          <p>Color Consultation</p>
        </div>
        <div class="service-item">
          <div class="icon">💡</div>
          <p>Lighting Design</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="container">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-carousel">
        <div class="testimonial-item">
          <p>"Amazing service! Our home looks fantastic."</p>
          <p>- John Doe</p>
        </div>
        <div class="testimonial-item">
          <p>"Highly recommend! They transformed my space beautifully."</p>
          <p>- Jane Smith</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="portfolio">
    <div class="container">
      <h2>Our Work</h2>
      <div class="portfolio-grid">
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/300" alt="Project 1">
        </div>
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/300" alt="Project 2">
        </div>
        <div class="portfolio-item">
          <img src="https://via.placeholder.com/300" alt="Project 3">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <nav class="footer-nav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
      </nav>
      <div class="social-media">
        <a href="#">Instagram</a>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
      </div>
      <form class="newsletter">
        <input type="email" placeholder="Subscribe to our newsletter" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </footer>

</body>
</html>
