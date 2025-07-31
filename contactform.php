<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = trim($_POST["email"] ?? '');
    $phone = trim($_POST["phone"] ?? '');
    $service = strip_tags(trim($_POST["service"] ?? ''));
    $honeypot = trim($_POST["website"] ?? ''); // Hidden field for bots

    // 1. Honeypot check (basic spam protection)
    if (!empty($honeypot)) {
        http_response_code(200); // Bot caught
        exit();
    }

    // 2. Validate input
    if (
        empty($name) ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        empty($phone) ||
        empty($service)
    ) {
        die("Invalid form submission.");
    }

    // 3. Email content
    $to = "chandhuarun120@gmail.com";  // Where you want to receive
    $subject = "New Contact Form Submission from $name";

    $message = "You have a new contact form submission:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Service: $service\n";

    // 4. Proper headers
    $fromEmail = "info@pixelnbrand.com"; // Use a domain-based email
    $headers = "From: PixelNBrand <$fromEmail>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 5. Send email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thanks.php");
        exit();
    } else {
        echo "Sorry, your message could not be sent.";
    }
} else {
    echo "Invalid request method.";
}
?>

