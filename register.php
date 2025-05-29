<?php
// register.php - Simple registration page for beginners
$message = '';

// Very simple registration processing (for beginners)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Basic validation
    if ($password != $confirm_password) {
        $message = '<div class="error-msg">Passwords do not match!</div>';
    } else {
        // In a real system, you would save this to a database
        // For beginners, we'll just show a success message
        $message = '<div class="success-msg">Registration successful! You can now <a href="login.php">login</a>.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Kanluran - Register</title>
    <style>
        /* Simple CSS for beginners */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f0f0f0;
        }
        
        /* Top navigation bar with green gradient */
        .navbar {
            background: linear-gradient(to right, #7de6ae, #197c4d);
            color: white;
            padding: 15px 40px;
            text-align: right;
        }
        
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }
        
        /* Main content area with pattern background */
        .main-content {
            text-align: center;
            padding: 50px 20px;
            background-image: url('images/pattern-bg.png');
            background-color: #f0f0f0;
            min-height: 80vh;
        }
        
        /* Title styling */
        .title-green {
            color: #2d7c3b;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .title-black {
            color: #333;
            font-size: 72px;
            font-weight: bold;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        
        /* Logo styling */
        .logo {
            width: 250px;
            margin-top: 30px;
            margin-bottom: 40px;
        }
        
        /* Form styling */
        .register-form {
            background-color: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .form-title {
            color: #2d7c3b;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        .submit-btn {
            background-color: #2d7c3b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        
        .error-msg {
            color: red;
            margin-bottom: 15px;
        }
        
        .success-msg {
            color: green;
            margin-bottom: 15px;
        }
        
        .login-link {
            margin-top: 15px;
            font-size: 14px;
        }
        
        .login-link a {
            color: #2d7c3b;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <div class="navbar">
        <a href="feedback.php">FEEDBACKS</a>
        <a href="projects.php">PROJECTS</a>
        <a href="report.php">REPORT</a>
        <a href="register.php">REGISTER</a>
        <a href="login.php">LOG IN</a>
    </div>
    
    <!-- Main content with barangay name and logo -->
    <div class="main-content">
        <div class="title-green">BARANGAY</div>
        <div class="title-black">KANLURAN</div>

        
        <!-- Registration form -->
        <div class="register-form">
            <div class="form-title">Create an Account</div>
            
            <?php echo $message; ?>
            
            <form method="post" action="register.php">
                <div class="input-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" id="fullname" required>
                </div>
                
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                
                <div class="input-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
                
                <button type="submit" class="submit-btn">Register</button>
                
                <div class="login-link">
                    Already have an account? <a href="login.php">Login here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>