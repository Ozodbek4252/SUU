@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{route('create.update', [app()->getLocale(), $product->id] )}}" method="post">
                {{ csrf_field() }}
                <h1>Product</h1>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Name_uz</label>
                        <input type="text" class="form-control" id="category_add" name="name_uz" placeholder="Add category ..." value="{{$product->name_uz}}">
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Name_ru</label>
                        <input type="text" class="form-control" id="category_add" name="name_ru" placeholder="Add category ..." value="{{$product->name_ru}}">
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="category_add">Name_en</label>
                        <input type="text" class="form-control" id="category_add" name="name_en" placeholder="Add category ..." value="{{$product->name_en}}">
                    </div>
                    {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                </div>



                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Photo</label>
                        <input type="file" class="form-control" id="category_add" name="photo" value="fghfgh">
                    </div>
                    <div class="form-group" style="width: 80%; padding-left: 5px">
                        <label for="exampleInputEmail1">SIZE</label>
                        <select name="size" id="" class="form-control">
                            <option value="">1L</option>
                            <option value="">5L</option>
                            <option value="">20L</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 80%; padding-right: 5px;">
                        <label for="exampleInputEmail1">Category_id</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">ghjgj</option>
                            <option value="">ghjgj</option>
                            <option value="">ghjgj</option>
                        </select>
                    </div>
                    {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
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
                    {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                </div>

                <div class="" style="width: 25%;" >
                    <label for="category_add">Price</label>
                    <input type="text" class="form-control" id="category_add" name="price" value="{{$product->price}}">
                </div>


                <div><button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button></div>
            </form>
        </div>
    </div>


@endsection
