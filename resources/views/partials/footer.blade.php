<footer class="mt-12 bg-white text-center p-4 shadow">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
<div class="login-logout-link">
        @if (auth()->check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm underline text-blue-600">Logout</button>
            </form>
        @else
            <a class="text-sm underline text-blue-600" href="{{ route('login') }}">Login</a>
        @endif
    </div>	


</footer>

