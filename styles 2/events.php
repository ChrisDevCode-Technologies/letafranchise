<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - LetaFranchise</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/OCEAN-FEST.jpg') center/cover no-repeat;
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
        
        .event-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }
        
        .event-filter {
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
        
        .event-filter:hover, .event-filter.active {
            background-color: var(--secondary-color);
            color: #fff;
        }
        
        .event-item {
            margin-bottom: 50px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .event-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .event-image {
            position: relative;
            overflow: hidden;
            height: 250px;
        }
        
        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .event-item:hover .event-image img {
            transform: scale(1.1);
        }
        
        .event-date {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--secondary-color);
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: 600;
        }
        
        .event-date .day {
            font-size: 24px;
            line-height: 1;
            display: block;
        }
        
        .event-date .month {
            font-size: 14px;
            text-transform: uppercase;
        }
        
        .event-content {
            padding: 30px;
        }
        
        .event-content h3 {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        .event-meta {
            display: flex;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .event-meta-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            margin-bottom: 10px;
            color: #666;
        }
        
        .event-meta-item i {
            color: var(--secondary-color);
            margin-right: 8px;
        }
        
        .event-content p {
            margin-bottom: 20px;
            color: #666;
        }
        
        .event-tags {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .event-tag {
            background-color: var(--light-color);
            color: var(--text-color);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-right: 10px;
            margin-bottom: 10px;
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
            
            .event-image {
                height: 200px;
            }
        }
    </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <h1>Our Events</h1>
        <p>Discover our upcoming events and relive the magic of our past performances.</p>
    </div>
</header>

<!-- Events Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Upcoming Events</h2>
            <p>Join us for our upcoming events and be part of unforgettable entertainment experiences.</p>
        </div>
        
        <!-- Event Filters -->
        <div class="event-filters">
            <button class="event-filter active" data-filter="all">All Events</button>
            <button class="event-filter" data-filter="music">Music</button>
            <button class="event-filter" data-filter="theatre">Theatre</button>
            <button class="event-filter" data-filter="festival">Festival</button>
            <button class="event-filter" data-filter="corporate">Corporate</button>
        </div>
        
        <div class="row">
            <!-- Event 1 -->
            <div class="col-lg-4 col-md-6" data-category="music">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/musical.jpg" alt="Summer Music Festival">
                        <div class="event-date">
                            <span class="day">15</span>
                            <span class="month">JUN</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Summer Music Festival</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>7:00 PM - 11:00 PM</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Central Park Arena</span>
                            </div>
                        </div>
                        <p>A night of incredible music featuring top artists from around the world. Join us for an unforgettable evening of live performances.</p>
                        <div class="event-tags">
                            <span class="event-tag">Music</span>
                            <span class="event-tag">Festival</span>
                            <span class="event-tag">Live</span>
                        </div>
                        <a href="#" class="btn btn-primary">Book Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 2 -->
            <div class="col-lg-4 col-md-6" data-category="theatre">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/PANTOMIME.jpg" alt="The Phantom of the Opera">
                        <div class="event-date">
                            <span class="day">22</span>
                            <span class="month">JUN</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>The Phantom of the Opera</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>8:00 PM - 10:30 PM</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Grand Theatre</span>
                            </div>
                        </div>
                        <p>Experience the magic of Andrew Lloyd Webber's masterpiece in this stunning theatrical production with a talented cast and orchestra.</p>
                        <div class="event-tags">
                            <span class="event-tag">Theatre</span>
                            <span class="event-tag">Musical</span>
                            <span class="event-tag">Classic</span>
                        </div>
                        <a href="#" class="btn btn-primary">Book Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 3 -->
            <div class="col-lg-4 col-md-6" data-category="festival">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/OCEAN-FEST.jpg" alt="Ocean Festival">
                        <div class="event-date">
                            <span class="day">05</span>
                            <span class="month">JUL</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Ocean Festival</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>All Day</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Beachfront Arena</span>
                            </div>
                        </div>
                        <p>A celebration of ocean culture with music, food, art, and activities for the whole family. Join us for a day of fun by the sea.</p>
                        <div class="event-tags">
                            <span class="event-tag">Festival</span>
                            <span class="event-tag">Family</span>
                            <span class="event-tag">Outdoor</span>
                        </div>
                        <a href="#" class="btn btn-primary">Book Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 4 -->
            <div class="col-lg-4 col-md-6" data-category="corporate">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/lighting event.jpg" alt="Corporate Gala">
                        <div class="event-date">
                            <span class="day">18</span>
                            <span class="month">JUL</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Corporate Gala</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>6:30 PM - 11:00 PM</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Luxury Hotel Ballroom</span>
                            </div>
                        </div>
                        <p>An elegant evening of networking, entertainment, and celebration for corporate leaders and their guests.</p>
                        <div class="event-tags">
                            <span class="event-tag">Corporate</span>
                            <span class="event-tag">Networking</span>
                            <span class="event-tag">Gala</span>
                        </div>
                        <a href="#" class="btn btn-primary">Book Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 5 -->
            <div class="col-lg-4 col-md-6" data-category="music">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/dj.jpg" alt="DJ Night">
                        <div class="event-date">
                            <span class="day">25</span>
                            <span class="month">JUL</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>DJ Night</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>9:00 PM - 2:00 AM</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Club Pulse</span>
                            </div>
                        </div>
                        <p>A night of non-stop music with top DJs spinning the latest hits and classic tracks. Get ready to dance the night away!</p>
                        <div class="event-tags">
                            <span class="event-tag">Music</span>
                            <span class="event-tag">DJ</span>
                            <span class="event-tag">Nightlife</span>
                        </div>
                        <a href="#" class="btn btn-primary">Book Tickets</a>
                    </div>
                </div>
            </div>
            
            <!-- Event 6 -->
            <div class="col-lg-4 col-md-6" data-category="theatre">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/circus.jpg" alt="Circus Spectacular">
                        <div class="event-date">
                            <span class="day">01</span>
                            <span class="month">AUG</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Circus Spectacular</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>3:00 PM - 5:00 PM</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>City Arena</span>
                            </div>
                        </div>
                        <p>A breathtaking circus performance featuring acrobats, clowns, and amazing stunts that will leave you in awe.</p>
                        <div class="event-tags">
                            <span class="event-tag">Theatre</span>
                            <span class="event-tag">Circus</span>
                            <span class="event-tag">Family</span>
                        </div>
                        <a href="#" class="btn btn-primary">Book Tickets</a>
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

<!-- Past Events Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Past Events</h2>
            <p>Take a look at some of our most memorable past events and performances.</p>
        </div>
        
        <div class="row">
            <!-- Past Event 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/IMG_1682.jpg" alt="Spring Music Festival">
                        <div class="event-date">
                            <span class="day">10</span>
                            <span class="month">APR</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Spring Music Festival</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Past Event</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Central Park Arena</span>
                            </div>
                        </div>
                        <p>A successful spring music festival featuring local and international artists. The event was attended by over 5,000 music lovers.</p>
                        <div class="event-tags">
                            <span class="event-tag">Music</span>
                            <span class="event-tag">Festival</span>
                            <span class="event-tag">Past</span>
                        </div>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            
            <!-- Past Event 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/IMG_1683.jpg" alt="Corporate Awards Night">
                        <div class="event-date">
                            <span class="day">22</span>
                            <span class="month">MAR</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Corporate Awards Night</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Past Event</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Luxury Hotel Ballroom</span>
                            </div>
                        </div>
                        <p>A prestigious corporate awards ceremony celebrating excellence in business. The event featured keynote speakers and entertainment.</p>
                        <div class="event-tags">
                            <span class="event-tag">Corporate</span>
                            <span class="event-tag">Awards</span>
                            <span class="event-tag">Past</span>
                        </div>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            
            <!-- Past Event 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="event-item">
                    <div class="event-image">
                        <img src="images/IMG_1684.jpg" alt="Theatre Production">
                        <div class="event-date">
                            <span class="day">05</span>
                            <span class="month">FEB</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3>Theatre Production</h3>
                        <div class="event-meta">
                            <div class="event-meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Past Event</span>
                            </div>
                            <div class="event-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Grand Theatre</span>
                            </div>
                        </div>
                        <p>A critically acclaimed theatrical production that ran for two weeks to sold-out audiences. The show received multiple awards.</p>
                        <div class="event-tags">
                            <span class="event-tag">Theatre</span>
                            <span class="event-tag">Drama</span>
                            <span class="event-tag">Past</span>
                        </div>
                        <a href="#" class="btn btn-primary">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <h2>Don't Miss Out on Our Upcoming Events</h2>
        <p>Book your tickets now and be part of our next amazing event. Follow us on social media for the latest updates and exclusive offers.</p>
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
    
    // Event filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.event-filter');
        const eventItems = document.querySelectorAll('.event-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                eventItems.forEach(item => {
                    if (filterValue === 'all' || item.parentElement.getAttribute('data-category') === filterValue) {
                        item.parentElement.style.display = 'block';
                    } else {
                        item.parentElement.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
</body>
</html> 