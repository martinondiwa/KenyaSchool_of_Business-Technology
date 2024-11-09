<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
<body>
    <!-- Top Navbar -->
    <div class="top-nav">
      <div class="left-section">
        <div class="icon-text">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-telephone"
            viewBox="0 0 16 16"
          >
            <path
              d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
            />
          </svg>
          <span style="padding-left: 10px">Phone: 07980 955 29 </span>
        </div>
        <div class="icon-text">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-envelope"
            viewBox="0 0 16 16"
          >
            <path
              d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"
            />
          </svg>
          <span style="padding-left: 10px"
            >Email: customercare@Kenyaschool.com</span
          >
        </div>
        <div class="icon-text">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-clock"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"
            />
            <path
              d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"
            />
          </svg>
          <span style="padding-left: 10px">Mon-Fri: 8am - 5p.m</span>
        </div>
      </div>
      <div class="right-section">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-search"
          viewBox="0 0 16 16"
        >
          <path
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
          />
        </svg>
        <div class="search-box" id="searchBox">
          <input type="text" placeholder="Search..." />
        </div>
      </div>
    </div>
<!-- Main Nav Bar-->
    <Nav>
        <label class="logo">
            <img class="logo-img" src="./images/logoo.PNG" alt="">
        </label>

        <ul>

            <li class="nav-item dropdown">
                <!-- Anchor to Academic Programmes -->
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                </a>
                <!-- Dropdown  -->
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Specific programs linking to its respective pages -->
                    <li><a class="dropdown-item" href="/certifications">Home</a></li>
                    <li><a class="dropdown-item" href="/it-skills">Explore KSBT</a></li>
                    <li><a class="dropdown-item" href="/creative-arts">Staff</a></li>
                    <li><a class="dropdown-item" href="/vocational-skills">Students</a></li>
                    <li><a class="dropdown-item" href="/business-training">Alumni</a></li>
                    <li><a class="dropdown-item" href="/business-training">Jobs</a></li>
                    <li><a class="dropdown-item" href="/business-training">Contacts</a></li>
                </ul>
            </li>
            <li>

            <li class="nav-item dropdown">
                <!-- Anchor to Academic Programmes -->
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Academic Programmes
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Specific programs linking to their respective pages -->
                    <li><a class="dropdown-item" href="/certifications">Professional Certifications</a></li>
                    <li><a class="dropdown-item" href="/it-skills">Technology and IT Skills</a></li>
                    <li><a class="dropdown-item" href="/creative-arts">Creative Arts and Design</a></li>
                    <li><a class="dropdown-item" href="/vocational-skills">Vocational and Technical Skills</a></li>
                    <li><a class="dropdown-item" href="/business-training">Specialized Business Training</a></li>
                    <li><a class="dropdown-item" href="/business-training">Research</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <!-- Anchor to Academic Programmes -->
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Media Desk
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Specific programs linking to their respective pages -->
                    <li><a class="dropdown-item" href="/certifications">News</a></li>
                    <li><a class="dropdown-item" href="/it-skills">Events</a></li>
                    <li><a class="dropdown-item" href="/creative-arts">Gallary</a></li>
                    <li><a class="dropdown-item" href="/vocational-skills">Newsletters</a></li>
                    <li><a class="dropdown-item" href="/business-training">FAQs</a></li>

                </ul>
            </li>


            <li><a href="#">Admission</a></li>
            <li class="nav-item dropdown">
                <!-- Anchor to Academic Programmes -->
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    New Student Info
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <!-- Specific programs linking to their respective pages -->
                    <li><a class="dropdown-item" href="/certifications">Online Application</a></li>
                    <li><a class="dropdown-item" href="/certifications">Access to funding</a></li>
                    <li><a class="dropdown-item" href="/it-skills">Commencement & Reporting Dates</a></li>
                    <li><a class="dropdown-item" href="/creative-arts">Information for New Students</a></li>
                    <li><a class="dropdown-item" href="/vocational-skills">International Students</a></li>
                    <li><a class="dropdown-item" href="/business-training">Student Accommodation</a></li>

                </ul>
            </li>

            <li><a href="#" class="btn btn-success">Portal</a></li>
        </ul>
    </Nav>
    <section>
        <div class="Section1">
            <label class="img_text">We Teach Students with Care</label>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./images/classrr.PNG" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/Classroom.PNG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/image.PNG" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div>
            <div class="row">

                <div class="col-md-7">
                    <h1>Welcome to Kenya School of Business & Technology</h1>
                    <p>At Kenya School of Business & Technology, we are committed to shaping the future of business and
                        technology leaders through innovative learning experiences. Our cutting-edge curriculum blends
                        practical skills with industry insights, equipping students with the tools they need to excel in
                        today's fast-evolving digital landscape. Whether you're seeking to advance your career in
                        business
                        management, IT, data science, or entrepreneurship, our expert faculty, state-of-the-art
                        facilities,
                        and hands-on training programs will provide you with the knowledge and confidence to thrive.
                        Join us
                        and be part of a dynamic community that fosters innovation, growth, and real-world success.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="home">
        <div class="container my-4">
            <h2>Welcome to Kenya School of Business & Technology (KSBT)</h2>
            <p>Located in the heart of Nairobi’s CBD, KSBT is a leading institution dedicated to empowering students
                with cutting-edge technology skills and business acumen. Our goal is to mold future innovators, tech
                entrepreneurs, and business leaders who can drive digital transformation in Africa and beyond.</p>
            <p>At KSBT, we combine world-class education, hands-on experience, and industry partnerships to prepare you
                for the dynamic world of business and technology. Explore our diverse programs and join us in shaping
                the future of tech-driven business solutions.</p>
            <a href="/certifications" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <section id="explore">
        <div class="container my-4">
            <h2>Explore KSBT: Where Business Meets Technology</h2>
            <p>At KSBT, we offer a variety of programs that blend business strategies with advanced technological
                skills. Whether you're passionate about programming, digital marketing, data science, or
                entrepreneurship, our courses are designed to equip you with the knowledge and expertise you need to
                excel in today's competitive job market.</p>
            <p>Explore our faculties, from IT & Computing to Business Management, and discover how you can become a
                leader in the ever-evolving tech landscape.</p>
            <a href="/it-skills" class="btn btn-outline-primary">Learn More</a>
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