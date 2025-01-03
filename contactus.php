<?php
require_once "./includes/login/login_view.php";
//include "./middleware/user_middleware.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css//contactus.css">
</head>
<body style="background-image: url('Assets/newbg.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="contactus_container1">
        <!-- header -->
        <?php include ('./templates/logged_in_header.php'); ?>
        <!-- header -->
    </div>

    <header>
        <h1>CONTACT US</h1>
    </header>
    <main>
        <section class="contact-section">
            <div class="contact-item">
                <img src="Assets/telephone.png" alt="Phone Icon">
                <h2>Call or Text</h2>
                <p>Call:</p>
                <p>+639977316010</p>
                <p>This is our only mobile phone contact number.</p>

            </div>
            <div class="contact-item">
                <img src="Assets/messenger.png" alt="Chat Icon">
                <h2>Chat</h2>
                <p>You can chat with us via:</p>
                <a href="https://web.facebook.com/1277apartments/?_rdc=1&_rdr" target="_blank">Facebook Messenger</a>
                <p>Send Email:</p>
                <p>1277apartments@gmail.com</p>
            </div>
            <div class="contact-item">
                <img src="Assets/residential.png" alt="Home Icon">
                <h2>Visit</h2>
                <p>Come and check out Lavanders Place.</p>
                <p>We're open to show you around from Monday to Friday, 8am to 5pm.</p>
                <p>If you use Waze or Google Maps, just type in "Lavenders Place" and it will show you the way. See you!</p>
            </div>
        </section>

            <!-- Feedback Section -->
        <section class="feedback-section">
            <h2>Send Your Feedback</h2>
            <p>Tell us about your experience</p>
            <form action="submit_feedback.php" method="POST">
                <textarea name="feedback" placeholder="Write your feedback here..." required></textarea>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </section>
    </main>


</body>
</html>