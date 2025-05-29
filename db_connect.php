<?php 
include 'db_connect.php';

// Then replace the form processing code with:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $issue_type = $_POST['issue_type'];
    $description = $_POST['description'];
    
    // Handle file upload code here...
    // Save to database
    $sql = "INSERT INTO reports (name, contact, location, issue_type, description, image) 
            VALUES ('$name', '$contact', '$location', '$issue_type', '$description', '$image_name')";
    
    if ($conn->query($sql) === TRUE) {
        $message = '<div class="success-msg">Thank you! Your report has been recorded.</div>';
    } else {
        $message = '<div class="error-msg">Error: ' . $conn->error . '</div>';
    }
}

?>