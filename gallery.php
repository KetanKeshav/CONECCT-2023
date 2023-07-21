<!DOCTYPE html>
<html lang="en">
<?php $page = "gal"; ?>

<head>
    <meta charset="utf-8">
    <title>IEEE CONECCT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/header.php'; ?>

    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 10px;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .lightbox {
            display: flex;
            flex-direction: column;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .lightbox-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .prev-btn {
            left: 20px;
        }

        .next-btn {
            right: 20px;
        }

        .lightbox-content img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .close-btn {
            color: #fff;
            font-size: 30px;
            position: absolute;
            top: 20px;
            right: 30px;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <h1 class="text-white animated slideInDown">Gallery</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="gallery">
            <div class="gallery-item">
                <img src="./img/gallery/1.webp" alt="Image 1">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/2.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/3.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/4.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/5.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/6.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/7.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/8.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/9.webp" alt="Image 2">
            </div>
            <div class="gallery-item">
                <img src="./img/gallery/10.webp" alt="Image 2">
            </div>
        </div>

        <div class="lightbox" id="lightbox">
            <span class="close-btn" id="close-btn">&times;</span>
            <button class="lightbox-nav prev-btn" id="prev-btn">&lt;</button>
            <button class="lightbox-nav next-btn" id="next-btn">&gt;</button>
            <div class="lightbox-content">
                <img src="" alt="" id="lightbox-img">
            </div>
        </div>

        <!-- Footer Start -->
        <?php include 'include/footer.php'; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include 'include/scripts.php'; ?>
</body>

</html>