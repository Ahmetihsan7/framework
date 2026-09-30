@extends('layouts.app')

@section('content')

    <h1>Spel App</h1>

    <ul>
        <li>
            <a href="{{ route('categories.index') }}">Categories</a>
        </li>

        <li>
            <a href="{{ route('products.index') }}">Products</a>
        </li>

        <li>
            <a href="{{ route('reviews.index') }}">Reviews</a>
        </li>
    </ul>

@endsection