@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Store')

@section('content')    
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0') }}" />
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Mobile Menu Button -->
    <button class="mobile-menu-btn">
        <span class="material-symbols-outlined">menu</span>
    </button>
    
    <!-- Backdrop Overlay -->
    <div class="overlay"></div>
    
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo-container">
                <a onclick="window.location.href='{{ route('home') }}'"><img src="{{ asset('images/logos/raven.png') }}" alt="Mi Logo" class="sidebar-logo"></a>
            </div>
            <div class="sidebar-links">
                <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
                <a onclick="window.location.href='{{ route('library') }}'">Library</a>
                <a href="#">News</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- Navigation Bar -->
            <div class="navbar">
                <div class="searchbar">
                    <span class="material-symbols-outlined">search</span>
                    <input type="search" placeholder="Search">
                </div>

                <div class="dropdown-buttons">
                    <div class="dropdown">
                        <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown1')"><img src="{{ asset('svg/account.svg') }}" alt="">
                        </button>
                        <div class="dropdown-menu" id="dropdown1">
                            <a onclick="window.location.href='{{ route('account') }}'">Profile</a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
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
            @php
            // Get all games with their images
            $games = DB::table('games')
                ->join('game_images', 'games.id', '=', 'game_images.game_id')
                ->select(
                    'games.id',
                    'games.title',
                    'game_images.image_url',
                    'game_images.title_image'
                )
                ->get()
                ->groupBy('id');

            // Shuffle and take needed games
            $shuffledGames = $games->shuffle();

            // Featured games (2 unique games with title_image = 1)
            $featured1 = $shuffledGames->shift()->where('title_image', 1)->first();
            $featured2 = $shuffledGames->shift()->where('title_image', 1)->first();

            // Special offers (6 unique games with title_image = 2)
            $specialOffers = $shuffledGames->take(6)->map(function($game) {
                return $game->where('title_image', 2)->first();
            });

            // For You section (6 different unique games with title_image = 2)
            $forYou = $shuffledGames->slice(6, 6)->map(function($game) {
                return $game->where('title_image', 2)->first();
            });
            @endphp
            <!-- Featured Games Section -->
            <div class="featured">
                <div class="featured-content">
                    <div class="featured-image">
                        <a href="/product/{{ $featured1->id }}">
                            <img src="https://{{ $featured1->image_url }}" style="width: 100%; height: 600px;" alt="{{ $featured1->title }}">
                            <div class="selection-overlay">
                                <span class="material-symbols-outlined">add_circle</span>
                            </div>
                        </a>
                    </div>
                    <div class="featured-secondary-image">
                        <a href="/product/{{ $featured2->id }}">
                            <img src="https://{{ $featured2->image_url }}" style="width: 455px; height: 360px;" alt="{{ $featured2->title }}">
                            <div class="selection-overlay">
                                <span class="material-symbols-outlined">add_circle</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Special Offers Section -->
            <div class="special-offers">
                <h2>Special Offers</h2>
                <div class="carousel">
                    @foreach($specialOffers as $game)
                    <div class="game-card">
                        <a href="/product/{{ $game->id }}">
                            <div class="image-container">
                                <img src="https://{{ $game->image_url }}" alt="{{ $game->title }}" referrerpolicy="no-referrer" loading="lazy">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- For You Section -->
            <div class="for-you">
                <h2>For You</h2>
                <div class="carousel">
                    @foreach($forYou as $game)
                    <div class="game-card">
                        <a href="/product/{{ $game->id }}">
                            <div class="image-container">
                                <img src="https://{{ $game->image_url }}" alt="{{ $game->title }}" referrerpolicy="no-referrer" loading="lazy">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Categories Section -->
            <div class="categories">
                <h2>Browse by Category</h2>
                <div class="carousel">
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/remnant2.jpg" alt="Action">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Resident2.jpg" alt="Horror">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Resident2.jpg" alt="Survival">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Resident2.jpg" alt="RPG">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Resident2.jpg" alt="Adventure">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Resident2.jpg" alt="Strategy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="product.js"></script>
    <script>
        function toggleDropdown(id) {
            const menu = document.getElementById(id);
            const allMenus = document.querySelectorAll('.dropdown-menu');

          allMenus.forEach(m => {
                if (m !== menu) m.style.display = 'none';
            });

            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        }
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.querySelector('.overlay');
            
            // Toggle sidebar on mobile menu button click
            mobileMenuBtn.addEventListener('click', function() {
                sidebar.classList.toggle('sidebar-active');
                overlay.classList.toggle('active');
            });
            
            // Close sidebar when clicking on overlay
            overlay.addEventListener('click', function() {
                sidebar.classList.remove('sidebar-active');
                overlay.classList.remove('active');
            });
            
            // Close sidebar when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    sidebar.classList.remove('sidebar-active');
                    overlay.classList.remove('active');
                }
            });
        });
    </script>
    @push('scripts')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endpush
@endsection