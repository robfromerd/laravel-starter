<!-- resources/views/samples/index.blade.php -->

@extends('layout')


@section('title', 'Samples')

@section('content')

<section class="text-gray-600 body-font">
		         <h1 class="text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-7 md:leading-10">Samples</h1>
  <div class="container px-5 py-10 mx-auto">
    <div class="flex flex-wrap -m-4">

        @foreach($samples as $sample)
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/{{ $sample->path }}" alt="Sample image">
          <div class="p-6">
    
            <h2 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $sample->title }}</h2>
            <p class="leading-relaxed mb-3">{{ $sample->body }}.</p>
@if (auth()->user() && auth()->user()->role === 'admin')
           <p> <a class="text-xs py-2 px-4 shadow-md no-underline rounded-full bg-indigo-700 text-white font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none" href="{{ route('samples.edit', $sample) }}">Edit this sample</a></p>

            <form action="{{ route('samples.destroy', $sample) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-xs mt-2 py-2 px-4 shadow-md no-underline rounded-full bg-red-400 text-white font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none" type="submit">Delete this sample</button>
            </form>

        @endif 
          </div>
        </div>
      </div>
     
    @endforeach
    </div>
  </div>
</section>
@if (auth()->check())
<p class="text-center"><a class="text-sm underline text-indigo-400" href="/samples/create/">Create a new sample</a></p>
@endif
@endsection
