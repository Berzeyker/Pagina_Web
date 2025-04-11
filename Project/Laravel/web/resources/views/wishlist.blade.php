@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Wishlist')

@section('content')
<link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">

    <div class="main-container">
        <!-- Barra lateral izquierda -->
        <div class="left-sidebar">
            <div class="avatar-left">
                <a onclick="window.location.href='{{ route('home') }}'"><img src="{{ asset('images/logos/raven.png') }}" alt="Avatar"></a>
            </div>
            
            <div class="menu-left">
                <a onclick="window.location.href='{{ route('store') }}'">>Store Page</a>
                <a onclick="window.location.href='{{ route('library') }}'">Library</a>
                <a href="#">News</a>
            </div>
        </div>

        <!-- Contenido principal - Wishlist -->
        <div class="main-content">
            <h1 class="title">Wishlist</h1>
            
            <div class="wishlist-section">
                <!-- Item 1 -->
                <div class="wishlist-item">
                    <div class="game-image">
                        <img src="{{ asset('images/games/Cyberpunk.jpg') }}" alt="Cyberpunk 2077">
                    </div>
                    <div class="game-content">
                        <div class="game-info">
                            <h3 class="game-title">Cyberpunk 2077</h3>
                            <span class="game-price">Mex$ 519.60</span>
                        </div>
                        <div class="game-actions">
                            <button class="wishlist-btn add-btn">Add</button>
                            <button class="wishlist-btn remove-btn">Remove</button>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Item 2 -->
                <div class="wishlist-item">
                    <div class="game-image">
                        <img src="{{ asset('images/games/GreedFall.jpg') }}" alt="GreedFall">
                    </div>
                    <div class="game-content">
                        <div class="game-info">
                            <h3 class="game-title">GreedFall</h3>
                            <span class="game-price">Mex$ 369.99</span>
                        </div>
                        <div class="game-actions">
                            <button class="wishlist-btn add-btn">Add</button>
                            <button class="wishlist-btn remove-btn">Remove</button>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Item 3 -->
                <div class="wishlist-item">
                    <div class="game-image">
                        <img src="{{ asset('images/games/resident2.jpg') }}" alt="Resident Evil 2">
                    </div>
                    <div class="game-content">
                        <div class="game-info">
                            <h3 class="game-title">Resident Evil 2</h3>
                            <span class="game-price">Mex$ 490.00</span>
                        </div>
                        <div class="game-actions">
                            <button class="wishlist-btn add-btn">Add</button>
                            <button class="wishlist-btn remove-btn">Remove</button>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Item 4 -->
                <div class="wishlist-item">
                    <div class="game-image">
                        <img src="{{ asset('images/games/remnant2.jpg') }}" alt="Remnant2">
                    </div>
                    <div class="game-content">
                        <div class="game-info">
                            <h3 class="game-title">Remnant2</h3>
                            <span class="game-price">Mex$ 367.99</span>
                        </div>
                        <div class="game-actions">
                            <button class="wishlist-btn add-btn">Add</button>
                            <button class="wishlist-btn remove-btn">Remove</button>
                        </div>
                    </div>
                    
                </div>
                <div class="divider"></div>
                
                <!-- Item 5 -->
                <div class="wishlist-item">
                    <div class="game-image">
                        <img src="{{ asset('images/games/r6.jpeg') }}" alt="Tom Clancy's Rainbow Six® Siege">
                    </div>
                    <div class="game-content">
                        <div class="game-info">
                            <h3 class="game-title">Tom Clancy's Rainbow Six® Siege</h3>
                            <span class="game-price">Mex$ 490.00</span>
                        </div>
                        <div class="game-actions">
                            <button class="wishlist-btn add-btn">Add</button>
                            <button class="wishlist-btn remove-btn">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra lateral derecha -->
        <div class="right-sidebar">
            <ul class="settings-list">
                <li><a onclick="window.location.href='{{ route('account') }}'">Personal Information</a></li>
                <li><a onclick="window.location.href='{{ route('wishlist') }}'">Wishlist</a></li>
                <li><a onclick="window.location.href='{{ route('payment') }}'">Payment Methods</a></li>
                <li>Security & Login</li>
            </ul>
        </div>
    </div>
@endsection