@if(\Request::segment(1) == '')
    <script>
        // ПРЕЛОАДЕР
        var preloader = $('.preloader'),
            imagesCount = $('img').length,
            percent = 100 / imagesCount,
            progress = 0,
            imgSum = $('img').length,
            loadedImg = 0;


        for (var i = 0; i < imagesCount; i++) {
            var img_copy = new Image();
            img_copy.src = document.images[i].src;
            img_copy.onload = img_load;
            img_copy.onerror = img_load;
        }

        function img_load() {
            progress += percent;
            loadedImg++;
            $('.preloader__loading').css('width', `${progress}vw`)
            $('.preloader__percent span').text(progress.toFixed(0))
            if (progress >= 100 || loadedImg == imagesCount) {
                setTimeout(() => {
                    preloader.delay(500).fadeOut('slow');
                    sessionStorage.setItem('preloader', false)
                }, 2300)
            }
        }
    </script>
@endif
<script>
    $('#fullPage').fullpage({
        anchors: ['main', 'about', 'products', 'services', 'news', 'contact'],
        onLeave:function(origin,destination,direction) {

            const section = destination.item;
            const text = section.querySelectorAll('.section__text');
            const main = section.querySelectorAll('.section__main')
            const title = section.querySelector('.section__title');
            title.innerHTML = title.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            const newTitle = section.querySelectorAll('.letter')
            const tl = new TimelineMax();
            tl.staggerFrom(newTitle, .5, {
                opacity: 0,
                ease: Power4.easeInOut
            }, 0.07, 0);
            tl.fromTo(text, .7, { y: "50", opacity: 0 }, { y: "0", opacity: 1 }, .6);
            tl.fromTo(main, .7, { x: "-50", opacity: 0 }, { x: "0", opacity: 1 }, .9);

        }
    })

</script>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/jquery.inputmask.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/fullpage.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/map.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.ripples-min.js"></script>
<script src="/js/gsap.min.js"></script>
<script src="/js/dobpicker.js"></script>
<script src="/js/main.js"></script>



