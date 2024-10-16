<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaction</title>
</head>
<body>
    <h1>Edit Transaction</h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('update.transaction', $transaction->id) }}" method="POST">
        @csrf

        <label for="transaction">Transaction:</label>
        <input type="text" id="transaction" name="transaction" value="{{ $transaction->transaction }}" required><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="successful" {{ $transaction->status == 'successful' ? 'selected' : '' }}>Successful</option>
            <option value="unsuccessful" {{ $transaction->status == 'unsuccessful' ? 'selected' : '' }}>Unsuccessful</option>
            <option value="declined" {{ $transaction->status == 'declined' ? 'selected' : '' }}>Declined</option>
        </select><br>

        <label for="total_amount">Total Amount:</label>
        <input type="number" id="total_amount" name="total_amount" step="0.01" value="{{ $transaction->total_amount }}" required><br>

        <label for="transaction_number">Transaction Number:</label>
        <input type="text" id="transaction_number" name="transaction_number" value="{{ $transaction->transaction_number }}" required><br>

        <button type="submit">Update Transaction</button>
    </form>

    <a href="{{ route('some.route') }}">Back to Transactions</a>
</body>
</html>
