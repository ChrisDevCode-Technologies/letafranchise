<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LetaFranchise - Entertainment & Events</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #000000;
            --secondary-color: #FF6B00;
            --dark-color: #1A1A1A;
            --light-color: #F5F5F5;
            --text-color: #333333;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            color: var(--text-color);
        }
        
        .navbar {
            background-color: rgba(0, 0, 0, 0.95) !important;
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand img {
            max-height: 60px;
            transition: all 0.3s ease;
        }
        
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }
        
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
            transform: translateY(-2px);
        }
        
        .hero {
            height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .carousel-item {
            height: 100vh;
        }
        
        .carousel img {
            object-fit: cover;
            height: 100vh;
            width: 100%;
        }
        
        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .carousel-caption h1 {
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #e05e00;
            border-color: #e05e00;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .section {
            padding: 100px 0;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 60px;
            text-align: center;
        }
        
        .section-title h2 {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            color: #666;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .about-content {
            display: flex;
            align-items: center;
        }
        
        .about-text {
            padding-right: 30px;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .services-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .services-card:hover {
            transform: translateY(-10px);
        }
        
        .services-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .services-card-body {
            padding: 25px;
        }
        
        .services-card-body h4 {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-overlay a {
            color: #fff;
            font-size: 24px;
            width: 50px;
            height: 50px;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay a {
            transform: translateY(0);
        }
        
        .testimonial {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            position: relative;
        }
        
        .testimonial::before {
            content: '\f10d';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 30px;
            color: var(--primary-color);
            opacity: 0.2;
        }
        
        .testimonial p {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }
        
        .testimonial-author h5 {
            margin-bottom: 0;
            font-weight: 600;
        }
        
        .testimonial-author p {
            margin-bottom: 0;
            font-size: 14px;
            color: #666;
        }
        
        .cta-section {
            background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url('images/footer.jpg') center/cover no-repeat;
            color: #fff;
            text-align: center;
        }
        
        .cta-section h2 {
            color: #fff;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            max-width: 700px;
            margin: 0 auto 30px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .footer {
            background: var(--dark-color);
            color: #fff;
            padding: 80px 0 30px;
        }
        
        .footer-logo {
            margin-bottom: 30px;
        }
        
        .footer-logo img {
            max-height: 60px;
        }
        
        .footer-about p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }
        
        .footer-title {
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--secondary-color);
        }
        
        .footer-links li {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        
        .footer-contact li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .footer-contact li i {
            margin-right: 15px;
            color: var(--secondary-color);
        }
        
        .footer-social {
            display: flex;
            margin-top: 30px;
        }
        
        .footer-social a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .footer-social a:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }
        
        .copyright p {
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.7);
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: var(--primary-color);
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
            }
            
            .about-content {
                flex-direction: column;
            }
            
            .about-text {
                padding-right: 0;
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Carousel -->
<section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/musical.jpg" class="d-block w-100" alt="Musical Event">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-3">Welcome to LetaFranchise</h1>
                    <p class="lead">Creating Unforgettable Entertainment Experiences</p>
                    <a href="#about" class="btn btn-primary btn-lg">Discover More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/circus.jpg" class="d-block w-100" alt="Circus Event">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-3">Exclusive Events</h1>
                    <p class="lead">From Music Festivals to Theatrical Productions</p>
                    <a href="#events" class="btn btn-primary btn-lg">View Events</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/OCEAN-FEST.jpg" class="d-block w-100" alt="Ocean Festival">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-3">Join the Experience</h1>
                    <p class="lead">Connect, Celebrate, and Create Memories</p>
                    <a href="#contact" class="btn btn-primary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <div class="section-title">
            <h2>About Us</h2>
            <p>LetaFranchise is a premier entertainment company dedicated to creating memorable experiences through music, dance, drama, and theatre.</p>
        </div>
        <div class="row about-content">
            <div class="col-lg-6 about-text">
                <h3 class="mb-4">Our Story</h3>
                <p>LetaFranchise was founded with a vision to revolutionize the entertainment industry by bringing together the best talents in music, dance, drama, and theatre. Our mission is to create unforgettable experiences that leave lasting impressions on our audiences.</p>
                <p>With years of experience in the industry, we have successfully organized numerous events ranging from intimate performances to large-scale festivals. Our team of dedicated professionals ensures that every event is executed flawlessly, from concept to completion.</p>
                <p>We believe in the power of entertainment to bring people together, inspire creativity, and create lasting memories. At LetaFranchise, we are committed to delivering excellence in every aspect of our services.</p>
                <a href="#contact" class="btn btn-primary mt-4">Get in Touch</a>
            </div>
            <div class="col-lg-6 about-image">
                <img src="images/team-b.jpg" alt="LetaFranchise Team">
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>We offer a comprehensive range of entertainment services to meet all your event needs.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <img src="images/musical.jpg" alt="Music Events">
                    <div class="services-card-body">
                        <h4>Music Events</h4>
                        <p>From intimate acoustic performances to large-scale music festivals, we create unforgettable musical experiences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <img src="images/PANTOMIME.jpg" alt="Theatre & Drama">
                    <div class="services-card-body">
                        <h4>Theatre & Drama</h4>
                        <p>Professional theatrical productions, pantomimes, and dramatic performances that captivate audiences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <img src="images/circus.jpg" alt="Special Events">
                    <div class="services-card-body">
                        <h4>Special Events</h4>
                        <p>Customized entertainment solutions for corporate events, weddings, and special celebrations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="section">
    <div class="container">
        <div class="section-title">
            <h2>Upcoming Events</h2>
            <p>Join us for our upcoming events and be part of something extraordinary.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/OCEAN-FEST.jpg" class="img-fluid rounded-start h-100" alt="Ocean Festival" style="object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ocean Festival 2025</h5>
                                <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt me-2"></i>June 15-17, 2025</small></p>
                                <p class="card-text">A three-day celebration of music, art, and culture by the ocean. Featuring top artists and performers.</p>
                                <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/LADIES-TOUR.jpg" class="img-fluid rounded-start h-100" alt="Ladies Tour" style="object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ladies Tour 2025</h5>
                                <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt me-2"></i>August 5-7, 2025</small></p>
                                <p class="card-text">An exclusive event celebrating women in entertainment, featuring performances, workshops, and networking opportunities.</p>
                                <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Gallery</h2>
            <p>Take a look at some of our past events and memorable moments.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/artist_1.jpg" alt="Gallery Image">
                    <div class="gallery-overlay">
                        <a href="images/artist_1.jpg" data-fancybox="gallery"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/artist_2.jpg" alt="Gallery Image">
                    <div class="gallery-overlay">
                        <a href="images/artist_2.jpg" data-fancybox="gallery"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/artist_3.jpg" alt="Gallery Image">
                    <div class="gallery-overlay">
                        <a href="images/artist_3.jpg" data-fancybox="gallery"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/artist_4.jpg" alt="Gallery Image">
                    <div class="gallery-overlay">
                        <a href="images/artist_4.jpg" data-fancybox="gallery"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/lighting event.jpg" alt="Gallery Image">
                    <div class="gallery-overlay">
                        <a href="images/lighting event.jpg" data-fancybox="gallery"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="images/children.jpg" alt="Gallery Image">
                    <div class="gallery-overlay">
                        <a href="images/children.jpg" data-fancybox="gallery"><i class="fas fa-search-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section">
    <div class="container">
        <div class="section-title">
            <h2>What Our Clients Say</h2>
            <p>Hear from some of our satisfied clients about their experiences with LetaFranchise.</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial">
                    <p>"LetaFranchise transformed our corporate event into an unforgettable experience. Their attention to detail and professionalism were outstanding."</p>
                    <div class="testimonial-author">
                        <img src="https://via.placeholder.com/60x60" alt="Client">
                        <div>
                            <h5>John Doe</h5>
                            <p>CEO, Tech Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial">
                    <p>"The musical festival organized by LetaFranchise was a huge success. The lineup was incredible, and everything ran smoothly from start to finish."</p>
                    <div class="testimonial-author">
                        <img src="https://via.placeholder.com/60x60" alt="Client">
                        <div>
                            <h5>Jane Smith</h5>
                            <p>Event Director, Music Hub</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial">
                    <p>"Working with LetaFranchise was a pleasure. Their team is creative, professional, and dedicated to delivering excellence in every project."</p>
                    <div class="testimonial-author">
                        <img src="https://via.placeholder.com/60x60" alt="Client">
                        <div>
                            <h5>Michael Johnson</h5>
                            <p>Marketing Manager, Arts Council</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <h2>Ready to Create Something Amazing?</h2>
        <p>Let us help you bring your entertainment vision to life. Contact us today to discuss your next event.</p>
        <a href="contact.php" class="btn btn-primary btn-lg">Get in Touch</a>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <img src="images/leta.png" alt="LetaFranchise Logo">
                </div>
                <div class="footer-about">
                    <p>LetaFranchise is a premier entertainment company specializing in music, dance, drama, and theatre events. We create unforgettable experiences that leave lasting impressions.</p>
                </div>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links list-unstyled">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Our Services</h4>
                <ul class="footer-links list-unstyled">
                    <li><a href="#">Music Events</a></li>
                    <li><a href="#">Theatre & Drama</a></li>
                    <li><a href="#">Special Events</a></li>
                    <li><a href="#">Corporate Entertainment</a></li>
                    <li><a href="#">Festival Management</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Contact Info</h4>
                <ul class="footer-contact list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Entertainment Street, City, Country</li>
                    <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                    <li><i class="fas fa-envelope"></i> info@letafranchise.com</li>
                    <li><i class="fas fa-clock"></i> Mon - Fri: 9:00 AM - 6:00 PM</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 LetaFranchise. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
<script>
    // Initialize Fancybox for gallery
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.padding = '10px 0';
            navbar.querySelector('.navbar-brand img').style.maxHeight = '50px';
        } else {
            navbar.style.padding = '15px 0';
            navbar.querySelector('.navbar-brand img').style.maxHeight = '60px';
        }
    });
</script>
</body>
</html> 