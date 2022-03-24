@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h1>List</h1>

            <a href="{{route('report/create')}}" class="btn btn-success" style="margin-right: 20px">Add</a>






            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <table style="font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%; margin-top: 10px" >
                <tr class="categoryShow">
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">#</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name Uz</th>
                    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Name Ru</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Name En</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Photo</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Description Uz</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Description Ru</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;">Description En</th>
                    <th style="border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px; width: 133px;">Action</th>
                </tr>
                <?php $num=1; ?>
                @foreach($report as $rep)
                    <tr class="categoryShow">
                        <td >{{$num++}}</td>
                        <td >{{$rep->name_uz}}</td>
                        <td>{{$rep->name_ru}}</td>
                        <td >{{$rep->name_en}}</td>
                        <td >{{$rep->photo}}</td>
                        <td >{{$rep->description_uz}}</td>
                        <td >{{$rep->description_ru}}</td>
                        <td >{{$rep->description_en}}</td>

                        <td><a href="{{route('report.edite', $rep->id)}}" class="btn btn-primary">Edit</a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $rep->id }}">Delete</a>

                        </td>
                        <div id="myModal{{ $rep->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <a href="{{route('report.destroy', $rep->id)}}" method="post">
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
