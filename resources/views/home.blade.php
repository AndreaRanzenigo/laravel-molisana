@extends('layout.main')

@section('main-content')
    <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('script')
    {{-- Script --}}
@endsection