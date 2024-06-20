@extends('layouts.app')

@section('title', 'Supplier Details')

@section('content')
    <h1>Supplier Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $supplier->name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $supplier->email ?: 'N/A' }}</p>
            <p><strong>Phone:</strong> {{ $supplier->phone ?: 'N/A' }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Back to Suppliers</a>
        </div>
    </div>
@endsection
