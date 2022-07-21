<div class="mobile-menu">
  <div class="mobile-menu__head">
    <div class="mobile-menu__logo">
      <a href="index.blade.php">
        <img src="img/logo.svg" alt="SUU" title="SUU">
      </a>
    </div>
    <div class="mobile-menu__close">
      <div class="header-mobile header-mobile__open">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <ul class="menu">
    <li>
      <a href="{{ Route('home', app()->getLocale()) }}" data-menuanchor="main">
        Главная
      </a>
    </li>
    <li>
      <a href="{{ Route('about', app()->getLocale()) }}" data-menuanchor="about">
        О компании
      </a>
    </li>
    <li>
      <a href="#products" data-menuanchor="products">
        Продукция
      </a>
    </li>
    <li>
      <a href="#services" data-menuanchor="services">
        Услуги
      </a>
    </li>
    <li>
      <a href="#news" data-menuanchor="news">
        Новости
      </a>
    </li>
    <li>
      <a href="#contact" data-menuanchor="contact">
        Контакты
      </a>
    </li>
  </ul>
  <ul class="side__follow">
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
  <div class="mobile-menu__lang">
    <a href="/languages/ru">
      РУ
    </a>
    <a href="/languages/uz">
      UZ
    </a>
    <a href="/languages/en">
      EN
    </a>
  </div>
</div>
