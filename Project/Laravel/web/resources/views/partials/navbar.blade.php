<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<nav class="navbar">
    <div class="logo" onclick="window.location.href='{{ route('home') }}'"><img src="{{ asset('images/logos/raven.png') }}" alt=""></div>
    <ul class="nav-links">
        <li><a href="#">SHOP</a></li>
        <li><a onclick="window.location.href='{{ route('article') }}'">NEWS</a></li>
        <li><a href="#">COMMUNITY</a></li>
        <li><a onclick="window.location.href='{{ route('aboutus') }}'">ABOUT US</a></li>
    </ul>
    <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
    <div class="button-container">
        @if(auth()->check())
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="button button1">LOG OUT</button>
            </form>
        @else
            <button class="button button1" onclick="window.location.href='{{ route('register') }}'">NEW ACCOUNT</button>
            <button class="button button2" onclick="window.location.href='{{ route('login') }}'">LOG IN</button>
        @endif
    </div>
</nav>
