<?php

$error = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if ($username == "admin" && $password == "password123") {
        // Start session and redirect
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Wrong username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Kanluran - Login</title>
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
        .login-form {
            background-color: white;
            max-width: 400px;
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
        
        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }
        
        .register-link a {
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
    

    <div class="main-content">
        <div class="title-green">BARANGAY</div>
        <div class="title-black">KANLURAN</div>

        

        <div class="login-form">
            <div class="form-title">Login to your account</div>
            
            <?php if($error != ''): ?>
                <div class="error-msg"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form method="post" action="login.php">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                
                <button type="submit" class="submit-btn">Login</button>
                
                <div class="register-link">
                    Don't have an account? <a href="register.php">Register here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>