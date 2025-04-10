@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Payment Methods')

@section('content')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

<div class="container">
    <!-- Sidebar izquierdo -->
    <div class="sidebar">
        <div class="avatar-container-left">
            <div class="avatar-left">
                <img src="{{ asset('images/logos/raven.png') }}" alt="Avatar">
            </div>
        </div>
        <div class="menu">
            <a href="#">Store Page</a>
            <a onclick="window.location.href='{{ route('library') }}'">Library</a>
            <a href="#">Community</a>
            <a href="#">News</a>
        </div>
    </div>

    <!-- Contenido central -->
    <div class="content">
        <h1 class="title">Payment Methods</h1>
        
        <div class="payment-section">
            <p class="payment-instruction">Please select a payment method</p>
            
            <div class="payment-method">
                <div class="payment-card" onclick="togglePaymentMenu(this)">
                    <div class="card-info">My Visa ending in ~15</div>
                    <div class="card-menu">
                        <div class="menu-arrow">▼</div>
                        <div class="menu-options">
                            <div class="menu-option">Edit</div>
                            <div class="menu-option">Remove</div>
                            <div class="menu-option">Set as default</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="payment-settings">
                <h3 class="settings-title">Payment Settings</h3>
                
                <div class="setting-option">
                    <div class="option-text">
                        <p>Save and fill payment methods</p>
                        <p class="option-description">File in payment forms with your saved payment methods</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
                
                <div class="setting-option">
                    <div class="option-text">
                        <p>Manually verify everytime you pay using autofill</p>
                        <p class="option-description">When turned off, you may be asked occasionally to verify for security purposes</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
                
                <div class="setting-option">
                    <div class="option-text">
                        <p>Save security codes</p>
                        <p class="option-description">Check out faster when your CVCs are saved</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            
            <button class="add-payment-btn">Add New Payment Method</button>
        </div>
    </div>

    <!-- Sidebar derecho -->
    <div class="settings">
        <ul class="settings-list">
            <li>Personal Information</li>
            <li class="active">Payment Methods</li>
            <li>Wishlist</li>
            <li>Security & Login</li>
        </ul>
    </div>
</div>
@endsection