<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Transaction</title>
</head>
<body>
    <h1>CREATE TRANSACTION PAGE</h1>

    <form action="{{ route('storeTransaction') }}" method="POST">

        @csrf
        <label for="transaction">Transaction:</label> 
        <input type="text" id="transaction" name="transaction" required><br> 
      

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="successful">Successful</option>
            <option value="unsuccessful">Unsuccessful</option>
            <option value="declined">Declined</option>
        </select><br>

        <label for="total_amount">Total Amount:</label>
        <input type="number" id="total_amount" name="total_amount" step="0.01" required><br>

        <label for="transaction_number">Transaction Number:</label>
        <input type="text" id="transaction_number" name="transaction_number" required><br>

        <button type="submit">Create Transaction</button>
   </form> 
    
</body>
</html>