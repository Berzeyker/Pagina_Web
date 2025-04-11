@extends('layouts.app')  {{-- Extends the main layout --}}

@section('title', 'Home')  {{-- Sets the page title --}}

@section('content')  {{-- Content section starts --}}

    @include('partials.navbar') {{-- Including the navbar --}}

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="hero">
        <div class="parallax">
            <div class="overlay"></div>
            <div class="hero__container">
                <h2 class="title__hero">Explore millions of videogames</h2>
                <h3 class="subtitle__hero">Discover, shop and play. Your gaming journey starts here.</h3>
                <button class="button__hero">SHOP NOW</button>
            </div>
        </div>
    </div>

    <div class="featured featured1">
        <div class="featured__container">
            <h2 class="title__featured">Huge Selection</h2>
            <h3 class="subtitle__featured">Access thousands of titles across all genres</h3>
        </div>
    </div>

    <div class="featured featured2">
        <div class="featured__container">
            <h2 class="title__featured">Exclusive Deals</h2>
            <h3 class="subtitle__featured">Save big with daily and seasonal discounts</h3>
        </div>
    </div>

    <div class="featured featured3">
        <div class="featured__container">
            <h2 class="title__featured">Community</h2>
            <h3 class="subtitle__featured">Connect with millions of gamers worldwide</h3>
        </div>
    </div>

    <div class="collage">
        <div class="collage__container">
            <h2 class="title__collage">Top Sellers</h2>
            <h3 class="subtitle__collage">The Best of Now</h3>
        </div>
    </div>

    @php
    // Get 5 random games with their main images
    $randomGames = DB::table('games')
        ->join('game_images', function($join) {
            $join->on('games.id', '=', 'game_images.game_id')
                 ->where('game_images.title_image', '=', 1);
        })
        ->select(
            'games.id',
            'games.title',
            'games.price',
            'games.main_desc as desc',
            'game_images.image_url as image'
        )
        ->inRandomOrder()
        ->limit(5)
        ->get();
    @endphp

    @foreach($randomGames as $game)
        <div class="topseller">
            <div class="image_topseller">
                <img src="https://{{ $game->image }}" alt="{{ $game->title }}" style="width: 500px; height: 600px;" referrerpolicy="no-referrer" loading="lazy">
            </div>
            <div class="topseller__container">
                <h4 class="title__topseller">{{ $game->title }}</h4>
                <h5 class="price__topseller">MXN ${{ number_format($game->price, 2) }}</h5>
                <p class="text__topseller">{{ $game->desc }}</p>
                <button class="button__topseller" onclick="window.location.href='{{ route('store') }}'">Store Page</button>
            </div>
        </div>
    @endforeach

    <div class="news">
        <div class="news__container">
            <h2 class="title__news">News & Notices</h2>
            <h3 class="subtitle__news">What is happening in the community</h3>
        </div>
        <div class="news-card">
            <img src="{{ asset('images/nintendo.jpg') }}" alt="Nintendo Switch 2" class="card-image">
            <div class="card-overlay">
              <div class="card-content">
                <h2 class="card-title">Nintendo Switch 2</h2>
                <p class="card-description">
                  The newly announced Nintendo Switch 2, releasing on June 2025.
                </p>
                <a href="#" class="card-link">READ MORE</a>
              </div>
            </div>
        </div>
    </div>

    <div class="reviews">
        <div class="reviews__container">
            <h2 class="title__reviews">Reviews</h2>
            <h3 class="subtitle__reviews">What the people say</h3>
        </div>
        <div class="carousel__reviews">
        <div class="testimonial-card">
                <h2 class="testimonial-title">The best shop of all time</h2>
                <div class="testimonial-user">
                  <img src="user.jpg" alt="User photo" class="user-avatar">
                  <div class="user-info">
                    <p class="user-name">Laura Fragoso</p>
                    <p class="user-subtitle">Purchase: Elden Ring</p>
                  </div>
                </div>
                <p class="testimonial-text">
                  "I bought a code for Elden Ring, and everything worked perfectly. The process was super fast and secure. I'll definitely buy here again!"
                </p>
              </div>
              <div class="testimonial-card">
                <h2 class="testimonial-title">Incredible service</h2>
                <div class="testimonial-user">
                  <img src="user.jpg" alt="User photo" class="user-avatar">
                  <div class="user-info">
                    <p class="user-name">Carlos Rivera</p>
                    <p class="user-subtitle">Purchase: Resident Evil 2</p>
                  </div>
                </div>
                <p class="testimonial-text">
                    "I was a bit skeptical at first, but the code arrived instantly and worked flawlessly. Super happy with my purchase!"
                </p>
              </div>
              <div class="testimonial-card">
                <h2 class="testimonial-title">Highly recommended</h2>
                <div class="testimonial-user">
                  <img src="user.jpg" alt="User photo" class="user-avatar">
                  <div class="user-info">
                    <p class="user-name">Alice</p>
                    <p class="user-subtitle">Purchase: Cyberpunk</p>
                  </div>
                </div>
                <p class="testimonial-text">
                    "Amazing prices and very reliable. I’ve already bought two games here and both experiences were smooth and fast."
                </p>
              </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer__columns">
            <div class="footer__container footer__container1">
                <h3 class="logo__footer">LOGO</h4>
            </div>
            <div class="footer__container">
                <h4 class="title__footer">EXPLORE</h4>
                <h5 class="subtitle__footer">About Us</h5>
                <h5 class="subtitle__footer">Our Team</h5>
                <h5 class="subtitle__footer">Contact</h5>
                <h5 class="subtitle__footer">FAQs</h5>
                <h5 class="subtitle__footer">Privacy Policy</h5>
            </div>
            <div class="footer__container">
                <h4 class="title__footer">SERVICES</h4>
                <h5 class="subtitle__footer">Promotion</h5>
                <h5 class="subtitle__footer">Shop</h5>
                <h5 class="subtitle__footer">Discounts</h5>
            </div>
            <div class="footer__container">
                <h4 class="title__footer">CONTACT</h4>
                <h5 class="subtitle__footer">(+52) 618 123 4567</h5>
                <h5 class="subtitle__footer">example@example.com</h5>
                <h5 class="subtitle__footer">Durango, Durango</h5>
            </div>
        </div>    
    </div>
    <script>
        const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        } else {
            entry.target.classList.remove('animate');
        }
        });
        }, {
            threshold: 0.3,
        });

        const animatedElements = document.querySelectorAll('.featured__container, .topseller');
        animatedElements.forEach(el => observer.observe(el));
        function register() {
            window.location.href="{{ url('/register') }}";
        }
        function login() {
            window.location.href="{{ url('/login') }}";
        }
        function toggleMenu() {
            document.querySelector(".nav-links").classList.toggle("show");
        }
    </script>
@endsection
