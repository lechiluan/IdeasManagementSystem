<?php
include("connection.php");
session_start(); // Start the session
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if (isset($_GET['topic'])) {
    $topic = $_GET['topic'];
    $department_id = $_SESSION['department_id'];
    // Get all staff email addresses of my department
    $sql = "SELECT Email FROM staff WHERE DepartmentID = '$department_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'greenwich.qa@gmail.com';
            $mail->Password = 'iebdmpqvvkpjglec';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('greenwich.qa@gmail.com', 'Greenwich QA');
            // Loop through all staff email addresses and add them as recipients
            while ($row = mysqli_fetch_assoc($result)) {
                $mail->addAddress($row['Email']);
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New idea has been submitted';
            $mail->Body = "Dear staff,<br><br>There is a new idea has been submitted for $topic. at https://greenwichideas.cleverapps.io/. Please add more ideas to this topic to improve the quality of the topic.<br><br>Thank you.<br><br>Greenwich QA<br><br>";
            $mail->send();
            echo "<script>alert('Email sent successfully.')</script>";
            // Reload current page after sending email
            echo "<script>window.location.href = 'QAC_Topic_Detail.php?topic=$topic'</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
            echo "<script>window.location.href = 'QAC_Topic_Detail.php?topic=$topic'</script>";
        }
    } else {
        echo "<script>alert('No staff found in your department.')</script>";
        echo "<script>window.location.href = 'QAC_Topic_Detail.php?topic=$topic'</script>";
    }
}
?>
