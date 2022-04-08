<div class="basket-empty">
    @if(!session()->get('cart'))
        ВАША КОРЗИНА ПУСТА
    @endif
</div>
<div class="basket-list" id="basket-list">
    @if(session()->get('cart'))
        <?php $total_price = 0 ?>
        @foreach(session()->get('cart') as $key=>$value)
            <?php
            $cart = session()->get('cart');
            $product = \App\Models\Product::find($key);
            $total_price += $product->price*$cart[$key]['quantity'];
            ?>
            <div class="basket-item">
                <div class="basket-item__delete" onclick="deleteProduct({{ $product->id }})">
                    <img src="img/del.svg" alt="ico">
                </div>
                <div class="basket-item__img">
                    <img src="{{ $product->image_path }}/{{ $product->image }}" alt="img">
                </div>
                <div class="basket-item__wrap">
                    <div class="basket-item__size" id="basket-item__size'+i+'">
                        @if($product->category_id != 3)
                            {{ round($product->price/6, 2) }}
                        @else
                            {{ $product->price }}
                        @endif
                    </div>
                    <div class="basket-item__info">
                        <div class="basket-item__head">
                            <h2 class="basket-item__name">
                                {{ \App\Models\Category::find($product->category_id)['name_'.session()->get('lan')] }} ({{ $product->size }}L)
                                {{--@if($lan == 'ru')--}}
                                {{--{{ \App\Models\Category::find($product->category_id)->name_ru }} ({{ $product->size }}L)--}}
                                {{--@elseif($lan == 'uz')--}}
                                    {{--{{ \App\Models\Category::find($product->category_id)->name_uz }} ({{ $product->size }}L)--}}
                                {{--@elseif($lan == 'en')--}}
                                    {{--{{ \App\Models\Category::find($product->category_id)->name_en }} ({{ $product->size }}L)--}}
                                {{--@endif--}}
                            </h2>
                            <div class="basket-item__price">итог
                                <span>
                                    <strong id="price_product">{{ $product->price*$cart[$key]['quantity'] }}</strong> UZS
                                </span>
                            </div>
                        </div>
                        <div class="basket-item__text">
                            {{ $product['description_'.session()->get('lan')] }}
                        </div>
                        <div class="basket-item__logo btn">
                                        <span>
                                            @if($cart[$key]['logo'] == '0')
                                                {{__('order.Без логотипа')}}
                                            @else
                                                {{__('order.С вашим логотипом')}}
                                            @endif
                                        </span>
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="basket-item__total">
                            <div id="capsula'+i+'">@if($product->category_id != 3) 6 x  {{ round($product->price/6, 2) }} = @endif</div>
                            <div>
                                <strong id="price'+i+'">{{ $product->price }}</strong> UZS * <span id="capsula_name">
                                                {{ $cart[$key]['quantity'] }} @if($product->category_id != 3) блок @else капсула @endif
                                            </span>
                            </div>
                        </div>
                        <div class="basket-item__open">
                            количество
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="basket-item__dropdown">
                            <div class="order-thin">
                                <div class="order-item order-count">
                                    <div class="order-item__title">
                                        {{ __('order.Выберите количество блоков')}}
                                    </div>
                                    <select id="blok_quantity{{ $product->id }}" onchange="quantity({{ $product->id }})">
                                        @for($i=1; $i<5; $i++)
                                            <option value="{{ $i }}" @if($cart[$key]['quantity'] == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="order-item order-print">
                                    <div class="order-item__title">
                                        {{ __('order.Печать логотипа')}}
                                    </div>
                                    <div class="order-print__btns">
                                        <button class="btn @if($cart[$key]['logo'] == 1) active @endif" onclick="logo(1, {{ $product->id }})" value="1">{{ __('order.С вашим логотипом') }}</button>
                                        <button class="btn @if($cart[$key]['logo'] == 0) active @endif" onclick="logo(0, {{ $product->id }})" value="0">{{ __('order.Без логотипа') }}</button>
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
                                        <span class="order-price__name">{{ __('order.honeOrderPrice') }}</span>
                                        <span class="order-price__value" id="order-price__name'+i+'">{{ $product->price*$cart[$key]['quantity'] }}<span>UZS</span></span>
                                    </div>
                                </div>
                                {{--<button class="order-add btn" >Далее</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@if(session()->get('cart'))
<div class="basket-content" id="basket-content">
    <form action="{{Route('order.create', session()->get('locale'))}}" class="basket-form">
      <div class="basket-form__title">
        {{__('order.cartFormTitle')}}
      </div>
      <select name="customer" class="basket-form__select">
        <option value="new" selected>{{__('order.cartFormOption1')}}</option>
        <option value="stand">{{__('order.cartFormOption2')}}</option>
      </select>
      <div class="form-half">
        <input name="name" type="text" placeholder="{{__('order.homePlaceholderInputName')}}">
        <input name="phone" type="tel" placeholder="{{__('order.homeContactPhone')}}" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
      </div>
      <div class="order-item order-delivery">
        <div class="order-item__title">
          {{__('order.honeOrderDelivery')}}
        </div>

        <div class="order-delivery__btns">
          <button name="deliveryNeeded" class="btn active" type="button">{{__('order.cartFormDelivery1')}}</button>
          <button name="deliveryNoNeed" class="btn" type="button">{{__('order.cartFormDelivery2')}}</button>
        </div>
      </div>
      <div class="basket-form__price">
        <span>{{__('order.honeOrderPrice')}}</span>
        <span></span>
        <span><strong id="total_price">{{ $total_price }}</strong> UZS</span>
      </div>
      <div class="basket-form__price">
        <span>{{__('order.honeOrderDelivery')}}</span>
        <span></span>
        <span><strong>00</strong> UZS</span>
      </div>
      <div class="basket-form__choose">
        <div>
          <input type="radio" name="pay" id="cash"> <label for="cash">{{__('order.cartFormPaymentM1')}}</label>
        </div>
        <div>
          <input type="radio" name="pay" id="card"> <label for="card">{{__('order.cartFormPaymentM2')}}</label>
        </div>
      </div>
      <div class="basket-form__cards">
        <div class="basket-form__card active">
          <img src="img/click.png" alt="ico">
        </div>
        <div class="basket-form__card">
          <img src="img/payme.png" alt="ico">
        </div>
        <div class="basket-form__card">
          <img src="img/upay.png" alt="ico">
        </div>
        <div class="basket-form__card">
          <img src="img/paynet.png" alt="ico">
        </div>
        <div class="basket-form__card">
          <img src="img/apelsin.png" alt="ico">
        </div>
      </div>
      <button type="submit" class="order-add btn">
        {{__('order.cartFormPayBtn')}}
      </button>
    </form>
    <div class="basket-info">
      <div class="basket-info__title">
        {{__('order.cartReqTitle')}}
      </div>
      <ul class="basket-info__list">
        <li>
          <span>{{__('order.cartReqResip')}}:</span> OOO “SUU Tashkent”
        </li>
        <li>
          <span>{{__('order.footerAddress')}}:</span> {{__('order.cartReqAddress')}}
        </li>
        <li>
          <span>{{__('order.cartReqTIN')}}:</span> 7706412841
        </li>
        <li>
          <span>{{__('order.cartReqBC')}}:</span> {{__('order.cartReqBCBody')}}
        </li>
        <li>
          <span>{{__('order.cartReqIFI')}}:</span> 01075
        </li>
        <li>
          <span>{{__('order.cartReqTIN')}}:</span> 306 164 875
        </li>
        <li>
          <span>{{__('order.cartReqNCKEA')}}:</span> 58290
        </li>
      </ul>
    </div>
  </div>
@endif
{{--<script>--}}
    {{--function quantity(k) {--}}
        {{--quantity = $("#blok_quantity"+k).val();--}}
        {{--console.log( $("#blok_quantity"+k).val());--}}
        {{--fetch('/update_quantity/'+k+'/'+quantity);--}}
        {{--$("#basket_refresh").load('/basket_refresh');--}}
    {{--}--}}
{{--</script>--}}
