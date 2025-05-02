<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Smart Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .login-container {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
        }
        
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .login-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .login-body {
            padding: 2rem;
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }
        
        .btn-login {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            width: 100%;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }
        
        .btn-back {
            background-color: white;
            color: var(--dark-color);
            border: 1px solid #e0e0e0;
            padding: 12px 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            width: 100%;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border-right: none;
        }
        
        .input-with-icon {
            border-left: none;
            padding-left: 0;
        }
        
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
        
        .password-container {
            position: relative;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 1.5rem 0;
            color: #6c757d;
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .divider::before {
            margin-right: 1rem;
        }
        
        .divider::after {
            margin-left: 1rem;
        }
        
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .social-btn i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .btn-google {
            background-color: #fff;
            color: #757575;
            border: 1px solid #e0e0e0;
        }
        
        .btn-google:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
        }
        
        .btn-facebook {
            background-color: #3b5998;
            color: white;
            border: 1px solid #3b5998;
        }
        
        .btn-facebook:hover {
            background-color: #344e86;
            transform: translateY(-2px);
        }
        
        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
        }
        
        .register-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        .forgot-password {
            text-align: right;
            margin-top: 0.5rem;
        }
        
        .forgot-password a {
            color: #6c757d;
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .forgot-password a:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="login-card">
            <div class="login-header">
                <h2><i class="fas fa-sign-in-alt me-2"></i>Welcome Back</h2>
                <p class="mb-0">Sign in to access your Smart Portfolio</p>
            </div>
            <div class="login-body">
                <form method="POST" action="/login" id="loginForm">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control input-with-icon" id="email" name="email" placeholder="your@email.com" required>
                        </div>
                    </div>
                    
                    <div class="mb-3 password-container">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control input-with-icon" id="password" name="password" placeholder="Enter your password" required>
                            <span class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <div class="forgot-password">
                            <a href="/forgot-password">Forgot password?</a>
                        </div>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    
                    <button type="submit" class="btn btn-login mb-3">Sign In</button>
                    <a href="/" class="btn btn-back">Back to Home</a>
                    
                    <div class="divider">or sign in with</div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <a href="#" class="btn social-btn btn-google">
                                <i class="fab fa-google"></i> Google
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="#" class="btn social-btn btn-facebook">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                        </div>
                    </div>
                    
                    <div class="register-link">
                        Don't have an account? <a href="/register">Create one</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Form submission with redirect
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate successful login (replace with actual form submission)
            // In a real application, this would be handled by your backend
            setTimeout(() => {
                window.location.href = '/dashboard'; // Redirect to dashboard
            }, 1000);
            
            return true;
        });
    </script>
</body>
</html>