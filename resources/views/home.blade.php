@extends('layouts.main')

@section('content')
    <main>
    <div class="container">
      <div class="product">
        {{-- @foreach ($cards as $card) --}}
            {{-- <img class="primary-img" :src="item.img" />
            <img class="img-hover" :src="item.imgHover" />
            <div class="disc-eco">
                <span class="discount">{{ item.discount }}</span>
                <span class="eco">{{ item.eco }}</span>
            </div>
            <span class="heart">&hearts;</span>

            <div class="info">
                <span class="brand">{{ item.brand }}</span>
                <span class="desc">{{ item.desc }}</span>
                <span class="price-new">{{ item.priceNew }}</span>
                <span class="price-old">{{ item.priceOld }}</span>
            </div> --}}
        {{-- @endforeach --}}
      </div>
    </div>
  </main>
@endsection
