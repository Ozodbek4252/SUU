@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h1>Orders</h1>

            @error('image')<span style="color: red;">{{$message}}</span>@enderror

            {{-- <div style="margin-bottom: 1rem;">
                @if(session()->has('message'))
                    <div style="padding: .75rem; background: #9ae6b4; color: #276749; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);" class="alert alert-success">
                        {{session('message')}}
                    </div>
                @elseif(session()->has('deleteMessage'))
                    <div style="padding: .75rem; background: #feb2b2; color: #9b2c2c; border-radius: 0.25rem; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);" class="alert alert-success">
                        {{session('deleteMessage')}}
                    </div>
                @endif
            </div> --}}

            {{-- <a href="{{route('news.create', app()->getLocale())}}" class="btn btn-success" style="margin-right: 20px">Add</a> --}}

            <table class="table" style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin-top: 10px" >
                <tr class="categoryShow">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">#</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; width: 40%;">Product</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Quantity</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Logo</th>
                    {{-- <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; width: 133px;">Action</th> --}}
                </tr>
                <?php $num=1; ?>
                @foreach($orders as $order)
                    <tr class="categoryShow">
                        <td >{{$num++}}</td>
                        <td style="display: flex;">
                            <ul style="list-style: none; padding-left: 5px; margin-bottom: 0; margin: auto 0;">
                                <li>Name: {{$order->product->name_ru}}</li>
                                <li>Price: {{$order->product->price}}</li>
                                <li>Category: {{$order->product->category->name_ru}}</li>
                            </ul>
                            <img src="{{$order->product->image_path}}/{{$order->product->image}}" alt="img" height="120" width="100" style="object-fit: contain;"/>
                        </td>
                        <td style="padding-left: 5px;">{{$order->quantity}}</td>
                        <td style="padding-left: 5px;">{{$order->logo}}</td>
                        {{-- <td></td> --}}
                        {{-- <!-- <div id="myModal{{ $rep->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                </div>
                            </div>
                        </div> --> --}}
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
