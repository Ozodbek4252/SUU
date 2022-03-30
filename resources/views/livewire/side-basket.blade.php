<div class="side-basket">
    {{-- {{dd(session()->get('cart'))}} --}}
    <div class="feedback-content">
        <div class="side-basket__content">
            @if(session()->get('cart'))
                @foreach($carts as $item)
                    <div class="side-basket__item">
                        <div class="cabinet-order__img">
                            <img src="img/water1.png" alt="img">
                        </div>
                        <div class="cabinet-order__name">
                            Негазированная <span>(1.5)</span>
                            {{$item['id']}}
                            {{$b}}
                        </div>
                        <div wire:click="deleteItem({{$item['id']}})" class="basket-item__delete">
                            <img src="img/del.svg" alt="ico">
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="side-basket__price">
            <div class="order-price">
                <div class="order-price__item">
                    <span class="order-price__name">Промежуточный итог</span>
                    <span class="order-price__value">42000 <span>UZS</span></span>
                </div>
                <div class="order-price__item">
                    <span class="order-price__name">Доставка</span>
                    <span class="order-price__value">0 <span>UZS</span></span>
                </div>
            </div>
            <button class="order-add btn">
                Оплатить
            </button>
        </div>
    </div>
</div>