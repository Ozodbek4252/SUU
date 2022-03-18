@extends('layouts.app')

@section('content')

    <div class="card-body">
        <form action="{{route('report/update',$report->id)}}" method="post">
            {{ csrf_field() }}
            <h1>Report</h1>
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                <div class="" style="width: 80%;" >
                    <label for="category_add">Name_uz</label>
                    <input type="text" class="form-control" id="" name="name_uz" value="{{$report->name_uz}}" >
                </div>
                <div class="" style="width: 80%; padding: 0 5px;" >
                    <label for="category_add">Name_ru</label>
                    <input type="text" class="form-control" id="" name="name_ru" value="{{$report->name_ru}}">
                </div>
                <div class="" style="width: 80%; padding-right: 5px;" >
                    <label for="category_add">Name_en</label>
                    <input type="text" class="form-control" id="" name="name_en" value="{{$report->name_en}}">
                </div>
                {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}
            </div>
            <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="width: 30%" >
            </div>
            <div class="card-body" style="padding: 0">

                <div class="form-group container-fluid d-flex justify-content-between align-items-end" style="padding: 0px">
                    <div class="" style="width: 80%;" >
                        <label for="category_add">Description UZ</label>
                        <textarea class="form-control" id="category_add" name="description_uz" placeholder="Add description ...">{{$report->description_uz}}</textarea>
                    </div>
                    <div class="" style="width: 80%; padding: 0 5px;" >
                        <label for="category_add">Description RU</label>
                        <textarea class="form-control" id="category_add" name="description_ru" placeholder="Add description ...">{{$report->description_ru}}</textarea>
                    </div>
                    <div class="" style="width: 80%; padding-right: 5px;" >
                        <label for="category_add">Description EN</label>
                        <textarea class="form-control" id="category_add" name="description_en" placeholder="Add description ...">{{$report->description_en}}</textarea>
                    </div>
                </div>

                <div class="" style="width: 15%;" >
                    <label for="category_add">Photo</label>
                    <input type="file" class="form-control" id="" name="photo" value="{{$report->photo}}">
                </div>

                <div><button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Submit</button></div>

                {{--                    <input value="Add" class="bg-primary" style="width: 19%; height: 40px; font-size: 16px; color: #fff; border: none; border-radius: 5px;" type="submit">--}}

            </div>
{{--        </form>--}}
    </div>

@endsection
