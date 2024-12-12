<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Nav Bar-->

    <Nav>
        <nav class="main-nav">
            <label class="logo"><img src="./images/logoo.PNG" alt="Logo" class="logo-img"></label>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="index.php">About Us</a></li>
                <li><a href="Academic_Programmes.php">Programs/Academics</a></li>
                <li><a href="admissions.php">Admissions</a></li>
                <li><a href="media_desk.php">Media Desk</a></li>
                <li><a href="contact_us.php" class="btn btn-success">Contact Us</a></li>
            </ul>
        </nav>
    </Nav>


  
    <!-- Contact Details -->
    <section class="contact-details">
          <!-- Header -->
    <header class="header-section">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Get in touch with us today.</p>
    </header>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Get in Touch</h2>
                    <p><strong>Address:</strong> Kenya School of Business and IT, 123 Education Avenue, Nairobi, Kenya
                    </p>
                    <p><strong>Phone:</strong> +254-700-123-456</p>
                    <p><strong>Email:</strong> <a href="mailto:info@ksbit.ac.ke">info@ksbit.ac.ke</a></p>
                    <p><strong>Office Hours:</strong> Mon - Fri: 8:00 AM - 5:00 PM</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31571.204635114446!2d36.82194609449232!3d-1.2920658597469466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10fdf7d7c23b%3A0xb2a2c9bca36bcd16!2sNairobi!5e0!3m2!1sen!2ske!4v1690810823996!5m2!1sen!2ske"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="container">
            <h2 class="section-title">Send Us a Message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject"
                        required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5"
                        placeholder="Write your message here" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <?php $IPATH = $_SERVER["C:/xampp/htdocs"]."./Assets/php/"; include($IPATH."footer.html"); ?>

    <!-- Bootstrap JS and Popper.js for the dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>