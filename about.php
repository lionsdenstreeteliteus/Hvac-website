<?php $page = 'about'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="icon" type="image/png" href="assets/images/logo/colored-logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">

</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- Your page content here -->
    <!-- About Us Banner -->
    <section id="about-banner">
        <div class="container-fluid p-0">
            <img src="assets/images/covers/img-3.jpg" alt="About Us Banner" class="img-fluid w-100 banner-img">
        </div>

        <div class="about-us-hero-overlay text-white">
            <h1 class="services-hero-title fw-bold">About Us</h1>
        </div>
    </section>

    <!-- About Us Content Section -->
    <section id="about-content" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-6">
                    <h2 class="text-accent fw-bold mb-3">About Us</h2>
                    <h4 class="text-white fw-semibold">Home Sweet Home</h4>
                    <p class="text-light mt-3">
                        At Home Sweet Home, we specialize in transforming homes with high-quality craftsmanship and innovative designs. With years of experience in the remodeling industry, we have built a reputation for excellence, reliability, and customer satisfaction.
                    </p>
                    <h5 class="text-white fw-semibold mt-4"><i class="fa fa-history me-2" style="color: #d4af37"></i>Our History</h5>
                    <p class="text-light">
                        Home Sweet Home was founded with a vision to transform homes with quality craftsmanship and innovative design. Over the years, we have built a reputation for excellence, offering professional home remodeling services tailored to our clients’ needs.
                    </p>
                </div>

                <!-- Image Column -->
                <div class="col-md-6">
                    <img src="assets/images/covers/img-1.jpg" alt="Cover Image" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team Section -->
    <section id="team" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Meet the Team</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/image.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1">Alex Parker</h5>
                        <p class="text-accent">Lead Designer</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/image.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1">Peter Robinson</h5>
                        <p class="text-accent">Project Manager</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/image.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1">Chris Gale</h5>
                        <p class="text-accent">UX Specialist</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/image.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1">Robin Atkinson</h5>
                        <p class="text-accent">HVAC Technician</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/image.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1">Anna Grace Du Noyer</h5>
                        <p class="text-accent">Interior Architect</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-tile text-center">
                        <img src="assets/images/users/image.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                        <h5 class="mb-1">Kamal Moumneh</h5>
                        <p class="text-accent">Site Supervisor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Testimonials</h2>
            <div class="row g-4 justify-content-center">
                <!-- Testimonial Card -->
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="text-muted">“Comet Remodeling transformed our home’s climate. Fast, professional, and reliable!”</p>
                        <h6 class="text-accent mt-3">— Sarah M., Arlington VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="text-muted">“Their HVAC service was top-notch. Highly recommend for any remodeling needs.”</p>
                        <h6 class="text-accent mt-3">— James T., McLean VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="text-muted">“Quick response and excellent workmanship. Our system runs better than ever.”</p>
                        <h6 class="text-accent mt-3">— Priya K., Fairfax VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="text-muted">“Comet Remodeling transformed our home’s climate. Fast, professional, and reliable!”</p>
                        <h6 class="text-accent mt-3">— Sarah M., Arlington VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="text-muted">“Their HVAC service was top-notch. Highly recommend for any remodeling needs.”</p>
                        <h6 class="text-accent mt-3">— James T., McLean VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="text-muted">“Quick response and excellent workmanship. Our system runs better than ever.”</p>
                        <h6 class="text-accent mt-3">— Priya K., Fairfax VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- WhatsApp Floating Button -->
    <div class="tooltip-container">
        <a href="https://wa.me/17039395184" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
        <span class="tooltip-text">WhatsApp</span>
    </div>


    <!-- Scroll Up Floating Button -->
    <a href="#" class="scrollup-button">
        <i class="fas fa-arrow-up fa-sm scrollup-icon"></i>
    </a>
</body>

</html>