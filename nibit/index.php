<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nibit Technologies - The Best Microfinance & SACCO Software</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="include/main.css" rel="stylesheet">
    
</head>

<style>
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-section {
    background: url('assets/img/group-afro-americans-working-together.jpg') no-repeat center center/cover;
    min-height: 90vh;
    display: flex;
    align-items: center;
    position: relative;
    color: #fff;
}

.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Faded overlay */
    z-index: 1;
}

.hero-section .container {
    position: relative;
    z-index: 2;
    animation: fadeIn 1s ease-out;
}

.hero-content-box {
    background: rgba(0, 0, 0, 0.01);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border-radius: 15px;
    padding: 4rem;
    border: 1px solid rgba(255, 255, 255, 0.18);
}

/* Optional: Add a dark overlay for better text readability */
.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Adjust opacity as needed */
}

/* Ensure content is above the overlay */
.hero-section .container {
    position: relative;
    z-index: 2;
}




</style>
<body>
    <!-- Navigation -->
    <?php include_once("include/navbar.php")?>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content-box">
                        <h1 class="display-3 fw-bold mb-4">The Future of Financial Software is Here</h1>
                        <p class="lead mb-5">Power your Microfinance or SACCO with Nibit's intelligent, secure, and user-friendly platform. Designed for Kenya, built for growth.</p>
                        <div class="d-flex gap-3">
                            <a href="contact.php" class="btn btn-primary btn-lg px-4">Request a Demo</a>
                            <a href="software.php" class="btn btn-outline-light btn-lg px-4">Explore Features</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light" id="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">
                        <i class="fas fa-building-columns stats-icon"></i>
                        <h3 class="fw-bold" data-target="50">0+</h3>
                        <p class="mb-0">Financial Institutions Powered</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">
                        <i class="fas fa-users stats-icon"></i>
                        <h3 class="fw-bold" data-target="100000">0+</h3>
                        <p class="mb-0">Active Users</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">
                        <i class="fas fa-shield-alt stats-icon"></i>
                        <h3 class="fw-bold" data-target="99.9">0%</h3>
                        <p class="mb-0">Uptime</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">
                        <i class="fas fa-cogs stats-icon"></i>
                        <h3 class="fw-bold" data-target="10">0+</h3>
                        <p class="mb-0">Years of Innovation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Why Choose Nibit Software?</h2>
                <p class="lead">The most reliable and comprehensive platform for financial institutions in Kenya</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="feature-card p-4">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt fa-2x"></i>
                        </div>
                        <h4 class="text-center mb-3">Built for Kenya</h4>
                        <p class="text-center mb-0">Tailored to the unique needs of Kenyan SACCOs and Microfinance Institutions, including compliance and reporting.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card p-4">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code fa-2x"></i>
                        </div>
                        <h4 class="text-center mb-3">All-In-One Platform</h4>
                        <p class="text-center mb-0">Manage loans, savings, members, accounting, and more from a single, intuitive dashboard.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card p-4">
                        <div class="feature-icon">
                            <i class="fas fa-lock fa-2x"></i>
                        </div>
                        <h4 class="text-center mb-3">Secure & Reliable</h4>
                        <p class="text-center mb-0">Your data is protected with enterprise-grade security, regular backups, and a 99.9% uptime guarantee.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5 bg-light" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Key Software Features</h2>
                <p class="lead">Everything you need to run your financial institution efficiently.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="service-card">
                        <img src="assets/img/programming-background-with-person-working-with-codes-computer.jpg" class="card-img-top" alt="Loan Management">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Loan Management</h4>
                            <p class="mb-3">Comprehensive loan origination, servicing, and collections module.</p>
                            <div class="mb-4">
                               
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Automated Scoring</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Flexible Repayment Schedules</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrears Management</li>
                                </ul>
                            </div>
                            <a href="software.php" class="btn btn-primary w-100">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <img src="assets/img/man-making-plans-renovate-house-using-color-palette-laptop.jpg" class="card-img-top" alt="Member Management">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Member Management</h4>
                            <p class="mb-3">A complete CRM for your members with detailed profiles and history.</p>
                            <div class="mb-4">
                               
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Digital Onboarding</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Contribution Tracking</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Member Self-Service Portal</li>
                                </ul>
                            </div>
                            <a href="software.php" class="btn btn-primary w-100">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <img src="assets/img/analytics-plan-strategy-insight-concept.jpg" class="card-img-top" alt="Reporting & Analytics">
                        <div class="card-body p-4">
                            <h4 class="mb-3">Reporting & Analytics</h4>
                            <p class="mb-3">Generate key reports for management and regulatory compliance.</p>
                            <div class="mb-4">
                            
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Portfolio Analysis</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Financial Statements</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Custom Report Builder</li>
                                </ul>
                            </div>
                            <a href="software.php" class="btn btn-primary w-100">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5" id="contact">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2 class="text-primary mb-4">Request a Demo</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">I am interested in...</label>
                                        <select class="form-select">
                                            <option selected disabled>Select an option</option>
                                            <option>A Demo of the Software</option>
                                            <option>Pricing Information</option>
                                            <option>General Inquiry</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2 class="text-primary mb-4">Contact Information</h2>
                        <p class="lead">Ready to transform your institution? Get in touch with us today.</p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="contact-icon me-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Our Office</h5>
                                <p class="mb-0">123 Software Avenue, Nairobi, Kenya</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="contact-icon me-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Email Us</h5>
                                <p class="mb-0">sales@nibit.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="contact-icon me-3">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Call Us</h5>
                                <p class="mb-0">+254 712 345 678</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8166585954207!2d36.82194631475837!3d-1.286389399061441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d5b22145e3%3A0x2d34449873a21ca!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1663000000000!5m2!1sen!2sus" 
                                width="100%" 
                                height="250" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const statsSection = document.getElementById('stats-section');
            const counters = document.querySelectorAll('#stats-section .fw-bold');
            let animated = false;

            const animateCounters = () => {
                if (animated) return;
                animated = true;

                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const isDecimal = target.toString().includes('.');
                    const duration = 2000; // 2 seconds
                    let current = 0;
                    
                    const updateCount = () => {
                        const increment = target / (duration / 20); // Calculate increment based on duration
                        current += increment;

                        if (current < target) {
                            if (isDecimal) {
                                counter.innerText = current.toFixed(1) + '%';
                            } else {
                                counter.innerText = Math.ceil(current).toLocaleString() + '+';
                            }
                            setTimeout(updateCount, 20);
                        } else {
                            if (isDecimal) {
                                counter.innerText = target + '%';
                            } else {
                                counter.innerText = target.toLocaleString() + '+';
                            }
                        }
                    };
                    updateCount();
                });
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 }); // Trigger when 50% of the element is visible

            observer.observe(statsSection);
        });
    </script>
</body>
</html>