@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Shopping Cart')

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0&icon_names=account_circle" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0&icon_names=shopping_cart" />
<link rel="stylesheet" href="{{ asset('css/shoppingcart.css') }}">

<div class="main__container">
    <!-- Sidebar izquierdo existente -->
    <div class="sidebar">
        <div class="avatar-container-left">
            <div class="avatar-left">
                <a onclick="window.location.href='{{ route('home') }}'"><img src="{{ asset('images/logos/raven.png') }}" alt="Avatar"></a>
            </div>
        </div>
        <div class="sidebar__container">
            <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
            <a onclick="window.location.href='{{ route('library') }}'">Library</a>
            <a href="#">News</a>
        </div>
    </div>

    <!-- Contenedor principal modificado -->
    <div class="main-content">
        <!-- Contenido central existente -->
        <div class="content">
            <div class="navbar">
                <div class="searchbar">
                    <span class="search__icon material-symbols-outlined">search</span>
                    <input class="search__input" type="search" placeholder="Search">
                </div>

                <div class="dropdown-buttons">
                        <div class="dropdown">
                            <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown1')"><img src="{{ asset('svg/account.svg') }}" alt="">
                            </button>
                            <div class="dropdown-menu" id="dropdown1">
                                <a href="#">Profile</a>
                                <a href="#">Settings</a>
                                <a href="#">Logout</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="dropdown-toggle circle-btn" onclick="toggleDropdown('dropdown2')"><img src="{{ asset('svg/shoppingcart.svg') }}" alt="">
                            </button>
                            <div class="dropdown-menu" id="dropdown2">
                                <a href="#">View Cart</a>
                                <a href="#">Checkout</a>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div class="cart-page-container">
                <h1 class="shopping-cart-title">Shopping Cart</h1>
                
                <div class="cart-main-content">
                    <!-- Carrito de compras -->
                    <div class="shopping-cart-container">
                        <div class="cart-card">
                            <div class="cart-item">
                                <div class="game-image">
                                    <img src="{{ asset('img/Games/Cyberpunk.jpg') }}" alt="Cyberpunk 2077">
                                </div>
                                <div class="item-details">
                                    <div class="item-title">Cyberpunk 2077</div>
                                    <div class="item-price">Mex$ 40.00</div>
                                </div>
                                <div class="item-actions">
                                    <button class="action-btn add-btn">Add</button>
                                    <span class="action-separator">|</span>
                                    <button class="action-btn remove-btn">Remove</button>
                                </div>
                            </div>
                        </div>
                        <!-- game 2 -->
                        <div class="cart-card">
                            <div class="cart-item">
                                <div class="game-image">
                                    <img src="{{ asset('img/Games/r6.jpeg') }}" alt="R6">
                                </div>
                                <div class="item-details">
                                    <div class="item-title">R6</div>
                                    <div class="item-price">Mex$ 50.00</div>
                                </div>
                                <div class="item-actions">
                                    <button class="action-btn add-btn">Add</button>
                                    <span class="action-separator">|</span>
                                    <button class="action-btn remove-btn">Remove</button>
                                </div>
                            </div>
                        </div>

                        <div class="cart-card">
                            <div class="cart-item">
                                <div class="game-image">
                                    <img src="{{ asset('img/Games/Resident2.jpg') }}" alt="Resident2">
                                </div>
                                <div class="item-details">
                                    <div class="item-title">Resident Evil 2</div>
                                    <div class="item-price">Mex$ 840.00</div>
                                </div>
                                <div class="item-actions">
                                    <button class="action-btn add-btn">Add</button>
                                    <span class="action-separator">|</span>
                                    <button class="action-btn remove-btn">Remove</button>
                                </div>
                            </div>
                        </div>

                        <div class="cart-card">
                            <div class="cart-item">
                                <div class="game-image">
                                    <img src="{{ asset('img/Games/GreedFall.jpg') }}" alt="GreedFall">
                                </div>
                                <div class="item-details">
                                    <div class="item-title">GreedFall</div>
                                    <div class="item-price">Mex$ 400.00</div>
                                </div>
                                <div class="item-actions">
                                    <button class="action-btn add-btn">Add</button>
                                    <span class="action-separator">|</span>
                                    <button class="action-btn remove-btn">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar de pago FIJO -->
                    <div class="fixed-payment-sidebar">
                        <div class="payment-info">
                            <div class="country-selector">
                                <label for="country-currency">Country</label>
                                <select id="country-currency" class="country-dropdown">
                                    <option value="MXN" data-symbol="Mex$" selected>Mexico (Mex$)</option>
                                    <option value="USD" data-symbol="$">United States ($)</option>
                                    <option value="EUR" data-symbol="€">European Union (€)</option>
                                    <option value="GBP" data-symbol="£">United Kingdom (£)</option>
                                    <option value="JPY" data-symbol="¥">Japan (¥)</option>
                                    <option value="CAD" data-symbol="CA$">Canada (CA$)</option>
                                    <option value="BRL" data-symbol="R$">Brazil (R$)</option>
                                </select>
                            </div>
                            
                            <div class="payment-divider"></div>
                            
                            <div class="total-section">
                                <span class="estimated-total">Estimated total</span>
                                <span class="total-amount" data-base-price="90.00">Mex$ 90.00</span>
                            </div>
                            
                            <div class="tax-note">Sales tax will be calculated during checkout</div>
                            <button class="payment-button" onclick="window.location.href='{{ route('payment') }}'">Continue to payment</button>
                        </div>
                    </div>
                </div>

                <div class="cart-footer">
                    <button class="continue-shopping-btn" onclick="window.location.href='{{ route('store') }}'">Continue Shopping</button>
                </div>
            </div>
        </div>
    </div>
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

            document.addEventListener('click', function (event) {
                const isDropdown = event.target.closest('.dropdown');
                if (!isDropdown) {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.style.display = 'none';
                    });
                }
            });
    document.addEventListener('DOMContentLoaded', function() {
        console.log("El JavaScript se está ejecutando!"); // Para prueba
        
        const currencySelector = document.getElementById('country-currency');
        const totalAmount = document.querySelector('.total-amount');
        const basePrice = parseFloat(totalAmount.dataset.basePrice || totalAmount.textContent.replace(/[^0-9.]/g, ''));
        
        // Tasas de cambio aproximadas
        const exchangeRates = {
            MXN: 1,
            USD: 0.059,
            EUR: 0.054,
            GBP: 0.046,
            JPY: 8.55,
            CAD: 0.080,
            BRL: 0.30
        };
        
        if(currencySelector && totalAmount) {
            currencySelector.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const currencySymbol = selectedOption.dataset.symbol;
                const currencyCode = selectedOption.value;
                
                const convertedPrice = (basePrice * exchangeRates[currencyCode]).toFixed(2);
                totalAmount.textContent = `${currencySymbol} ${convertedPrice}`;
                
                updateCartItemsPrices(currencyCode, currencySymbol);
            });
        } else {
            console.error("No se encontraron elementos esenciales");
        }
        
        function updateCartItemsPrices(currencyCode, symbol) {
            document.querySelectorAll('.item-price').forEach(priceElement => {
                const originalPrice = parseFloat(priceElement.dataset.originalPrice || priceElement.textContent.replace(/[^0-9.]/g, ''));
                const convertedPrice = (originalPrice * exchangeRates[currencyCode]).toFixed(2);
                priceElement.textContent = `${symbol} ${convertedPrice}`;
                
                if (!priceElement.dataset.originalPrice) {
                    priceElement.dataset.originalPrice = originalPrice;
                }
            });
        }
    });
</script>
@endsection