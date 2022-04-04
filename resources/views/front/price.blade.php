<?php  $price = 0; ?>
@foreach(session()->get('cart') as $key=>$value)
    <?php
    $price += \App\Models\Product::find($key)->price;
    ?>
@endforeach
{{ $price }}<span>UZS</span>
