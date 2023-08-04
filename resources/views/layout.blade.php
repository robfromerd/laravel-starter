<!DOCTYPE html>
<html lang="en">
    @include('partials.head')

    <body>
	     @include('partials.navbar')	
        <div class="container mx-auto px-4 mt-4">
            @yield('content')
        </div>

        @include('partials.footer')
    </body>
</html>