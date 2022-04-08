@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @error('image')
                <div style="padding: .75rem; background: #feb2b2; border-color: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);" class="alert alert-success">
                    {{$message}}
                </div>
            @enderror

            <form action="{{route('news.store', app()->getLocale())}}" method="post" enctype="multipart/form-data">
                <div class="card-body">
                        {{ csrf_field() }}
                        <h1>Add News</h1>
                        <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                            <div class="" style="width: 80%;" >
                                <label for="category_add">Name_uz</label>
                                <input type="text"class="form-control" id="category_add" name="name_uz" placeholder="Add category ...">
                            </div>
                            <div class="" style="width: 80%; padding: 0 5px;" >
                                <label for="category_add">Name_ru</label>
                                <input type="text" class="form-control" id="category_add" name="name_ru" placeholder="Add category ...">
                            </div>
                            <div class="" style="width: 80%; padding-right: 5px;" >
                                <label for="category_add">Name_en</label>
                                <input type="text" class="form-control" id="category_add" name="name_en" placeholder="Add category ...">
                            </div>
                        </div>
                        <div class="card-body" style="padding: 0">
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
                            </div>
                            <div class="" style="width:15%;" >
                                <label for="category_add">Photo</label>
                                <input type="file" class="form-control" id="category_add" name="image">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>

@endsection
