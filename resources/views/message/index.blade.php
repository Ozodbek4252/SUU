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

            <table class="table" style="font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%; margin-top: 10px" >
                <tr class="categoryShow">
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">#</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Order_id</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Last Name</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Phone</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Message</th>


                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px; width: 133px;">Action</th>
                </tr>
                <?php $num=1; ?>
                @foreach($message as $mess)
                    <tr class="categoryShow" >
                        <td >{{$num++}}</td>
        {{--                <td >{{$message->order_id}}</td>--}}
                        <td >{{$mess->name}}</td>
                        <td>{{$mess->last_name}}</td>
                        <td >{{$mess->phone}}</td>
                        <td >{{$mess->message}}</td>
                        <td>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $mess->id }}">Delete</a>

                        </td>
                        <div id="myModal{{ $mess->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <a href="{{route('message.destroy', [app()->getLocale(), $mess->id] )}}" method="post">
                                            <button type="submit" class="btn btn-danger">O'chirish</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </table>
         </div>
     </div>
@endsection
