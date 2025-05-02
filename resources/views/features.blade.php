<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | Smart Portfolio</title>
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
            min-height: 100vh;
            color: var(--dark-color);
        }
        
        .feature-hero {
            background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center;
            background-size: cover;
            padding: 120px 0;
            position: relative;
        }
        
        .feature-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(44, 62, 80, 0.8);
        }
        
        .feature-hero-content {
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
        
        .feature-tabs .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            border: none;
            padding: 1rem 1.5rem;
        }
        
        .feature-tabs .nav-link.active {
            color: var(--primary-color);
            background-color: transparent;
            border-bottom: 3px solid var(--primary-color);
        }
        
        .feature-tab-content {
            background-color: white;
            border-radius: 0 0 10px 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .comparison-table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .comparison-table th {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem;
        }
        
        .comparison-table td {
            padding: 1rem;
            vertical-align: middle;
        }
        
        .check-icon {
            color: var(--success-color);
        }
        
        .x-icon {
            color: var(--danger-color);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-chart-line me-2"></i>SmartPortfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
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
    <section class="feature-hero">
        <div class="container">
            <div class="feature-hero-content text-center">
                <h1 class="display-3 fw-bold mb-4">Smart Portfolio Features</h1>
                <p class="lead mb-5">Discover the powerful tools that will transform how you manage your investments</p>
            </div>
        </div>
    </section>

    <!-- Features Tabs -->
    <section class="py-5">
        <div class="container">
            <ul class="nav nav-tabs feature-tabs" id="featuresTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="analytics-tab" data-bs-toggle="tab" data-bs-target="#analytics" type="button" role="tab">Analytics</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ai-tab" data-bs-toggle="tab" data-bs-target="#ai" type="button" role="tab">AI Tools</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="management-tab" data-bs-toggle="tab" data-bs-target="#management" type="button" role="tab">Management</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">Security</button>
                </li>
            </ul>
            <div class="feature-tab-content" id="featuresTabContent">
                <div class="tab-pane fade show active" id="analytics" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <h3>Portfolio Analysis</h3>
                                <p>Comprehensive breakdown of your asset allocation, sector exposure, and performance metrics with interactive visualizations.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Real-time performance tracking</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Historical return analysis</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Custom benchmark comparison</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3>Market Trends</h3>
                                <p>Stay ahead with real-time market data, sector heatmaps, and emerging trend identification.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Customizable watchlists</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Economic calendar</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Sentiment analysis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ai" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <h3>AI Recommendations</h3>
                                <p>Personalized investment suggestions based on machine learning analysis of market conditions and your portfolio.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Buy/sell/hold recommendations</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Confidence scoring</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Alternative scenario modeling</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <h3>Predictive Analytics</h3>
                                <p>Forecast potential portfolio performance under different market conditions using our advanced algorithms.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Risk assessment modeling</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Scenario planning</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Stress testing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="management" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3>Rebalancing Tools</h3>
                                <p>Automated suggestions to keep your portfolio aligned with your target allocation and risk profile.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>One-click rebalancing</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Tax-efficient suggestions</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Custom allocation targets</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <h3>Trade Execution</h3>
                                <p>Seamlessly execute trades across connected brokerage accounts with advanced order types.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Multi-broker support</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Bulk trade execution</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Real-time confirmation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="security" role="tabpanel">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3>Bank-Level Security</h3>
                                <p>Your data and investments are protected with enterprise-grade security measures.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>256-bit encryption</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Two-factor authentication</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Read-only API connections</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card">
                                <div class="feature-icon">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                <h3>Privacy Controls</h3>
                                <p>Granular control over your data and how it's used to power your investment insights.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Data sharing preferences</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Export/delete your data</li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i>Activity monitoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Compare Plans</h2>
                <p class="lead text-muted">Find the perfect plan for your investment needs</p>
            </div>
            <div class="comparison-table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Basic</th>
                            <th>Pro</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Portfolio Analytics</td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>AI Recommendations</td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Advanced Charting</td>
                            <td><i class="fas fa-times x-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Predictive Analytics</td>
                            <td><i class="fas fa-times x-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Automated Rebalancing</td>
                            <td><i class="fas fa-times x-icon"></i></td>
                            <td><i class="fas fa-times x-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                        </tr>
                        <tr>
                            <td>Dedicated Support</td>
                            <td><i class="fas fa-times x-icon"></i></td>
                            <td><i class="fas fa-times x-icon"></i></td>
                            <td><i class="fas fa-check check-icon"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3">Ready to experience these features?</h2>
                    <p class="lead mb-0">Start your free trial today and discover how Smart Portfolio can transform your investing.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="/register" class="btn btn-primary btn-lg">Start Free Trial</a>
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
                        <li class="mb-2"><a href="/">Home</a></li>
                        <li class="mb-2"><a href="/features">Features</a></li>
                        <li class="mb-2"><a href="#">Pricing</a></li>
                        <li class="mb-2"><a href="#">About</a></li>
                        <li class="mb-2"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-4">Features</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="/portfolio">Portfolio</a></li>
                        <li class="mb-2"><a href="/market-trends">Market Trends</a></li>
                        <li class="mb-2"><a href="#">AI Tools</a></li>
                        <li class="mb-2"><a href="#">Security</a></li>
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
</body>
</html>