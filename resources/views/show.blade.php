@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
            <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="parasite" class="w-96">
                <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }} ({{ \Carbon\Carbon::parse($movie['release_date'])->format('Y')}})</h2>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" id="Bold" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="m5.574 15.362-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.435.181-1.173-.423-1.265l-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.043-7.378 1.127c-.606.093-.848.83-.423 1.265z"/></svg>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach($movie['genres'] as $genre)
                                {{$genre['name']}}@if(!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        {{ $movie['overview'] }}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach($movie['credits']['crew'] as $crew)
                                @if($loop->index < 2)
                                    <div class="mr-8">
                                        <div>{{$crew['name']}}</div>
                                        <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    @if($movie['videos']['results'] > 0)
                        <div class="mt-12">
                            <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"/>
                                    <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"/>
                                </svg>
                                <span class="ml-2">Play Trailer</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            {{-- End movie Info --}}

            {{-- Cast --}}
            <div class="movie-cast border-b border-gray-800">
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-semibold">Cast</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        @foreach($movie['credits']['cast'] as $cast)
                        @if($loop->index < 5)
                            <div class="mt-8">
                                <a href="#">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}" alt="{{ $cast['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="mt-2">
                                    <a href="#" class="text-lg mt-2 hover:text-gray:300">{{$cast['name']}}</a>
                                    <div class="flex items-center text-gray-400 text-sm mt-1">
                                        <span>{{$cast['character']}}</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="movie-cast border-b border-gray-800">
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-semibold">Images</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        @foreach($movie['images']['backdrops'] as $image)
                            @if($loop->index < 9)
                                <div class="mt-8">
                                    <a href="">
                                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                </div>
                            @endif
                        @endforeach                        
    
                    </div>
                </div>
            </div>
    </div> 
@endsection