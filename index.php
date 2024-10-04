<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nairobi School of Business and Technology</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <Nav>
        <label class="logo">
            Nairobi School of Business and Technology
        </label>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
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
                </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Admission</a></li>
            <li><a href="#">Apply Online</a></li>
            <li><a href="#" class="btn btn-success">Portal</a></li>
        </ul>
    </Nav>

    <!-- Bootstrap JS and Popper.js for the dropdown functionality -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
