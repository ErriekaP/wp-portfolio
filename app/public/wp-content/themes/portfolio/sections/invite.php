<section class="invite">
    <h1>SEND ME AN INVITE?</h1>
    <div class="invite-form">
        <div class="invite-form-row">
            <input type="text" placeholder="First Name" name="fname" id="fname" class="textbox">
            <input type="text" placeholder="Last Name" name="lname" id="lname" class="textbox">
        </div>  
         <div class="invite-form-row">
            <input type="text" placeholder="Company Name" name="cname" id="cname" class="textbox">
            <input type="text" placeholder="Company Address" name="caddress" id="caddress" class="textbox">
        </div>     
        <input type="text" placeholder="Email Address" name="email" id="email" class="textbox">
        <textarea type="text" placeholder="Tell me why you’re interested" name="why" id="why" class="textbox textarea"></textarea>
    </div>
    <div class="btns">
        <a href="<?php the_field('send_email_button'); ?>" class="button submit-button">SUBMIT</a>
    </div>
</section>
