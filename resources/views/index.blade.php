@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">POPULAR MOVIES</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                {{-- @foreach($popularMovies as $popularMovie) --}}
                @foreach($popularMovies as $movie)
                    <div class="mt-8">
                        <a href="{{ route('movies.show', $movie['id'])}}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('movies.show', $movie['id'])}}" class="text-lg mt-2 hover:text-gray:300">{{$movie['title']}}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" id="Bold" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="m5.574 15.362-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.435.181-1.173-.423-1.265l-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.043-7.378 1.127c-.606.093-.848.83-.423 1.265z"/></svg>
                                </span>
                                <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')  }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                @foreach($movie['genre_ids'] as $genre)
                                    {{$genres->get($genre)}}@if(!$loop->last), @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
        
    {{-- end of Popular movies --}}
    {{-- Now Playing movies --}}

    <div class="container mx-auto px-4 pt-16">
        <div class="now-playing-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now playing MOVIES</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $playingMovie)
                    <div class="mt-8">
                        <a href="{{ route('movies.show', $playingMovie['id'])}}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$playingMovie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('movies.show', $playingMovie['id'])}}" class="text-lg mt-2 hover:text-gray:300">{{$playingMovie['title']}}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" id="Bold" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="m5.574 15.362-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.435.181-1.173-.423-1.265l-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.043-7.378 1.127c-.606.093-.848.83-.423 1.265z"/></svg>
                                </span>
                                <span class="ml-1">{{ $playingMovie['vote_average'] * 10 .'%' }}</span>
                                <span class="mx-2">|</span>
                                <span>{{ \Carbon\Carbon::parse($playingMovie['release_date'])->format('M d, Y')  }}</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                @foreach($playingMovie['genre_ids'] as $genre)
                                    {{$genres->get($genre)}}@if(!$loop->last), @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection