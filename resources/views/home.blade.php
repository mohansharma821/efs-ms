@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Click on the required link:
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="MyButton" type="button" value="Customers"
                           onclick="window.location.href='{{ action('CustomerController@index') }}'" />

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
