<!DOCTYPE html>

<html lang="en">

<head>
    <?php require_once 'php/components/head.php' ?>
    <link rel="stylesheet" href="css/css.css">

    <!-- Title -->
    <title>The LaSallian: De La Salle Brothers</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $nav_bg_class = 'nav-bg';
        require_once 'php/components/navbar.php'
    ?>

    <!-- Header -->
    <header>
        <div class="header-bg" style="background-image: url(assets/DeLaSalleBrothers.jpg)"> <!-- Placeholder Header Background Image -->
        <div class="container pady background">
            <div class="justify-content-center align-items-center text-center">
                <h1 class="title">THE DE LA SALLE BROTHERS</h1>  
            </div>
        </div></a></div>
    </header>
    <!-- Vox Carousel -->
    <?php require_once 'php/components/vox.php' ?>

    
    <!-- Articles -->
    <?php require_once 'php/components/articles.php' ?>

    <!-- Footer -->
    <?php require_once 'php/components/footer.php' ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>