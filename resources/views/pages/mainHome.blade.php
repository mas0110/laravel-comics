{{-- @extends('layouts.app')

@section('title', 'DC comics | home')

@section('ciao') --}}
<main>
    <div class="cont">
        <button class="btn btn-primary mt-3 currentBtn">current series</button>
    </div>
    <div class="poster">
        @foreach ($db as $element)
            <div class="posterCol">
                <img src="{{$element['thumb']}}" alt="">
                <div>{{ $element['series']}}</div>
            </div>
        @endforeach
    </div>
<div>
    <div class="content">
        <CompSlider/>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary mt-3">Load More</button>
        </div>
    </div>
</div>
<div class="buyComics">
    <ul>
        <li>
            <img src="{{ Vite:: asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital">
            <span>DIGITAL COMICS</span>
        </li>
        <li>
            <img src="{{ Vite:: asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
            <span>DC MERCHARDISE</span>
        </li>
        <li>
            <img src="{{ Vite:: asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscriptions">
            <span>SUBSCRIPTION</span>
        </li>
        <li>
            <img src="{{ Vite:: asset('resources/img/buy-comics-shop-locator.png') }}" alt="location">
            <span>COMIC SHOP LOCATOR</span>
        </li>
        <li>
            <img src="{{ Vite:: asset('resources/img/buy-dc-power-visa.svg') }}" alt="visa">
            <span>DC POWER VISA</span>
        </li>
    </ul>
</div>
</main>
{{-- @endsection --}}
