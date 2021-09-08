@extends('layouts.app')

@section('content')

<div class='card container mt-3 px-0'>
    <h5 class='card-header'>Songs</h5>
    <div class='card-body'>
        @foreach($songs as $song)
        <div class="card mt-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item ">
                    {{ $song->name }}  
                    <div class="btn-group dropleft float-right">
                        <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Details
                        </button>
                        <div class="dropdown-menu">
                            <ul class="list-group">
                                <li class="list-group-item">Name: {{ $song->name }} </li>
                                <li class="list-group-item">Artist/Band: {{ $song->artist_band }}</li>
                                <li class="list-group-item">Duration: {{ $song->duration }} </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection('content')
