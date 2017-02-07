@extends('app')
@section('content')
    <h1>Create New Mutual Fund</h1>
    {!! Form::open(['url' => 'mutualfunds']) !!}

    <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <!-- 'fund_name', 'percentage_change', 'week_high', 'week_low', 'purchase_price', 'purchased'   -->

    <div class="form-group">
        {!! Form::label('fund_name', 'Fund Name:') !!}
        {!! Form::text('fund_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('percentage_change', 'Percentage Change:') !!}
        {!! Form::text('percentage_change',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('week_high', 'Week High:') !!}
        {!! Form::text('week_high',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('week_low', 'Week Low:') !!}
        {!! Form::text('week_low',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_price', 'Purchase Price:') !!}
        {!! Form::text('purchase_price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchased', 'Purchase Date:') !!}
        {!! Form::text('purchased',null,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

@stop
