@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div id="container_box">
        <div id="box_cards">
            <ul>
                @foreach ($comics as $comic)
                    <li class="cards">
                        <a href="/comic" class="text-decoration-none">
                            <img src="{{ $comic['thumb'] }}"><br>
                            <span class="small-font">
                                {{ $comic['title'] }}
                            </span>
                        </a>
                    </li>      
                @endforeach
            </ul>
        </div>
        <button>LOAD MORE</button>
    </div>
    <div id="bg_nav">
        <div id="nav_list">
            <ul>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/assets/buy-comics-digital-comics.png') }}" alt="">
                        DIGITAL COMICS
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/assets/buy-comics-merchandise.png') }}" alt="">
                        DC MERCHANDISE
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/assets/buy-comics-subscriptions.png') }}" alt="">
                        SUBSCRIPTION
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/assets/buy-comics-shop-locator.png') }}" alt="">
                        COMIC SHOP LOCATOR
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/assets/buy-dc-power-visa.svg') }}" alt="">
                        DC POWER VISA
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
