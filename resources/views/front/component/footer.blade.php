<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-bottle">
                <img src="img/footer.png" alt="bottle">
            </div>
            <div class="footer-logo">
                <img src="img/logo.svg" alt="SUU">
                <span>{{__('footerTitle')}}</span>
            </div>
            <ul class="footer-menu">
                <li>
                    <a href="{{route('home', app()->getLocale())}}">{{__('navHome')}}</a>
                </li>
                <li>
                    <a href="{{route('about', app()->getLocale())}}">{{__('navAbout')}}</a>
                </li>
                <li>
                    <a href="/">{{__('navProducts')}}</a>
                </li>
                <li>
                    <a href="/">{{__('navServices')}}</a>
                </li>
                <li>
                    <a href="{{route('front.news', app()->getLocale())}}">{{__('navNews')}}</a>
                </li>
                <li>
                    <a href="/">{{__('navContact')}}</a>
                </li>
            </ul>
            <div class="footer-info">
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        {{__('footerAddress')}}:
                    </div>
                    <div class="footer-info__value">
                        {{__('footerAddressInfo')}}
                    </div>
                </div>
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        {{__('footerPhone')}}:
                    </div>
                    <div class="footer-info__value">
                        <a href="tel:+998911521915">+99891 152 19 15</a>
                    </div>
                </div>
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        {{__('footerMail')}}:
                    </div>
                    <div class="footer-info__value">
                        <a href="mailto:info@suuuzbekistan.uz">info@suuuzbekistan.uz</a>
                    </div>
                </div>
                <div class="footer-info__item">
                    <div class="footer-info__name">
                        {{__('footerSocial')}}:
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
