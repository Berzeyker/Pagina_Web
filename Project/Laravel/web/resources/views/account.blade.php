@extends('layouts.app', ['withoutNavbar' => true])

@section('title', 'My Account')

@section('content')
<link rel="stylesheet" href="{{ asset('css/account.css') }}">

<div class="container">
    <!-- Sidebar izquierdo -->
    <div class="sidebar">
        <div class="avatar-container-left">
            <div class="avatar-left"></div>
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
        <h1 class="title">My Account</h1>
        <div class="avatar-container">
            <div class="avatar"></div>
            <div class="edit-avatar">Edit Avatar</div>
        </div>
        
        <div class="account-section">
            <h2 class="section-title">Account Name</h2>
            <div class="form-row">
                <div class="form-label">Current Account Name</div>
                <input type="text" class="form-input" placeholder="Quimbap">
            </div>
            <div class="form-row">
                <div class="form-label">New Account Name</div>
                <input type="text" class="form-input" placeholder="Quimbap">
            </div>
        </div>
        
        <div class="account-section">
            <h2 class="section-title">Email</h2>
            <div class="form-row">
                <div class="form-label">Current Email</div>
                <input type="text" class="form-input" placeholder="Example">
            </div>
            <div class="form-row">
                <div class="form-label">New Email</div>
                <input type="text" class="form-input" placeholder="Example">
            </div>
        </div>
    </div>

    <!-- Sidebar derecho -->
    <div class="settings">
        <ul class="settings-list">
            <li>Personal Information</li>
            <li>Payment Methods</li>
            <li>Wishlist</li>
            <li>Security & Login</li>
        </ul>
    </div>
</div>
@endsection
