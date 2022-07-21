<div class="feedback
@if (session()->has('messageSent')) feedback-show @endif
">
  <div class="feedback-content">
    <div class="feedback-wrap" @if (session()->has('messageSent')) style="display: none;" @endif>
      <div class="feedback__title">
        Оставить заявку
      </div>
      <div class="feedback__text">
        Вам необходимо зарегистрироваться для заказа в компании <strong>suu.uzbekistan</strong>
      </div>
      <div class="feedback-form">
        <input name="name" type="text" placeholder="Имя">
        <input name="last_name" type="text" placeholder="Фамилия">
        <input name="phone" type="tel" placeholder="Телефон" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
        <textarea name="message" placeholder="Текст"></textarea>
        <div class="feedback-form__check">
          <label>
            <input type="checkbox">
            <span>Я прочитал согласие с политикой конфиденциальности</span>
          </label>
        </div>
        <button class="btn" type="submit">Оставить заявку</button>
      </div>
    </div>
    <div class="feedback-done" @if (session()->has('messageSent')) style="display: block;" @endif>
      <div class="feedback__img">
        <img src="/img/done.svg" alt="ico">
      </div>
      <div class="feedback__title">
        Спасибо ваша заявка принята!
      </div>
      <div class="feedback__text">
        Мы свяжемся с вами в ближайшее время
      </div>
      <button type="submit" class="btn" onclick="feedback_close()">Оставить заявку</button>
    </div>
  </div>
  <script>
    function feedback_close() {
      document.getElementsByClassName('feedback-done')[0].style.display = 'none';
      document.getElementsByClassName('feedback-wrap')[0].style.display = 'block';
    }
  </script>
</div>

