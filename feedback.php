<?php

$message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    

    $message = '<div class="success-msg">Thank you for your feedback!</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Kanluran - Feedback</title>
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
        .feedback-form {
            background-color: white;
            max-width: 600px;
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
        
        .input-group input, .input-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        .input-group textarea {
            height: 150px;
            resize: vertical;
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

        

        <div class="feedback-form">
            <div class="form-title">Share Your Feedback</div>
            
            <?php echo $message; ?>
            
            <form method="post" action="feedback.php">
                <div class="input-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <div class="input-group">
                    <label for="feedback">Your Feedback</label>
                    <textarea name="feedback" id="feedback" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Submit Feedback</button>
            </form>
        </div>
    </div>
</body>
</html>