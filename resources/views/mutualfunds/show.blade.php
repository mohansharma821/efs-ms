@extends('app')
@section('content')
    <h1>Mutual Fund</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>

            <tr class="bg-info">
            <tr>
                <td>Fund Name</td>
                <td><?php echo ($mutualfund['fund_name']); ?></td>
            </tr>
            <tr>
                <td>Percentage Change</td>
                <td><?php echo ($mutualfund['percentage_change']); ?></td>
            </tr>
            <tr>
                <td>Week High</td>
                <td><?php echo ($mutualfund['week_high']); ?></td>
            </tr>
            <tr>
                <td>Week Low</td>
                <td><?php echo ($mutualfund['week_low']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price</td>
                <td><?php echo ($mutualfund['purchase_price']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price</td>
                <td><?php echo ($mutualfund['purchased']); ?></td>
            </tr>

            </tbody>
        </table>
    </div>
@stop
