@extends('layout.main')

@section('main-content')
    <section class="product">
        <div class="container">
            <div class="hero">
                <h1>{{ $product['titolo'] }}</h1>
                <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
                <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
            </div>

            <div class="description">
                <p>{!! $product['descrizione'] !!}</p>
            </div>
        </div>
    </section>
@endsection