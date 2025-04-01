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
                    @foreach($games as $game) <!--va a crear las cards de acuerdo a los juegos que se encuentren en la base de datos-->
                        <div class="game-card">
                            <img src="{{ asset('img/Games/' . $game->image) }}" alt="{{ $game->title }}"> <!--jala el contenido de los juegos desde la base de datos-->
                            <div class="game-title">{{ $game->title }}</div>
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
