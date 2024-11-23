<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions | Kenya School of Business and IT</title>

    <link rel="stylesheet" href="admissions.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Nav Bar-->
    <section>
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
    </section>

    <!-- MAin-->
    <!-- Header -->
    <header class="header-section">
        <h1>Admissions</h1>
        <p>Learn about the application process, tuition, and admission requirements at Kenya School of Business and IT
        </p>
    </header>

    <!-- Admissions Process -->
    <section class="admissions-process">
        <div class="container">
            <h2 class="section-title">Admissions Process</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">How to Apply</h5>
                            <ul>
                                <li>Download and complete the application form.</li>
                                <li>Attach all required documents (see below).</li>
                                <li>Submit your application online or at our admissions office before the deadline.</li>
                            </ul>
                            <a href="./downloads/application-form.pdf" class="btn btn-primary">Download Application
                                Form</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Admission Deadlines</h5>
                            <p>
                                Applications for the January 2025 intake are open. Submit your application before
                                <strong>December 1, 2024</strong>.
                            </p>
                            <p>Early applications are encouraged to secure your spot!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tuition Information -->
    <section class="tuition-section">
        <div class="container">
            <h2 class="section-title">Tuition and Fees</h2>
            <ul>
                <li><strong>Diploma Programs:</strong> KES 75,000 per semester</li>
                <li><strong>Short Courses:</strong> Starting at KES 20,000 per course</li>
                <li><strong>Payment Plans:</strong> Flexible options are available.</li>
            </ul>
            <a href="./downloads/tuition-fees.pdf" class="btn btn-primary">Download Detailed Fee Structure</a>
        </div>
    </section>


    <section>

        <div class="container overflow-hidden">
            <div class="row gy-5">
                <div class="col-6">
                    <div class="p-3 border bg-light">Custom column padding</div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">Custom column padding</div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">Custom column padding</div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light">Custom column padding</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Requirements -->
    <section class="requirements-section">
        <div class="container">
            <h2 class="section-title">Admission Requirements</h2>
            <div class="requirements-grid">
                <div class="requirement-card">
                    <div class="icon">
                        <img src="icons/application-form.png" alt="Application Form Icon">
                    </div>
                    <h3>Application Form</h3>
                    <p>Submit a completed application form with all required details.</p>
                </div>
                <div class="requirement-card">
                    <div class="icon">
                        <img src="icons/certificates.png" alt="Certificates Icon">
                    </div>
                    <h3>Academic Certificates</h3>
                    <p>Provide certified copies of all relevant academic certificates.</p>
                </div>
                <div class="requirement-card">
                    <div class="icon">
                        <img src="icons/passport.png" alt="ID/Passport Icon">
                    </div>
                    <h3>ID/Passport</h3>
                    <p>Include a copy of your national ID or passport for identification.</p>
                </div>
                <div class="requirement-card">
                    <div class="icon">
                        <img src="icons/photograph.png" alt="Photograph Icon">
                    </div>
                    <h3>Passport-Size Photos</h3>
                    <p>Provide two recent passport-size photographs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div>
                <p><strong>Q:</strong> Can I apply online?<br>
                    <strong>A:</strong> Yes, you can submit your application through our online portal or via email.
                </p>
                <p><strong>Q:</strong> Are scholarships available?<br>
                    <strong>A:</strong> Yes, scholarships are available for top-performing students. Contact our
                    admissions office for more details.
                </p>
                <p><strong>Q:</strong> Is there a minimum age requirement?<br>
                    <strong>A:</strong> No, we welcome learners of all ages to apply.
                </p>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS and Popper.js for the dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>