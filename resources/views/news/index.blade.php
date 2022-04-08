@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @error('image')<span style="color: red;">{{$message}}</span>@enderror
            <div style="margin-bottom: 1rem;">
                @if(session()->has('message'))
                    <div style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);" class="alert alert-success">
                        {{session('message')}}
                    </div>
                @elseif(session()->has('deleteMessage'))
                    <div style="padding: .75rem; background: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);" class="alert alert-success">
                        {{session('deleteMessage')}}
                    </div>
                @endif
            </div>

            <a href="{{route('news.create', app()->getLocale())}}" class="btn btn-success" style="margin-right: 0px; margin-bottom: 20px;">Add News</a>

                <h4 class="card-title">News</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $num=1; ?>
                    @foreach($news as $new)
                    <tr>
                        <td>{{$num++}}</td>
                        <td>{{$new->name_ru}}</td>
                        <td>{{$new->description_ru}}</td>
                        <td style="display: flex; justify-content: center;"><img src="{{$new->image_path}}/{{$new->image}}" height="100" style="object-fit: contain; object-position: center;"></td>
                        <td>{{$new->updated_at}}</td>
                        <td>
                            <form action="{{route('news.edit', [app()->getLocale(), $new->id] )}}" method="get" style="margin-bottom: 5px;">
                                @csrf
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $new->id }}">Delete</a>
                        </td>
                        <div id="myModal{{ $new->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('news.destroy', [app()->getLocale(), $new->id] )}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">O'chirish</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $news->links() }}
            </div>
        </div>
    </div>
</div>



































{{-- <div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Accordion example</h4>
            <p class="card-title-desc">Click the accordions below to expand/collapse the accordion
                content.</p>
                <div class="accordion" id="accordionExample">
                @foreach($news as $news)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; margin-bottom: 0;">
                                <td>$num++</td>
                                <td>$news->name_ru</td>
                                <td>$news->size</td>
                                <td>$news->price</td>
                                <td>$news->description_ru</td>
                                <td><img src="{{$news->image_path}}/{{$news->image}}" height="100" style="object-fit: contain; object-position: center;"></td>
                                <td>$news->updated_at</td>
                                <td>
                                    <form action="{{route('news.edit', [app()->getLocale(), $news->id] )}}" method="POST" style="margin-bottom: 5px;">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $news->id }}">Delete</a>
                                </td>
                                <div id="myModal{{ $news->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('news.destroy', [app()->getLocale(), $news->id] )}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">O'chirish</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div> --}}

@endsection
