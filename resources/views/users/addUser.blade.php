@extends('layout')

@section('title', 'Add User')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container">
        <h1>Add New User</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="current">Add New User</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->
<!-- Starter Section Section -->
<section id="starter-section" class="starter-section section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Starter Section</h2>
        <div><span>Check Our</span> <span class="description-title">Starter Section</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up">
        <div style="text-align: center; margin-top: 20px;">
            @if ($errors->any())
            <div style="color: red; margin-bottom: 10px;">
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif
        </div>
    </div>

    <div class="container" data-aos="fade-up">
        <!-- User Create Form -->
        <form action="{{ route('store') }}" method="POST" class="user-form">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Add User</button>
        </form>
    </div>

    <div class="container" data-aos="fade-up">
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('home') }}" class="nav-link">Back to Home Page</a>
            <a href="{{ route('users') }}" class="nav-link">Back to User List</a>
        </div>
    </div>

</section><!-- /Starter Section Section -->

@endsection