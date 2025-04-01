@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Library')

@section('content')
<link rel="stylesheet" href="{{ asset('css/library.css') }}">

<div class="main__container">
    <!-- Sidebar izquierdo -->
    <div class="sidebar">
        <div class="avatar-container-left">
            <div class="avatar-left">
                <img src="{{ asset('') }}" alt="Avatar"> <!--logo principal de la pagina-->
            </div>
        </div>
        <div class="sidebar__container">
            <a href="#">Store Page</a>
            <a href="#">Library</a>
            <a href="#">Community</a>
            <a href="#">News</a>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="content">
            <div class="navbar">
            <div class="searchbar">
                    <img src="{{ asset('svg/search.svg') }}" alt="">
                    <input class="search__input" type="search" placeholder="Search">
                </div>
                <div class="navbar__icons">
                    <div class="shoppingcart__icon">
                        <button class="navbar__btn"><img src="{{ asset('svg/shoppingcart.svg') }}" alt=""></button>
                    </div>
                    <div class="account__icon">
                        <button class="navbar__btn"></button><img src="{{ asset('svg/account.svg') }}" alt=""></button>
                    </div>
                </div>
            </div>
            
            <div class="allgames">
                <h2>All games</h2>
                <div class="games-container">

                        @foreach([
                            ['title' => 'Final Fantasy VII Rebirth', 'price' => 'MXN $1,250.00', 'image' => 'topseller1.jpg', 'desc' => 'The Unkown Journey Continues... After escaping from the dystopian city of Midgar, Cloud and his friends set out on a journey across the planet. New adventures await in a vibrant and vast world in this standalone entry to the FFVII remake trilogy '],
                            ['title' => 'Cyberpunk 2077', 'price' => 'MXN $1,299.00', 'image' => 'topseller2.jpg', 'desc' => '7 Days to Die is an open-world game that is a unique combination of first-person shooter, survival horror, tower defense, and role-playing games. Play the definitive zombie survival sandbox RPG that came first. Navezgane awaits!'],
                            ['title' => 'Warhammer 40k: Space Marine 2', 'price' => 'MXN $1,299.00', 'image' => 'topseller3.jpg', 'desc' => 'Cyberpunk 2077 is an open-world, action-adventure RPG set in Night City, a megalopolis obsessed with power, glamour, and body modification. Play as V, a cyberpunk mercenary, and take on the most powerful forces of the city in a fight for glory and survival.'],
                            ['title' => 'Monster Hunter Wilds', 'price' => 'MXN $1,199.00', 'image' => 'topseller1.jpg', 'desc' => 'The unbridled force of nature runs wild and relentless, with environments transforming drastically from one moment to the next. This is a story of monsters and humans and their struggles to live in harmony in a world of duality.'],
                            ['title' => 'Elden Ring: Nightreign', 'price' => 'MXN $659.00', 'image' => 'topseller1.jpg', 'desc' => 'ELDEN RING NIGHTREIGN is a standalone adventure within the ELDEN RING universe, crafted to offer players a new gaming experience by reimagining the game’s core design.']
                        ] as $game)

                     <!--va a crear las cards de acuerdo a los juegos que se encuentren en la base de datos-->
                        <div class="game-card">
                            <img src="#"> <!--jala el contenido de los juegos desde la base de datos-->
                            <div class="game-title">titulo tomado de la db</div>
                            <div class="game-detail">Details</div>
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
@endsection
