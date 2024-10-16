<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>
<body>
    <h1>Transactions Page</h1>

    @foreach($transactions as $transaction)
    <div>Transaction: {{ $transaction->transaction }}</div>
    <div>Description: {{ $transaction->description }} </div>
    <div>Status: {{ $transaction->status }}</div>
    <div>Total_Amount: {{ $transaction->total_amount }}</div>
    <div>Transaction_Number: {{ $transaction->transaction_number }}</div>
    <hr>
    @endforeach

</body>
</html>