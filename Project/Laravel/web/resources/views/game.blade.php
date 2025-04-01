@extends('layouts.app')

@section('title', 'Game')

@section('content')
<link rel="stylesheet" href="{{ asset('css/game.css') }}">

<div class="main__container">
    <div class="sidebar">
            <h2>MyLogo</h2>
            <div class="sidebar__container">
                <a href="#">Store Page</a>
                <a href="#">Library</a>
                <a href="#">Community</a>
                <a href="#">News</a>
            </div>
        </div>

        <div class="content">
            <div class="navbar">
                <div class="searchbar">
                    <span class="search__icon material-symbols-outlined">search</span>
                    <input class="search__input" type="search" placeholder="Search">
                </div>
                <div class="shoppingcart">
                    <span class="shoppingcart__icon material-symbols-outlined">shopping_cart</span>
                </div>
                <div class="account">

                </div>
            </div>
            <div class="showcase">
                <h2>{{ $game->name }}</h2>
                <div class="game__info">
                    <div class="carousel">
                        <div class="front__image">
                            <img class="main__image" id="mainImage" src="{{ $game->images->first()->url }}" alt="Main Image"> <!-- en el src jalara el url de la imagen de la base de datos-->
                            <div class="front__thumbnail">
                                <!--jala las imagenes del juego desde la base de datos y las coloca como thumbnail-->
                                @foreach ($game->images as $image)
                                <img class="thumbnail" src="{{ $image->url }}" onclick="updateFrontImage('{{ $image->url }}')"> <!-- en el src jalara el url de alguna de las imagenes de la base de datos-->
                                <!-- en el onclick al seleccionar cualquier imagen del thumbnail, la imagen principal se cambiara a la imagen seleccionada-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="game__description">
                        <p>{{ $game->description }}</p>
                    </div>
                </div>
            </div>

            <div class="purchase">
                <h3>Buy {{ $game->name }}</h3> <!--jala el nombre del juego desde la base de datos-->
                <div class="price">
                    <div class="price__text"><h4>${{ $game->price }}</h4></div> <!--jala el precio del juego desde la base de datos-->
                    <button class="add-cart-btn">Add to Cart</button>
                </div>
            </div>

            <div class="about">
                <h2>About this Game</h2>
                <div class="divider"></div>
                <!--el texto se va a jalar de la descripcion del juego desde la base de datos-->
                <p>{{ $game->about }}</p>
            </div>

            <div class="review__container">
                <h2>Reviews</h2>
                <div class="reviews">

                </div>
            </div>

        </div>
    </div>
<script src="{{ asset('js/game.js') }}"></script>
@endsection
