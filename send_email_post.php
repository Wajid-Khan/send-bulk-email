<?php  

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

echo '<pre>';
print_r($_POST); die;
$images = $_POST['image_url'];
$title = $_POST['title'];
$content = $_POST['content'];
$link = $_POST['link'];

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'mail.freeresources.in';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@freeresources.in';
    $mail->Password = 'tyFIrJJUBnYF';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Sender info
    $mail->setFrom('info@freeresources.in', 'Free Resources');

    // Iterate through your list of recipients
    $recipients = ['wajid.progrm@gmail.com', 'wajid.developer1@gmail.com'];
    foreach ($recipients as $recipient) {
        // Recipient info
        $mail->addAddress($recipient);

        // Load HTML template
        $template = file_get_contents('email_template.html');

        // Replace placeholders with dynamic data
        $template = str_replace('%Title1%', $title[0], $template);
        $template = str_replace('%Title2%', $title[1], $template);
        $template = str_replace('%Title3%', $title[2], $template);
        $template = str_replace('%Title4%', $title[3], $template);
        $template = str_replace('%Title5%', $title[4], $template);
        $template = str_replace('%Title6%', $title[5], $template);

        $template = str_replace('%ImageUrl1%', $images[0], $template);
        $template = str_replace('%ImageUrl2%', $images[1], $template);
        $template = str_replace('%ImageUrl3%', $images[2], $template);
        $template = str_replace('%ImageUrl4%', $images[3], $template);
        $template = str_replace('%ImageUrl5%', $images[4], $template);
        $template = str_replace('%ImageUrl6%', $images[5], $template);

        $template = str_replace('%Content1%', mb_strimwidth($content[0], 0, 90, '...'), $template);
        $template = str_replace('%Content2%', mb_strimwidth($content[1], 0, 90, '...'), $template);
        $template = str_replace('%Content3%', mb_strimwidth($content[2], 0, 90, '...'), $template);
        $template = str_replace('%Content4%', mb_strimwidth($content[3], 0, 90, '...'), $template);
        $template = str_replace('%Content5%', mb_strimwidth($content[4], 0, 90, '...'), $template);
        $template = str_replace('%Content6%', mb_strimwidth($content[5], 0, 90, '...'), $template);

        $template = str_replace('%Link%1', $link[0], $template);
        $template = str_replace('%Link%2', $link[1], $template);
        $template = str_replace('%Link%3', $link[2], $template);
        $template = str_replace('%Link%4', $link[3], $template);
        $template = str_replace('%Link%5', $link[4], $template);
        $template = str_replace('%Link%6', $link[5], $template);


        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Livefit4ever New Blogs';
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

?>