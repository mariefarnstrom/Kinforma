<?php

require __DIR__.'/header.php';
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

        <section class="productPictures">
            <div><span>Kläder</span></div>
            <div><span>Merch</span></div>
            <div><span>Beauty</span></div>
            <div><span>Accessoarer</span></div>
        </section>
        <section class="materialInfo">
            <h2>Kin/form techmaterial</h2>
            <p>Lite information om techmaterialet/ textilen som vi använder i våra kläder och varför det är bäst! Gortex, magnetiska sömmar - all dessa saker och något som visar det.</p>
        </section>
        <article class="materialVideo">
            <video autoplay muted loop src="/assets/videos/drillAnimation.mov"></video>
        </article>

        <!-- configurator -->
    <article class="configurator">
      <section id="variantAndColorSelector">
        <div class="variantHolder">
            <img id="productVariant" src="assets/images/circle-red.png" /><br />
        </div>

      <!-- Color buttons -->
        <div id="colors">
            <button id="redButton"></button>
            <button id="greenButton"></button>
            <button id="greyButton"></button>
        </div>
      </section>

        <section class="pocketsCarousel">
            <div><img id="model1" src="/assets/images/switchable-item.png"></div>
            <div><img id="model2" src="/assets/images/switchable-item(1).png"></div>
            <div><img id="model3" src="/assets/images/switchable-item(2).png"></div>
            <div><img id="model4" src="/assets/images/switchable-item(3).png"></div>
            <div></div>
            <div></div>
        </section>
    </article>
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
                </div>
            </div>
        </section>
        </div>
        <div class="emailContainer">
            <b>
                Äkta värme finns i stunderna vi delar 
            </b>
            <p>
                Var först att utrycka dig själv och visa din unika stil med KIN/FORMA.
            </p>
            <p class="emailBox">
                E-postadress*
            </p>
        </div>
        <article class="lastVideo">
            <video class="bonfireVideo" autoplay muted loop src="/assets/videos/bonfire.mp4"></video>
        </article>

    </main>
<?php 
require __DIR__.'/footer.php';