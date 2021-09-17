<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($genres as $genre)
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $genre->name }}
                    <a class="text-decoration-none float-right hidden sm:flex sm:items-center sm:ml-6 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700  transition duration-150" href="genre/{{ $genre->id }}">
                        Filter on Genre
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
