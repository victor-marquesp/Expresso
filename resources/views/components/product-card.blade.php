@props(['coffee'])

<article class="product-card">
    <img
        src="{{ $coffe->picture ?? asset("images/no-picture.webp") }}"
        alt="{{ $coffee->name }}"
        class="product-card-image">

    <div class="product-card-body">

        <div class="product-card-header">

            <h3>{{ $coffee->name }}</h3>

            <span class="product-price">
                R$ {{ number_format($coffee->price, 2, ',', '.') }}
            </span>

        </div>

        <p class="product-volume">
            {{ $coffee->volume_ml }} ml
        </p>

        <span class="product-temperature">
            @if ($coffee->heat->value === 'hot')
                <span style="color:tomato;">
                    <i class="bi bi-cup-hot-fill"></i>
                    quente
                </span>
            @else
                <span style="color:lightblue;">
                    <i class="bi bi-boxes"></i>
                    gelado
                </span>
            @endif
        </span>

        <button class="button button-primary">
            Levar
        </button>

    </div>

</article>