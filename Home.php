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
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <span style="padding-left: 10px">Phone: 0745 334 881 </span>
                </div>
                <div class="icon-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg>
                    <span style="padding-left: 10px">Email: info@ksti.com</span>
                </div>
                <div class="icon-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                    </svg>
                    <span style="padding-left: 10px">Mon-Fri: 8am - 5p.m</span>
                </div>
            </div>
            <div class="right-section">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
                <div class="search-box" id="searchBox">
                    <input type="text" placeholder="Search..." />
                </div>
            </div>
        </div>

        <!-- Main Nav-->
        <Nav>
            <nav class="main-nav">
                <label class="logo"><img src="./images/logoo.PNG" alt="Logo" class="logo-img"></label>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="index.php">About Us</a></li>
                    <li><a href="">
                            <div class="dropdown">
                                <a class=" dropdown-toggle" href="#" role=""
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>

                                <ul  class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li style = "color:gray"><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>

                    </li>
                    <li><a href="admissions.php">Admissions</a></li>
                    <li><a href="media_desk.php">Media Desk</a></li>
                    <li><a href="contact_us.php" class="btn btn-success">Contact Us</a></li>
                </ul>
            </nav>
        </Nav>

    </div>

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