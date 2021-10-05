<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Playlists') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($userPlaylists as $userPlaylist)

                @include('layouts.editPlaylist')

                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $userPlaylist->name }} </br>
                    <div class="text-decoration-none   flex items-center text-sm font-medium text-gray-500">
                    {{ $userPlaylist->duration }} Seconden
                    </div>
                    <a data-toggle="collapse" href="#{{ $userPlaylist->id }}" class="dropdown-toggle text-decoration-none float-right hidden sm:flex sm:items-center sm:ml-6 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700  transition duration-150">
                        Details
                    </a>

                    <a href="userplaylist/deletePlaylist/{{ $userPlaylist->id }}" class=" text-decoration-none float-right hidden sm:flex sm:items-center sm:ml-6 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700  transition duration-150">
                        Delete Playlist
                    </a>
                    
                    <a data-toggle="modal" data-target="#exampleModal" class=" text-decoration-none float-right hidden sm:flex sm:items-center sm:ml-6 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700  transition duration-150">
                        Edit Playlist
                    </a>

                    <div class="collapse" id="{{ $userPlaylist->id }}">
                        <ul class="list-group">
                            @foreach($userPlaylist->songs()->get() as $song)
                                <li class="list-group-item">
                                    Name: {{ $song->name }}
                                    <a href="userPlaylist/deleteSong/{{ $userPlaylist->id }}/{{ $song->id }}" class=" text-decoration-none float-right fas fa-trash text-gray-500 hover:text-gray-700 hover:border-gray-300  focus:text-gray-700  transition duration-150">  </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
