@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">

    <!-- Main Content -->
    <div class="content-wrapper">
        <!-- About Us Section -->
        <section class="about-section">
            <div class="about-container">
                <h1>About Us</h1>
                <div class="about-content">
                    <p>Welcome to our web-page, your ultimate destination for instant access to the latest and greatest video games! We specialize in providing digital game codes for popular platforms like PlayStation, Xbox, Nintendo, and of course, PC. Whether you're a casual gamer or a hardcore enthusiast, surely we've got you covered with a wide selection of titles at competitive prices.</p>
                </div>
                
                <div class="logos-container">
                    <img src="{{ asset('images/logos/Pacs.png') }}" alt="Pacs" class="platform-logo">
                    <img src="{{ asset('images/logos/Epicgames.png') }}" alt="Epic Games" class="platform-logo">
                    <img src="{{ asset('images/logos/Steam.png') }}" alt="Steam" class="platform-logo">
                    <img src="{{ asset('images/logos/Ubisoft.png') }}" alt="Ubisoft" class="platform-logo">
                    <img src="{{ asset('images/logos/Meta.png') }}" alt="Meta" class="platform-logo">
                    <img src="{{ asset('images/logos/Dell.png') }}" alt="Dell" class="platform-logo">
                </div>
            </div>
        </section>

        <!-- How We Work Section -->
        <section class="about-section stats-section">
            <div class="about-container">
                <h1>How We Work</h1>
                
                <div class="stats-row top-row">
                    <div class="stat-item">
                        <span class="stat-number">10K+</span>
                        <h3 class="stat-title">Explore Our Catalog</h3>
                        <p class="stat-text">Find games for PlayStation, Xbox, Nintendo Switch and PC. Filter by genre, price or release date.</p>
                    </div>
                    
                    <div class="stat-item">
                        <span class="stat-number">DLCs</span>
                        <h3 class="stat-title">Choose Your Game</h3>
                        <p class="stat-text">Select standard, deluxe or DLC editions. Verify compatibility with your region.</p>
                    </div>
                    
                    <div class="stat-item">
                        <span class="stat-number">$$$</span>
                        <h3 class="stat-title">Secure Payment</h3>
                        <p class="stat-text">Credit cards, PayPal or cryptocurrencies. SSL protection and 24-hour refund guarantee.</p>
                    </div>
                </div>
                
                <div class="stats-row bottom-row">
                    <div class="stat-item">
                        <span class="stat-number">Mail</span>
                        <h3 class="stat-title">Instant Delivery</h3>
                        <p class="stat-text">The digital code arrives in your email and user account. Also available as a gift.</p>
                    </div>
                    
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <h3 class="stat-title">Countries</h3>
                        <p class="stat-text">Global delivery</p>
                    </div>
                    
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <h3 class="stat-title">After-Sales Support</h3>
                        <p class="stat-text">Assistance for activation issues. Updates about future releases.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section-full">
            <div class="team-header">
                <h2>Meet Our Team</h2>
                <p class="team-subtitle">The passionate gaming team that makes your experience possible</p>
            </div>
            
            <div class="team-container-full">
                <!-- Row 1 -->
                <div class="team-row">
                    <!-- Member 1 -->
                    <div class="team-member-full">
                        <div class="member-image-full">
                            <img src="{{ asset('images/people/People1.jpg') }}" alt="Carlos Gamer">
                        </div>
                        <h3>Carlos Rodríguez</h3>
                        <p class="position-full">Founder & CEO</p>
                        <p class="bio-full">15+ years in the gaming industry. Relationships with developers.</p>
                        <div class="social-links-full">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    
                    <!-- Member 2 -->
                    <div class="team-member-full">
                        <div class="member-image-full">
                            <img src="{{ asset('images/people/People2.jpg') }}" alt="Ana Streamer">
                        </div>
                        <h3>Ana Martínez</h3>
                        <p class="position-full">Purchasing Director</p>
                        <p class="bio-full">Expert in deals and indie titles. Competitive player.</p>
                        <div class="social-links-full">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-twitch"></i></a>
                        </div>
                    </div>
                    
                    <!-- Member 3 -->
                    <div class="team-member-full">
                        <div class="member-image-full">
                            <img src="{{ asset('images/people/People3.jpg') }}" alt="Luis Tec">
                        </div>
                        <h3>Luis González</h3>
                        <p class="position-full">Technical Support</p>
                        <p class="bio-full">Solves activation issues. RPG enthusiast.</p>
                        <div class="social-links-full">
                            <a href="#"><i class="fab fa-discord"></i></a>
                            <a href="#"><i class="fab fa-reddit"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Row 2 -->
                <div class="team-row">
                    <!-- Member 4 -->
                    <div class="team-member-full">
                        <div class="member-image-full">
                            <img src="{{ asset('images/people/People4.jpg') }}" alt="Marta Community">
                        </div>
                        <h3>Marta Sánchez</h3>
                        <p class="position-full">Community Manager</p>
                        <p class="bio-full">Manages networks and events. Gaming trend hunter.</p>
                        <div class="social-links-full">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    
                    <!-- Member 5 -->
                    <div class="team-member-full">
                        <div class="member-image-full">
                            <img src="{{ asset('images/people/People5.jpg') }}" alt="David Marketing">
                        </div>
                        <h3>David Fernández</h3>
                        <p class="position-full">Marketing Director</p>
                        <p class="bio-full">Creates campaigns and promotions. eSports specialist.</p>
                        <div class="social-links-full">
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                    
                    <!-- Member 6 -->
                    <div class="team-member-full">
                        <div class="member-image-full">
                            <img src="{{ asset('images/people/People6.jpg') }}" alt="Laura Design">
                        </div>
                        <h3>Laura Gómez</h3>
                        <p class="position-full">UX/UI Designer</p>
                        <p class="bio-full">Brings the platform to life. Lover of artistic indie games.</p>
                        <div class="social-links-full">
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Use Cases Section -->
        <section class="use-cases-section">
            <div class="use-cases-container">
                <div class="use-cases-grid">
                    <!-- Column 1 -->
                    <div class="use-cases-column">
                        <h3>Use cases</h3>
                        <a href="#" class="use-cases-item">UI design</a>
                        <a href="#" class="use-cases-item">UX design</a>
                        <a href="#" class="use-cases-item">Wireframing</a>
                        <a href="#" class="use-cases-item">Diagramming</a>
                        <a href="#" class="use-cases-item">Brainstorming</a>
                        <a href="#" class="use-cases-item">Online whiteboard</a>
                        <a href="#" class="use-cases-item">Team collaboration</a>
                    </div>
                    
                    <!-- Column 2 -->
                    <div class="use-cases-column">
                        <h3>Explore</h3>
                        <a href="#" class="use-cases-item">Design</a>
                        <a href="#" class="use-cases-item">Prototyping</a>
                        <a href="#" class="use-cases-item">Development features</a>
                        <a href="#" class="use-cases-item">Design systems</a>
                        <a href="#" class="use-cases-item">Collaboration features</a>
                        <a href="#" class="use-cases-item">Design process</a>
                        <a href="#" class="use-cases-item">FigJam</a>
                    </div>
                    
                    <!-- Column 3 -->
                    <div class="use-cases-column">
                        <h3>Resources</h3>
                        <a href="#" class="use-cases-item">Blog</a>
                        <a href="#" class="use-cases-item">Best practices</a>
                        <a href="#" class="use-cases-item">Colors</a>
                        <a href="#" class="use-cases-item">Color wheel</a>
                        <a href="#" class="use-cases-item">Support</a>
                        <a href="#" class="use-cases-item">Developers</a>
                        <a href="#" class="use-cases-item">Resource library</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection