<?php
if (isset($_POST['email'], $_POST['text'])) {
    $email = trim(htmlspecialchars($_POST['email']));
    $text = trim(htmlspecialchars($_POST['text']));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/media-queries.css">
    <title>Kinforma</title>
</head>

<body>
    <header>
    <section class="marquee-wrapper-header">
        <button class="marquee-pauseButton"></button>
        <div class="marquee-text">
            <div class="marquee-text-track">
                <p>MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                <p aria-hidden="true">MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                <p aria-hidden="true">MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                <p aria-hidden="true">MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
            </div>
        </div>
        <button class="marquee-close-button"></button>
        
    </section>
    <div class="desktopNavbar">
        <p class="siteTitle">KIN/FORMA</p>
        <div class="desktopNavbarContainer">
            <p>KLÄDER</p>
            <p>BEAUTY</p>
            <p>ACCESOARER</p>
            <p>MERCH</p>
        </div>
        <div class="naviconContainer">
            <img src="assets/images/search-icon.png" alt="search-icon">
            <img src="assets/images/profile-icon.png" alt="profile-icon">
            <img src="assets/images/shop-icon.png" alt="shop-icon">
        </div>
    </div>
    
    
        <h1 id="siteTitle">KIN/FORMA</h1>
        <p id="headerText">Framtidens mode, idag</p>
    </header>