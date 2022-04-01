@foreach(session()->get('cart') as $key => $item)
    <?php
        $product = \App\Models\Product::find($key);
    ?>
    <div class="side-basket__item">
        <div class="cabinet-order__img">
            <img src="{{ $product->image_path }}/{{ $product->image }}" alt="img">
        </div>
        <div class="cabinet-order__name">{{ \App\Models\Category::find($product->cat_id)->name_ru }}({{ $product->size }} L)
            <br> <span>{{ $product->price }} UZS</span>
        </div>
        <div class="basket-item__delete" onclick="deleteProduct({{ $product->id }})">
            <img src="img/del.svg" alt="ico">
        </div>
    </div>
@endforeach
