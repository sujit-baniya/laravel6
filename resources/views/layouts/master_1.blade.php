<!doctype html>
<html lang="en">
<head>
    <title>Sujit Baniya - Software Engineer, PHP, API Developer, API</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        body {background-color: #0D1B2B; overflow-x: hidden; font-family: roboto; -webkit-font-smoothing: antialiased; margin: 0;}
        .sb-flex { display: -webkit-flex; display: flex; -webkit-flex-direction: row;  flex-direction: row; -webkit-justify-content: flex-start; justify-content: flex-start;}

        .slider-wrapper div {position: relative;}
        .slider-wrapper {margin-top: 5vw;  margin-left: 11vw;}
        .slide-image {height: 24vw;}
        .slide-image img {width: 24vw; cursor: pointer;}
        .slide-content {width: 25vw; color: #fff; padding:3vw 18vw 3vw 9vw;}
        .slide-date {color: #0a8acb; font-size: 1.1vw; font-weight: 400; letter-spacing: 0.1vw; padding-bottom: 1.4vw;}
        .slide-title {font-size: 1.2vw; font-weight: 400; letter-spacing: 0.1vw; line-height: 1.55vw; padding-bottom: 1.8vw;}
        .slide-text {font-size: 0.80vw; line-height: 1.2vw; opacity: 0.8; padding-bottom: 4vw;}
        .slide-more {font-weight: 400; letter-spacing: 0.1vw; float: left; font-size: 0.9vw;}
        .slide-bullet {width: 0.5vw; height: 0.5vw; background-color: #0b8bcc; border-radius: 200%; position: relative; margin-left: 1.2vw;}
        .slide-nav {margin-left: 64vw; margin-top: -5.5vw;}

        div.overlay-blue {width: 100%; height: 100%; position: absolute; top: 0; transition: 0.5s ease all;}
        div.overlay-blue:hover {background-color: rgba(13, 27, 43, 0.5);}

        .arrows{width: 3.5vw; margin-top: -5.8vw; margin-left: 72vw; position: relative;}
        .arrow {display: inline-block; position: absolute; width: 1.2vw; height: 1.2vw; background: transparent; text-indent: -9999px; border-top: 0.15vw solid #fff; border-left: 0.15vw solid #fff; transition: all .1s ease-in-out; text-decoration: none; color: transparent;
        }
        .arrow:hover {border-color: #0A8ACB; border-width: 0.25vw;
        }
        .arrow:before {display: block; height: 200%; width: 200%; margin-left: -50%; margin-top: -50%; content: ""; transform: rotate(45deg);}
        .arrow.prev {transform: rotate(-45deg); left: 0;}
        .arrow.next {transform: rotate(135deg); right: 0;}
    </style>
</head>
<body id="page-top">
<div class="slider">
    <div class="slider-wrapper sb-flex">
        <div class="slide sb-flex">
            <div class="slide-image slider-link prev"><img src="https://goranvrban.com/codepen/img2.jpg"><div class="overlay"></div></div>
            <div class="slide-content">
                <div class="slide-date">30.07.2017.</div>
                <div class="slide-title">LOREM IPSUM DOLOR SITE MATE, AD EST ABHORREANT</div>
                <div class="slide-text">Lorem ipsum dolor sit amet, ad est abhorreant efficiantur, vero oporteat apeirian in vel. Et appareat electram appellantur est. Ei nec duis invenire. Cu mel ipsum laoreet, per rebum omittam ex. </div>
                <div class="slide-more">READ MORE</div>
            </div>
        </div>
        <div class="slide sb-flex">
            <div class="slide-image slider-link next"><img src="https://goranvrban.com/codepen/img3.jpg"><div class="overlay"></div></div>
            <div class="slide-content">
                <div class="slide-date">30.08.2017.</div>
                <div class="slide-title">LOREM IPSUM DOLOR SITE MATE, AD EST ABHORREANT</div>
                <div class="slide-text">Lorem ipsum dolor sit amet, ad est abhorreant efficiantur, vero oporteat apeirian in vel. Et appareat electram appellantur est. Ei nec duis invenire. Cu mel ipsum laoreet, per rebum omittam ex. </div>
                <div class="slide-more">READ MORE</div>
            </div>
        </div>
        <div class="slide sb-flex">
            <div class="slide-image slider-link next"><img src="https://goranvrban.com/codepen/img5.jpg"><div class="overlay"></div></div>
            <div class="slide-content">
                <div class="slide-date">30.09.2017.</div>
                <div class="slide-title">LOREM IPSUM DOLOR SITE MATE, AD EST ABHORREANT</div>
                <div class="slide-text">Lorem ipsum dolor sit amet, ad est abhorreant efficiantur, vero oporteat apeirian in vel. Et appareat electram appellantur est. Ei nec duis invenire. Cu mel ipsum laoreet, per rebum omittam ex. </div>
                <div class="slide-more">READ MORE</div>
            </div>
        </div>
        <div class="slide sb-flex">
            <div class="slide-image slider-link next"><img src="https://goranvrban.com/codepen/img6.jpg"><div class="overlay"></div></div>
            <div class="slide-content">
                <div class="slide-date">30.10.2017.</div>
                <div class="slide-title">LOREM IPSUM DOLOR SITE MATE, AD EST ABHORREANT</div>
                <div class="slide-text">Lorem ipsum dolor sit amet, ad est abhorreant efficiantur, vero oporteat apeirian in vel. Et appareat electram appellantur est. Ei nec duis invenire. Cu mel ipsum laoreet, per rebum omittam ex. </div>
                <div class="slide-more">READ MORE</div>
            </div>
        </div>
    </div>
    <div class="arrows">
        <a href="#" title="Previous" class="arrow slider-link prev"></a>
        <a href="#" title="Next" class="arrow slider-link next"></a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script>
    ( function($) {

        $(document).ready(function() {

            var s           = $('.slider'),
                sWrapper    = s.find('.slider-wrapper'),
                sItem       = s.find('.slide'),
                btn         = s.find('.slider-link'),
                sWidth      = sItem.width(),
                sCount      = sItem.length,
                slide_date  = s.find('.slide-date'),
                slide_title = s.find('.slide-title'),
                slide_text  = s.find('.slide-text'),
                slide_more  = s.find('.slide-more'),
                slide_image = s.find('.slide-image img'),
                sTotalWidth = sCount * sWidth;

            sWrapper.css('width', sTotalWidth);
            sWrapper.css('width', sTotalWidth);

            var clickCount  = 0;

            btn.on('click', function(e) {
                e.preventDefault();

                if( $(this).hasClass('next') ) {

                    ( clickCount < ( sCount - 1 ) ) ? clickCount++ : clickCount = 0;
                } else if ( $(this).hasClass('prev') ) {

                    ( clickCount > 0 ) ? clickCount-- : ( clickCount = sCount - 1 );
                }
                TweenMax.to(sWrapper, 0.4, {x: '-' + ( sWidth * clickCount ) })


                //CONTENT ANIMATIONS

                var fromProperties = {autoAlpha:0, x:'-50', y:'-10'};
                var toProperties = {autoAlpha:0.8, x:'0', y:'0'};

                TweenLite.fromTo(slide_image, 1, {autoAlpha:0, y:'40'}, {autoAlpha:1, y:'0'});
                TweenLite.fromTo(slide_date, 0.4, fromProperties, toProperties);
                TweenLite.fromTo(slide_title, 0.6, fromProperties, toProperties);
                TweenLite.fromTo(slide_text, 0.8, fromProperties, toProperties);
                TweenLite.fromTo(slide_more, 1, fromProperties, toProperties);

            });

        });
    })(jQuery);

    $('.overlay').addClass('overlay-blue');
</script>
</body>
</html>