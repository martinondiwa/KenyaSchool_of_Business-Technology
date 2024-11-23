<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenya School of Business & Technology</title>

   
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<script>
    window.onload = function () {
        document.getElementById('hamburger').addEventlisterner('click',function () {

            document.getElementById ('nav').ClassName = document.getElementById('nav')
        }) 
    }
</script>
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

    <body>
        <header class="hero-section">
            <div class="hero-content">
                <h1>Welcome to Kenya School of Business and IT</h1>
                <p>Empowering the next generation with modern skills in business and technology. Join us to shape a
                    brighter future through education and innovation.</p>
                <div class="hero-buttons">
                    <a href="admissions.php" class="btn">Admissions</a>
                    <a href="Academic_Programmes.php" class="btn">Programs</a>
                    <a href="contact_us.php" class="btn">Contact Us</a>
                </div>
            </div>
        </header>
    </body>

    <?php $IPATH = $_SERVER["Document_ROOT"]."./Assets/php/"; include($IPATH."footer.html"); ?>

    <!-- Bootstrap JS and Popper.js for the dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>