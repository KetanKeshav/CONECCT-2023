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
                <a href="index.php#about" class="nav-item nav-link">About</a>
                <a href="oc.php" class="nav-item nav-link  <?php if($page=="oc") echo 'active'?>">Organizing Committee</a>
                <a href="index.php#speakers" class="nav-item nav-link">Speakers</a>
                <a href="index.php#tutorials" class="nav-item nav-link">Tutorials</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($page=="schedule") echo 'active'?>" href="#" id="scheduleDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Schedule
                    </a>
                    <div class="dropdown-menu" aria-labelledby="scheduleDropdown">
                        <a class="dropdown-item" href="downloads/ProgramOverview.pdf" download>Conference Schedule</a>
                        <a class="dropdown-item" href="downloads/TrackSessionDetails.pdf" download>Track Session Details</a>
                    </div>
                </li>
                <a href="cfp.php" class="nav-item nav-link  <?php if($page=="cfp") echo 'active'?>">Call For Papers</a>
                <a href="https://yp.ieeebangalore.org/conecct-yp-meet-2023/" target="_blank" class="nav-item nav-link ">YP Meet</a>
                <a href="downloads/CONECCT-2023.pptx" class="nav-item nav-link" download>Author slides</a>
            </div>
            <a href="https://in.explara.com/e/ieee--conecct-2023" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Register Now</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->