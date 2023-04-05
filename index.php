<!DOCTYPE html>
<html lang="en">
<?php $page = "index"; ?>

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
        <!-- Navbar End -->

        <!-- Hero Start -->
        <div class="container-xxl position-relative p-0">
            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">IEEE CONECCT 2023</h1>
                            <h3 class="text-white pb-3 animated slideInDown">14TH - 16TH July 2023 - Bangalore </h3>
                            <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Registrations opening soon</a>
                            <a href="./downloads/cfp.pdf" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft" download>Call for papers</a>
                            <!-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> -->
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- About Start -->
        <div id="about" class="container-xxl py-5">
            <div class="container py-5 px-lg-7">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="text-center mb-5">ABOUT THE CONFERENCE</h1>
                        <p class="section-title text-secondary">About CONECCT 2023<span></span></p>
                        <p class="mb-4" style="text-align: justify;">International Conference on Electronics, Computing and Communication Technologies, (CONECCT) is a flagship conference of the IEEE Bangalore Section, India. The CONECCT 2023 in its 9th edition and will be held from JULY 14-16, 2023. The conference will feature plenary talks, tutorials, and invited papers by distinguished researchers and technologists as well as contributed papers from academics and industry professionals. Peer-reviewed accepted papers will most likely be published in IEEE Xplore as well as Conference Proceedings. Cyber-Physical Systems are transforming the way people interact with engineered systems. Cyber-Physical Systems integrate sensing, computation, control, and networking into physical objects and infrastructure, connecting them to the internet and to each other. Robots, intelligent buildings, implantable medical devices, and autonomous cars are all bright examples of CPS.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Countdown Start -->

        <?php include 'include/countdown.php'; ?>

        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 id="days" class="text-white mb-2"></h1>
                        <p class="text-white mb-0">Days</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-hourglass fa-3x text-secondary mb-3"></i>
                        <h1 id="hours" class="text-white mb-2"></h1>
                        <p class="text-white mb-0">Hours</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hourglass-half fa-3x text-secondary mb-3"></i>
                        <h1 id="minutes" class="text-white mb-2"></h1>
                        <p class="text-white mb-0">Minutes</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-hourglass-end fa-3x text-secondary mb-3"></i>
                        <h1 id="seconds" class="text-white mb-2"></h1>
                        <p class="text-white mb-0">Seconds</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Countdown End -->

        <!-- Dates Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">IMPORTANT DATES</h1>
                </div>

                <?php include 'include/important-dates.php'; ?>

                <center>
                    <div class="col-md-3 text-md-right text-center">
                        <a href="https://cmt3.research.microsoft.com/CONECCT2023/" target="blank" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Submit Your Paper</a>
                    </div><br>
                    <div class="col-md-3 text-md-right text-center">
                        <a href="https://bit.ly/CONECCT2023Tutorials" target="blank" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Tutorial Submission</a>
                    </div>
                </center>

            </div>
        </div>
        <!-- Dates End -->

        <!-- Organizing Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">ORGANIZING TEAM</h1>
                </div>

                <h5><b>Patron:</b></h5>
                <p>Dr. M. R. Jayaram, Chairman, Gokula Education Foundation</p>
                <p>Sri. M. R. Seetharam, Vice Chairman, Gokula Education Foundation Director, Ramaiah Institute of Technology</p>
                <p>Sri. M. R. Ramaiah Secretary, Gokula Education Foundation Director, Ramaiah Institute of Technology</p>
                <p>Dr. N. V. R. Naidu Principal, Ramaiah Institute of Technology</p><br>
                <h5><b>General Chair:</b></h5>
                <p>Dr. Aloknath De, Executive Consulting Director - Samsung, and IEEE Bangalore Section Chair 2023</p>
                <br>
                <h5><b>Steering Committee:</b></h5>
                <p>Prof. P Deepa Shenoy, University Visvesvaraya College of Engineering<br></p>
                <p>Prof. Debabrata Das, International Institute of Information Technology, Bangalore<br></p>
                <p>Prof. Hari KVS, Indian Institute of Science<br></p>
                <p>Shri. Puneet Mishra, U R Rao Satellite Centre, Indian Space Research Organization<br></p>
                <p>Shri. Bindhumadhava, Centre for Development of Advanced Computing<br></p>
                <br>

                <h5><b>Organizing Chair:</b></h5>
                <p>Dr. Chandrakanta Kumar,Scientist/Engineer-'SG', U R Rao Satellite Centre, ISRO<br></p>
                <p>Dr. Annapurna Patil, MSRIT<br></p>
                <br>
                <h5><b>Finance Chair:</b></h5>
                <p>Dr. Abhishek Appaji, BMSCE, Treasurer, IEEE Bangalore Section<br></p>
                <br>

                <h5><b>Technical Program Committee</b></h5>
                <p>Dr. Ramakrishnan Raman, Fellow - Honeywell, IEEE Bangalore Section<br></p>
                <p>Dr. Shobha K R, MSRIT</p>
                <br>

            </div>
        </div>
        <!-- Organizing Team End -->

        <!-- Registrations Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5">REGISTRATIONS</h1>
                </div>
                <!-- <div class="table-responsive-lg">
                    <table class="table table-bordered mb-5">
                        <tr>
                            <th>Paper Submission Date</th>
                            <th>Discount on Registration Fee (Early Bird & Regular)</th>
                        </tr>

                        <tr>
                            <td>Till February 20, 2023</td>
                            <td>40%</td>
                        </tr>
                    </table>
                </div> -->
                <div class="row justify-content-center">
                    <div class="col-md-3 col-12">
                        <div class="price_box active">
                            <div class="price_highlight">
                                recommended
                            </div>
                            <div class="price_header">
                                <h5>
                                    Early Bird IEEE Student (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 2500 </h5>
                                <hr>
                                <h5>
                                    Regular IEEE Student (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 3500 </h5>
                            </div>
                            <div class="price_features">
                            </div>
                            <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="price_box">
                            <div class="price_highlight">
                                recommended
                            </div>
                            <div class="price_header">
                                <h5>
                                    Early Bird IEEE Member (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 5300 </h5>
                                <hr>
                                <h5>
                                    Regular IEEE Member (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 6600 </h5>
                            </div>
                            <div class="price_features">
                            </div>
                            <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="price_box">
                            <div class="price_header">
                                <h5>
                                    Early Bird Non-IEEE Student (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 4400 </h5>
                                <hr>
                                <h5>
                                    Regular Non-IEEE Student (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 5300 </h5>
                            </div>
                            <div class="price_features">
                            </div>
                            <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a> 
</div> -->
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="price_box">
                            <div class="price_header">
                                <h5>
                                    Early Bird Non-IEEE Member (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 7200 </h5>
                                <hr>
                                <h5>
                                    Regular Non-IEEE Member (Indian)
                                </h5>
                            </div>
                            <div class="price_tag">
                                <h5>₹ 8800 </h5>
                            </div>
                            <div class="price_features">
                            </div>
                            <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3 col-12">
                            <div class="price_box active">
                                <div class="price_highlight">
                                    recommended
                                </div>
                                <div class="price_header">
                                    <h5>
                                        Early Bird IEEE Student (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 55</h5>
                                    <hr>
                                    <h5>
                                        Regular IEEE Student (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 90</h5>
                                </div>
                                <div class="price_features">
                                </div>
                                <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="price_box">
                                <div class="price_highlight">
                                    recommended
                                </div>
                                <div class="price_header">
                                    <h5>
                                        Early Bird IEEE Member (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 100</h5>
                                    <hr>
                                    <h5>
                                        Regular IEEE Member (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 135</h5>
                                </div>
                                <div class="price_features">
                                </div>
                                <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="price_box">
                                <div class="price_header">
                                    <h5>
                                        Early Bird Non-IEEE Student (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 80</h5>
                                    <hr>
                                    <h5>
                                        Regular Non-IEEE Student (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 110</h5>
                                </div>
                                <div class="price_features">
                                </div>
                                <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="price_box">
                                <div class="price_header">
                                    <h5>
                                        Early Bird Non-IEEE Member (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 135</h5>
                                    <hr>
                                    <h5>
                                        Regular Non-IEEE Member (Foreign)
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>$ 180</h5>
                                </div>
                                <div class="price_features">
                                </div>
                                <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-12">
                            <div class="price_box active">
                                <!-- <div class="price_highlight">
                                    recommended
                                </div> -->
                                <div class="price_header">
                                    <h5>
                                        Tutorial
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>Rs 6000</h5>
                                    <hr>
                                    <h5>
                                        Additional Delegate
                                    </h5>
                                </div>
                                <div class="price_tag">
                                    <h5>Rs 2500</h5>
                                </div>
                                <div class="price_features">
                                </div>
                                <!-- <div class="price_footer">
<a href="https://in.explara.com/e/ieee-conecct-2023" class="btn btn-primary btn-rounded">Register</a>
</div> -->
                            </div>
                        </div>

                        <h3 style="text-align: center;">Registration fee is including GST(18%)<h3>

                    </div>
                </div>
            </div>
        </div>


        <!-- Registrations End -->

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

        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>IEEE CONECCT 2023<span></span></p>
                    <h1 class="text-center mb-5">Contact Us</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Venue Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>IEEE CONECCT 2023<span></span></p>
                    <h1 class="text-center mb-5">Venue</h1>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-12 venue-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0799732708088!2d77.56268501482263!3d13.030579090817218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17dedd4dcca9%3A0x6075bd8d8aed97ab!2sRamaiah%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1671705148630!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Venue End -->



        <!-- Footer Start -->
        <?php include 'include/footer.php'; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include 'include/scripts.php'; ?>
</body>

</html>