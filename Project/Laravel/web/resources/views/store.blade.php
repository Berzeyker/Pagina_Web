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
                <img src="{{ asset('images/logos/raven.png') }}" alt="Mi Logo" class="sidebar-logo">
            </div>
            <div class="sidebar-links">
                <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
                <a onclick="window.location.href='{{ route('library') }}'">Library</a>
                <a href="#">Community</a>
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
                        <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown1')">
                        </button>
                        <div class="dropdown-menu" id="dropdown1">
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>
    
                    <div class="dropdown">
                        <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown2')">
                        </button>
                        <div class="dropdown-menu" id="dropdown2">
                            <a href="#">View Cart</a>
                            <a href="#">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Featured Games Section -->
            <div class="featured">
                <div class="featured-content">
                    <div class="featured-image">
                        <img src="img/Games/r6.jpeg" alt="Featured Game">
                        <div class="selection-overlay">
                            <span class="material-symbols-outlined">add_circle</span>
                        </div>
                    </div>
                    <div class="featured-secondary-image">
                        <img src="img/Games/Cyberpunk2077.jpg" alt="Secondary Game Image">
                        <div class="selection-overlay">
                            <span class="material-symbols-outlined">add_circle</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Special Offers Section -->
            <div class="special-offers">
                <h2>Special Offers</h2>
                <div class="carousel">
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/GreedFall.jpg" alt="GreedFall">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Cyberpunk.jpg" alt="Cyberpunk">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Cyberpunk.jpg" alt="Cyberpunk">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Cyberpunk.jpg" alt="Cyberpunk">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Cyberpunk.jpg" alt="Cyberpunk">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/Cyberpunk.jpg" alt="Cyberpunk">
                        </div>
                    </div>
                </div>
            </div>

            <!-- For You Section -->
            <div class="for-you">
                <h2>For You</h2>
                <div class="carousel">
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/r6.jpeg" alt="Rainbow Six Siege">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/7days.avif" alt="7 Days to Die">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/7days.avif" alt="7 Days to Die">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/7days.avif" alt="7 Days to Die">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/7days.avif" alt="7 Days to Die">
                        </div>
                    </div>
                    <div class="game-card">
                        <div class="image-container">
                            <img src="img/Games/7days.avif" alt="7 Days to Die">
                        </div>
                    </div>
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
@endsection