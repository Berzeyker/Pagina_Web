@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Product')

@section('content')
<link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0') }}">
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

    <div class="main-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="avatar-container">
                <div class="avatar">
                    <a onclick="window.location.href='{{ route('home') }}'"><img src="{{asset ('images/logos/raven.png') }}" alt="User Avatar"></a>
                </div>
            </div>
            <nav class="sidebar-nav">
                <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
                <a onclick="window.location.href='{{ route('library') }}'">Library</a>
                <a href="#">News</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-wrapper">
                <!-- Search Bar -->
                <div class="search-container">
                    <div class="searchbar">
                        <span class="search-icon material-symbols-outlined">search</span>
                        <input class="search-input" type="search" placeholder="Search games, genres, players...">
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

                <!-- Game Header -->
                <section class="game-header">
                    <div class="game-cover-container">
                    <img src="https://{{ $images->where('title_image', 1)->first()->image_url }}" alt="{{ $game->title }}" class="game-cover" referrerpolicy="no-referrer">
                        <div class="game-tags">
                            @foreach($categories as $category)
                                <span class="tag">{{ $category }}</span>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="game-info-container">
                        <h1>{{ $game->title }}</h1>
                        <div class="game-meta">
                            <p>{{ $game->short_desc }}</p> <!-- Descripcion -->
                        </div>
                        <div class="game-rating">
                            <span class="stars">★★★★☆</span>
                            <span class="rating-value">4.5/5</span>
                            <span class="rating-count">(12,847 reviews)</span>
                            <span class="rating-pegi">PEGI 18</span>
                        </div>
                    </div>
                </section>

                <!-- Purchase Section -->
                <section class="purchase-section">
                    <div class="purchase-card">
                        <h2>Buy {{ $game->title }}</h2> <!-- Buy + the title of the game taken from DB, for example Buy Minecraft -->
                        <div class="price-container">
                            <span class="current-price">MXN ${{ number_format($game->price, 2) }}</span> // price taken from DB
                        </div>
                        <div class="editions">
                            <h3>Available Editions:</h3>
                            <div class="edition-option active">
                                <input type="radio" id="standard" name="edition" checked>
                                <label for="standard">Standard Edition</label>
                            </div>
                        </div>
                        <button class="purchase-btn">
                            <span class="material-symbols-outlined">shopping_cart</span>
                            Add to Cart
                        </button>
                        <button class="wishlist-btn">
                            <span class="material-symbols-outlined">favorite</span>
                            Add to Wishlist
                        </button>
                        <div class="purchase-info">
                            <p><span class="material-symbols-outlined">verified_user</span> DRM: Requires 3rd-party account</p>
                            <p><span class="material-symbols-outlined">language</span> Available in 18 languages</p>
                            <p><span class="material-symbols-outlined">timer</span> Average playtime: 60-100 hours</p>
                        </div>
                    </div>
                </section>

                <!-- About Game Section -->
                <section class="info-section">
                    <h2>About This Game</h2>
                    <div class="section-content">
                        <p class="game-description">{{ $game->main_desc }}</p> <!-- main descripcion taken from DB -->
                        


                    </div>
                </section>

                <!-- System Requirements -->
                <section class="info-section">
                    <h2>System Requirements</h2>
                    <div class="requirements">
                        <div class="requirements-column">
                            <h3>Minimum (1080p Low)</h3>
                            <ul>
                                <li><strong>OS:</strong> Windows 10 64-bit</li>
                                <li><strong>Processor:</strong> Intel Core i5-3570K or AMD FX-8310</li>
                                <li><strong>Memory:</strong> 8 GB RAM</li>
                                <li><strong>Graphics:</strong> NVIDIA GTX 780 3GB or AMD Radeon RX 470 4GB</li>
                                <li><strong>DirectX:</strong> Version 12</li>
                                <li><strong>Storage:</strong> 70 GB available space (SSD recommended)</li>
                                <li><strong>Additional Notes:</strong> SSD recommended. Requires internet connection for activation.</li>
                            </ul>
                        </div>
                        <div class="requirements-column">
                            <h3>Recommended (1080p High)</h3>
                            <ul>
                                <li><strong>OS:</strong> Windows 10 64-bit</li>
                                <li><strong>Processor:</strong> Intel Core i7-4790 or AMD Ryzen 3 3200G</li>
                                <li><strong>Memory:</strong> 12 GB RAM</li>
                                <li><strong>Graphics:</strong> NVIDIA GTX 1060 6GB or AMD Radeon RX 590 8GB</li>
                                <li><strong>DirectX:</strong> Version 12</li>
                                <li><strong>Storage:</strong> 70 GB available space (SSD required)</li>
                                <li><strong>Additional Notes:</strong> SSD required for best experience. Ray tracing requires compatible hardware.</li>
                            </ul>
                        </div>
                        <div class="requirements-column">
                            <h3>Ultra (4K Ray Tracing)</h3>
                            <ul>
                                <li><strong>OS:</strong> Windows 10 64-bit</li>
                                <li><strong>Processor:</strong> Intel Core i7-6700 or AMD Ryzen 5 3600</li>
                                <li><strong>Memory:</strong> 16 GB RAM</li>
                                <li><strong>Graphics:</strong> NVIDIA RTX 2080S or AMD RX 6800 XT</li>
                                <li><strong>DirectX:</strong> Version 12</li>
                                <li><strong>Storage:</strong> 70 GB available space (NVMe SSD recommended)</li>
                                <li><strong>Additional Notes:</strong> For best ray tracing experience at 4K resolution.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="requirements-note">
                        <p><strong>Note:</strong> System requirements may change with future updates. The game features DLSS 3.5 and FSR 2.2 support for improved performance.</p>
                    </div>
                </section>

                <!-- Reviews -->
                <section class="info-section">
                    <h2>Player Reviews</h2>
                    <div class="reviews-summary">
                        <div class="overall-rating">
                            <div class="score">4.5</div>
                            <div class="stars">★★★★☆</div>
                            <div class="count">12,847 reviews</div>
                        </div>
                        <div class="rating-distribution">
                            <div class="rating-bar">
                                <div class="stars">★★★★★</div>
                                <div class="bar-container">
                                    <div class="bar" style="width: 68%;"></div>
                                </div>
                                <div class="percentage">68%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="stars">★★★★☆</div>
                                <div class="bar-container">
                                    <div class="bar" style="width: 20%;"></div>
                                </div>
                                <div class="percentage">20%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="stars">★★★☆☆</div>
                                <div class="bar-container">
                                    <div class="bar" style="width: 7%;"></div>
                                </div>
                                <div class="percentage">7%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="stars">★★☆☆☆</div>
                                <div class="bar-container">
                                    <div class="bar" style="width: 3%;"></div>
                                </div>
                                <div class="percentage">3%</div>
                            </div>
                            <div class="rating-bar">
                                <div class="stars">★☆☆☆☆</div>
                                <div class="bar-container">
                                    <div class="bar" style="width: 2%;"></div>
                                </div>
                                <div class="percentage">2%</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="reviews">
                        <div class="review">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <span class="author">NightCityExplorer</span>
                                    <span class="review-date">Played 85 hours | Posted 2 weeks ago</span>
                                </div>
                                <div class="review-rating">★★★★★</div>
                            </div>
                            <div class="review-content">
                                <p>"After the 2.0 update and Phantom Liberty, this is the game we should have gotten at launch. Night City feels alive like never before. The story with Johnny Silverhand is compelling, and the new expansion adds so much depth. The RPG systems finally feel fully realized, and the city is breathtaking at night with ray tracing enabled."</p>
                            </div>
                            <div class="review-helpful">
                                <span>342 people found this review helpful</span>
                                <button class="helpful-btn">Helpful</button>
                            </div>
                        </div>
                        
                        <div class="review">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <span class="author">TechSamurai</span>
                                    <span class="review-date">Played 45 hours | Posted 1 month ago</span>
                                </div>
                                <div class="review-rating">★★★★☆</div>
                            </div>
                            <div class="review-content">
                                <p>"The world design is absolutely stunning and the cyberpunk aesthetic is perfect. Combat is fun with lots of options between hacking, stealth, and direct confrontation. My only complaints are that the AI could be smarter and some systems feel a bit shallow compared to the marketing promises. Still, a very good game now after all the patches."</p>
                            </div>
                            <div class="review-helpful">
                                <span>215 people found this review helpful</span>
                                <button class="helpful-btn">Helpful</button>
                            </div>
                        </div>
                        
                        <div class="review">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <span class="author">Chooms4Life</span>
                                    <span class="review-date">Played 120 hours | Posted 3 months ago</span>
                                </div>
                                <div class="review-rating">★★★★★</div>
                            </div>
                            <div class="review-content">
                                <p>"One of the most immersive RPGs I've ever played. The characters feel real, the side quests are often better than the main story, and the atmosphere is unmatched. The Phantom Liberty expansion adds spy thriller elements that work surprisingly well. My only wish is for more meaningful interactions with the world, but what's here is fantastic."</p>
                            </div>
                            <div class="review-helpful">
                                <span>498 people found this review helpful</span>
                                <button class="helpful-btn">Helpful</button>
                            </div>
                        </div>
                    </div>
                    
                    <button class="view-all">View All 12,847 Reviews</button>
                </section>

                <!-- FAQ Section -->
                <section class="info-section">
                    <h2>Frequently Asked Questions</h2>
                    <div class="faq">
                        <div class="faq-item">
                            <button class="faq-question">Is this game different from the launch version?</button>
                            <div class="faq-answer">
                                <p>Yes, Cyberpunk 2077 has received massive updates including the 2.0 overhaul and Phantom Liberty expansion that completely revamped many game systems including:</p>
                                <ul>
                                    <li>New perk and skill tree system</li>
                                    <li>Improved police and combat AI</li>
                                    <li>Vehicle combat and chases</li>
                                    <li>Redesigned cyberware system</li>
                                    <li>Better driving mechanics</li>
                                    <li>Enhanced crowd behavior</li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">How long is the main story?</button>
                            <div class="faq-answer">
                                <p>The main story takes approximately 25-30 hours to complete. With major side quests, this extends to 50-60 hours. Completionists can expect 100+ hours of content, especially with the Phantom Liberty expansion which adds another 20+ hours.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">Does my progress carry over to the expansion?</button>
                            <div class="faq-answer">
                                <p>Yes, Phantom Liberty integrates seamlessly with your existing save. Alternatively, you can start a new game that skips directly to the expansion content with a pre-leveled character.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
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