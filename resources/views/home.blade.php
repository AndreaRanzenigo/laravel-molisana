@extends('layout.main')

@section('main-content')
    <section class="type-card container">
        <h2>LE LUNGHE</h2>
    
        <div class="cards">
            @foreach ($lunga as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                </div>
            @endforeach
    </div>
        
    </section>  

    <section class="type-card container">
        <h2>LE CORTE</h2>
    
        <div class="cards">
            @foreach ($corta as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                </div>
            @endforeach
    </div>
        
    </section>    

    <section class="type-card container">
        <h2>LE CORTISSIME</h2>
    
        <div class="cards">
            @foreach ($cortissima as $card)
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