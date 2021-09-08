@extends('layouts.app')

@section('content')

<div class='card container mt-3 px-0'>
    <h5 class='card-header'>Genres</h5>
    <div class='card-body'>
        @foreach($genres as $genre)
        
        <div class="card mt-2" >
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">
                  {{ $genre->name }} 
                  <a class="btn btn-outline-info float-right" href=genre/{{ $genre->id }} role="button">Songs in this Genre</a>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection('content')


