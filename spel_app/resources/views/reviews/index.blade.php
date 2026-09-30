@extends('layouts.app')

@section('content')

<h1>Reviews</h1>

<a href="{{ route('reviews.create') }}">Review toevoegen</a>

<br><br>

@if($reviews->isEmpty())
    <p>Er zijn nog geen reviews.</p>
@else
    @foreach($reviews as $review)
    <div>
        <p>{{ $review->review }}</p>

        <a href="{{ route('reviews.edit', $review->id) }}">Bewerken</a>

        <br><br>

        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">Verwijderen</button>
        </form>

        <br>
    </div>
@endforeach
@endif

@endsection