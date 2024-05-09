@extends('layouts.main')

@section('content')
    <div class="container">
        @foreach ($cards as $card)
            <div class="product">
                <img class="primary-img" src="{{ $card['img'] }}" />
                <img class="img-hover" src="{{ $card['imgHover'] }}" />
                <div class="disc-eco">
                    <span class="discount">{{ $card['discount'] }}</span>
                    <span class="eco">{{ $card['eco'] }}</span>
                </div>
                <span class="heart">&hearts;</span>

                <div class="info">
                    <span class="brand">{{ $card['brand'] }}</span>
                    <span class="desc">{{ $card['desc'] }}</span>
                    <span class="price-new">{{ $card['priceNew'] }}</span>
                    <span class="price-old">{{ $card['priceOld'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
