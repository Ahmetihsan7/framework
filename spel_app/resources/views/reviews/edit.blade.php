@extends('layouts.app')

@section('content')

<h1>Review bewerken</h1>

<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="review">Review:</label><br>

    <textarea
        name="review"
        id="review"
        rows="5"
        required
    >{{ $review->review }}</textarea>

    <br><br>

    <button type="submit">Opslaan</button>
</form>

@endsection