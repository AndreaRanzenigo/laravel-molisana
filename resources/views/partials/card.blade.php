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