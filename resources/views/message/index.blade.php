@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Сообшении</h4>
                {{-- <p class="card-title-desc">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p> --}}
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $num=1; ?>
                    @foreach($messages as $message)
                    <tr>
                        <td>{{$num++}}</td>
                        <td>@if($message->invoice_id)<a href="/">{{$message->invoice->name}}</a>@endif</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->last_name}}</td>
                        <td><a href="tel:{{$message->phone}}">{{$message->phone}}</a></td>
                        <td style="width: 35%">{{$message->message}}</td>
                        <td>{{$message->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $messages->links() }}
            </div>
        </div>
    </div>
</div>


@endsection
