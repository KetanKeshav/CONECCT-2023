<!-- Navbar Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h1 class="m-0">DGital</h1> -->
            <img src="img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link <?php if($page=="index") echo 'active'?>">Home</a>
                <a href="index.php#about" class="nav-item nav-link">About Us</a>
                <a href="tracks.php" class="nav-item nav-link  <?php if($page=="tracks") echo 'active'?>">Tracks</a>
                <a href="cfp.php" class="nav-item nav-link  <?php if($page=="cfp") echo 'active'?>">Call For Papers</a>
                <a href="./downloads/AuthorInstructions-CameraReady.pdf" class="nav-item nav-link" download="Instructions for authors of accepted papers">Instructions for authors of accepted papers</a>
            </div>
            <a href="https://in.explara.com/e/ieee--conecct-2023" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Register Now</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->