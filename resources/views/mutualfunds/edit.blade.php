@extends('app')
@section('content')
    <h1>Update Mutual Fund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
