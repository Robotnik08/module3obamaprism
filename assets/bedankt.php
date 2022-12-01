<?php
    $subject = $_GET["main_titles"];
    $body = "New message:\nGeneral data:\n===================================\nFull name: " . $_GET["vn"] . " " . $_GET["tv"] . " " . $_GET["an"] . "\nEmail: " . $_GET["email"] . "\nPhonenumber: " . $_GET["number"] . "\nAdress: " . $_GET["adress-place"] . " " . $_GET["adress-adress"] . " " . $_GET["adress-postcode"] 
    . "\n===============================\n" . $_GET["main"] . "\n===================================";

    mail("hendrikhogendijk@gmail.com", $subject, $body, "From: Hogendijk Hoveniers")
    
    include 'bedankt.html';
?>