@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h1>Invoices</h1>

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
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="categoryShow">
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; width: 3%;">#</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">User</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Sum</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; width: 10%;">Delivery</th>
                    {{-- <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; width: 133px;">Action</th> --}}
                </tr>
                </thead>
                <tbody>
                <?php $num=1; ?>
                @foreach($invoice as $invoice)
                    <tr class="categoryShow">
                        <td style="text-align: center;">{{$num++}}</td>
                        <td style="padding-left: 10px;"><a href="{{ route('dash.orders', [app()->getLocale(), $invoice->id]) }}">{{$invoice->name}}</a></td>
                        <td style="padding-left: 5px;">@if($invoice->message)
                            <ul style="list-style: none; padding-left: 0;">
                                <li>Name: {{$invoice->message->name}}</li>
                                <li>Phone: <a href="tel:{{$invoice->message->phone}}">{{$invoice->message->phone}}</a></li>
                            </ul>
                            @else Eski @endif</td>
                        <td>{{$invoice->sum}}</td>
                        <td>{{$invoice->delivery}}</td>
                        <td></td>
                        {{-- <div id="myModal{{ $rep->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        </div> --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
