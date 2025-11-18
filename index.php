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
        <section class="carousel">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
        <article class="bag-box">
            <h1>KIN/FORM BAG</h1>
            <img src="/assets/images/backpack.png">
        </article>
        <section class="pocketsCarousel">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </section>
        <section class="textField">
            <h1>VÄRM BÖRJAR MED DIG</h1>
            <p>Upptäck våra textilier och hur du kan sprida din värme med vårt techmaterial och konfigurering </p>
        </section>
        <article class="middleVideo">
            <video autoplay muted loop src="/assets/videos/drillAnimation.mov"></video>
        </article>
        <section class="productPictures">
            <div><span>Kläder</span></div>
            <div><span>Merch</span></div>
            <div><span>Beauty</span></div>
            <div><span>Accessoarer</span></div>
        </section>
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