<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $honeypot = trim($_POST["website"]);

    // ✅ 1. Honeypot Check (if filled, treat as spam)
    if (!empty($honeypot)) {
        // Log it or silently fail
        http_response_code(200); // Return OK to not alert bots
        exit();
    }

    // ✅ 2. Email Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // ✅ 3. Rate limiting or duplicate detection (Optional: store emails to avoid abuse)
    // Example: basic file log check (you could use a DB or session instead)
    $email_log = 'submissions.log';
    if (file_exists($email_log)) {
        $entries = file_get_contents($email_log);
        if (strpos($entries, $email) !== false) {
            die("You've already subscribed.");
        }
    }

    // ✅ 4. Sanitize email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // ✅ 5. Send email
    $to = "chandhuarun120@gmail.com";
    $subject = "New Subscriber";
    $message = "You have a new subscriber: $email";
    $headers = "From: noreply@" . $_SERVER['SERVER_NAME'] . "\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // ✅ 6. Save email to log (for rate limiting)
        file_put_contents($email_log, "$email\n", FILE_APPEND);

        // ✅ 7. Redirect to thank you page
        header("Location: thanks.php");
        exit();
    } else {
        echo "Failed to send email. Try again.";
    }
} else {
    echo "Invalid request.";
}
?>
