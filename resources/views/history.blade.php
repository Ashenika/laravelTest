<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/styles.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>
    th,td,table{
        color: black;
        padding: 5px;
        border-style: solid;
        border-color: black;
    }

    a{
        color: black;
    }
</style>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="col-lg-12">
            <div class="card-header">
                <h3>Transcation History</h3>
            </div>
            <div class="card-body">
                    <div class="input-group form-group">
                        <table>
                            <tr>
                                <th></th>
                                <th>Transaction Date</th>
                                <th>Transffered To</th>
                                <th>Amount</th>
                                <th>Balance</th>
                            </tr>

                                @foreach($transactions as $key => $value)
                                <?php
                                    $total_transactions =0;
                                    $total_transactions += $value->amount;
                                ?>
                                <tr>
                                    <td>{{$key}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>{{$value->sender_id}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$account_details->amount - $total_transactions}}</td>
                                </tr>
                                @endforeach


                        </table>
                    </div>
            </div>
            <div class="form-group">
                <a href="{{url('transaction')}}">Transaction</a>
            </div>
        </div>
    </div>
</div>
</body>