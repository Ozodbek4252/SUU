@extends('layouts.app')

@section('content')


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <!-- /.card-header -->
        <!-- form start -->
    <div class="card">
        <div class="card-body">
            <form action="{{route('create.store',  )}}" method="post">
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
            <form action="{{route('create.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Product</h1>
                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Name_uz</label>
                        <input type="text" class="form-control" id="category_add" name="name_uz" placeholder="Add Name_uz...">
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Name_ru</label>
                        <input type="text" class="form-control" id="category_add" name="name_ru" placeholder="Add Name_ru...">
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="category_add">Name_en</label>
                        <input type="text" class="form-control" id="category_add" name="name_en" placeholder="Add Name_en...">
                    </div>
{{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                </div>

                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Description UZ</label>
                        <textarea class="form-control" id="category_add" name="description_uz" placeholder="Add description ..."></textarea>
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Description RU</label>
                        <textarea class="form-control" id="category_add" name="description_ru" placeholder="Add description ..."></textarea>
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="category_add">Description EN</label>
                        <textarea class="form-control" id="category_add" name="description_en" placeholder="Add description ..."></textarea>
                    </div>
                    {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                </div>

                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Photo</label>
                        <input type="file" class="form-control" id="category_add" name="image">
                    </div>
                    <div class="form-group" style="width: 80%; padding-left: 5px">
                        <label for="exampleInputEmail1">SIZE</label>
                        <select name="size" id="" class="form-control">
                            <option value="{{null}}" >Select</option>
                            <option value="1" >1L</option>
                            <option value="2" >2L</option>
                            <option value="5" >5L</option>
                            <option value="10" >10L</option>
{{--                            @foreach(App\Models\Product::all() as $data)--}}
{{--                                <option value="{{$data->size}}" @if($loop->first) selected @endif></option>--}}
{{--                            @endforeach--}}

                        </select>
                    </div>
                    <div class="form-group" style="width: 80%; padding-right: 5px; padding-left: 5px">
                        <label for="exampleInputEmail1">Category_id</label>
                        <select name="cat_id" id="" class="form-control" >
                            <option value="{{null}}" >Select</option>
                            @foreach(\App\Models\Category::all() as $product_category)
                                <option value="{{ $product_category->id }}">{{ $product_category->name_uz }}</option>
{{--                                <option value="{{ $product_category->id }}">{{ $product_category->name_ru }}</option>--}}
{{--                                <option value="{{ $product_category->id }}">{{ $product_category->name_en }}</option>--}}
                            @endforeach
                        </select>
                    </div>
                    {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                </div>

                <div>
                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
                </div>
            </form>
        </div>


{{--                <div  class="d-flex">--}}

{{--                    <div class="d-flex" style="width: 50%;">--}}

{{--                        <div class="form-group" style="width: 50%; padding-right: 5px;">--}}
{{--                            <label for="exampleInputEmail1">Category_id</label>--}}
{{--                            <select name="" id="" class="form-control">--}}
{{--                                <option value="">ghjgj</option>--}}
{{--                                <option value="">ghjgj</option>--}}
{{--                                <option value="">ghjgj</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group" style="width: 50%; padding-left: 5px">--}}
{{--                            <label for="exampleInputEmail1">SIZE</label>--}}
{{--                            <select name="" id="" class="form-control">--}}
{{--                                <option value="">1L</option>--}}
{{--                                <option value="">5L</option>--}}
{{--                                <option value="">20L</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group" style="width: 51%; padding-left: 10px">--}}
{{--                        <label for="exampleInputEmail1">Name_uz</label>--}}
{{--                        <input type="text" class="form-control" id="exampleInputEmail1" name="name_uz">--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>



{{--    <nav class="nav flex-column">--}}
{{--        <a class="nav-link active" aria-current="page" href="#">Active</a>--}}
{{--        <a class="nav-link" href="#">Link</a>--}}
{{--        <a class="nav-link" href="#">Link</a>--}}
{{--        <a class="nav-link disabled">Disabled</a>--}}
{{--    </nav>--}}
{{--    <nav>--}}
{{--        <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
{{--            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">RU</button>--}}
{{--            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">UZ</button>--}}
{{--            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">EN</button>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--    <div class="tab-content" id="nav-tabContent">--}}
{{--        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> <label for="exampleInputEmail1">Name_uz</label>--}}
{{--            <input type="text" class="form-control" id="exampleInputEmail1" name="name_uz"></div>--}}
{{--        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>--}}
{{--        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>--}}
{{--    </div>--}}
{{--    <div>--}}

{{--    </div>--}}









@endsection
