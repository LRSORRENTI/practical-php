<?php
define("TITLE", "Contact Us | Franklin's Fine Dining");
include('includes/header.php');
?>

<div id="contact">
    <hr>
    <h1 class="text-2xl pb-3">Get In Touch</h1>
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