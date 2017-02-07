<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagle Financial Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Added additionally -->
    <style>
        input.MyButton {
            width: 150px;
            padding: 1px;
            cursor: pointer;
            font-weight: bold;
            font-size: 120%;
            background: #3366cc;
            color: #fff;
            border: 1px solid #3366cc;
            border-radius: 10px;
            -moz-box-shadow: 6px 6px 5px #999;
            -webkit-box-shadow: 6px 6px 5px #999;
            box-shadow: 6px 6px 5px #999;
        }
        input.MyButton:hover {
            color: #ffff00;
            background: #000;
            border: 1px solid #fff;
            -moz-box-shadow: 5px 5px 4px #adadad;
            -webkit-box-shadow: 5px 5px 4px #adadad;
            box-shadow: 5px 5px 4px #adadad;
        }

        h3 { display: inline-block; }

    </style>

</head>
<body>
<div class="container">

    <!-- Original code : Commented
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a>
    -->

        <!-- Added additionally -->
        <h3 class="title">Eagle Financial Services</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="MyButton" type="button" value="Customers"
           onclick="window.location.href='{{ action('CustomerController@index') }}'" />
        <input class="MyButton" type="button" value="Stocks"
               onclick="window.location.href='{{ action('StockController@index') }}'" />
        <input class="MyButton" type="button" value="Investments"
               onclick="window.location.href='{{ action('InvestmentController@index') }}'" />
        <!--  <a href = "{{ url('/logout') }}"><i class = "fa fa-btn fa-sign-out"></i>Logout</a>  -->

        <input class="MyButton" type="button" value="Logout"
               onclick="window.location.href='{{ url('/logout') }}'" />

</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
