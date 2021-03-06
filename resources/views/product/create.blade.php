@extends('layouts.app')

@section('content')

    <!-- /.card-header -->
        <!-- form start -->
    <div class="card">
        <div class="card-body">
            <form action="{{route('product.store', app()->getLocale() )}}" method="post">
                {{ csrf_field() }}
                <h1>Category</h1>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="form-group" style="width: 80%; padding-right: 5px;">
                        <label for="exampleInputEmail1">Category name</label>
                        <select name="cat_name" id="" class="form-control">
                            <option value="{{null}}">Select</option>
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Name Uz</label>
                        <input type="text" class="form-control" id="category_add" name="cat_name_uz" placeholder="Add category ...">
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px; padding-left:5px" >
                        <label for="category_add">Name Ru</label>
                        <input type="text" class="form-control" id="category_add" name="cat_name_ru" placeholder="Add category ...">
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Name En</label>
                        <input type="text" class="form-control" id="category_add" name="cat_name_en" placeholder="Add category ...">
                    </div>

                    <input name="btn" value="Saqlash" class="bg-primary" style=" height: 37px; font-size: 16px; color: #fff; border: none; border-radius: 5px;"  type="submit">
                    <input name="btn" value="Delete" class="bg-danger" style=" height: 37px; font-size: 16px; color: #fff; border: none; border-radius: 5px;"  type="submit">
                </div>
            </form>
        </div>

        <div class="card-body">

            @if($product != null)
                <form action="{{route('product.store', [app()->getLocale(), $product->id] )}}" method="post" enctype="multipart/form-data">
            @else
                <form action="{{route('product.store', app()->getLocale())}}" method="post" enctype="multipart/form-data">
            @endif
                {{ csrf_field() }}
                <h1>Product</h1>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="name_uz">Name Uz</label>
                        @if($product != null)
                            <input type="text" value="{{$product->name_uz}}" class="form-control" id="name_uz" name="name_uz" placeholder="Add Name Uz...">
                        @else
                            <input type="text" class="form-control" id="name_uz" name="name_uz" placeholder="Add Name Uz...">
                        @endif
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="name_ru">Name Ru</label>
                        @if($product != null)
                            <input type="text" value="{{$product->name_ru}}"  class="form-control" id="name_ru" name="name_ru" placeholder="Add Name_ru...">
                            @else
                            <input type="text" class="form-control" id="name_ru" name="name_ru" placeholder="Add Name_ru...">
                        @endif
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="name_en">Name En</label>
                        @if($product != null)
                            <input type="text" value="{{$product->name_en}}" class="form-control" id="name_en" name="name_en" placeholder="Add Name_en...">
                            @else
                            <input type="text" class="form-control" id="name_en" name="name_en" placeholder="Add Name_en...">
                        @endif
                    </div>
{{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                </div>


                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="price">Price</label>
                        @if($product != null)
                            <input value="{{$product->price}}" type="text" class="form-control" id="price" name="price" placeholder="Add price ...">
                            @else
                            <input type="text" class="form-control" id="price" name="price" placeholder="Add price ...">
                        @endif
                    </div>
                    <div class="form-group" style="width: 80%; padding-left: 5px">
                        <label for="size">SIZE</label>
                        @if($product != null)
                            <select name="size" id="size" class="form-control">
                                <option value="{{null}}" >Select</option>
                                <option value="0.5" >0.5L</option>
                                <option value="1" >1L</option>
                                <option value="1.5" >1.5L</option>
                                <option value="15" >15L</option>
                            </select>
                        @else
                            <select name="size" id="size" class="form-control">
                                <option value="{{null}}" >Select</option>
                                <option value="0.5" >0.5L</option>
                                <option value="1" >1L</option>
                                <option value="1.5" >1.5L</option>
                                <option value="15" >15L</option>
                            </select>
                        @endif
                    </div>
                    <div class="form-group" style="width: 80%; padding-right: 5px; padding-left: 5px">
                        <label for="cat">Category</label>
                        <select name="category_id" id="cat" class="form-control" >
                            <option value="{{null}}" >Select</option>
                            @foreach(\App\Models\Category::all() as $product_category)
                                <option @if($product != null) @if($product->category_id == $product_category->id) selected @endif @endif value="{{ $product_category->id }}">{{ $product_category->name_uz }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="desc_uz">Description UZ</label>
                        @if($product != null)
                            <textarea class="form-control" id="desc_uz" name="description_uz" placeholder="Add description ...">{{$product->description_uz}}</textarea>
                        @else
                            <textarea class="form-control" id="desc_uz" name="description_uz" placeholder="Add description ..."></textarea>
                        @endif
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="desc_ru">Description RU</label>
                        @if($product != null)
                            <textarea class="form-control" id="desc_ru" name="description_ru" placeholder="Add description ...">{{$product->description_ru}}</textarea>
                        @else
                            <textarea class="form-control" id="desc_ru" name="description_ru" placeholder="Add description ..."></textarea>
                        @endif
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="desc_en">Description EN</label>
                        @if($product != null)
                            <textarea class="form-control" id="desc_en" name="description_en" placeholder="Add description ...">{{$product->description_en}}</textarea>
                        @else
                            <textarea class="form-control" id="desc_en" name="description_en" placeholder="Add description ..."></textarea>
                        @endif
                    </div>
                </div>

                <div class="form-group container-fluid d-flex justify-content-start align-items-end" style="padding: 0px">
                    <div class="" style="width: 20%; margin-right: 5px;" >
                        <label for="image">Image</label>
                        @if($product != null)
                            <input type="file" class="form-control" id="image" name="image">
                            @else
                            <input type="file" class="form-control" id="image" name="image">
                        @endif
                    </div>
                    <div class="" style="width: 20%;" >
                        <label for="image_slider">Image Slider</label>
                        @if($product != null)
                            <input type="file" class="form-control" id="image_slider" name="image_slider">
                        @else
                            <input type="file" class="form-control" id="image_slider" name="image_slider">
                        @endif
                    </div>
                </div>
                

                <div>
                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
                </div>
            </form>
        </div>

    </div>

@endsection
