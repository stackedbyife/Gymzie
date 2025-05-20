<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymzie </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Gymzie</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#feature" class="nav-item nav-link">Feature</a>
                        <a href="#pricing" class="nav-item nav-link">Pricing</a>
                        <a href="#review" class="nav-item nav-link">Review</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start Free Trial</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">The Revolutionary App That Helps To Control Your Own Fitness</h1>
                            <p class="text-white pb-3 animated slideInDown">Unlock your potential with a personalized fitness experience. From workouts to wellness tracking, FitApp empowers you to stay consistent, stay strong, and stay motivated. No more guesswork — just results.</p>
                            <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="img/screenshot-1.png" alt="">
                                <img class="img-fluid" src="img/screenshot-2.png" alt="">
                                <img class="img-fluid" src="img/screenshot-3.png" alt="">
                                <img class="img-fluid" src="img/screenshot-4.png" alt="">
                                <img class="img-fluid" src="img/screenshot-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">About App</h5>
                        <h1 class="mb-4">#1 App For Your Fitness</h1>
                        <p class="mb-4">FitApp isn’t just another workout tracker — it’s your personal fitness partner. Whether you’re building strength, burning fat, or improving your lifestyle, FitApp gives you the tools, insights, and motivation to succeed.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <i class="fa fa-cogs fa-2x text-primary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                        <p class="text-primary-gradient mb-0">Active Install</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <i class="fa fa-comments fa-2x text-secondary-gradient flex-shrink-0 mt-1"></i>
                                    <div class="ms-3">
                                        <h2 class="mb-0" data-toggle="counter-up">1234</h2>
                                        <p class="text-secondary-gradient mb-0">Clients Reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">App Features</h5>
                    <h1 class="mb-5">Awesome Features</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-eye text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">High Resolution</h5>
                            <p class="m-0">Enjoy crisp, clear visuals on all screen sizes with stunning resolution graphics.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-layer-group text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Retina Ready</h5>
                            <p class="m-0">Optimized for retina displays — every detail looks sharp and smooth.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-edit text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Editable Data</h5>
                            <p class="m-0">Easily manage and customize your fitness data to suit your personal goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-shield-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Fully Secured</h5>
                            <p class="m-0">We prioritize your privacy with end-to-end data encryption and top-notch security protocols.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-cloud text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Cloud Storage</h5>
                            <p class="m-0">Access your progress and workout data from anywhere with secure cloud syncing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-mobile-alt text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Fully Responsive</h5>
                            <p class="m-0">Built to look great and work perfectly across phones, tablets, macbooks and desktops.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Screenshot Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">User-Friendly Interface</h5>
                        <h1 class="mb-4">A Fitness App That’s Easy to Use and Built for You</h1>
                        <p class="mb-4">Our intuitive design makes it easy for anyone to start their fitness journey—no learning curve, just results.</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Track your workouts with ease</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Navigate the app effortlessly</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Get started in seconds, no tech skills needed</p>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel">
                            <img class="img-fluid" src="img/screenshot-1.png" alt="">
                            <img class="img-fluid" src="img/screenshot-2.png" alt="">
                            <img class="img-fluid" src="img/screenshot-3.png" alt="">
                            <img class="img-fluid" src="img/screenshot-4.png" alt="">
                            <img class="img-fluid" src="img/screenshot-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot End -->


        <!-- Process Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">How It Works</h5>
                    <h1 class="mb-5">3 Easy Steps</h1>
                </div>
                <div class="row gy-5 gx-4 justify-content-center">
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-cog fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Install the App</h5>
                            <p class="mb-0">Download FitApp on your device and get ready to transform your fitness journey.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-address-card fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Setup Your Profile</h5>
                            <p class="mb-0">Add your fitness goals, preferences, and health stats to personalize your experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                                <i class="fa fa-check fa-3x text-white"></i>
                            </div>
                            <h5 class="mt-4 mb-3">Enjoy The Features</h5>
                            <p class="mb-0">Track workouts, monitor progress, and stay motivated—all in one powerful featured app.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process Start -->


        <!-- Download Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="img/about.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">Download</h5>
                        <h1 class="mb-4">Download The Latest Version Of Our App</h1>
                        <p class="mb-4">Start your fitness journey today with the newest features, seamless performance, and a user-friendly experience.
                        No delays. No excuses. Just results.</p>
                        <div class="row g-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <a href="" class="d-flex bg-primary-gradient rounded py-3 px-4">
                                    <i class="fab fa-apple fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">App Store</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <a href="" class="d-flex bg-secondary-gradient rounded py-3 px-4">
                                    <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">Play Store</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Pricing Plan</h5>
                    <h1 class="mb-5">Choose Your Plan</h1>
                </div>
                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center bg-primary-gradient rounded-pill mb-5">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="pill" href="#tab-1">Monthly</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="pill" href="#tab-2">Yearly</button>
                        </li>
                    </ul>
                    <div class="tab-content text-start">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Starter Plan</h4>
                                            <span>Great for getting started with essential fitness tracking.</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₦</small>5,000 <small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>Track daily workouts</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Access limited exercises</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Basic nutrition tips</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Email support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Advance Plan</h4>
                                            <span>For active users who want more features and flexibility.</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₦</small>12,000<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>All Starter Plan features</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Personalized workout plans</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Diet recommendations</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Sync with wearables</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Premium Plan</h4>
                                            <span>Perfect for fitness enthusiasts and professionals.</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₦</small>20,000 <small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>All Advance Plan features</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>1-on-1 virtual coaching</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Progress tracking dashboard</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Priority customer support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade p-0">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Starter Plan</h4>
                                            <span>Powerful & Awesome Features</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₦</small>114,000<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Yearly</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>Track daily workouts</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Access limited exercises</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Basic nutrition tips</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Email support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded border">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Advance Plan</h4>
                                            <span>Powerful & Awesome Features</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₦</small>124,000<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Yearly</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>All Starter Plan features</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Personalized workout plans</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Diet recommendations</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Sync with wearables</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-secondary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="bg-light rounded">
                                        <div class="border-bottom p-4 mb-4">
                                            <h4 class="text-primary-gradient mb-1">Premium Plan</h4>
                                            <span>Powerful & Awesome Features</span>
                                        </div>
                                        <div class="p-4 pt-0">
                                            <h1 class="mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>134,000<small
                                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Yearly</small>
                                            </h1>
                                            <div class="d-flex justify-content-between mb-3"><span>All Advance Plan features</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>1-on-1 virtual coaching</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-3"><span>Progress tracking dashboard</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <div class="d-flex justify-content-between mb-2"><span>Priority customer support</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                                            <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 mt-4">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5" id="review">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Testimonial</h5>
                    <h1 class="mb-5">What Say Our Clients!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-1.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Jaida Austin</h5>
                                <p class="mb-1">Software Developer</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">This app has completely transformed how I approach fitness. The personalized workouts, meal plans, and progress tracking keep me motivated every day.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-2.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">John Doe</h5>
                                <p class="mb-1">Medical Doctor</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">As someone with a 9–5 job and two kids, I love how I can get quick, effective workouts anytime. The daily reminders and guided sessions make it so easy to stay consistent!</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-3.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Clay Thomas</h5>
                                <p class="mb-1">Student</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">I used to spend a fortune on gym memberships and trainers. This app gives me better results for a fraction of the cost. The routines are fun, challenging, and super effective.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-4.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Selina Julia</h5>
                                <p class="mb-1">Laywer</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">I had no clue where to start, but this app guided me step by step. The video tutorials and beginner programs were exactly what I needed. I’m now fitter, stronger, and more energetic!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Contact Us</h5>
                    <h1 class="mb-5">Get In Touch!</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">Have questions, feedback, or need support? We’re here for you! Whether you’re looking for help with the app, want to share your fitness journey, or just want to say hello — our team is always happy to hear from you.</p>

                            @if(session('success'))
                                <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                                    <ul class="list-disc list-inside">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('contact.send') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name"  placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email"  placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Address</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Lagos, Nigeria</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+234 8923 345 678</p>
                        <p><i class="fa fa-envelope me-3"></i>gymzie@email.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Quick Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Newsletter</h4>
                        <p>Stay motivated, stay informed!
                        Join our fitness community and get exclusive tips, workout plans, healthy recipes delivered straight to your inbox.</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary-gradient fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
