<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Nibit Technologies</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="include/main.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include_once "include/navbar.php" ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead mb-0">Get in touch with our team for demos, sales, or support.</p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <!-- Phone -->
                <div class="col-md-4">
                    <div class="contact-info-card p-4 text-center h-100">
                        <div class="feature-icon mx-auto mb-3"><i class="fas fa-phone fa-2x"></i></div>
                        <h4 class="mb-3">Call Us</h4>
                        <p class="mb-2">Our team is available during business hours to assist you.</p>
                        <p class="h5 mb-0 text-primary">+254 712 345 678</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="contact-info-card p-4 text-center h-100">
                        <div class="feature-icon mx-auto mb-3"><i class="fas fa-envelope fa-2x"></i></div>
                        <h4 class="mb-3">Email Us</h4>
                        <p class="mb-2">For sales inquiries:</p>
                        <p class="h5 mb-2 text-primary">sales@nibit.com</p>
                        <p class="mb-2">For technical support:</p>
                        <p class="h5 mb-0 text-primary">support@nibit.com</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-md-4">
                    <div class="contact-info-card p-4 text-center h-100">
                        <div class="feature-icon mx-auto mb-3"><i class="fas fa-share-alt fa-2x"></i></div>
                        <h4 class="mb-3">Follow Us</h4>
                        <p>Stay connected on social media for updates.</p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="#" class="social-link text-primary fs-3"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-link text-primary fs-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link text-primary fs-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link text-primary fs-3"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5 align-items-center">
                <!-- Location Information -->
                <div class="col-lg-6">
                    <div class="bg-light p-4 rounded-3 h-100">
                        <h3 class="text-primary mb-4">Our Office</h3>
                        <div class="mb-4">
                            <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i><strong>Address:</strong> 123 Software Avenue, Nairobi, Kenya</p>
                            <p class="mb-0"><i class="fas fa-directions me-2"></i>Visit us for a scheduled demo or meeting.</p>
                        </div>
                         <h3 class="text-primary mb-4">Business Hours</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-clock me-2"></i>Monday - Friday</span>
                                <span>9:00 AM - 5:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span><i class="fas fa-clock me-2"></i>Saturday</span>
                                <span>Closed</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span><i class="fas fa-clock me-2"></i>Sunday</span>
                                <span>Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Map -->
                <div class="col-lg-6">
                    <div class="map-container" style="height: 400px; border-radius: 15px; overflow: hidden;"> 
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.3586913196!2d36.70730894560793!3d-1.286389995287737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-card p-4">
                        <h3 class="text-primary mb-4">Request a Demo or Send a Message</h3>
                        <form action="end-point.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Subject</label>
                                        <select class="form-select" name="subject" required>
                                            <option value="">Select Subject</option>
                                            <option value="demo">Request a Demo</option>
                                            <option value="pricing">Pricing Inquiry</option>
                                            <option value="support">Technical Support</option>
                                            <option value="general">General Inquiry</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" name="message" rows="5" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 Nibit Technologies. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>