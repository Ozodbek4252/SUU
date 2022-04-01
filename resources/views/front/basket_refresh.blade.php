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
                        @if($product->cat_id != 3)
                            {{ $product->price/6 }}
                        @else
                            {{ $product->price }}
                        @endif
                    </div>
                    <div class="basket-item__info">
                        <div class="basket-item__head">
                            <h2 class="basket-item__name">
                                {{ \App\Models\Category::find($product->cat_id)['name_'.session()->get('locale')] }} ({{ $product->size }}L)
                            </h2>
                            <div class="basket-item__price">итог 
                                <span>
                                    <strong id="price_product">{{ $product->price*$cart[$key]['quantity'] }}</strong> UZS
                                </span>
                            </div>
                        </div>
                        <div class="basket-item__text">
                            {{ $product['description_'.session()->get('locale')] }}
                        </div>
                        <div class="basket-item__logo btn">
                                        <span>
                                            @if($cart[$key]['logo'] == '0')
                                                {{__('Без логотипа')}}
                                            @else
                                                {{__('С вашим логотипом')}}
                                            @endif
                                        </span>
                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="basket-item__total">
                            <div id="capsula'+i+'">@if($product->cat_id != 3) 6 x {{ $product->price/6 }} = @endif</div>
                            <div>
                                <strong id="price'+i+'">{{ $product->price }}</strong> UZS * <span id="capsula_name">
                                                {{ $cart[$key]['quantity'] }} @if($product->cat_id != 3) блок @else капсула @endif
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
                                        Выберите количество блоков
                                    </div>
                                    <select id="blok_quantity{{ $product->id }}" onchange="quantity({{ $product->id }})">
                                        @for($i=1; $i<5; $i++)
                                            <option value="{{ $i }}" @if($cart[$key]['quantity'] == $i) selected @endif>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="order-item order-print">
                                    <div class="order-item__title">
                                        Печать логотипа
                                    </div>
                                    <div class="order-print__btns">
                                        <button class="btn @if($cart[$key]['logo'] == 1) active @endif" onclick="logo(1, {{ $product->id }})" value="1">С вашим логотипом</button>
                                        <button class="btn @if($cart[$key]['logo'] == 0) active @endif" onclick="logo(0, {{ $product->id }})" value="0">Без логотипа</button>
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
                                        <span class="order-price__name">Промежуточный итог</span>
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
                я ... покупатель
            </div>
            <select class="basket-form__select">
                <option value="new" selected>новый</option>
                <option value="stand">постоянный</option>
            </select>
            <div class="form-half">
                <input type="text" placeholder="Имя">
                <input type="tel" placeholder="Телефон" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
            </div>
            <div class="order-item order-delivery">
                <div class="order-item__title">
                    Доставка
                </div>

                <div class="order-delivery__btns">
                    <button class="btn active">нужно</button>
                    <button class="btn">не нужно</button>
                </div>
            </div>
            <div class="basket-form__price">
                <span>Промежуточный итог</span>
                <span></span>
                <span><strong>{{ $total_price }}</strong> UZS</span>
            </div>
            <div class="basket-form__price">
                <span>Доставка</span>
                <span></span>
                <span><strong>00</strong> UZS</span>
            </div>
            <div class="basket-form__choose">
                <div>
                    <input type="radio" name="pay" id="cash"> <label for="cash">Наличными</label>
                </div>
                <div>
                    <input type="radio" name="pay" id="card"> <label for="card">Карта</label>
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
                Оплатить
            </button>
        </form>
        <div class="basket-info">
            <div class="basket-info__title">
                Реквизиты
            </div>
            <ul class="basket-info__list">
                <li>
                    <span>Получатель:</span> OOO “SUU Tashkent”
                </li>
                <li>
                    <span>Адрес:</span> г. Ташкент, Юнусабадский район, ул.Ахмад Дониша 26А
                </li>
                <li>
                    <span>ИНН:</span> 7706412841
                </li>
                <li>
                    <span>Р/С:</span> 2020 8000 2010 3340 5001 ЧАКБ «ОРИЕНТ ФИНАНС» Юнусабадский Филиал

                </li>
                <li>
                    <span>МФО:</span> 01075
                </li>
                <li>
                    <span>ИНН:</span> 306 164 875
                </li>
                <li>
                    <span>ОКЭД:</span> 58290
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