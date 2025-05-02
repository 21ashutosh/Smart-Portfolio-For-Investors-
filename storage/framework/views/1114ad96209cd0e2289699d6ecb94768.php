<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Smart Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark-color);
            scroll-behavior: smooth;
        }
        
        section {
            padding: 100px 0;
        }
        
        .hero-section {
            background: url('https://images.unsplash.com/photo-1468254095679-bbcba94a7066?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center;
            background-size: cover;
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(44, 62, 80, 0.8);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border-top: 4px solid var(--primary-color);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .btn-custom {
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary-custom:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
        }
        
        .btn-outline-custom {
            border: 2px solid white;
            color: white;
        }
        
        .btn-outline-custom:hover {
            background-color: white;
            color: var(--dark-color);
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .nav-item {
            margin: 0 10px;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: var(--secondary-color) !important;
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-links a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
        }
        
        .social-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: white;
            transition: color 0.3s ease;
        }
        
        .social-icon:hover {
            color: var(--primary-color);
        }
        
        #features {
            background-color: #f8f9fa;
        }
        
        #about {
            background-color: white;
        }

        /* New styles for enhanced contact section */
        .contact-info-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease;
            border-left: 4px solid var(--primary-color);
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }

        .contact-map {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            min-height: 300px;
            border: none;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-chart-line me-2"></i>SmartPortfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="/login" class="btn btn-outline-light me-2">Login</a>
                    <a href="/register" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-3 fw-bold mb-4">Smart Portfolio Management</h1>
                <p class="lead mb-5">Advanced analytics and AI-driven insights to optimize your investment portfolio and maximize returns.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/register" class="btn btn-primary btn-custom btn-primary-custom">Get Started</a>
                    <a href="#features" class="btn btn-outline-custom btn-custom">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-card text-center">
                        <div class="stat-number">15K+</div>
                        <p class="mb-0">Active Users</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card text-center">
                        <div class="stat-number">$2.5B</div>
                        <p class="mb-0">Assets Managed</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card text-center">
                        <div class="stat-number">98%</div>
                        <p class="mb-0">Customer Satisfaction</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card text-center">
                        <div class="stat-number">24/7</div>
                        <p class="mb-0">Support Available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Powerful Features</h2>
                <p class="lead text-muted">Everything you need to manage your investments effectively</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3>Portfolio Analytics</h3>
                        <p>Detailed analysis of your investment portfolio with risk assessment and performance metrics.</p>
                        <a href="/portfolio" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Market Trends</h3>
                        <p>Real-time market data and trends to help you make informed investment decisions.</p>
                        <a href="/market-trends" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3>AI Recommendations</h3>
                        <p>Personalized investment recommendations powered by artificial intelligence.</p>
                        <a href="/ai-recommendations" class="btn btn-sm btn-outline-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">About Smart Portfolio</h2>
                    <p class="lead mb-4">We're revolutionizing investment management with cutting-edge technology and data-driven insights.</p>
                    <p>Founded in 2020, Smart Portfolio combines financial expertise with artificial intelligence to help investors of all levels make better decisions. Our platform analyzes millions of data points to provide personalized recommendations tailored to your financial goals.</p>
                    <p>Whether you're a seasoned investor or just getting started, our intuitive tools and analytics help you navigate the markets with confidence.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="About Smart Portfolio" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Contact Section -->
    <section id="contact" class="bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Contact Us</h2>
            <p class="lead text-muted">We'd love to hear from you</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Our Location</h4>
                    <p>Lovely Professional University, Grand trunk road, Jalandhar</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email Us</h4>
                    <p>support@smartportfolio.com<br>sales@smartportfolio.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Call Us</h4>
                    <p>+1 (800) 123-4567<br>Mon-Fri: 9am-6pm EST</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-5 g-4">
            <div class="col-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6821.53193307369!2d75.6991592437119!3d31.25490144734597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1745831237862!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4"><i class="fas fa-chart-line me-2"></i>SmartPortfolio</h5>
                    <p>Advanced portfolio management system designed to help investors make smarter decisions and maximize returns.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#home">Home</a></li>
                        <li class="mb-2"><a href="#features">Features</a></li>
                        <li class="mb-2"><a href="#about">About</a></li>
                        <li class="mb-2"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-4">Features</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="/portfolio">Portfolio</a></li>
                        <li class="mb-2"><a href="/market-trends">Market Trends</a></li>
                        <li class="mb-2"><a href="/ai-recommendations">AI Recommendations</a></li>
                        <li class="mb-2"><a href="#">Risk Analysis</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4">Newsletter</h5>
                    <p>Subscribe to our newsletter for the latest updates and investment insights.</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 SmartPortfolio. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="footer-links me-3">Privacy Policy</a>
                    <a href="#" class="footer-links">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\smart-portfolio\smart-portfolio\resources\views/home.blade.php ENDPATH**/ ?>