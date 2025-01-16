<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nairobi School of Business and Technology</title>
  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }
    header {
      background-color: #004d99;
      color: white;
      padding: 40px 0;
      text-align: center;
    }
    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }
    header p {
      font-size: 1.2rem;
      margin-bottom: 0;
    }
    .content-section {
      padding: 60px 0;
    }
    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-10px);
    }
    .section-title {
      font-size: 2rem;
      text-align: center;
      margin-bottom: 30px;
      color: #004d99;
    }
    .mission-text {
      font-size: 1.1rem;
      text-align: justify;
      margin-bottom: 30px;
    }
    footer {
      background-color: #004d99;
      color: white;
      padding: 30px 0;
      text-align: center;
    }
  </style>
</head>
<body>
 
 <!-- Top Navbar -->
 <div class="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./images/logoo.PNG" alt="Logo" class="logo-img" width="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="Academic_Programmes.php">Programs/Academics</a></li>
                        <li class="nav-item"><a class="nav-link" href="admissions.php">Admissions</a></li>
                        <li class="nav-item"><a class="nav-link" href="media_desk.php">Media Desk</a></li>
                        <li class="nav-item"><a class="btn btn-success" href="contact_us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


  <!-- Header -->
  <header>
    <h1>Nairobi School of Business and Technology</h1>
    <p>Empowering youth through innovative, accessible, and practical education</p>
  </header>

  <!-- Mission Section -->
  <section class="content-section">
    <div class="container">
      <h2 class="section-title">Our Mission</h2>
      <p class="mission-text">
        Unemployment among young people remains one of the most pressing challenges facing Kenya today. While opportunities exist, many young individuals lack the relevant skills needed to seize them. At Nairobi School of Business and Technology, our mission is to equip young Kenyans with the skills necessary to thrive in the rapidly evolving digital and technological sectors.
        Through our comprehensive EdTech platform, we provide access to professional certifications, technology training, creative arts, design, vocational skills, and specialized business programs. We aim to bridge the skills gap and empower youth to become self-sufficient professionals and entrepreneurs.
      </p>
    </div>
  </section>

  <!-- Key Areas Section -->
  <section class="content-section bg-light">
    <div class="container">
      <h2 class="section-title">Our Focus Areas</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Technology Training">
            <div class="card-body">
              <h5 class="card-title">Technology Training</h5>
              <p class="card-text">We offer cutting-edge training in software development, digital marketing, AI, and more to prepare students for careers in the tech industry.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Creative Arts & Design">
            <div class="card-body">
              <h5 class="card-title">Creative Arts & Design</h5>
              <p class="card-text">Our programs focus on design, digital media, and the creative arts, equipping students with the tools to excel in the creative economy.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Vocational Skills">
            <div class="card-body">
              <h5 class="card-title">Vocational Skills</h5>
              <p class="card-text">From electrical to mechanical training, we provide hands-on skills development in vocational fields that are essential for the workforce.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Need for EdTech Section -->
  <section class="content-section">
    <div class="container">
      <h2 class="section-title">The Need for EdTech in Nairobi</h2>
      <p class="mission-text">
        Nairobi, a city rich in innovation, faces a significant gap in educational access, especially for underserved youth. The current educational system does not fully equip students with the practical and technical skills needed for the digital economy. There is a critical need for accessible, affordable, and industry-relevant education that can prepare youth for the future workforce. Our EdTech platform aims to provide high-quality education that bridges this gap, ensuring that young people have the skills to succeed in a competitive global market.
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Nairobi School of Business and Technology | All Rights Reserved</p>
    <p>Follow us on social media for updates and opportunities!</p>
  </footer>

  <!-- Bootstrap JS & dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
