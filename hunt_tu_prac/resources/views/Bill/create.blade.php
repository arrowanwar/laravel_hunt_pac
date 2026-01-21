@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Create New Bill Entry</h2>
    <form action="{{ route('bills.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="bill_number">Bill Number:</label>
            <input type="text" class="form-control" id="bill_number" name="bill_number" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="form-group">
            <label for="economicCode">Code</label>
            <input type="number" class="form-control" id="economicCode" name="economicCode" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection