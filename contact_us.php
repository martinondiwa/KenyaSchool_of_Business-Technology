<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="font-family: Arial, sans-serif; ">

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


    <!-- Contact Details -->
    <section class="contact-details py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-6 mb-4">
                    <h2 class="h3 mb-3">Get in Touch</h2>
                    <p><strong>Address:</strong> Kenya School of Business and IT, 123 Education Avenue, Nairobi, Kenya</p>
                    <p><strong>Phone:</strong> +254-700-123-456</p>
                    <p><strong>Email:</strong> <a href="mailto:info@ksbit.ac.ke">info@ksbit.ac.ke</a></p>
                    <p><strong>Office Hours:</strong> Mon - Fri: 8:00 AM - 5:00 PM</p>
                </div>

                <!-- Map -->
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31571.204635114446!2d36.82194609449232!3d-1.2920658597469466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10fdf7d7c23b%3A0xb2a2c9bca36bcd16!2sNairobi!5e0!3m2!1sen!2ske!4v1690810823996!5m2!1sen!2ske" 
                        width="100%" height="300" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Send Us a Message</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Kenya School of Business and IT. All rights reserved.</p>
            <p><a href="privacy-policy.php" class="text-white">Privacy Policy</a> | <a href="terms-of-service.php" class="text-white">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Bootstrap  and  Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
