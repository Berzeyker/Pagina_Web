@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'Card')

@section('content')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">

    <div class="main-container">
        <!-- Sidebar izquierdo -->
        <div class="left-sidebar">
            <div class="avatar-container-left">
                <div class="avatar-left"><img src="{{ asset('images/logos/raven.png') }}" alt="Avatar"></div>
            </div>
            <div class="menu-left">
                <a onclick="window.location.href='{{ route('store') }}'">Store Page</a>
                <a onclick="window.location.href='{{ route('library') }}'">Library</a>
                <a href="#">Community</a>
                <a href="#">News</a>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="main-content">
            <div class="payment-header">
                <h1 class="payment-title">Payment Method</h1>
            </div>
            
            <div class="payment-section">
                <form class="payment-form">
                    <!-- Tipo de tarjeta -->
                    <div class="form-group">
                        <p class="payment-instruction">Please select a payment method</p>
                        <select class="form-input">
                            <option>Paypal</option>
                            <option>Visa</option>
                            <option>MasterCard</option>
                            <option>OXXO</option>
                            <option>SPEI</option>
                            <option>Todito Cash</option>
                            <option>American Express</option>
                        </select>
                    </div>
                    
                    <!-- Información de la tarjeta -->
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label>Card Number</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label>Expiration Date</label>
                                <input type="text" class="form-input" placeholder="MM/YY" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label>Security Code</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Información de facturación -->
                    <div class="section-title">Billing Information</div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col form-col-wide">
                            <div class="form-group">
                                <label>Billing Address</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                        <div class="form-col form-col-narrow">
                            <div class="form-group">
                                <label>Zip or Postal Code</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Billing Address, Line 2</label>
                        <input type="text" class="form-input" placeholder="Example">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" class="form-input" placeholder="Example" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Opción para guardar información -->
                    <div class="form-checkbox">
                        <input type="checkbox" id="save-info">
                        <label for="save-info">Save my payment information so checkout is easy next time</label>
                    </div>
                    
                    <!-- Botón de envío -->
                    <button type="button" class="add-payment-btn" onclick="handlePurchase()">Save Payment Method</button>
                </form>
            </div>
            <div class="success-popup" id="successPopup">
                <div class="popup-content">
                    <h3>Payment Added</h3>
                    <p>Your information has been successfully registered.</p>
                    <button onclick="closePopup()">OK</button>
                </div>
            </div>
        </div>

        <!-- Sidebar derecho -->
        <div class="right-sidebar">
            <ul class="settings-list">
                <li><a onclick="window.location.href='{{ route('account') }}'">Personal Information</a></li>
                <li><a onclick="window.location.href='{{ route('payment') }}'">Payment Methods</a></li>
                <li><a onclick="window.location.href='{{ route('wishlist') }}'">Wishlist</a></li>
                <li>Security & Login</li>
            </ul>
        </div>
    </div>

<script>
    function handlePurchase() {
        const form = document.querySelector('.payment-form');
        const requiredFields = form.querySelectorAll('[required]');
        let allFilled = true;

        // Check all required fields
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                allFilled = false;
                field.classList.add('error');
            } else {
                field.classList.remove('error');
            }
        });

        if (allFilled) {
            showPopup();
            form.reset();
        } else {
            alert('Please fill in all required fields!');
            // Scroll to first empty field
            const firstEmpty = form.querySelector('.error');
            if (firstEmpty) {
                firstEmpty.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    }

    function showPopup() {
        document.getElementById('successPopup').style.display = 'flex';
    }

    function closePopup() {
        document.getElementById('successPopup').style.display = 'none';
    }
</script>
@endsection
