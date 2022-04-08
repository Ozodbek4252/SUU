@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @error('image')<span style="color: red;">{{$message}}</span>@enderror
            <form action="{{route('product.update', [app()->getLocale(), $product->id] )}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <h1>Product</h1>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="name_uz">Name Uz</label>
                        <input type="text" class="form-control" id="name_uz" name="name_uz" placeholder="Name uz ..." value="{{$product->name_uz}}">
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="name_ru">Name Ru</label>
                        <input type="text" class="form-control" id="name_ru" name="name_ru" placeholder="Name ru ..." value="{{$product->name_ru}}">
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="name_en">Name En</label>
                        <input type="text" class="form-control" id="name_en" name="name_en" placeholder="Name en ..." value="{{$product->name_en}}">
                    </div>
                </div>



                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Price</label>
                        <input type="text" class="form-control" id="category_add" name="price" value="{{$product->price}}">
                    </div>
                    <div class="form-group" style="width: 80%; padding-left: 5px; padding-right: 5px;">
                        <label for="exampleInputEmail1">SIZE</label>
                        <select name="size" id="" class="form-control">
                            <option @if($product->size=='0.5') selected @endif value="0.5">0.5L</option>
                            <option @if($product->size=='1') selected @endif value="1">1L</option>
                            <option @if($product->size=='1.5') selected @endif value="1.5">1.5L</option>
                            <option @if($product->size=='18.9') selected @endif value="18.9">18.9L</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 80%; padding-right: 5px;">
                        <label for="exampleInputEmail1">Category</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach($categories as $category)
                            <option @if($category->id==$product->category_id) selected @endif value="{{$category->id}}">{{$category->name_uz}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Description UZ</label>
                        <textarea class="form-control" id="category_add" name="description_uz" placeholder="Add description ..." >{{$product->description_uz}}</textarea>
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Description RU</label>
                        <textarea class="form-control" id="category_add" name="description_ru" placeholder="Add description ...">{{$product->description_ru}}</textarea>
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="category_add">Description EN</label>
                        <textarea class="form-control" id="category_add" name="description_en" placeholder="Add description ...">{{$product->description_en}}</textarea>
                    </div>
                </div>

                <div class="form-group container-fluid d-flex justify-content-start align-items-end" style="padding: 0px">
                    <div class="" style="width: 16.6%; padding-right: 5px;" >
                        <label for="image">Image</label>
                        {{-- <img src=""> --}}
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="" style="width: 16.6%;" >
                        <label for="image_slider">Image Slider</label>
                        {{-- <img src=""> --}}
                        <input type="file" class="form-control" id="image_slider" name="image_slider">
                    </div>
                </div>

                


                <div><button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button></div>
            </form>
        </div>
    </div>


@endsection
