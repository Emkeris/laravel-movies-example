@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
            <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                <img src="/img/Parasite.jpg" alt="parasite" class="w-96">
                <div class="md:ml-24">
                    <h2 class="text-4xl font-semibold">Paraste (2019)</h2>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" id="Bold" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="m5.574 15.362-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.435.181-1.173-.423-1.265l-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.043-7.378 1.127c-.606.093-.848.83-.423 1.265z"/></svg>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                        <span class="mx-2">|</span>
                        <span>Action, Thriller, Drama</span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestias saepe doloribus recusandae, architecto dolorum quos praesentium, assumenda, quas accusamus aliquam. Rem dolorum nisi quam, quas hic deleniti labore vel!
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Bong Joon-ho</div>
                                <div class="text-sm text-gray-400">
                                    Screenplay, Director Story
                                </div>
                            </div>
                            <div class="ml-8">
                                <div>Han Jin-won</div>
                                <div class="text-sm text-gray-400">Screenplay</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path d="M256,0C114.833,0,0,114.844,0,256s114.833,256,256,256s256-114.844,256-256S397.167,0,256,0z M256,490.667     C126.604,490.667,21.333,385.396,21.333,256S126.604,21.333,256,21.333S490.667,126.604,490.667,256S385.396,490.667,256,490.667     z"/>
                                <path d="M357.771,247.031l-149.333-96c-3.271-2.135-7.5-2.25-10.875-0.396C194.125,152.51,192,156.094,192,160v192     c0,3.906,2.125,7.49,5.563,9.365c1.583,0.865,3.354,1.302,5.104,1.302c2,0,4.021-0.563,5.771-1.698l149.333-96     c3.042-1.958,4.896-5.344,4.896-8.969S360.813,248.99,357.771,247.031z M213.333,332.458V179.542L332.271,256L213.333,332.458z"/>
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- End movie Info --}}

            <div class="movie-cast border-b border-gray-800">
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-semibold">Cast</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/actor1.jpg" alt="Kang-ho Song" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>Kang-ho Song</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/actor2.jpg" alt="Kang-ho Song" class="h-336 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>Sun-kyun Lee</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/actor3.jpg" alt="Kang-ho Song" class="h-336 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>Yeo-jeong Jo</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/actor4.jpg" alt="Kang-ho Song" class="h-336 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>Woo-sik Choi</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/actor5.jpg" alt="Kang-ho Song" class="h-336 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">Real name</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>Suk-eike Lee</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="movie-cast border-b border-gray-800">
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-semibold">Images</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/movie_shot_1.jpg" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/movie_shot_2.jpg" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/movie_shot_3.jpg" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/movie_shot_4.jpg" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/movie_shot_5.jpg" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="/img/movie_shot_6.jpg" alt="image" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
@endsection