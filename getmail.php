<?php
if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'shangeeran@gmail.com';
    $body = '<html>
                <body>
                    <h2>Feedback</h2>
                    <hr>
                    <p>Name:<br>'.$name.'</p>
                    <p>Email:<br>'.$mail.'</p>
                    <p>Subject:<br>'.$subject.'</p>
                    <p>Message:<br>'.$message.'</p>
                </body>
            </html>';

// headers
$headers  = "Form: ".$name."<".$mail."<".$subject."<".$message.">\r\n";
$headers .= "REply-To: ".$mail."\r\n";
$headers .= "Mine-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";

//sent
$sent = mail($to, $body, $headers);
if ($sent) {
    echo '<br>';
    echo 'Thanks';
} else {
    echo 'error';
}
} 
?>