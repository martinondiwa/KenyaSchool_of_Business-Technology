<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
        }

        .navbar-container {
            margin-bottom: 20px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(to right, #0d6efd, #6610f2);
            color: white;
            text-align: center;
            padding: 50px 20px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Mission Section */
        .mission-section {
            background: #f8f9fa;
            padding: 60px 20px;
            animation: slideIn 1.5s ease-in-out;
        }

        .mission-section h2 {
            color: #0d6efd;
            text-align: center;
            margin-bottom: 20px;
        }

        .mission-section p {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        /* Cards Section */
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-weight: bold;
            color: #0d6efd;
        }

        .text-center {
            animation: fadeUp 1.5s ease-in-out;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer Section */
        .footer {
            background: #0d6efd;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to the Nairobi School of Business and Technology</h1>
            <p>Empowering the next generation of innovators and leaders through excellence in education.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section id="about" class="mission-section">
        <div class="container">
            <h2>Our Mission</h2>
            <p>At the Nairobi School of Business and Technology, our mission is to bridge the gap between academic
                knowledge and practical skills, equipping our students to thrive in a rapidly evolving world.</p>
        </div>
    </section>

    <!-- Offerings Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">What We Offer</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">World-Class Faculty</h5>
                        <p class="card-text">Learn from industry experts and seasoned academics who bring real-world
                            experience to the classroom.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Modern Facilities</h5>
                        <p class="card-text">Our campus is equipped with state-of-the-art labs, libraries, and
                            collaborative spaces designed for optimal learning.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Diverse Programs</h5>
                        <p class="card-text">From business to technology, we offer a wide range of programs tailored to
                            meet today’s industry demands.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Nairobi School of Business and Technology. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
