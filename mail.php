<?php


define("EMAIL_SUBJECT", "Visitor Message");

// Read the form values
$senderName = isset($_POST['senderName']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['senderName']) : "";
$senderEmail = isset($_POST['senderEmail']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

if ($senderName && $senderEmail && $message) {
    //Email information
    $admin_email = "o.palampougioukis@gmail.com";
    $email = $_POST['senderEmail'];
    $subject = EMAIL_SUBJECT . " - " . $_POST["senderSubject"];
    $message = nl2br(htmlspecialchars(($_POST["message"])));

    //send email
    mail($admin_email, "$subject", $message, "From:" . $_POST["senderEmail"] . " - " . $_POST["senderName"]);

    $data = array();

    if ($mail) {
        $data['success']['title'] = 'Message has been sent';
        exit;
    }
    else {
        $data['error']['title'] = 'Message could not be sent.';
    }

    echo json_encode($data);
}


/*

define("RECIPIENT_NAME", "Georgia Vompiri");
define("RECIPIENT_EMAIL", "o.palampougioukis@gmail.com");
define("EMAIL_SUBJECT", "Visitor Message");

// Read the form values
$senderName = isset($_POST['senderName']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['senderName']) : "";
$senderEmail = isset($_POST['senderEmail']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

if ($senderName && $senderEmail && $message) {
    //Email information
    $admin_email = "o.palampougioukis@gmail.com";
    $email = $_POST['senderEmail'];
    $subject = EMAIL_SUBJECT . " - " . $_POST["senderSubject"];
    $message = nl2br(htmlspecialchars(($_POST["message"])));

    //send email
    mail($admin_email, "$subject", $message, "From:" . $_POST["senderEmail"] . " - " . $_POST["senderName"]);

    $data = array();

    if (!$mail) {
        $data['error']['title'] = 'Message could not be sent.';
        $data['error']['details'] = 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }
    else {
        $data['success']['title'] = 'Message has been sent';
    }



    echo json_encode($data);

}


*/





