<!DOCTYPE html>

<html lang="en">

<head>
    <?php require_once 'php/components/head.php' ?>
    <link rel="stylesheet" href="css/homepage.css">

    <!-- Title -->
    <title>The LaSallian: De La Salle Brothers</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $nav_bg_class = 'nav-bg';
        require_once 'php/components/navbar.php'
    ?>

    <header>
        <div class="header-bg" style="background-image: url(assets/DeLaSalleBrothers.jpg)"> <!-- Placeholder Header Background Image -->
        <div class="container pady background">
            <div class="pb-6 px-auto mx-auto col-md-12 col-lg-6 d-flex flex-column justify-content-center align-items-center text-center">
                <h4 class="title mb-3"> <strong>DE LA SALLE BROTHERS</strong></h4>  
            </div>
        </div></a></div>
    </header>

    <!-- Footer -->
    <?php require_once 'php/components/footer.php' ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>