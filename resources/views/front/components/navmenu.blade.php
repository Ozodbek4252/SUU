<header class="header header-static">
    <div class="header-static__logo">
        <a href="index.blade.php">
            <img src="img/logo-blue.svg" alt="SUU" title="SUU">
        </a>
    </div>
    <div class="container">
        <nav class="header-menu">
            <ul class="menu">
                <li>
                    <a href="{{route('home')}}">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="/#about">
                        О компании
                    </a>
                </li>
                <li>
                    <a href="/#products">
                        Продукция
                    </a>
                </li>
                <li>
                    <a href="/#services">
                        Услуги
                    </a>
                </li>
                <li>
                    <a href="/#news">
                        Новости
                    </a>
                </li>
                <li>
                    <a href="/#contact">
                        Контакты
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="header-side">
            <li class="header-lang">
                <div class="header-lang__open">
                    РУ
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.495008 0.690059V1.57506L4.65001 5.73006C4.84501 5.92506 5.16001 5.92506 5.35501 5.73006L9.51001 1.57506V0.690059H8.62501L5.00001 4.31006L1.37501 0.685059L0.495008 0.690059Z" fill="white"/>
                    </svg>
                </div>
                <div class="header-lang__dropdown header-side__dropdown">
                    <a href="#">
                        РУ
                    </a>
                    <a href="#">
                        UZ
                    </a>
                    <a href="#">
                        EN
                    </a>
                </div>
            </li>
            <li class="header-basket">
                <div class="header-side__btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 6V4H10V6H14ZM4 9V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V9C20 8.45 19.55 8 19 8H5C4.45 8 4 8.45 4 9ZM20 6C21.11 6 22 6.89 22 8V19C22 20.11 21.11 21 20 21H4C2.89 21 2 20.11 2 19L2.01 8C2.01 6.89 2.89 6 4 6H8V4C8 2.89 8.89 2 10 2H14C15.11 2 16 2.89 16 4V6H20Z" fill="white"/>
                    </svg>
                </div>
                <span>
						16
					</span>
            </li>
            <li class="header-profile">
                <div class="header-side__btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.1375C13.305 5.1375 14.3625 6.195 14.3625 7.5C14.3625 8.805 13.305 9.8625 12 9.8625C10.695 9.8625 9.6375 8.805 9.6375 7.5C9.6375 6.195 10.695 5.1375 12 5.1375ZM12 15.2625C15.3413 15.2625 18.8625 16.905 18.8625 17.625V18.8625H5.1375V17.625C5.1375 16.905 8.65875 15.2625 12 15.2625ZM12 3C9.51375 3 7.5 5.01375 7.5 7.5C7.5 9.98625 9.51375 12 12 12C14.4862 12 16.5 9.98625 16.5 7.5C16.5 5.01375 14.4862 3 12 3ZM12 13.125C8.99625 13.125 3 14.6325 3 17.625V19.875C3 20.4937 3.50625 21 4.125 21H19.875C20.4937 21 21 20.4937 21 19.875V17.625C21 14.6325 15.0037 13.125 12 13.125Z" fill="white"/>
                    </svg>
                </div>
                <div class="header-profile__dropdown header-side__dropdown">
                    <a href="#" class="header-profile__login">Profile</a>
                    <a href="#">Log out</a>
                </div>
            </li>
            <li class="header-tel">
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.6275 21.3946C15.9642 21.3946 14.1934 20.9223 12.3665 19.9933C10.6822 19.1353 9.01929 17.9071 7.55514 16.4417C6.09078 14.9762 4.86523 13.3109 4.00852 11.626C3.08001 9.7973 2.6084 8.02739 2.6084 6.36362C2.6084 5.28547 3.6138 4.24334 4.04498 3.84621C4.66616 3.27434 5.64321 2.60596 6.35308 2.60596C6.70672 2.60596 7.11999 2.83705 7.65579 3.33311C8.05573 3.70335 8.50524 4.20464 8.95476 4.78328C9.22627 5.13298 10.5803 6.91754 10.5803 7.77291C10.5803 8.47429 9.78653 8.96312 8.94732 9.4793C8.62186 9.67807 8.28699 9.88426 8.04453 10.0787C7.78526 10.2873 7.73808 10.3969 7.73087 10.4212C8.6227 12.6439 11.3485 15.3697 13.5692 16.2595C13.5893 16.2532 13.6994 16.2099 13.9106 15.9463C14.105 15.7043 14.3123 15.3677 14.5106 15.0435C15.0279 14.2043 15.516 13.4099 16.217 13.4099C17.073 13.4099 18.8574 14.7639 19.206 15.0354C19.7859 15.4852 20.2865 15.9351 20.6574 16.3344C21.1528 16.8702 21.3839 17.2841 21.3839 17.6371C21.3839 18.3483 20.716 19.3279 20.1454 19.9522C19.7475 20.386 18.7049 21.3949 17.6263 21.3949L17.6275 21.3946Z" fill="white"/>
                    </svg>
                </a>
            </li>
        </ul>
        <div class="header-mobile">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

