@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="card-body">
                <form action="{{route('news.update', [app()->getLocale(), $news->id])}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <h1>News</h1>
                    <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                        <div class="" style="width: 80%;" >
                            <label for="category_add">Name_uz</label>
                            <input type="text" class="form-control" id="" name="name_uz" value="{{$news->name_uz}}" >
                        </div>
                        <div class="" style="width: 80%; padding: 0 5px;" >
                            <label for="category_add">Name_ru</label>
                            <input type="text" class="form-control" id="" name="name_ru" value="{{$news->name_ru}}">
                        </div>
                        <div class="" style="width: 80%; padding-right: 5px;" >
                            <label for="category_add">Name_en</label>
                            <input type="text" class="form-control" id="" name="name_en" value="{{$news->name_en}}">
                        </div>
                        {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
                    </div>
                    <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="width: 30%" >
                    </div>
                    <div class="card-body" style="padding: 0">

                        <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                            <div class="" style="width: 80%;" >
                                <label for="category_add">Description UZ</label>
                                <textarea class="form-control" id="category_add" name="description_uz" placeholder="Add description ...">{{$news->description_uz}}</textarea>
                            </div>
                            <div class="" style="width: 80%; padding: 0 5px;" >
                                <label for="category_add">Description RU</label>
                                <textarea class="form-control" id="category_add" name="description_ru" placeholder="Add description ...">{{$news->description_ru}}</textarea>
                            </div>
                            <div class="" style="width: 80%; padding-right: 5px;" >
                                <label for="category_add">Description EN</label>
                                <textarea class="form-control" id="category_add" name="description_en" placeholder="Add description ...">{{$news->description_en}}</textarea>
                            </div>
                        </div>

                        <div class="" style="width: 15%;" >
                            <label for="category_add">Photo</label>
                            <input type="file" class="form-control" id="" name="image" value="{{$news->photo}}">
                        </div>

                        <div><button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button></div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
