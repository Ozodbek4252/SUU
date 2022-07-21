@extends('front.layout.app')

@section('content')

  <!-- ОБРАТНАЯ СВЯЗЬ -->

  <div class="popup-layer"></div>


  <!-- АВТОРИЗАЦИЯ -->
  <?php
  session()->put('lan', app()->getLocale());
  ?>
  <div class="login">
    <div class="feedback-content">
      <div class="feedback__title">
        {{ __('order.Зарегистрироваться') }}
      </div>
      <div class="feedback__text">
        {{ __('order.homeInputTitleText') }} <strong>suu.uzbekistan</strong>
      </div>
      <div class="feedback-form">
        <div class="feedback-date">
          <select id="dobday"></select>
          <select id="dobmonth"></select>
          <select id="dobyear"></select>
        </div>
        <input type="text" placeholder="Имя">
        <input type="text" placeholder="Фамилия">
        <input type="email" placeholder="Ваш электронный адрес">
        <p>{{ __('order.Пароль') }}</p>
        <input type="password" placeholder="Новый пароль">
        <input type="password" placeholder="Подтвердите пароль">
        <div class="feedback-form__check">
          <label>
            <input type="checkbox">
            <span>{{ __('order.homeInputChech') }}</span>
          </label>
        </div>
        <button type="submit" class="btn">{{ __('order.homeInputButton') }}</button>
      </div>
    </div>
  </div>


  <!-- МОБИЛЬНОЕ МЕНЮ -->
  @include('front.component.mobile-menu')

  <div class="sended">
    <div class="sended-content">
      <div class="sended__close">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M13.6207 0.0623456C7.29329 0.650788 2.00356 5.16531 0.463307 11.2916C-1.56858 19.3736 3.27039 27.5185 11.305 29.5403C17.484 31.0951 23.9393 28.6252 27.4685 23.3558C30.8439 18.316 30.8438 11.6951 27.4681 6.65033C26.415 5.07638 24.929 3.59054 23.3524 2.53493C20.5183 0.637365 17.0134 -0.253124 13.6207 0.0623456ZM10.2612 8.58828C10.3678 8.64215 11.4772 9.70444 12.7267 10.949L14.9984 13.2119L17.2701 10.949C18.5196 9.70444 19.6341 8.63805 19.747 8.57925C19.8768 8.51161 20.0815 8.47152 20.3039 8.47011C21.0145 8.46554 21.5369 8.98786 21.5324 9.69834C21.531 9.92079 21.4909 10.1254 21.4232 10.2552C21.3644 10.368 20.2978 11.4825 19.0531 12.7317L16.7898 15.0031L19.0531 17.2744C20.2978 18.5237 21.3644 19.6381 21.4232 19.7509C21.4909 19.8807 21.531 20.0853 21.5324 20.3078C21.5369 21.0183 21.0145 21.5406 20.3039 21.536C20.0825 21.5346 19.8762 21.4944 19.747 21.4274C19.6341 21.3689 18.5197 20.3024 17.2704 19.0573L14.9991 16.7935L12.727 19.0567C11.4774 20.3015 10.3626 21.3681 10.2498 21.4269C10.12 21.4945 9.9153 21.5346 9.69282 21.536C8.98222 21.5406 8.45982 21.0183 8.46439 20.3078C8.46579 20.0853 8.50589 19.8807 8.57355 19.7509C8.63235 19.6381 9.69891 18.5237 10.9437 17.2744L13.2069 15.0031L10.9437 12.7317C9.69891 11.4825 8.63235 10.368 8.57355 10.2552C8.50589 10.1254 8.46579 9.92079 8.46439 9.69834C8.46075 9.13071 8.80037 8.67198 9.35654 8.49321C9.57621 8.42263 10.0271 8.46999 10.2612 8.58828Z"
            fill="#035E9F" />
        </svg>
      </div>
      <div class="feedback-done">
        <div class="feedback__img">
          <img src="/img/done.svg" alt="ico">
        </div>
        <div class="feedback__title">
          Спасибо ваша заявка принята!
        </div>
        <div class="feedback__text">
          Мы свяжемся с вами в ближайшее время
        </div>
      </div>
    </div>
  </div>

  <!-- ХЭДЕР СТАТИЧЕСКИЙ, ОТЛИЧАЕТСЯ ОТ ГЛАВНОГО -->




  <!-- КОРЗИНА -->
  <form action=""></form>

  <section class="basket">
    <div class="container" id="basket_refresh">

      @if (!session()->get('cart'))
        <div class="basket-empty">
          {{ __('order.ВАША КОРЗИНА ПУСТА') }}
        </div>
      @endif

      <div class="basket-list">
        
        <?php $total_price = 0; ?>
        @if (session()->get('cart') != null)
          @foreach (session()->get('cart') as $key => $value)
            <?php
            $cart = session()->get('cart');
            $product = \App\Models\Product::find($key);
            $total_price += $product->price * $cart[$key]['quantity'];
            ?>

            <div class="basket-item" id="basket-item{{ $product->id }}">
              <div class="basket-item__delete" onclick="deleteProduct({{ $product->id }})">
                <img src="img/del.svg" alt="icon">
              </div>
              <div class="basket-item__img">
                <img src="{{ $product->image_path }}/{{ $product->image }}" alt="img">
              </div>
              <div class="basket-item__wrap">
                <div class="basket-item__size">
                  @if ($product->category_id != 3)
                    {{ round($product->price / 6, 2) }}
                  @else
                    {{ $product->price }}
                  @endif
                </div>
                <div class="basket-item__info">
                  <div class="basket-item__head">
                    <h2 class="basket-item__name">
                      {{ \App\Models\Category::find($product->category_id)['name_' . app()->getLocale()] }}
                      ({{ $product->size }}L)
                    </h2>
                    <div class="basket-item__price">{{ __('cartPrice') }}
                      <span>
                        <strong id="price_product">{{ $product->price * $cart[$key]['quantity'] }}</strong> UZS
                      </span>
                    </div>
                  </div>

                  <div class="basket-item__text">
                    {{ $product['description_' . app()->getLocale()] }}
                  </div>
                  <div style="display:flex; justify-content:space-between; align-items:flex-start">
                    
                    <div class="basket-item__total">
                      <div>
                        @if ($product->category_id != 3)
                          6 x {{ round($product->price / 6, 2) }} =
                        @endif
                      </div>
                      <div>
                        <strong>{{ $product->price }}</strong> UZS * <span>
                          {{ $cart[$key]['quantity'] }} @if ($product->category_id != 3)
                            {{ __('order.блок') }}
                          @else
                            {{ __('order.капсула')}}
                          @endif
                        </span>
                      </div>
                    </div>
                    <div class="basket-item__logo btn">
                      <span>
                        @if ($cart[$key]['logo'] == '0')
                          {{ __('Без логотипа') }}
                        @else
                          {{ __('С вашим логотипом') }}
                        @endif
                      </span>
                      <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073"
                          stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                </div>
                  <div class="basket-item__open">
                    {{ __('количество') }}
                    <svg width="15" height="9" viewBox="0 0 15 9" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                  </div>
                  <div class="basket-item__dropdown {{ $cart[$key]['display'] }}">
                    <div class="order-thin">
                      <div class="order-item order-count">
                        <div class="order-item__title">
                          {{ __('Выберите количество блоков') }}
                        </div>
                        <select id="blok_quantity{{ $product->id }}" onchange="quantity({{ $product->id }})">
                          @for ($i = 1; $i < 15; $i++)
                            <option value="{{ $i }}" @if ($cart[$key]['quantity'] == $i) selected @endif>
                              {{ $i }}</option>
                          @endfor
                        </select>
                      </div>
                      <div class="order-item order-print">
                        <div class="order-item__title">
                          {{ __('Печать логотипа') }}
                        </div>
                        <div class="order-print__btns">
                          <button class="btn @if ($cart[$key]['logo'] == 1) active @endif"
                            onclick="logo(1, {{ $product->id }})">{{ __('С вашим логотипом') }}</button>
                          <button class="btn @if ($cart[$key]['logo'] == 0) active @endif"
                            onclick="logo(0, {{ $product->id }})">{{ __('Без логотипа') }}</button>
                        </div>
                        <div class="order-print__images">
                          <div>
                            <img src="img/print1.png" alt="img">
                          </div>
                          <div>
                            <img src="img/print2.png" alt="img">
                          </div>
                        </div>
                      </div>
                      <div class="order-price">
                        <div class="order-price__item">
                          <span class="order-price__name">{{ __('honeOrderPrice') }}</span>
                          <span class="order-price__value"
                            id="order-price__name'+i+'">{{ $product->price * $cart[$key]['quantity'] }}<span>UZS</span></span>
                        </div>
                      </div>
                      {{-- <button class="order-add btn">Далее</button> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
      @if (session()->get('cart'))
        <div class="basket-content" id="basket-content">
          <form class="basket-form">
            <div class="basket-form__title">
              {{ __('cartFormTitle') }}
            </div>
            <select id="status" name="status" class="basket-form__select">
              <option value="new" selected>{{ __('cartFormOption1') }}</option>
              <option value="constant">{{ __('cartFormOption2') }}</option>
            </select>
            <div class="form-half">
              <input type="hidden" id="token" value="{{ csrf_token() }}">
              <input id="name" name="name" type="text" placeholder="{{ __('homePlaceholderInputName') }}">
              <input id="delivery" name="name" type="hidden" value="1">
              <input id="wallet" name="name" type="hidden" value="click">
              <input id="phone" name="phone" type="tel" placeholder="{{ __('homeContactPhone') }}" class="form__tel"
                maxlength="19" required="" pattern="^[0-9-+\s()]*$">
            </div>
            <div class="order-item order-delivery">
              <div class="order-item__title">
                {{ __('honeOrderDelivery') }}
              </div>
              
              <div class="order-delivery__btns">
                <button name="deliveryNeeded" class="btn active"
                  type="button" onclick="changestatus(1)">{{ __('cartFormDelivery1') }}</button>
                <button name="deliveryNoNeed" class="btn" type="button" onclick="changestatus(0)">{{ __('cartFormDelivery2') }}</button>
              </div>
            </div>
            <div class="basket-form__price">
              <span>{{ __('honeOrderPrice') }}</span>
              <span></span>
              <span><strong id="total_price">{{ $total_price }}</strong> UZS</span>
            </div>
            <div class="basket-form__price">
              <span>{{ __('honeOrderDelivery') }}</span>
              <span></span>
              <span><strong>00</strong> UZS</span>
            </div>
            <div class="basket-form__choose">
              <div>
                <input id="cash" type="radio" name="pay" id="cash"> <label
                  for="cash">{{ __('cartFormPaymentM1') }}</label>
              </div>
              <div>
                <input id="card" type="radio" name="pay" id="card"> <label
                  for="card">{{ __('cartFormPaymentM2') }}</label>
                  
              </div>
            </div>
            
            <div class="basket-form__cards">
              <div class="basket-form__card active">
                <img src="img/click.png" alt="ico" onclick="changewallet('click')">
              </div>
              <div class="basket-form__card">
                <img src="img/payme.png" alt="ico" onclick="changewallet('payme')">
              </div>
              <div class="basket-form__card">
                <img src="img/upay.png" alt="ico" onclick="changewallet('upay')">
              </div>
              <div class="basket-form__card">
                <img src="img/paynet.png" alt="ico" onclick="changewallet('paynet')">
              </div>
              <div class="basket-form__card">
                <img src="img/apelsin.png" alt="ico" onclick="changewallet('apelsin')">
              </div>
            </div>
            <button type="button" class="order-add btn">
              {{ __('cartFormPayBtn') }}
            </button>
          </form>
          <div class="basket-info">
            <div class="basket-info__title">
              {{ __('cartReqTitle') }}
            </div>
            <ul class="basket-info__list">
              <li>
                <span>{{ __('cartReqResip') }}:</span> OOO “SUU Tashkent”
              </li>
              <li>
                <span>{{ __('footerAddress') }}:</span> {{ __('cartReqAddress') }}
              </li>
              <li>
                <span>{{ __('cartReqTIN') }}:</span> 7706412841
              </li>
              <li>
                <span>{{ __('cartReqBC') }}:</span> {{ __('cartReqBCBody') }}
              </li>
              <li>
                <span>{{ __('cartReqIFI') }}:</span> 01075
              </li>
              <li>
                <span>{{ __('cartReqTIN') }}:</span> 306 164 875
              </li>
              <li>
                <span>{{ __('cartReqNCKEA') }}:</span> 58290
              </li>
            </ul>
          </div>
        </div>
      @endif
    </div>
  </section>
  

@endsection
