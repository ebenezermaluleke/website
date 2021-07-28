<?php
    function projects(){
        ?>
     <!-- ======= Mobile nav toggle button ======= -->
     <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/Profile.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Ebeneizer maluleke</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/ebenezermalulek" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/ebenezer.maluleke.9/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/ebenezer_maluleke/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ebeneizer-maluleke-4aab32171/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

 <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Projects</h2>
            <p>Projects that I have Designed and implements</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="assets/img/smartbasket.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                    <a href="assets/img/smartbasket.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="Projects.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
                <img src="assets/img/smartgarden.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                    <a href="assets/img/smartgarden.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="Projects.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>

        </div>

    </div>
</section><!-- End Projects Section -->

</main><!-- End #main -->


        <?php
    }

?>