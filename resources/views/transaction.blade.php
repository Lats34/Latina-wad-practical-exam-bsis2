<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
</head>
<body>
    <h1>Transaction Details</h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <h2>Transaction ID: {{ $transaction->id }}</h2>
    <p><strong>Transaction:</strong> {{ $transaction->transaction }}</p>
    <p><strong>Description:</strong> {{ $transaction->description }}</p>
    <p><strong>Status:</strong> {{ $transaction->status }}</p>
    <p><strong>Total Amount:</strong> {{ $transaction->total_amount }}</p>
    <p><strong>Transaction Number:</strong> {{ $transaction->transaction_number }}</p>

    <a href="{{ route('some.route') }}">Back to Transactions</a>
</body>
</html>
