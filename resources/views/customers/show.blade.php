@extends('layouts.app')

@section('title', 'Customer Details')

@section('content')
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $customer->name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to Customers</a>
        </div>
    </div>
@endsection
