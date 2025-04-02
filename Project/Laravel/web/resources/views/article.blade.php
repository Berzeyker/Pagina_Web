@extends('layouts.app')

@section('title', 'News Article')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/new_article.css') }}">

    <!-- Article Section -->
    <section class="article-section">
        <div class="article-container">
            <h1 class="article-title">Article</h1>
            <div class="header-image">
                <img src="{{ asset('images/games/r6.jpeg') }}" alt="Videojuegos destacados">
            </div>
            <p class="article-intro">The three games announced have not attracted too much attention. There are those who say that it is a somewhat weaker month than usual. Be that as it may, the games announced are:</p>
            
            <div class="game-card">
                <div class="game-content">
                    <h3 class="game-title">Robocop: Rogue City para PS4</h3>
                    <p class="game-description">While it's true that it's not one of the most outstanding games of recent years, it has its own one, especially if you liked the Robocop movies. You can make choices that can alter the fate of both your mission and the citizens you're sworn to protect.</p>
                </div>
                <div class="game-image">
                    <img src="{{ asset('images/games/Cyberpunk.jpg') }}" alt="Robocop: Rogue City">
                </div>
            </div>
            
            <div class="game-card">
                <div class="game-content">
                    <h3 class="game-title">The Texas Chain Saw Massacre para PS4 y PS5</h3>
                    <p class="game-description">A special month for lovers of film classics, and between the game of The Texas Chainsaw Massacre and Robocop, there is nostalgia to give and shots. In this case, through a third-person asymmetrical survival game in the purest Dead by Daylight style.</p>
                </div>
                <div class="game-image">
                    <img src="{{ asset('images/games/GreedFall.jpg') }}" alt="The Texas Chain Saw Massacre">
                </div>
            </div>
            
            <div class="game-card">
                <div class="game-content">
                    <h3 class="game-title">Digimon Story Cyber Sleuth para PS4</h3>
                    <p class="game-description">Possibly, the best of the three games announced. Although it has been around for a long time, it is a very interesting title, especially for those who like the digimon saga. It is an RPG with a somewhat darker touch than usual where the digital world and the real world are intermingled in an adventure where parenting and combat are of paramount importance.</p>
                </div>
                <div class="game-image">
                    <img src="{{ asset('images/games/remnant2.jpg') }}" alt="Digimon Story Cyber Sleuth">
                </div>
            </div>
        </div>
        
        <!-- Sidebar with game promotions -->
        <aside class="game-promo-sidebar">
            <div class="promo-card">
                <div class="promo-image">
                    <img src="{{ asset('images/games/Resident2.jpg') }}" alt="Resident Evil 2">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">Resident Evil 2</h3>
                    <p class="promo-subtitle">New Game?</p>
                </div>
            </div>
            
            <div class="promo-card">
                <div class="promo-image">
                    <img src="{{ asset('images/games/remnant2.jpg') }}" alt="God of War">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">GODOFWAR</h3>
                    <p class="promo-subtitle">New Gody</p>
                </div>
            </div>
            
            <div class="promo-card">
                <div class="promo-image">
                    <img src="{{ asset('images/games/Cyberpunk.jpg') }}" alt="Dark Souls III">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">DARK SOULS III</h3>
                    <p class="promo-subtitle">Dark souls 3</p>
                </div>
            </div>

            <div class="promo-card">
                <div class="promo-image">
                    <img src="{{ asset('images/games/GreedFall.jpg') }}" alt="Dark Souls III">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">DARK SOULS III</h3>
                    <p class="promo-subtitle">Dark souls 3</p>
                </div>
            </div>

            <div class="promo-card">
                <div class="promo-image">
                    <img src="{{ asset('images/games/r6.jpeg') }}" alt="Dark Souls III">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">DARK SOULS III</h3>
                    <p class="promo-subtitle">Dark souls 3</p>
                </div>
            </div>

            <div class="promo-card">
                <div class="promo-image">
                    <img src="{{ asset('images/games/7days.avif') }}" alt="Dark Souls III">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">7 Days to die</h3>
                    <p class="promo-subtitle">New Update?</p>
                </div>
            </div>
        </aside>
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
