<?php

require __DIR__ . '/header.php';
?>
<nav class="navigationBar">
    <a><img src="/assets/icons/search.png"></a>
    <a><img src="/assets/icons/profile.png"></a>
    <a><img src="/assets/icons/shop.png"></a>
    <a><img src="/assets/icons/menu.png"></a>
</nav>
<main>
    <article class="hero">
        <video autoplay muted loop src="/assets/videos/grass.mp4"></video>
    </article>
    <article>
        <h1 id="categoriesHeading">Utforska våra produkter</h1>
        <section class="productPictures">
            <div>
                <h3>Kläder</h3>
                <img src="/assets/images/clothes.png">
            </div>
            <div>
                <h3>Accessoarer</h3>
            </div>
            <div>
                <h3>Beauty</h3>
            </div>
            <div>
                <h3>Merch</h3>
            </div>
        </section>
    </article>
    <section class="materialInfo">
        <h2>Kin/form techmaterial</h2>
        <p>Lite information om techmaterialet/ textilen som vi använder i våra kläder och varför det är bäst! Gortex, magnetiska sömmar - all dessa saker och något som visar det.</p>
    </section>
    <article class="materialVideo">
        <video autoplay muted loop src="/assets/videos/drillAnimation.mov"></video>
    </article>

    <!-- configurator -->
    <article class="configurator">
        <div id="productTypeSelection">
            <h1 id="dinStilHeading">Din stil, Ditt val</h1>
            <p>Designa dina egna KIN/FORM saker. Skapa det som du gillar bäst.</p>
            <div id="productsToConfigurate">
                <div>
                    <img id="bagImage" src="/assets/images/backpack-small.png">
                    <h4>TECH VÄSKA</h4>
                </div>
                <div>
                    <img src="/assets/images/jacka.png">
                    <h4>TECH JACKA</h4>
                </div>
            </div>
        </div>
        <section id="variantSelector">
            <div class="variantHolder">
                <img id="productVariant" src="assets/images/circle-red.png" /><br />
                <p id="productInfo">TECH väska är utvecklad med KIN Tech/material</p>
            </div>
            <section class="pockets">
                <div><img id="model1" class="modelButton" src="/assets/images/switchable-item.png" data-model="rectangle"></div>
                <div><img id="model2" class="modelButton" src="/assets/images/switchable-item(1).png" data-model="circle"></div>
                <div><img id="model3" class="modelButton" src="/assets/images/switchable-item(2).png" data-model="star"></div>
                <div><img id="model4" class="modelbutton" src="/assets/images/switchable-item(3).png"></div>
            </section>
        </section>
        <!-- Color buttons -->
        <div id="colors">
            <div id="redButton" class="colorButton" data-color="red"></div>
            <div id="greenButton" class="colorButton" data-color="green"></div>
            <div id="greyButton" class="colorButton" data-color="grey"></div>
        </div>
    </article>
       <form class="customizeContainer" action="">
            <b>
                Namnge din KINF/FORM design:
            </b>
            <input type="text" name="text" placeholder="ex. Min KIN/FORM väska*" id="">
            <b>
                E-post:
            </b>
            <input type="email" name="email" placeholder="E-postadress*" id="">
            <button class="Sparabutton"> Spara ditt design </button>
          </form>
    <section class="fullScreenImage-marquee-container">
        <section class="fullScreenImage">
       
            <img class="backpackersImage" src="/assets/images/hikers.png">
        </section>
        <section class="marquee-wrapper">
            <img class="marquee-icon" src="/assets/icons/marquee.png">
            <button class="marquee-close-button"><img src="/assets/icons/x-icon.png"></button>
            <div class="marquee-text">
                <div class="marquee-text-track">
                    <p>MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                    <p aria-hidden="true">MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                    <p aria-hidden="true">MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                    <p aria-hidden="true">MISSA INTE CHANSEN LÄMNA DIN E-POST ADRESS</p>
                </div>
            </div>
        </section>
    </section>
    </div>
    <div class="inputContainer">
        <div class="inputMessage">
        <b>
            Gå aldrig miste en uppdatering
        </b>
        <p>
            Var först att utrycka dig själv och visa din unika stil med KIN/FORMA.
        </p>
        </div>
        <form class="Nyhetsform" action="/index.php">
        <input type="email" name="Email" placeholder="E-postadress*" id="">
        <button class="Nyhetsbutton" > Få vårt nyhetsbrev </button>
        </form>
    </div>
    <article class="lastVideo">
        <video class="bonfireVideo" autoplay muted loop src="/assets/videos/bonfire.mp4"></video>
    </article>

</main>
<?php
require __DIR__ . '/footer.php';
