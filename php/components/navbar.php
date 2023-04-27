<nav class="<?php echo $nav_bg_class; ?> navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
    <div class="container d-flex justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand order-1" href="#top">
            <img class="nav-logo" id="nav-logo" src="assets/tls-logo-star-white.png" alt="The LaSallian logo">
        </a>

        <div class="d-flex justify-content-center justify-content-md-center order-3 order-md-2">
            <!-- Menu Button for Mobile Devices -->
            <button class="navbar-toggler p-0 border-0 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="material-icons">menu</span>
            </button>

            <!-- Links -->
            <div class="offcanvas offcanvas-end flex-grow-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- Offcanvas Header  -->
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Jump To:</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Offcanvas Body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <span class="material-icons">timeline</span>
                            <a class="nav-link text-reset" onclick="toggleTimeline()"><strong>Timeline</strong></a>
                        </li>
                        <li class="nav-item">
                            <span class="material-icons">campaign</span>
                            <a class="nav-link text-reset" href="#vox-populi"><strong>Vox Populi</strong></a>
                        </li>
                        <li class="nav-item">
                            <span class="material-icons">groups</span>
                            <a class="nav-link text-reset" href="#communities"><strong>Communities</strong></a>
                        </li>
                        <li class="nav-item">
                            <span class="material-icons">article</span>
                            <a class="nav-link text-reset" href="#articles"><strong>Articles</strong></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Blank div to center buttons -->
        <div class="d-flex order-2 order-md-3" style="width: 4rem;">    
        </div>
    </div>
</nav>