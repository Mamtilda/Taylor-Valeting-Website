<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $comments = $_POST["comments"];

    // Validate form data (add more validation as needed)
    if (empty($firstname) || empty($lastname) || empty($email) || empty($number) || empty($comments)) {
        echo "All fields are required.";
        exit;
    }

    // Set up email parameters
    $to = "youremail@example.com"; //replace youremail.com with the email address you want to receive the data
    $subject = "New Contact Form Submission";
    $message = "First Name: $firstname\nLast Name: $lastname\nEmail: $email\nNumber: $number\nComments: $comments";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your submission!";
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        echo "An error occurred. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
