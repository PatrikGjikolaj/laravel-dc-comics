@extends('layouts.app')

@section('content')

<div class="container-fluid bg_img">
    <div class="container fly_cnt">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary fw-bold fly_btn">CURRENT SERIES</button>
                <a class="btn btn-primary" href="{{ route("Comics.create") }}">Aggiungi un nuovo comic</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg_grey">
    <div class="container py-4">
        <div class="row text-center">
            @foreach ($foto as $foto)
            <div class="col-2 img-fluid">
                <img src="{{ $foto['thumb'] }}" alt="" class="pic">
                <span class="fw-bold text-white my-2">{{ $foto['series'] }}</span>
            </div>
            @endforeach
            <div col-12>
                <button type="button" class="btn btn-primary fw-bold">SIGN-UP NOW</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  text-bg-primary">
    <div class="container">
        <div class="row justify-content-evenly align-items-center py-4 fw-bold">
            <div class="col-2">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="" class="imgS">
                <span class="px-2">DIGITAL COMICS</span>
            </div>
            <div class="col-2">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="" class="imgS">
                <span class="px-2">DC MERCHANDISE</span>
            </div>
            <div class="col-2">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="" class="imgS">
                <span class="px-2">SUBSCRIPTION</span>
            </div>
            <div class="col-2">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" class="imgS">
                <span class="px-2">COMIC SHOP LOCATION</span>
            </div>
            <div class="col-2">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="" class="imgS">
                <span class="px-2">DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>

@endsection
