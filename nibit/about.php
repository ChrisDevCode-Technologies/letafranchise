<?php
// Initialize session if needed
//session_start();

// Add any PHP processing logic here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Nibit Technologies</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="include/main.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include_once("include/navbar.php")?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">About Nibit Technologies</h1>
            <p class="lead mb-0">Pioneering the future of financial software in Kenya.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <!-- Our Story Section -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <img src="assets/img/group-afro-americans-working-together.jpg" class="img-fluid rounded-3" alt="Our Team Collaborating">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-primary mb-3">Our Story</h2>
                    <p>Founded in 2018, Nibit Technologies was born from a vision to revolutionize the financial sector in Kenya through technology. Our founders, a team of experienced software engineers and financial experts, saw a critical need for a modern, reliable, and scalable core banking system specifically designed for the unique challenges of Kenyan SACCOs and microfinance institutions.</p>
                    <p>We spent years in research and development, working closely with industry stakeholders to build a platform that is not just a tool, but a true growth partner. Today, Nibit is a leading provider of financial software, empowering institutions to enhance efficiency, manage risk, and better serve their members.</p>
                </div>
            </div>

            <!-- Vision and Mission -->
            <div class="row text-center mb-5">
                <div class="col-lg-6">
                    <div class="p-4 bg-light rounded-3 h-100">
                        <i class="fas fa-eye fa-3x text-primary mb-3"></i>
                        <h3 class="mb-3">Our Vision</h3>
                        <p>To be the most trusted and innovative provider of financial software solutions that power financial inclusion across Africa.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light rounded-3 h-100">
                        <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                        <h3 class="mb-3">Our Mission</h3>
                        <p>To empower financial institutions with cutting-edge technology that enhances efficiency, promotes financial inclusion, and drives sustainable growth for the communities they serve.</p>
                    </div>
                </div>
            </div>

            <!-- Our Kenyan Focus Section -->
            <div class="mb-5 py-5 bg-light rounded-3">
                <div class="container">
                    <h2 class="text-primary mb-4 text-center">Our Kenyan Focus</h2>
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <p>We are a Kenyan company building for Kenyan businesses. Our deep understanding of the local financial landscape is embedded in our software. We provide solutions that work out-of-the-box with the systems that matter to you.</p>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i><strong>M-PESA Integration:</strong> Seamlessly process payments and disbursements with Kenya's leading mobile money platform.</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i><strong>iTax & KRA Compliance:</strong> Generate reports that are compliant with Kenya Revenue Authority standards, simplifying your tax filing.</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i><strong>SASRA & CBK Reporting:</strong> Our reporting module is designed to meet the specific requirements of Kenyan financial regulators.</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i><strong>Local Support:</strong> Our customer success team is based in Nairobi, providing you with timely and relevant support.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                             <img src="assets/img/african-american-man-working-computer-write-code-programming.jpg" class="img-fluid rounded-3" alt="Developer working on Kenyan integrations">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Values Section -->
            <div class="mb-5">
                <h2 class="text-primary mb-4 text-center">Our Core Values</h2>
                <div class="row g-4">
                    <div class="col-md-3 text-center">
                        <div class="feature-icon mb-3"><i class="fas fa-lightbulb fa-2x"></i></div>
                        <h5>Innovation</h5>
                        <p>We constantly innovate to create solutions that solve real-world problems.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="feature-icon mb-3"><i class="fas fa-handshake fa-2x"></i></div>
                        <h5>Integrity</h5>
                        <p>We build trust through transparent and ethical practices in everything we do.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="feature-icon mb-3"><i class="fas fa-users fa-2x"></i></div>
                        <h5>Customer Partnership</h5>
                        <p>We succeed when our clients succeed. We are partners in their growth.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="feature-icon mb-3"><i class="fas fa-check-double fa-2x"></i></div>
                        <h5>Reliability</h5>
                        <p>We are committed to delivering a secure, stable, and dependable platform.</p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mb-5">
                <h2 class="text-primary mb-4 text-center">Meet Our Leadership</h2>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="assets/img/leadership-management-skills-leader-support-concept.jpg" class="img-fluid rounded-circle mb-3" alt="Team Member">
                        <h5 class="mb-1">Jane Doe</h5>
                        <p class="text-muted">Chief Executive Officer</p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="https://via.placeholder.com/200x200/cccccc/FFFFFF?text=Team+Member" class="img-fluid rounded-circle mb-3" alt="Team Member">
                        <h5 class="mb-1">John Smith</h5>
                        <p class="text-muted">Chief Technology Officer</p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="https://via.placeholder.com/200x200/cccccc/FFFFFF?text=Team+Member" class="img-fluid rounded-circle mb-3" alt="Team Member">
                        <h5 class="mb-1">Maryanne Peters</h5>
                        <p class="text-muted">Head of Product</p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <img src="https://via.placeholder.com/200x200/cccccc/FFFFFF?text=Team+Member" class="img-fluid rounded-circle mb-3" alt="Team Member">
                        <h5 class="mb-1">David Kimani</h5>
                        <p class="text-muted">Head of Customer Success</p>
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