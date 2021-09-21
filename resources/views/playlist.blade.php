<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Songs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($songs as $song)
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $song->name }} </br>


                    <a data-toggle="collapse" href="#{{ $song->name }}" class=" text-decoration-none float-right hidden sm:flex sm:items-center sm:ml-6 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700  transition duration-150">
                        Details
                    </a>

                    <a href="/playlist/remove/{{ $song->id }}" class=" text-decoration-none float-right hidden sm:flex sm:items-center sm:ml-6 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700  transition duration-150">
                        Remove from Playlist
                    </a>

                    <div class="collapse" id="{{ $song->name }}">
                        <ul class="list-group">
                            <li class="list-group-item">Name: {{ $song->name }}</li>
                            <li class="list-group-item">Duration: {{ $song->duration }}</li>
                            <li class="list-group-item">Artist/Band: {{ $song->artist_band }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
