<?php
// report.php - Simple report form for residents to report issues in the barangay
$message = '';

// Simple report submission processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $issue_type = $_POST['issue_type'];
    $description = $_POST['description'];
    
    $image_name = "no-image.jpg"; // Default value
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // In a real system, you would handle the file upload here
        $image_name = "report-" . time() . ".jpg";
    }
    
    $message = '<div class="success-msg">Thank you for your report! Your report has been recorded and will be addressed soon.</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Kanluran - Report an Issue</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f0f0f0;
        }
        

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
        

        .main-content {
            text-align: center;
            padding: 50px 20px;
            background-image: url('images/pattern-bg.png');
            background-color: #f0f0f0;
            min-height: 80vh;
        }
        

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
        

        .logo {
            width: 250px;
            margin-top: 30px;
            margin-bottom: 40px;
        }
        
        .report-form {
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
        
        .form-subtitle {
            color: #555;
            font-size: 14px;
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
        
        .input-group input, .input-group textarea, .input-group select {
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
        
        .example-title {
            font-weight: bold;
            margin-bottom: 10px;
            color: #555;
        }
        
        .examples {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        
        .example {
            width: 100px;
            height: 100px;
            background-color: #eee;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #777;
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

        
        <!-- Report form -->
        <div class="report-form">
            <div class="form-title">Report an Issue</div>
            <div class="form-subtitle">Help us improve our barangay by reporting problems such as street holes, broken street lights, or garbage issues.</div>
            
            <?php echo $message; ?>
            
            <form method="post" action="report.php" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Juan Dela Cruz" required>
                </div>
                
                <div class="input-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" name="contact" id="contact" placeholder="09XX XXX XXXX" required>
                </div>
                
                <div class="input-group">
                    <label for="location">Location of Issue</label>
                    <input type="text" name="location" id="location" placeholder="e.g. Rizal Street corner Bonifacio Avenue" required>
                </div>
                
                <div class="input-group">
                    <label for="issue_type">Type of Issue</label>
                    <select name="issue_type" id="issue_type" required>
                        <option value="">-- Select Issue Type --</option>
                        <option value="street_hole">Street Hole or Damage</option>
                        <option value="street_light">Street Light Not Working</option>
                        <option value="garbage">Garbage Collection Problem</option>
                        <option value="drainage">Clogged Drainage</option>
                        <option value="noise">Noise Complaint</option>
                        <option value="other">Other Issue</option>
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="description">Description of the Issue</label>
                    <textarea name="description" id="description" placeholder="Please provide details about the problem." required></textarea>
                </div>
                
                <div class="input-group">
                    <label for="image">Upload a Photo (optional)</label>
                    <input type="file" name="image" id="image" accept="image/*">
                </div>
                
                <button type="submit" class="submit-btn">Submit Report</button>
            </form>
        </div>
    </div>
</body>
</html>