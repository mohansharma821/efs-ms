@extends('app')
@section('content')
    <h1>Mutual Funds</h1>
    <a href="{{url('/mutualfunds/create')}}" class="btn btn-success">Add Mutual Funds</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Fund Name</th>
            <th>Percentage Change</th>
            <th>Week High</th>
            <th>Week Low</th>
            <th>Purchase Price</th>
            <th>Purchase Date</th>
            <th colspan="3">Actions</th>
        </tr>

        <!-- 'fund_name', 'percentage_change', 'week_high', 'week_low', 'purchase_price', 'purchased'   -->

        </thead>
        <tbody>
        @foreach ($mutualfunds as $mutualfund)
            <tr>
                <td>{{ $mutualfund->customer->cust_number }}</td>
                <td>{{ $mutualfund->customer->name }}</td>
                <td>{{ $mutualfund->fund_name }}</td>
                <td>{{ $mutualfund->percentage_change }}</td>
                <td>{{ $mutualfund->week_high }}</td>
                <td>{{ $mutualfund->week_low }}</td>
                <td>{{ $mutualfund->purchase_price }}</td>
                <td>{{ $mutualfund->purchased }}</td>

                <td><a href="{{url('mutualfunds',$mutualfund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mutualfunds.edit',$mutualfunds->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mutualfunds.destroy', $mutualfund->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
