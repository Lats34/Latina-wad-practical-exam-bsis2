<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function showAllTransactions()
    {
        $transactions = Transaction::orderBy('updated_at', 'desc')->get();
        return view('transactions', ['transactions' => $transactions]);
    }

    public function createTransaction() {
        return view('create-transaction');
    }

    public function storeTransaction(Request $request) 
    { 
        // Validate the incoming request data 
        $request->validate([ 
            'transaction' => 'required|string|max:255', 
            'description' => 'required|string|max:255',  
            'status' => 'required|string|max:10', 
            'total_amount' => 'required|numeric', 
            'transaction_number' => 'required|string|max:255', 
        ]); 

        Transaction::create($request->all());
        // Redirect with success message 
        return redirect()->route('showAllTransactions')->with('success', 'Transaction  Created Successfully'); 
    } 
    
    public function viewTransaction($id)
    {
        $transaction = Transaction::find($id);
    
        if (!$transaction) {
            return redirect()->route('some.route')->with('error', 'Transaction not found.');
        }
    
        return view('transaction', ['transaction' => $transaction]);
    }

    public function editTransaction($id)
{
    $transaction = Transaction::find($id);

    if (!$transaction) {
        return redirect()->route('some.route')->with('error', 'Transaction not found.');
    }

    return view('edit_transaction', ['transaction' => $transaction]);
}

public function updateTransaction(Request $request, $id)
{
    $transaction = Transaction::find($id);

    if (!$transaction) {
        return redirect()->route('some.route')->with('error', 'Transaction not found.');
    }

    // Validate the request
    $request->validate([
        'transaction' => 'required|string',
        'status' => 'required|string',
        'total_amount' => 'required|numeric',
        'transaction_number' => 'required|string',
    ]);

    // Update the transaction
    $transaction->transaction = $request->transaction;
    $transaction->status = $request->status;
    $transaction->total_amount = $request->total_amount;
    $transaction->transaction_number = $request->transaction_number;
    $transaction->save();

    return redirect()->route('some.route')->with('success', 'Transaction updated successfully.');
}

}
