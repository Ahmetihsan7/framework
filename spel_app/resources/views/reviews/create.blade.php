@extends('layouts.app')

@section('content')

<h1>Review toevoegen</h1>

<form action="{{ route('reviews.store') }}" method="POST">
    @csrf

    <label for="product_id">Product:</label><br>

    <select name="product_id" id="product_id" required>
        <option value="">Kies een product</option>

        @foreach($products as $product)
            <option value="{{ $product->id }}">
                {{ $product->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label for="review">Review:</label><br>

    <textarea
        name="review"
        id="review"
        rows="5"
        required
    ></textarea>

    <br><br>

    <button type="submit">Review toevoegen</button>
</form>

@endsection