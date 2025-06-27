@extends('layout')

@section('title','Home Page')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg')}}" alt="">
            <div class="carousel-container">
                <h2>Powerful Simplicity with Laravel<br></h2>
                <p>Experience smooth and responsive user interfaces powered by PHP Laravel’s efficient backend, crafted to demonstrate clean CRUD operations.</p>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg')}}" alt="">
            <div class="carousel-container">
                <h2>Add Data Effortlessly</h2>
                <p>Create new records with user-friendly forms and seamless validation, built with Laravel’s request handling and Eloquent ORM.</p>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg')}}" alt="">
            <div class="carousel-container">
                <h2>Access Information Instantly</h2>
                <p>Display records in real-time using Laravel’s Blade templating and database querying, ensuring efficient and accurate data presentation.</p>
            </div>
        </div><!-- End Carousel Item -->
        
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg')}}" alt="">
            <div class="carousel-container">
                <h2>Modify with Precision</h2>
                <p>Update existing records securely through intuitive forms, route model binding, and Laravel’s built-in CSRF protection.</p>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg')}}" alt="">
            <div class="carousel-container">
                <h2>Remove What You Don't Need</h2>
                <p>Safely delete records with confirmation prompts and route-based authorization—demonstrating Laravel’s security-first approach.</p>
            </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </div>

</section><!-- /Hero Section -->
@endsection