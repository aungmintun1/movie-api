@extends('layouts/main-layout')

@section('title', 'Movie')

@section('content')
<div class="p-0.5 mb-7 border max-w-lg mx-auto bg-gradient-cyan focus-within:ring focus-within:ring-indigo-400 overflow-hidden rounded-xl">
  <form method="GET" action="/search" class="p-0.5 flex flex-col md:flex-row bg-white overflow-hidden rounded-lg">
    <input name="query" class="block flex-1 px-5 py-4 md:py-0 text-base text-gray-500 bg-transparent outline-none placeholder-gray-500 rounded-tl-xl rounded-bl-xl" type="text" placeholder="Enter a Movie Or TV Show" contenteditable="false">
    <button type="submit" class="group relative font-heading font-semibold w-full md:w-auto py-5 px-8 text-xs text-white bg-gray-900 hover:bg-gray-800 uppercase overflow-hidden rounded-md tracking-px">
      <div class="absolute top-0 left-0 transform -translate-y-full group-hover:-translate-y-0 h-full w-full transition ease-in-out duration-500 bg-gradient-cyan"></div>
      <p class="relative z-10">Search</p>
    </button>
  </form>
</div>
<section class="relative pt-28 pb-36 bg-black overflow-hidden">
  
  <div>
    <p
      class=" mb-6 max-w-max mx-auto text-center text-transparent bg-clip-text bg-gradient-cyan2 font-heading text-xs uppercase font-semibold tracking-px">
      HERE'S YOUR RESULTS
    </p>
    <h2 class="mb-4 font-heading font-semibold text-center text-6xl sm:text-7xl text-white">{{$result['title']}}
    </h2>
    <p class="text-center text-white text-m">{{$result['tmdb_type']}} • {{$result['year']}} • {{$result['us_rating']}} • {{$result['runtime_minutes']}}m  </p>
  
  </div>

  <div class="container image-content mt-14">
  
      <img class="poster-photo" src="{{$result['poster']}}" alt="poster">
   

      <img class="backdrop-photo" src="{{$result['backdrop']}}" alt="backdrop">
    
  
    </div>
  <div class="info-section container">
    @foreach ($result['genre_names'] as $genre )
    <div class="genre">{{$genre}}</div>
    @endforeach

    <p class="description">{{$result['plot_overview']}}</p>
    
  </div>
  
</section>


@endsection

