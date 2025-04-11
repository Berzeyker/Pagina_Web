@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Payment Methods')

@section('content')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

<div class="container">
    <!-- Sidebar izquierdo -->
    <div class="sidebar">
        <div class="avatar-container-left">
            <div class="avatar-left">
                <a onclick="window.location.href='{{ route('home') }}'"><img src="{{ asset('images/logos/raven.png') }}" alt="Avatar"></a>
            </div>
        </div>
        <div class="menu">
            <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
            <a onclick="window.location.href='{{ route('library') }}'">Library</a>
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
            <li><a onclick="window.location.href='{{ route('account') }}'">Personal Information</a></li>
            <li><a onclick="window.location.href='{{ route('payment') }}'">Payment Methods</a></li>
            <li><a onclick="window.location.href='{{ route('wishlist') }}'">Wishlist</a></li>
            <li>Security & Login</li>
        </ul>
    </div>
</div>
<script>
function togglePaymentMenu() {
    const paymentCard = event.currentTarget;
    paymentCard.classList.toggle('active');
    
    // Close other open menus
    document.querySelectorAll('.payment-card').forEach(card => {
        if (card !== paymentCard) {
            card.classList.remove('active');
        }
    });
}

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.payment-card')) {
        document.querySelectorAll('.payment-card').forEach(card => {
            card.classList.remove('active');
        });
    }
});

// Prevent menu from closing when clicking inside the menu
document.querySelectorAll('.menu-options').forEach(menu => {
    menu.addEventListener('click', (e) => {
        e.stopPropagation();
    });
});

// Handle menu options
document.querySelectorAll('.menu-option').forEach(option => {
    option.addEventListener('click', (e) => {
        const action = e.target.textContent;
        const card = e.target.closest('.payment-card');
        
        switch(action) {
            case 'Edit':
                // Add edit functionality
                console.log('Editing card:', card.querySelector('.card-info').textContent);
                break;
            case 'Remove':
                // Add remove functionality
                card.remove();
                break;
            case 'Set as default':
                // Add set default functionality
                document.querySelectorAll('.payment-card').forEach(c => {
                    c.style.borderLeftColor = '#4CAF50';
                });
                card.style.borderLeftColor = '#FFD700';
                break;
        }
        
        card.classList.remove('active');
    });
});
</script>
@endsection