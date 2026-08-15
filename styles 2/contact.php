<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - LetaFranchise</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/IMG_1682.jpg') center/cover no-repeat;
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
        
        .contact-info {
            background-color: var(--light-color);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .contact-info-icon {
            width: 50px;
            height: 50px;
            background-color: var(--secondary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .contact-info-content h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        .contact-info-content p {
            margin-bottom: 0;
            color: #666;
        }
        
        .contact-info-content a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .contact-info-content a:hover {
            color: var(--primary-color);
        }
        
        .contact-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            height: 50px;
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 0, 0.25);
        }
        
        textarea.form-control {
            height: 150px;
            resize: none;
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
        
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .social-link {
            width: 50px;
            height: 50px;
            background-color: var(--light-color);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: var(--secondary-color);
            color: #fff;
            transform: translateY(-5px);
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
            
            .page-header {
                height: 300px;
                margin-bottom: 50px;
            }
            
            .contact-info {
                margin-bottom: 30px;
            }
        }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with us for inquiries, bookings, or to learn more about our services.</p>
    </div>
</header>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p>We'd love to hear from you. Please fill out the form below or use our contact information to reach us.</p>
        </div>
        
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Our Location</h3>
                            <p>123 Entertainment Street<br>City, Country</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Phone Number</h3>
                            <p><a href="tel:+1234567890">+1 234 567 890</a></p>
                            <p><a href="tel:+1234567891">+1 234 567 891</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Email Address</h3>
                            <p><a href="mailto:info@letafranchise.com">info@letafranchise.com</a></p>
                            <p><a href="mailto:bookings@letafranchise.com">bookings@letafranchise.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contactForm" action="process_contact.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Find Us</h2>
            <p>Visit our location or get directions to our office.</p>
        </div>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6666666666665!2d106.66666666666666!3d-6.166666666666666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions about our services and booking process.</p>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do I book an event with LetaFranchise?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                To book an event, you can fill out our contact form, call us directly, or email us with your requirements. Our team will get back to you within 24 hours to discuss your needs and provide a customized quote.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What types of events do you organize?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                We organize a wide range of events including music concerts, theatre performances, corporate events, festivals, and special occasions. Our team has experience in creating memorable experiences for events of all sizes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How far in advance should I book?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                We recommend booking at least 3-6 months in advance for large events and 1-3 months for smaller events. This ensures we can secure the best venues, artists, and resources for your event.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Do you provide catering services?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer catering services as part of our event packages. We work with top caterers to provide delicious food and beverages for your guests. You can choose from our standard menus or request a customized menu for your event.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What is your cancellation policy?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Our cancellation policy varies depending on the type of event and how far in advance you cancel. Generally, cancellations made more than 30 days before the event may be eligible for a partial refund. Please contact us for specific details.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Do you offer virtual event services?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Yes, we offer virtual event services for clients who prefer or require remote events. Our team can help you set up live streaming, virtual performances, and interactive online experiences for your audience.
                            </div>
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
        <h2>Ready to Plan Your Next Event?</h2>
        <p>Contact us today to discuss your requirements and let us create an unforgettable experience for you and your guests.</p>
        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
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
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
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
    
    // Form validation
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                if (!contactForm.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                contactForm.classList.add('was-validated');
            });
        }
    });
</script>
</body>
</html>
