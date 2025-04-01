@extends('layouts.app', ['withoutNavbar' => true])

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
            <div class="showcase">
                <h2>Resident Evil 2 aqui ira el nombre del juego tomado de DB</h2>
                <div class="game__info">
                    <div class="carousel">
                        <div class="front__image">
                            <img class="main__image" id="mainImage" src="#" alt="Main Image"> <!-- en el src jalara el url de la imagen de la base de datos-->
                            <div class="front__thumbnail">
                                <!--jala las imagenes del juego desde la base de datos y las coloca como thumbnail-->
                                @foreach([
                                    ['title' => 'Final Fantasy VII Rebirth', 'price' => 'MXN $1,250.00', 'image' => 'topseller1.jpg', 'desc' => 'The Unkown Journey Continues... After escaping from the dystopian city of Midgar, Cloud and his friends set out on a journey across the planet. New adventures await in a vibrant and vast world in this standalone entry to the FFVII remake trilogy '],
                                    ['title' => 'Cyberpunk 2077', 'price' => 'MXN $1,299.00', 'image' => 'topseller2.jpg', 'desc' => '7 Days to Die is an open-world game that is a unique combination of first-person shooter, survival horror, tower defense, and role-playing games. Play the definitive zombie survival sandbox RPG that came first. Navezgane awaits!'],
                                    ['title' => 'Warhammer 40k: Space Marine 2', 'price' => 'MXN $1,299.00', 'image' => 'topseller3.jpg', 'desc' => 'Cyberpunk 2077 is an open-world, action-adventure RPG set in Night City, a megalopolis obsessed with power, glamour, and body modification. Play as V, a cyberpunk mercenary, and take on the most powerful forces of the city in a fight for glory and survival.'],
                                    ['title' => 'Monster Hunter Wilds', 'price' => 'MXN $1,199.00', 'image' => 'topseller1.jpg', 'desc' => 'The unbridled force of nature runs wild and relentless, with environments transforming drastically from one moment to the next. This is a story of monsters and humans and their struggles to live in harmony in a world of duality.'],
                                    ['title' => 'Elden Ring: Nightreign', 'price' => 'MXN $659.00', 'image' => 'topseller1.jpg', 'desc' => 'ELDEN RING NIGHTREIGN is a standalone adventure within the ELDEN RING universe, crafted to offer players a new gaming experience by reimagining the game’s core design.']
                                ] as $game)
                                <img class="thumbnail" src="#" onclick="#"> <!-- en el src jalara el url de alguna de las imagenes de la base de datos-->
                                <!-- en el onclick al seleccionar cualquier imagen del thumbnail, la imagen principal se cambiara a la imagen seleccionada-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="game__description">
                        <p>descripcion del juego tomada de la db</p>
                    </div>
                </div>
            </div>

            <div class="purchase">
                <h3>Buy NOMBRE DEL JUEGO POR DB</h3> <!--jala el nombre del juego desde la base de datos-->
                <div class="price">
                    <div class="price__text"><h4>precio del juego por db</h4></div> <!--jala el precio del juego desde la base de datos-->
                    <button class="add-cart-btn">Add to Cart</button>
                </div>
            </div>

            <div class="about">
                <h2>About this Game</h2>
                <div class="divider"></div>
                <!--el texto se va a jalar de la descripcion del juego desde la base de datos-->
                <p>descripcion principal del juego tomada de la db</p>
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
