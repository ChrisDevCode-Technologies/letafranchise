<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - LetaFranchise</title>
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
        
        .page-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/musical.jpg') center/cover no-repeat;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            margin-bottom: 80px;
        }
        
        .page-header h1 {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
        
        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
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
        
        .service-item {
            margin-bottom: 50px;
        }
        
        .service-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .service-image:hover img {
            transform: scale(1.05);
        }
        
        .service-content h3 {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .service-content p {
            margin-bottom: 20px;
            color: #666;
        }
        
        .service-features {
            margin-top: 30px;
        }
        
        .service-features h4 {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .feature-list {
            list-style: none;
            padding-left: 0;
        }
        
        .feature-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .feature-list li i {
            color: var(--secondary-color);
            margin-right: 15px;
            font-size: 18px;
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
            
            .page-header {
                height: 300px;
                margin-bottom: 50px;
            }
            
            .service-image img {
                height: 300px;
            }
        }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <h1>Our Services</h1>
        <p>Discover our comprehensive range of entertainment services designed to create unforgettable experiences for your events.</p>
    </div>
</header>

<!-- Services Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>What We Offer</h2>
            <p>From intimate performances to large-scale festivals, we provide a wide range of entertainment services to meet all your event needs.</p>
        </div>
        
        <!-- Music Events -->
        <div class="service-item">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="images/musical.jpg" alt="Music Events">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content">
                        <h3>Music Events</h3>
                        <p>Our music events bring together the best talents in the industry to create unforgettable musical experiences. Whether you're looking for an intimate acoustic performance or a large-scale music festival, we have the expertise to deliver.</p>
                        <p>We handle everything from artist booking and stage setup to sound engineering and audience management, ensuring a seamless and memorable event for all attendees.</p>
                        <div class="service-features">
                            <h4>What's Included:</h4>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Artist booking and management</li>
                                <li><i class="fas fa-check-circle"></i> Professional sound and lighting setup</li>
                                <li><i class="fas fa-check-circle"></i> Stage design and construction</li>
                                <li><i class="fas fa-check-circle"></i> Audience management and security</li>
                                <li><i class="fas fa-check-circle"></i> Marketing and promotion</li>
                            </ul>
                        </div>
                        <a href="contact.php" class="btn btn-primary mt-4">Book This Service</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Theatre & Drama -->
        <div class="service-item">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="images/PANTOMIME.jpg" alt="Theatre & Drama">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content">
                        <h3>Theatre & Drama</h3>
                        <p>Our theatrical productions bring stories to life through compelling performances, stunning visuals, and immersive experiences. From classic plays to contemporary dramas, we create productions that captivate audiences and leave lasting impressions.</p>
                        <p>We work with talented actors, directors, and production teams to deliver high-quality theatrical experiences that transport audiences to different worlds and evoke powerful emotions.</p>
                        <div class="service-features">
                            <h4>What's Included:</h4>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Professional casting and direction</li>
                                <li><i class="fas fa-check-circle"></i> Set design and construction</li>
                                <li><i class="fas fa-check-circle"></i> Costume and makeup design</li>
                                <li><i class="fas fa-check-circle"></i> Lighting and sound design</li>
                                <li><i class="fas fa-check-circle"></i> Marketing and ticket sales</li>
                            </ul>
                        </div>
                        <a href="contact.php" class="btn btn-primary mt-4">Book This Service</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Special Events -->
        <div class="service-item">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="images/circus.jpg" alt="Special Events">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content">
                        <h3>Special Events</h3>
                        <p>Our special events service is designed to create unique and memorable experiences for corporate events, weddings, birthdays, and other special occasions. We customize every aspect of the event to match your vision and exceed your expectations.</p>
                        <p>From concept development to execution, our team of experienced event planners and entertainers work together to create seamless, engaging, and unforgettable events that leave a lasting impression on your guests.</p>
                        <div class="service-features">
                            <h4>What's Included:</h4>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Custom event planning and design</li>
                                <li><i class="fas fa-check-circle"></i> Venue selection and setup</li>
                                <li><i class="fas fa-check-circle"></i> Entertainment booking and coordination</li>
                                <li><i class="fas fa-check-circle"></i> Catering and beverage services</li>
                                <li><i class="fas fa-check-circle"></i> Photography and videography</li>
                            </ul>
                        </div>
                        <a href="contact.php" class="btn btn-primary mt-4">Book This Service</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Festival Management -->
        <div class="service-item">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="images/OCEAN-FEST.jpg" alt="Festival Management">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content">
                        <h3>Festival Management</h3>
                        <p>Our festival management service is designed for large-scale events that bring together multiple entertainment elements, vendors, and activities. We handle all aspects of festival planning, from concept development to post-event evaluation.</p>
                        <p>With years of experience in organizing successful festivals, we have the expertise to create seamless, engaging, and memorable experiences for attendees while ensuring smooth operations behind the scenes.</p>
                        <div class="service-features">
                            <h4>What's Included:</h4>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Festival concept development and planning</li>
                                <li><i class="fas fa-check-circle"></i> Vendor and artist booking and management</li>
                                <li><i class="fas fa-check-circle"></i> Site design and layout planning</li>
                                <li><i class="fas fa-check-circle"></i> Security and crowd management</li>
                                <li><i class="fas fa-check-circle"></i> Marketing, promotion, and ticket sales</li>
                            </ul>
                        </div>
                        <a href="contact.php" class="btn btn-primary mt-4">Book This Service</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Corporate Entertainment -->
        <div class="service-item">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="images/lighting event.jpg" alt="Corporate Entertainment">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content">
                        <h3>Corporate Entertainment</h3>
                        <p>Our corporate entertainment service is designed to enhance your business events, conferences, and team-building activities with engaging and professional entertainment options. We understand the unique needs of corporate clients and deliver tailored solutions that align with your brand and objectives.</p>
                        <p>From keynote speakers and motivational performers to team-building activities and evening entertainment, we provide a wide range of options to make your corporate event memorable and impactful.</p>
                        <div class="service-features">
                            <h4>What's Included:</h4>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Custom entertainment solutions</li>
                                <li><i class="fas fa-check-circle"></i> Professional performers and speakers</li>
                                <li><i class="fas fa-check-circle"></i> Team-building activities and workshops</li>
                                <li><i class="fas fa-check-circle"></i> Technical setup and support</li>
                                <li><i class="fas fa-check-circle"></i> Brand integration opportunities</li>
                            </ul>
                        </div>
                        <a href="contact.php" class="btn btn-primary mt-4">Book This Service</a>
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
                    <li><a href="index.php#about">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="index.php#events">Events</a></li>
                    <li><a href="index.php#gallery">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Our Services</h4>
                <ul class="footer-links list-unstyled">
                    <li><a href="services.php">Music Events</a></li>
                    <li><a href="services.php">Theatre & Drama</a></li>
                    <li><a href="services.php">Special Events</a></li>
                    <li><a href="services.php">Corporate Entertainment</a></li>
                    <li><a href="services.php">Festival Management</a></li>
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
<script>
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
