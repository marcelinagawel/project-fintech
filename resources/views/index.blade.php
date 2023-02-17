<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @include('partials.head')
    </head>
    <body>
        <header>
            @include('partials.nav')
        </header>

        <div class="breadcrumbs-area">
            <a class="non-active-breadcrumb">Home</a>
            <i class="arrow right"></i>
            <a class="non-active-breadcrumb">Industries</a>
            <i class="arrow right"></i>
            <a class="current-breadcrumbs">Fintech</a>
        </div>


    <div class="hero-section">
        <img class="baner-img" src="{{asset('img/hero-section.png')}}">
        <div class="baner-text">
            Kick-start your <span class="gosha">Fintech Project</span> with a team that feels like yours
        </div>
        <button class="baner-button">
            Schedule a free expert session
        </button>
    </div>

    <div class="digital-product">
        <div class="digital-product-element area1">
            <p class="product-number">31</p>
            <p class="product-text">Screens designed</p>
        </div>
        <div class="digital-product-element area2">
            <p class="product-number">613</p>
            <p class="product-text">Hours of Design</p>
        </div>
        <div class="digital-product-element area3">
            <p class="product-number">+24<span class="percent">%</span></p>
            <p class="product-text">More Clients on the new website</p>
        </div>
        <div class="digital-product-element area4">
            <p class="product-number">144</p>
            <p class="product-text">Wireframes &  User Flows</p>
        </div>
    </div>

    <div class="headline-content">
        <div class="head-visual">
            <img src="{{asset('img/PhoneMockup.gif')}}">
        </div>
        <div class="description">
            <p class="top-description">for who?</p>
            <p class="title-description">Are you running a <span class="gosha">Fintech Startup</span> or need <span class="gosha">Revamp your product?</span> </p>
            <p class="bottom-description">If you’re in business, fintech is probably already relevant to your operations at some level. </p>
            <p class="main-description">Fintech, short for Financial Technology, is a field of technology that focuses on the development and improvement of financial services through the use of new technologies. Our Fintech solutions include automation of financial processes, providing new options for customers, and enhancing the efficiency and quality of financial services.</p>
            <p class="main-description">Our solutions include mobile apps, robo-advisors, blockchain, smart contracts, and other Artificial Intelligence-based solutions. </p>
            <button class="read-more">
                Read more about fintech benefits
                    <svg class="vector" width="10" height="10" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6917 9.64879L9.98506 9.70331L10.2003 2.96725L1.16751 12L-6.10352e-05 10.8324L9.03269 1.79968L2.29663 2.01488L2.35115 0.308249L11.9999 0L11.6917 9.64879Z" fill="#385FF6"/>
                    </svg>
            </button>
        </div>
    </div>

    <br>

    </body>
</html>
