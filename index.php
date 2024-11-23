<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
/* Top Navbar Styles */
.top-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(44, 61, 71);
    color: #fff;
    padding: 10px 20px;
    font-size: 14px;
}

.top-nav .left-section,
.top-nav .right-section {
    display: flex;
    align-items: center;
}

.top-nav .icon-text {
    display: flex;
    align-items: center;
    margin-right: 20px;
}

.top-nav .icon-text i {
    margin-right: 5px;
}

.top-nav .search-icon {
    cursor: pointer;
}

/* Search box */
.search-box {
    display: none;
    position: absolute;
    right: 20px;
    top: 50px;
    background-color: #333;
    padding: 10px;
    border-radius: 5px;
}

.search-box input[type="text"] {
    padding: 5px;
    width: 200px;
    color: #333;
}
</style>

<Style>
body {
    font-family: Arial, sans-serif;
    color: #333;
}

.card {
    border-radius: 10px;
}

.text-primary {
    color: #0056b3;
    /* Blue accent color */
}

.btn-primary {
    background-color: #0056b3;
    border: none;
}

.btn-outline-primary {
    color: #0056b3;
    border-color: #0056b3;
}

.section-title {
    font-weight: bold;
    margin-bottom: 1rem;
}

img {
    border-radius: 5px;
}

.shadow {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


</Style>

<body>
    <div class="navbar-container">
        <!-- Top Navbar. -->
        <div class="top-nav">
            <div class="left-section">
                <div class="icon-text">
                    
                </div>
               
              
                </div>
            </div>
            <div class="right-section">
               
                <div class="search-box" id="searchBox">
                    <input type="text" placeholder="Search..." />
                </div>
            </div>
        </div>

        <!-- Main Nav -->
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
    </div>

    <!--Body-->


    <section>

        <body>
            <div class="container my-4">
                <!-- Introduction Section -->
                <section id="intro">
                    <div class="card mb-4 border-0 shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary font-weight-bold">About Us</h5>
                            <p class="card-text">
                                At Kenya School of Business & Technology, we take pride in our history of excellence and
                                our commitment to innovation in education. Learn more about our mission, vision, and the
                                values that guide us as we empower the next generation of business and IT leaders.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- History Section -->
                <section id="history" class="my-5">
                    <div class="card mb-4 border-0 shadow">
                        <div class="card-body bg-light">
                            <h5 class="card-title text-primary font-weight-bold">Our History</h5>
                            <p class="card-text text-dark">
                                Established in 2010, the Kenya School of Business & Technology has grown into a leading
                                institution providing top-notch education in business and IT. With a focus on bridging
                                the gap between theoretical knowledge and industry demands, we have become a trusted
                                name in professional education.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Mission and Vision Section -->
                <section id="mission-vision" class="my-5">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary font-weight-bold">Our Mission</h5>
                                    <p class="card-text text-dark">
                                        To empower students with knowledge and skills that foster innovation, drive
                                        business growth, and contribute to a sustainable future.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary font-weight-bold">Our Vision</h5>
                                    <p class="card-text text-dark">
                                        To be a premier institution shaping leaders in business and IT, recognized
                                        globally for our excellence in education and innovation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Core Values Section -->
                <section id="values" class="my-5">
                    <div class="card mb-4 border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-primary font-weight-bold">Our Core Values</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Integrity: Upholding honesty and ethics in all our
                                    endeavors.</li>
                                <li class="list-group-item">Innovation: Encouraging creativity and forward-thinking
                                    solutions.</li>
                                <li class="list-group-item">Excellence: Striving for the highest standards in education
                                    and service.</li>
                                <li class="list-group-item">Inclusivity: Promoting equal opportunities for all.</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- Achievements Section -->
                <section id="achievements" class="my-5">
                    <div class="card mb-4 border-0 shadow">
                        <div class="card-body">
                            <h5 class="card-title text-primary font-weight-bold">Our Achievements</h5>
                            <p class="card-text text-dark">
                                We are proud of our accomplishments, which include:
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Training over 5,000 students in business and IT fields.</li>
                                <li class="list-group-item">Receiving accreditation from the Ministry of Education and
                                    international bodies.</li>
                                <li class="list-group-item">Winning multiple awards for excellence in vocational
                                    training.</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Community Impact Section -->
                <section id="community-impact" class="my-5">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary font-weight-bold">Our Community Impact</h5>
                                    <p class="card-text text-dark">
                                        We actively contribute to the community through:
                                    </p>
                                    <ul>
                                        <li>Providing scholarships for underprivileged students.</li>
                                        <li>Offering free digital literacy workshops in underserved areas.</li>
                                        <li>Supporting initiatives that promote gender equality in education.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-primary shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-primary font-weight-bold">Accreditation</h5>
                                    <p class="card-text text-dark">
                                        Our institution is fully accredited by the Ministry of Education and meets
                                        international standards of academic excellence. We collaborate with industry
                                        leaders to ensure our programs are current and relevant.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </body>
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