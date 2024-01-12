<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'wajid.developer1@gmail.com';
    $mail->Password = 'AliKhan(::1)';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender info
    $mail->setFrom('wajid.developer1@gmail.com', 'Wajid Khan');

    // Iterate through your list of recipients
    $recipients = ['wajid.progrm@gmail.com', 'info@freeresources.com'];
    foreach ($recipients as $recipient) {
        // Recipient info
        $mail->addAddress($recipient);

        // Load HTML template
        $template = file_get_contents('email_template.html');

        // Replace placeholders with dynamic data
        $name = 'Recipient Name'; // Replace with actual data
        $message = 'This is the personalized message.'; // Replace with actual data
        $template = str_replace(['{{name}}', '{{message}}'], [$name, $message], $template);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Subject of the Email';
        $mail->Body = $template;

        // Send the email
        $mail->send();

        // Clear recipient data for the next iteration
        $mail->clearAddresses();
    }

    echo 'Emails sent successfully!';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}


    // foreach ($_POST['title'] as $key => $title) 
    // {
    //     $result[] = 
    //     [
    //         'title' => $title,
    //         'image_url' => $_POST['image_url'][$key],
    //         'content' => $_POST['content'][$key],
    //     ];
    // }
// echo '<pre>';
// print_r($result);

?>