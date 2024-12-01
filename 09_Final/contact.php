<?php
define("TITLE", "Contact Us | Franklin's Fine Dining");
include('includes/header.php');
?>

<div id="contact">
    <hr>
    <h1 class="text-2xl pb-3">Get In Touch</h1>

    <?php

    // Check for header injections
    
    function has_header_injection($str)
    {
        return preg_match('/[\r\n]/', $str);
    }

    if (isset($_POST['contact_submit'])) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // check for header injection in above vars 
    
        if (has_header_injection($name) || has_header_injection($email)) {
            // if true kill script
            die();
        }

        if (!$name || !$email || !$message) {
            // if any are empty return error div
            echo '<h4 class="error">All Fields Required</h4> <a href="contact.php" class="button block">Go back and try again</a>';
            exit();
        }

        $to = "test@email.com";
        $subject = "$name sent you a message from the contact form";

        $message = "Name: $name\r\n";
        $message .= "Email: $email\r\n";
        $message .= "Message:\r\n$message";

        if (isset($_POST['subscirbe']) && $_POST['subscirbe'] == 'Subscribe') {
            // Add a new line to the $message
            $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
        }
        $message = wordwrap($message, 72);

        $headers = "MIME=Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso8859-1\r\n";
        $headers .= "From $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        mail($to, $subject, $message, $headers);
    }

    ?>


    <form method="post" action="" id="contact-form">

        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" id="emaul" name="email">

        <label for="message"></label>
        <textarea name="message" id="message" placeholder="Enter a message"></textarea>

        <!-- <input type="checkbox" name="subscribe" id="subscribe" value="subscribe"> -->
        <div class="flex gap-3">
            <label for="subscribe">Subscribe to newsletter</label>
            <input type="checkbox" name="subscribe" id="subscribe" value="subscribe">
        </div>
        <input type="submit" name="contact_submit" value="Send Message" class="button next">

    </form>
</div>



<?php include('includes/footer.php'); ?>