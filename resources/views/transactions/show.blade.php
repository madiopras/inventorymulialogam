@extends('layouts.app')

@section('title', 'Transaction Details')

@section('content')
    <h1>Transaction Details</h1>
    <div class="card">
        <div class="card-header">
            Transaction ID: {{ $transaction->id }}
        </div>
        <div class="card-body">
            <p><strong>Type:</strong> {{ $transaction->type }}</p>
            <p><strong>Amount:</strong> {{ $transaction->amount }}</p>
            <p><strong>Date:</strong> {{ $transaction->created_at->format('d-m-Y H:i:s') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Back to Transactions</a>
        </div>
    </div>
@endsection
