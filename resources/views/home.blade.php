@extends('layout')


@section('title', 'Home')

@section('content')
  <!--  <h1 class="text-3xl font-bold mb-4"></h1> -->
<div class=" bg-gray-100 dark:bg-transparent">
                <div class="container mx-auto flex flex-col items-center py-12 sm:py-4">
                    <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-7 md:leading-10">
                            Welcome to the Home Page
                       
                        </h1>
                        <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-400 font-normal text-center text-sm sm:text-lg"> Coloring book art party everyday carry intelligentsia pop-up mumblecore. </p>
                    </div>
                    <div class="flex justify-center items-center">
                 
                        <a href="/samples" class="ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-transparent transition duration-150 ease-in-out hover:border-indigo-600 lg:text-xl lg:font-bold  hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-4 sm:px-10 py-2 sm:py-4 text-sm">Learn More</a>
                    </div>
                </div>
            </div>

@endsection
