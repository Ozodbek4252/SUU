@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Invoices</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>Sum</th>
                            <th>Delivery</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php $num=1; ?>
                        @foreach($invoices as $invoice)
                        <tr>
                            <td>{{$num++}}</td>
                            <td><a href="{{ route('dash.orders', [app()->getLocale(), $invoice->id]) }}">{{$invoice->name}}</a></td>
                            <td>
                                @if($invoice->message)
                                    <ul style="list-style: none; padding-left: 0;">
                                        <li>Name: {{$invoice->message->name}}</li>
                                        <li>Phone: <a href="tel:{{$invoice->message->phone}}">{{$invoice->message->phone}}</a></li>
                                    </ul>
                                @else 
                                    Eski 
                                @endif</td>
                            </td>
                            <td>{{$invoice->sum}}</td>
                            <td>{{$invoice->delivery}}</td>
                            <td>{{$invoice->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $invoices->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
