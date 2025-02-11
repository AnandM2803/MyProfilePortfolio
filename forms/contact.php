<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "anand1999m@gmail.com"; // Your email
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: " . $from_name . " <" . $from_email . ">\r\n";
    $headers .= "Reply-To: " . $from_email . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";  // Send only "success" as response
    } else {
        echo "error: Message could not be sent.";
    }
} else {
    echo "error: Invalid request.";
}
?>
