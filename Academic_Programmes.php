<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs and Academics</title>

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
        }

        .hero-section {
            background: linear-gradient(to right, #6610f2, #6f42c1);
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

        .program-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .program-title {
            font-weight: bold;
            color: #6f42c1;
        }

        .animated-table {
            animation: slideInUp 1.5s ease-in-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer {
            background: #6f42c1;
            color: white;
            text-align: center;
            padding: 10px;
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
            <h1>Programs and Academics</h1>
            <p>Explore our diverse and industry-aligned programs designed to equip you with practical skills and knowledge.</p>
        </div>
    </section>

     <!-- Programs Section -->
     <section class="container my-5">
        <!-- ICT Skills -->
        <h2 class="text-center mb-4">Training in ICT Skills</h2>
        <table class="table table-bordered table-striped table-hover animated-table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Details</th>
                    <th>Duration</th>
                    <th>Fees (KES)</th>
                    <th>Apply Now</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Web Design</td>
                    <td>HTML 5, CSS, Bootstrap/WP</td>
                    <td>1 month</td>
                    <td>25,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Web & Software Development</td>
                    <td>GitHub, HTML 5, CSS, Bootstrap/WP, PHP & MySQL</td>
                    <td>3 months</td>
                    <td>45,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Web & Software Development (Advanced)</td>
                    <td>Linux, Git & GitHub, HTML 5, CSS, Bootstrap/WP, PHP & MySQL, Java/Kotlin & Android</td>
                    <td>6 months</td>
                    <td>75,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Software & Mobile App Development (SIT-Advanced)</td>
                    <td>Linux, Git & GitHub, Firebase, React Native, MongoDB, Gemini AI, Vercel, Unit Testing</td>
                    <td>9 months</td>
                    <td>120,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Graphic Design</td>
                    <td>Photoshop, InDesign, Adobe Illustrator & Corel Draw</td>
                    <td>1 month</td>
                    <td>30,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Digital Marketing</td>
                    <td>WD, ME, SEO, SEM, SMM, EMM & YTM</td>
                    <td>3 months</td>
                    <td>60,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Digital Entrepreneurship</td>
                    <td>Linux, Git & GitHub, Web Design, Digital Marketing & E-commerce</td>
                    <td>6 months</td>
                    <td>120,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mobile App Development</td>
                    <td>Firebase, React Native, MongoDB, Angular, Gemini AI, Vercel</td>
                    <td>3 months</td>
                    <td>60,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Computer Application Packages</td>
                    <td>(15 packages)</td>
                    <td>1 month</td>
                    <td>15,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Social Media Marketing</td>
                    <td>Influencer marketing, social commerce, short-form video content, content creation & optimization</td>
                    <td>1 month</td>
                    <td>30,000</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
            </tbody>
        </table>

        <!-- CPA Revision -->
        <h2 class="text-center my-4">CPA Revision</h2>
        <table class="table table-bordered table-striped table-hover animated-table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Details</th>
                    <th>Duration</th>
                    <th>Cost (KES)</th>
                    <th>Apply Now</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>CPA -1</td>
                    <td>Foundation level all papers - Online</td>
                    <td>3 months</td>
                    <td>4,000 per unit</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CPA -2</td>
                    <td>Intermediate level all papers - Online</td>
                    <td>3 months</td>
                    <td>4,500 per unit</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                 </tr>


    </tbody>
        </table>
    <!-- Advanced CPA Courses -->
    <h2 class="text-center my-4">Advanced CPA Courses</h2>
        <table class="table table-bordered table-striped table-hover animated-table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Details</th>
                    <th>Duration</th>
                    <th>Cost (KES)</th>
                    <th>Apply Now</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>CPA -3</td>
                    <td>Advanced level all papers - Online</td>
                    <td>3 months</td>
                    <td>5,000 per unit</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CPA -4</td>
                    <td>Specialized topics with practical case studies</td>
                    <td>4 months</td>
                    <td>6,000 per unit</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Apply Now</a></td>
                    </tr>
            </tbody>
        </table>
    </section>

    <!-- Programs Section -->
    <section class="container my-5">
        <!-- Training in Technical Skills -->
        <h2 class="text-center my-4">Training in Technical Skills</h2>
        <table class="table table-bordered table-striped table-hover animated-table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Details</th>
                    <th>Duration</th>
                    <th>Fees (KES)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Computer Repair Training (CRT)</td>
                    <td>Hardware & Software</td>
                    <td>3 months</td>
                    <td>45,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mobile Repair Training (MRT)</td>
                    <td>Hardware & Software</td>
                    <td>3 months</td>
                    <td>45,000</td>
                    </tr>
                <tr>
                    <td>3</td>
                    <td>Computer and Mobile Repair Training (CRT & MRT)</td>
                    <td>Hardware & Software</td>
                    <td>4 months</td>
                    <td>80,000</td>
                </tr>
            </tbody>
        </table>

        <!-- Data Handling Short Courses -->
        <h2 class="text-center my-4">Data Handling Short Courses</h2>
        <table class="table table-bordered table-striped table-hover animated-table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Program</th>
                    <th>Details</th>
                    <th>Duration</th>
                    <th>Fees (KES)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Data Analytics</td>
                    <td>Data cleaning, data visualization, Data analysis (SQL, R, and Tableau)</td>
                    <td>4 months</td>
                    <td>80,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Data Science</td>
                    <td>Data manipulation, visualization, statistical analysis, Advanced statistics, machine learning (Python, R, SQL, Microsoft Azure)</td>
                    <td>9 months</td>
                    <td>120,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Machine Learning & AI</td>
                    <td>Supervised learning, unsupervised learning, and neural networks. Pandas, Scikit-learn, and Matplotlib. FastAI library and PyTorch.</td>
                    <td>4 months</td>
                    <td>80,000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Big Data</td>
                    <td>Hadoop, MapReduce, Spark</td>
                    <td>4 months</td>
                    <td>80,000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Data Visualization</td>
                    <td>Tableau, Matplotlib, Seaborn, Python libraries</td>
                    <td>3 months</td>
                    <td>60,000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SQL & Databases</td>
                    <td>Git & GitHub, SQL, queries, data manipulation, managing databases</td>
                    <td>3 months</td>
                    <td>60,000</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Business Analytics</td>
                    <td>Data-driven business decisions, predictive analytics, and risk management</td>
                    <td>2 months</td>
                    <td>40,000</td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Nairobi School of Business and Technology. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
