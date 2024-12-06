<?php
// Include PHPMailer classes
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phoneNumber = isset($_POST['phoneNumber']) ? trim($_POST['phoneNumber']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    $errors = [];
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "A valid email is required.";
    }


    if (empty($phoneNumber)) {
        $errors['phoneNumber'] = "Phone number is required.";
    } elseif (!preg_match('/^(\+?\d{1,4}[\s\-]?)?[\d\s\-]{7,15}$/', $phoneNumber)) {
        $errors['phoneNumber'] = "Invalid phone number. Use a valid format (e.g., +123456789 or 9922379106).";
    }


    if (empty($subject)) {
        $errors['subject'] = "Subject is required.";
    }
    if (empty($message)) {
        $errors['message'] = "Message is required.";
    }

    if (!empty($errors)) {
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['formData'] = $_POST;
        header("Location: contact-us.php");
        exit();
    }


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = ''; // Replace with your email
        $mail->Password   = ''; // Replace with your email password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('franchise@fhairsalons.com', 'Franchise'); // Replace with your recipient email

        $mail->addAddress('franchise@fhairsalons.com', 'Franchise'); // Replace with your recipient email
        $mail->addAddress('ceo@fhairsalons.com', 'Zarir Meherji');
        $mail->addAddress('zubairkhan@fhairsalons.com', 'Zubair Khan');

        $mail->isHTML(true);


        $mail->Subject = "Franchise Inquiry: New Contact Form Submission from " . $name;
        $mail->Body    = "<html>
                            <body>
                                <h2>Franchise Contact Form Submission</h2>
                                <p>You have received a new inquiry from the contact form on your website. Please find the details below:</p>
                                <p><strong>Name:</strong> $name</p>
                                <p><strong>Email:</strong> $email</p>
                                <p><strong>Phone Number:</strong> $phoneNumber</p>
                                <p><strong>Subject:</strong> $subject</p>
                                <p><strong>Message:</strong>$message</p>
                                <br>
                                <p><strong>Franchise Next Steps:</strong>PLEASE REPLY TO THE EMAIL AND CONTACT TEAM.</p>
                            </body>
                          </html>";



        $mail->send();

        echo "<script>
                alert('Message has been sent successfully!');
                window.location.href = 'index.html'; // Replace with your home page URL
              </script>";
    } catch (Exception $e) {

        echo "<script>
                alert('Message could not be sent PLEASE CALL US,  SORRY . Error: {$mail->ErrorInfo}');
                window.location.href = 'contact-us.php'; // Redirect back to the contact page
              </script>";
    }
}
