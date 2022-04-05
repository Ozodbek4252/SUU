@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h1>List</h1>


            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <table class="table" style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin-top: 10px" >
                <tr class="categoryShow">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">#</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name Uz</th>
                    {{-- <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name Ru</th> --}}
                    {{-- <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name En</th> --}}
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Size</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Price</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Description Uz</th>
                    {{-- <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Description Ru</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Description En</th> --}}
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Photo</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; width: 133px;">Action</th>
                </tr>
                <?php $num=1; ?>
                @foreach($products as $product)
                    <tr class="categoryShow">
                        <td >{{$num++}}</td>
                        <td >{{$product->name_uz}}</td>
                        {{-- <td>{{$products->name_ru}}</td> --}}
                        {{-- <td >{{$products->name_en}}</td> --}}
                        <td >@if($product->size) {{$product->size}} L @endif</td>
                        <td >{{$product->price}}</td>
                        <td >{{$product->description_uz}}</td>
                        {{-- <td >{{$products->description_ru}}</td> --}}
                        {{-- <td >{{$products->description_en}}</td> --}}
                        <td >{{$product->photo}}</td>
                        <td>
                            <form action="{{route('product.edit', [app()->getLocale(), $product->id] )}}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>

                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $product->id }}">Delete</a>
        {{--                    ////---- yangi usul -----////--}}
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
            </table>


        {{--    {{ $contacts->links() }}--}}
        </div>
    </div>
@endsection
