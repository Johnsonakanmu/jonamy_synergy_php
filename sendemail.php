<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitContact'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create an instance; passing true enables exceptions
  $mail = new PHPMailer(true);

  try {
    // Use the isMail() method to send email using PHP's built-in mail() function
    $mail->isMail();

    // Set the sender's address
    $mail->setFrom('notification@jonamjosynergynigltd.com', 'From Jonahet & Co'); //U have to generate mail from the c panel
    // Add a recipient
    $mail->addAddress('info@jonamjosynergynigltd.com', 'From Jonahet & Co');

    // Set the email format to HTML
    $mail->isHTML(true);
    $mail->Subject = 'New enquiry from user';

    // Sanitize and set the email body
    $mail->Body = '<p>' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</p>' .
      '<p><strong>Username:</strong> ' . htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . '</p>' .
      '<p><strong>Email:</strong> ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</p>' .
      '<p><strong>Phone:</strong> ' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</p>' .
      '<p><strong>Subject:</strong> ' . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . '</p>';

    // Try to send the email and provide feedback
    if ($mail->send()) {
      $_SESSION['status'] = "Thank you for contacting us - Team Jonahnet";
      header("Location: {$_SERVER["HTTP_REFERER"]}");
      exit(0);
    } else {
      $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      header("Location: {$_SERVER["HTTP_REFERER"]}");
      exit(0);
    }
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
} else {
  header('Location: index.php');
  exit(0);
}