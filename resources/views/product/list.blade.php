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
                    
                    <h4 class="card-title">products</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $num=1; ?>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$num++}}</td>
                            <td>{{$product->name_ru}}</td>
                            <td>{{$product->size}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description_ru}}</td>
                            <td><img src="{{$product->image_path}}/{{$product->image}}" height="100" style="object-fit: contain; object-position: center;"></td>
                            <td>{{$product->updated_at}}</td>
                            <td>
                                <form action="{{route('product.edit', [app()->getLocale(), $product->id] )}}" method="get" style="margin-bottom: 5px;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $product->id }}">Delete</a>
                            </td>
                            <div id="myModal{{ $product->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('product.destroy', [app()->getLocale(), $product->id] )}}" method="POST">
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
                {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
