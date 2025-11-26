<?php

require __DIR__ . '/header.php';
?>

<main>
    <section>
        <nav class="navigationBar">
            <a><img src="assets/icons/search.png"></a>
            <a><img src="assets/icons/profile.png"></a>
            <a><img src="assets/icons/shop.png"></a>
            <a><img src="assets/icons/menu.png"></a>
        </nav>
        <article class="hero">
                <video class="video" autoplay muted loop src="assets/videos/ANIMATION_BACKPACK_FINAL_V2.webm"></video>
            <button class="pauseButton" id="button1"><img src="assets/icons/pause.png"></button>
        </article>
    </section>
    <article class="catigoryContainer">
        <h1 id="categoriesHeading">Utforska våra produkter</h1>
        <section class="productPictures">
        <div>
            <h3>Kläder</h3>
            <img src="assets/images/jacket_katalog_green.png">
        </div>
        <div>
            <h3>Accessoarer</h3>
            <img src="assets/images/bag_katalog_red.png">
        </div>
        <div>
            <h3>Beauty</h3>
            <img src="assets/images/Signetring.jpg">
        </div>
        <div>
            <h3>Merch</h3>
            <img src="assets/images/Karbinhake.jpg">
        </div>
    </section>
    </article>
    <section class="materialInfo">
        <h1>VI VÄVER FRAMTIDEN</h1>
        <p>Kin tech/material är utvecklad med fem lager som skyddar och håller. Med våra epd-noder kan du lätt bevara din saker </p>
    </section>
    <article class="materialVideo">
        <video class="video" autoplay muted loop src="assets/videos/ANIMATION_TECHNICAL_FINAL_V3.webm"></video>
        <button class="pauseButton"><img src="assets/icons/pause.png"></button>
    </article>

 <!-- configurator -->
    <article class="configurator">
        <div id="productTypeSelection">
            <h1 id="dinStilHeading">Din stil, ditt val</h1>
            <p>Designa dina egna KIN/FORM saker. Skapa det som du gillar bäst.</p>
            <div id="productsToConfigurate">
                <div>
                    <img id="bagImage" src="assets/images/konfig_icon_bag.png">
                    <h4>TECH VÄSKA</h4>
                </div>
                <div>
                    <img id="jacketImage" src="assets/images/konfig_jacket_icon.png">
                    <h4>TECH JACKA</h4>
                </div>
            </div>
        </div>
        <div id="config">
            <div class="variantHolder">
                <img id="productVariant" src="assets/images/model1-red.png" /><br />
                <p id="productInfo">KIN/FORM BAG är omsorgsfullt utvecklad med KIN Tech/ material</p>
            </div>
            <section class="pockets">
                <div><img id="model1" class="modelButton active" src="assets/images/pocket_v1.png" data-model="model1"></div>
                <div><img id="model2" class="modelButton" src="assets/images/pocket_v2.png" data-model="model2"></div>
                <div><img id="model3" class="modelButton" src="assets/images/pocket_v3.png" data-model="model3"></div>
                <div><img id="model4" class="modelButton" src="assets/images/pocket_v4.png" data-model="model4"></div>
            </section>
            <!-- Color buttons -->
            <div id="colors">
                <div id="blueButton" class="colorButton active" data-color="blue"></div>
                <div id="greenButton" class="colorButton" data-color="green"></div>
                <div id="redButton" class="colorButton" data-color="red"></div>
            </div>
        </div>
    </article>
    <article id="emailForm">
       <form class="customizeContainer" action="" method="post">
            <b>
                Namnge din KIN/FORM design:
            </b>
            <input type="text" name="text" placeholder="ex. Min KIN/FORM väska*" id="">
            <b>
                E-post:
            </b>
            <input type="email" name="email" placeholder="E-postadress*" id="">
            <button class="Sparabutton"> Spara din design </button>
          </form>
    </article>
    <section class="fullScreenImage-marquee-container">
        <section class="fullScreenImage">
            <img class="backpackersImage" src="assets/images/IMAGE_FOOTER.jpg">
        </section>
        <section class="marquee-wrapper">
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
    </section>
    </div>
    <div class="dividedSection">
    <div class="inputContainer">
        <div class="inputMessage">
        <b>
            Gå aldrig miste om en uppdatering
        </b>
        <p>
            Var först att uttrycka dig själv och visa din unika stil med KIN/FORMA.
        </p>
        </div>
        <form class="Nyhetsform" action="index.php" method="post">
        <input type="email" name="Email" placeholder="E-postadress*" id="">
        <button class="Nyhetsbutton" > Få vårt nyhetsbrev </button>
        </form>
    </div>
    <article class="lastVideo">
        <video class="video" id="turntable" autoplay muted loop src="assets/videos/jacket_animation_footer.mp4"></video>
        <button class="pauseButton"><img src="assets/icons/pause.png"></button>
    </article>
    </div>
</main>
<?php
require __DIR__ . '/footer.php';
