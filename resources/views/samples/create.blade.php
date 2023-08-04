@extends('layout')

@section('content')
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-7 md:leading-10">Create Sample</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ route('samples.store') }}">
        @csrf

 <div class="mb-4">
	 <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
   
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="title" name="title" required>
			
	</div>		
	 <div class="mb-4">
	
			        <label for="description">Path:</label>
            <input accept="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="path" name="path" required>
		</div>
		 <div class="mb-4">
	
	<label for="body">Description:</label>

			{{--<input  class="form-text"  type="text" id="body" name="body" required>--}} 
			 
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="body" name="body" placeholder=""></textarea>

			 
			 
		</div>

        <button class="mt-4 p-2  rounded bg-indigo-500 text-gray-100" type="submit">Create Sample</button>
    </form>
@endsection
