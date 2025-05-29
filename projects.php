<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Kanluran - Projects</title>
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
        
        /* Project gallery styling */
        .project-gallery {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }
        
        .project-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .project-card img {
            width: 100%;
            height: auto;
        }
        
        /* Page title styling */
        .page-title {
            color: #2d7c3b;
            font-size: 32px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

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

        

        <div class="page-title">Upcoming Events & Projects</div>
        
        <div class="project-gallery">
            <div class="project-card">
                <img src="pictures/image 1.png" alt="Larong Pinoy Event">
            </div>
            

            <div class="project-card">
                <img src="pictures/image 2.png" alt="Interbarangay Basketball League">
            </div>
            

            <div class="project-card">
                <img src="pictures/image 3.png" alt="Sports Summer League">
            </div>
            

            <div class="project-card">
                <img src="pictures/image 4.png" alt="Mobile Legends Tournament">
            </div>
        </div>
    </div>
</body>
</html>