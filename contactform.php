<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = trim($_POST["email"] ?? '');
    $phone = trim($_POST["phone"] ?? '');
    $service = strip_tags(trim($_POST["service"] ?? ''));
    $honeypot = trim($_POST["website"] ?? '');

    // 1. Honeypot check (basic spam protection)
    if (!empty($honeypot)) {
        http_response_code(200); // Don't trigger bot retries
        exit();
    }

    // 2. Validate required fields
    if (
        empty($name) ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        empty($phone) ||
        empty($service)
    ) {
        die("Invalid form submission.");
    }

    // 3. Compose message
    $to = "chandhuarun120@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "You have a new contact request:\n\n"
        . "Name: $name\n"
        . "Email: $email\n"
        . "Phone: $phone\n"
        . "Service: $service\n";
    
    $headers = "From: noreply@" . $_SERVER['SERVER_NAME'] . "\r\n";
    $headers .= "Reply-To: $email\r\n";

    // 4. Send the email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thanks.php");
        exit();
    } else {
        echo "Sorry, the message could not be sent.";
    }
} else {
    echo "Invalid request method.";
}
?>
