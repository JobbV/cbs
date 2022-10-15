<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main-style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CBS - Contact</title>
</head>
<body>
<?php include './includes/header.php'; ?>
<section class="contact">
<div class="contactformulier">
    <form action="#" method="post">
        <h1>Stuur ons een bericht</h1>
        <input type="text" name="naam" placeholder="Voor- en achternaam"><br>
        <input type="email" name="email" placeholder="Emailadres"><br>
        <textarea name="message" placeholder="Typ je bericht" style="height:170px;padding-top:10px;"></textarea>
        <input type="submit" id="submit" value="Verzenden" style="width:93%">
    </form>
</div>
<div class="contactgegevens">
    <h1>Contact</h1>
    <p><i class="fa fa-map-marker" aria-hidden="true"> The Netherlands</i></p>
    <p><i class="fa fa-clock-o" aria-hidden="true"> Ma - Zo 15.00 - 20.00</i></p>
    <p><i class="fa fa-mobile" aria-hidden="true"> Coming soon</i></p>
    <p><i class="fa fa-envelope" aria-hidden="true"> cstmbtspprt@gmail.com</i></p>
    <p>Stuur ons gerust een e-mail we reageren binnen 2 werk dagen, Of join de discord server en maak een ticket aan.</p>
</div>
</section>
<?php include './includes/footer.php'; ?>
<script src="./includes/tawkto.js"></script>
</body>
</html>