<?php
if (isset($_SESSION['form_status'])) {
    $toast_type = '';
    $toast_message = '';

    if ($_SESSION['form_status'] === 'success') {
        $toast_type = 'success';
        $toast_message = 'Your message has been sent!';
    } elseif ($_SESSION['form_status'] === 'too_soon') {
        $toast_type = 'warning';
        $toast_message = 'Please wait 5 minutes before submitting again.';
    } else {
        $toast_type = 'error';
        $toast_message = 'Something went wrong. Try again.';
    }

    echo "<div id='toast' data-type='{$toast_type}' data-message='{$toast_message}'></div>";

    unset($_SESSION['form_status']);
}
?>

<section class="invite">
    <h1>SEND ME AN INVITE?</h1>
    <form method="post" action="">
    <div class="invite-form">
        <div class="invite-form-row">
            <input type="text" placeholder="First Name" name="fname" id="fname" class="textbox" required>
            <input type="text" placeholder="Last Name" name="lname" id="lname" class="textbox" required>
        </div>  
         <div class="invite-form-row">
            <input type="text" placeholder="Company Name" name="cname" id="cname" class="textbox" required>
            <input type="text" placeholder="Company Address" name="caddress" id="caddress" class="textbox" required>
        </div>     
        <input type="text" placeholder="Email Address" name="email" id="email" class="textbox" required>
        <textarea type="text" placeholder="Tell me why you’re interested" name="why" id="why" class="textbox textarea" required></textarea>
    </div>
    <div class="btns">
        <button type="submit" name="send_form" class="button submit-button">SUBMIT</button>
    </div>
    </form>
</section>
