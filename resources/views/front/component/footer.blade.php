<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-bottle">
                <img src="img/footer.png" alt="bottle">
            </div>
            <div class="footer-logo">
                <img src="img/logo.svg" alt="SUU">
                <span>Природная питьевая вода</span>
            </div>
            <ul class="footer-menu">
                <li>
                    <a href="#">Главная</a>
                </li>
                <li>
                    <a href="#">О компании</a>
                </li>
                <li>
                    <a href="#">Продукция</a>
                </li>
                <li>
                    <a href="#">Услуги</a>
                </li>
                <li>
                    <a href="#">Новости</a>
                </li>
                <li>
                    <a href="#">Контакты</a>
                </li>
            </ul>
            <div class="footer-info">
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        Адрес:
                    </div>
                    <div class="footer-info__value">
                        100174, г. Ташкент, Алмазарский р-н,
                    </div>
                </div>
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        Телефон:
                    </div>
                    <div class="footer-info__value">
                        <a href="tel:+998911521915">+99891 152 19 15</a>
                    </div>
                </div>
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        Почта:
                    </div>
                    <div class="footer-info__value">
                        <a href="mailto:info@suuuzbekistan.uz">info@suuuzbekistan.uz</a>
                    </div>
                </div>
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        Мы в соц. сетях:
                    </div>
                    <div class="footer-info__value">
                        <ul>
                            <li>
                                <a href="#" target="_blank" rel="_nofollow">
                                    <img src="img/fb.svg" alt="Facebook">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="_nofollow">
                                    <img src="img/inst.svg" alt="Instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="_nofollow">
                                    <img src="img/tg.svg" alt="Telegram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <p>
                &copy; 2021 «SUU.UZBEKISTAN»
            </p>
            <p>
                Designed by <a href="#" target="_blank">Novas.uz</a>
            </p>
        </div>
    </div>
</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/dobpicker.js"></script>
<script src="js/main.js"></script>

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
