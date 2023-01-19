<!DOCTYPE html>
<html lang="en">
<?php $page = "tracks"; ?>

<head>
    <meta charset="utf-8">
    <title>IEEE CONECCT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/header.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php include 'include/navbar.php'; ?>
        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Tracks</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container justify-content-center py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>IEEE CONECCT 2023<span></span></p>
                    <h1 class="text-center mb-5">Tracks</h1>
                </div>
                <p>Track-A Data Scale, Reliability, Security and Privacy Challenges in CPS</p>
                <p>Track-B Cloud Integration and Ubiquitous Computing for Cyber-Physical Systems</p>
                <p>Track-C Network-wide Programming for CPS</p>
                <p>Track-D Machine-type Communications over Wireless (B5G/6G) Communications</p>
                <p>Track-E Cyber-physical systems for geoscience and remote sensing</p>
                <p>Track-F CPS Platform for Intelligent Transportation System</p>
                <p>Track-G Distributed Signal Processing for CPS</p>
                <p>Track-H Sensors, Actuators, and Applications in CPS</p>
                <p>Track-I Smart circuits and System design for CPS</p>
                <p>Track-J Cyber-Physical System Aspects in Antenna Design</p>
                <p>Track-K Photonics and Quantum Technologies</p>
                <p>Track-L Energy Management in Grids and Micro-grids</p>
                <p>Track-M CPS System Approach to Power Electronics</p>
                <p>Track-N Robotics and Smart Systems in Cyber Context</p>
                <p>Track-O Controls and Optimization for CPS</p>
                <p>Track-P Formal Validation, Verification, and Testing Methods for Cyber-Physical Systems</p>
                <p>Track-Q Network of Smart Appliances as CPS</p>
                <p>Track-R Cyber-Physical System Architecture for Smart Healthcare</p>
                <p>Track-S Influence of Social Networks on CPS</p>
                <p>Track-T Exploration in Cyber-Physical System Education</p>
            </div>
        </div>
        <!-- Service End -->

        <!-- Register Start -->
        <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-center text-white mb-4">REGISTER TODAY</h1>
                        <p class="text-white mb-4">International Conference on Electronics, Computing and Communication Technologies, CONECCT 2023 organized by IEEE Bangalore during July 14-16, 2023.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register End -->

        <!-- Footer Start -->
        <?php include 'include/footer.php'; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include 'include/scripts.php'; ?>
</body>

</html>