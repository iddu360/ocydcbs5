<?php
if (isset($_POST['submit'])) {

    $myreceipient = $pagemail;
    // Sending email code (as before)
    $to = $myreceipient; // Update with the desired email address
    $from = $_POST['email'];
    $number = $_POST['contact'];
    // $address = $_POST['address'];
    $reason = $_POST['subject'];
    $message = $_POST['message'];

    $subject = 'New Message from Web Form';
    $body = "Email: $from\nNumber: $number\nReason: $reason\n\n$message";

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";

    if (mail($to, $subject, $reason, $body, $headers)) {
?>
        <script>
            alert("Message sent successfully.");
            window.history.back();
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("An error occurred. Please try again later.");
            window.history.back();
        </script>
<?php
    }

    // Receiving email code
    $imapHost = '{imap.example.com:993/imap/ssl}INBOX';  // Replace with your IMAP server details
    $username = $pagemail;  // Update with your email address
    $password = 'Townside@1';  // Replace with your email password

    $inbox = imap_open($imapHost, $username, $password);
    if ($inbox) {
        $messageCount = imap_num_msg($inbox);
        echo "You have $messageCount messages.";
        imap_close($inbox);
    } else {
        echo 'Failed to connect to the mailbox.';
    }
}
?>