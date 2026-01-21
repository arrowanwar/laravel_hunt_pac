@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Bill Entries</h2>
    <a href="{{ route('bills.create') }}" class="btn btn-primary mb-3">Create New Bill</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Bill Number</th>
                <th>Amount</th>
                <th>Economic Code</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{--  @foreach($bills as $bill)--}}
            <tr>
                <td>{{ $bill->id }}</td>
                <td>{{ $bill->bill_number }}</td>
                <td>{{ $bill->amount }}</td>
                <td>{{ $bill->economicCode }}</td>
                <td>{{ $bill->description }}</td>
                <td>
                    <a href="{{ route('bills.edit', $bill->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('bills.delete', $bill->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>