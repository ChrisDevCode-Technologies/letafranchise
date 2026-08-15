<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - LetaFranchise</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
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
        
        .gallery-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }
        
        .gallery-filter {
            padding: 10px 25px;
            margin: 0 10px 10px;
            background-color: var(--light-color);
            border: none;
            border-radius: 30px;
            font-weight: 500;
            color: var(--text-color);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .gallery-filter:hover, .gallery-filter.active {
            background-color: var(--secondary-color);
            color: #fff;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
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
        
        .gallery-overlay-content {
            text-align: center;
            color: #fff;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay-content {
            transform: translateY(0);
        }
        
        .gallery-overlay-content h3 {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }
        
        .gallery-overlay-content p {
            margin-bottom: 15px;
            font-size: 1rem;
        }
        
        .gallery-overlay-content a {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: var(--secondary-color);
            color: #fff;
            border-radius: 50%;
            line-height: 50px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .gallery-overlay-content a:hover {
            background-color: #fff;
            color: var(--secondary-color);
            transform: rotate(360deg);
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
        
        .pagination {
            margin-top: 50px;
            justify-content: center;
        }
        
        .page-item .page-link {
            color: var(--primary-color);
            border: none;
            margin: 0 5px;
            border-radius: 5px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .page-item.active .page-link {
            background-color: var(--secondary-color);
            color: #fff;
        }
        
        .page-item .page-link:hover {
            background-color: var(--light-color);
            color: var(--secondary-color);
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
            
            .gallery-item img {
                height: 250px;
            }
        }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <h1>Our Gallery</h1>
        <p>Explore our collection of memorable moments and performances from past events.</p>
    </div>
</header>

<!-- Gallery Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Photo Gallery</h2>
            <p>Browse through our collection of photos from various events and performances.</p>
        </div>
        
        <!-- Gallery Filters -->
        <div class="gallery-filters">
            <button class="gallery-filter active" data-filter="all">All Photos</button>
            <button class="gallery-filter" data-filter="music">Music Events</button>
            <button class="gallery-filter" data-filter="theatre">Theatre & Drama</button>
            <button class="gallery-filter" data-filter="festival">Festivals</button>
            <button class="gallery-filter" data-filter="corporate">Corporate Events</button>
        </div>
        
        <div class="row">
            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6" data-category="music">
                <div class="gallery-item">
                    <img src="images/musical.jpg" alt="Musical Performance">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Musical Performance</h3>
                            <p>Live music event featuring top artists</p>
                            <a href="images/musical.jpg" data-lightbox="gallery" data-title="Musical Performance"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6" data-category="theatre">
                <div class="gallery-item">
                    <img src="images/PANTOMIME.jpg" alt="Pantomime Show">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Pantomime Show</h3>
                            <p>Family-friendly theatrical performance</p>
                            <a href="images/PANTOMIME.jpg" data-lightbox="gallery" data-title="Pantomime Show"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6" data-category="festival">
                <div class="gallery-item">
                    <img src="images/OCEAN-FEST.jpg" alt="Ocean Festival">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Ocean Festival</h3>
                            <p>Celebration of ocean culture and music</p>
                            <a href="images/OCEAN-FEST.jpg" data-lightbox="gallery" data-title="Ocean Festival"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 4 -->
            <div class="col-lg-4 col-md-6" data-category="corporate">
                <div class="gallery-item">
                    <img src="images/lighting event.jpg" alt="Corporate Event">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Corporate Event</h3>
                            <p>Elegant corporate gathering with entertainment</p>
                            <a href="images/lighting event.jpg" data-lightbox="gallery" data-title="Corporate Event"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 5 -->
            <div class="col-lg-4 col-md-6" data-category="music">
                <div class="gallery-item">
                    <img src="images/dj.jpg" alt="DJ Night">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>DJ Night</h3>
                            <p>Night of music and dancing</p>
                            <a href="images/dj.jpg" data-lightbox="gallery" data-title="DJ Night"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 6 -->
            <div class="col-lg-4 col-md-6" data-category="theatre">
                <div class="gallery-item">
                    <img src="images/circus.jpg" alt="Circus Performance">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Circus Performance</h3>
                            <p>Amazing acrobatics and stunts</p>
                            <a href="images/circus.jpg" data-lightbox="gallery" data-title="Circus Performance"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 7 -->
            <div class="col-lg-4 col-md-6" data-category="festival">
                <div class="gallery-item">
                    <img src="images/IMG_1682.jpg" alt="Festival Crowd">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Festival Crowd</h3>
                            <p>Energetic audience enjoying the music</p>
                            <a href="images/IMG_1682.jpg" data-lightbox="gallery" data-title="Festival Crowd"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 8 -->
            <div class="col-lg-4 col-md-6" data-category="corporate">
                <div class="gallery-item">
                    <img src="images/IMG_1683.jpg" alt="Corporate Awards">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Corporate Awards</h3>
                            <p>Celebrating excellence in business</p>
                            <a href="images/IMG_1683.jpg" data-lightbox="gallery" data-title="Corporate Awards"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Item 9 -->
            <div class="col-lg-4 col-md-6" data-category="music">
                <div class="gallery-item">
                    <img src="images/IMG_1684.jpg" alt="Live Concert">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Live Concert</h3>
                            <p>Stunning stage performance</p>
                            <a href="images/IMG_1684.jpg" data-lightbox="gallery" data-title="Live Concert"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<!-- Video Gallery Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Video Gallery</h2>
            <p>Watch highlights from our most memorable events and performances.</p>
        </div>
        
        <div class="row">
            <!-- Video 1 -->
            <div class="col-lg-6 mb-4">
                <div class="gallery-item">
                    <img src="images/play.png" alt="Theatre Performance">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Theatre Performance</h3>
                            <p>Highlights from our latest theatrical production</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal1"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Video 2 -->
            <div class="col-lg-6 mb-4">
                <div class="gallery-item">
                    <img src="images/extra_1.jpg" alt="Music Festival">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h3>Music Festival</h3>
                            <p>Highlights from our annual music festival</p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal2"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Modal 1 -->
<div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel1">Theatre Performance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/your-video-id-1" title="Theatre Performance" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal 2 -->
<div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel2">Music Festival</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/your-video-id-2" title="Music Festival" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <h2>Want to See More?</h2>
        <p>Follow us on social media for the latest updates, behind-the-scenes content, and exclusive event photos.</p>
        <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
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
    
    // Gallery filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.gallery-filter');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.parentElement.getAttribute('data-category') === filterValue) {
                        item.parentElement.style.display = 'block';
                    } else {
                        item.parentElement.style.display = 'none';
                    }
                });
            });
        });
    });
    
    // Lightbox configuration
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': 'Image %1 of %2'
    });
</script>
</body>
</html>
