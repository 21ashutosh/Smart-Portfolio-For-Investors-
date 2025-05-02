<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Portfolio - <?php echo $__env->yieldContent('title'); ?></title>
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <i class="fas fa-chart-line me-2"></i>SmartPortfolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('portfolio')); ?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('market.trends')); ?>">Market Trends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('ai.recommendations')); ?>">AI Recommendations</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="/login" class="btn btn-outline-light me-2">Login</a>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4"><i class="fas fa-chart-line me-2"></i>SmartPortfolio</h5>
                    <p>Advanced portfolio management system designed to help investors make smarter decisions and maximize returns.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="<?php echo e(route('home')); ?>" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="<?php echo e(route('portfolio')); ?>" class="text-white">Portfolio</a></li>
                        <li class="mb-2"><a href="<?php echo e(route('market.trends')); ?>" class="text-white">Market Trends</a></li>
                        <li class="mb-2"><a href="<?php echo e(route('ai.recommendations')); ?>" class="text-white">AI Recommendations</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4">Newsletter</h5>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <?php echo e(date('Y')); ?> SmartPortfolio. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3">Privacy Policy</a>
                    <a href="#" class="text-white">Terms of Service</a>
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
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\smart-portfolio\smart-portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>