<?php 
	$gazlilar = App\Models\Product::where('cat_id', '1')->get();
?>

@foreach($gazlilar as $gazli)
	<li>
		<div class="products-list__img products-list__img-big">
			<img src="{{$gazli->image_path}}/{{$gazli->image}}" alt="nogaz">
		</div>
		<div class="products-list__size">
			{{$gazli->size}} L
		</div>
		<div wire:click="addCart({{$gazli->id}})" class="products-list__basket">
			<img src="img/basket.png" alt="ico">
		</div>
	</li>
@endforeach
