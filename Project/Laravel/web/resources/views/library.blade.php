@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Library')

@section('content')


    @php
    // Get 5 random games with their vertical images
    $randomGames = DB::table('games')
        ->join('game_images', function($join) {
            $join->on('games.id', '=', 'game_images.game_id')
                ->where('game_images.title_image', '=', 2);
        })
        ->select(
            'games.id',
            'games.title',
            'game_images.image_url as vertical_image'
        )
        ->inRandomOrder()
        ->limit(5)
        ->get();
    @endphp
<link rel="stylesheet" href="{{ asset('css/library.css') }}">

<div class="main__container">
    <!-- Sidebar izquierdo -->
    <div class="sidebar">
        <div class="avatar-container-left">
            <div class="avatar-left">
                <a onclick="window.location.href='{{ route('home') }}'"><img src="{{ asset('images/logos/raven.png') }}" alt="Avatar"></a> <!--logo principal de la pagina-->
            </div>
        </div>
        <div class="sidebar__container">
            <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
            <a onclick="window.location.href='{{ route('library') }}'">Library</a>
            <a href="#">News</a>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="content">
            <div class="navbar">
                <div class="searchbar">
                    <input class="search__input" type="search" placeholder="Search">
                </div>
                <div class="dropdown-buttons">
                    <div class="dropdown">
                        <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown1')"><img src="{{ asset('svg/account.svg') }}" alt="">
                        </button>
                        <div class="dropdown-menu" id="dropdown1">
                            <a onclick="window.location.href='{{ route('account') }}'">Profile</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown2')"><img src="{{ asset('svg/shoppingcart.svg') }}" alt="">
                        </button>
                        <div class="dropdown-menu" id="dropdown2">
                            <a onclick="window.location.href='{{ route('shoppingcart') }}'">View Cart</a>
                            <a onclick="window.location.href='{{ route('payment') }}'">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="allgames">
                <h2>All games</h2>
                <div class="games-container">
                    @foreach($randomGames as $game)
                    <div class="game-card">
                        <a href="/product/{{ $game->id }}">
                            <img src="https://{{ $game->vertical_image }}" alt="{{ $game->title }}" referrerpolicy="no-referrer">
                            <div class="game-title">{{ $game->title }}</div>
                            <div class="game-detail">Details</div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Sidebar derecho con filtros -->
        <div class="right-sidebar">
            <div class="filters-container">
                <div class="filter-section">
                    <h3>Types</h3>
                    <label><input type="checkbox" checked> All</label>
                    <label><input type="checkbox"> Games</label>
                    <label><input type="checkbox"> DLCs</label>
                </div>
                <div class="filter-section">
                    <h3>Genre</h3>
                    <label><input type="checkbox" checked> All</label>
                    <label><input type="checkbox"> Action</label>
                    <label><input type="checkbox"> RPG</label>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDropdown(id) {
        const menu = document.getElementById(id);
        const allMenus = document.querySelectorAll('.dropdown-menu');

        allMenus.forEach(m => {
            if (m !== menu) m.style.display = 'none';
        });

        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    }
</script>
@endsection
