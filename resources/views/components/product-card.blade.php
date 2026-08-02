@props(['coffee'])

<article class="product-card">
    <a href="{{ route('coffees.show', $coffee->id) }}">
        <img
        src="{{ 
            $coffee->picture_path ? asset('storage/' .$coffee->picture_path) : asset("images/no-picture.webp") 
        }}"
        alt="{{ $coffee->name }}"
        class="product-card-image">
    </a>

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
        
        @if ($coffee->heat->value === 'hot')
            <span class="product-temperature is-hot">
                <i class="bi bi-cup-hot-fill"></i>
                quente
            </span>
        @else
            <span class="product-temperature is-cold">
                <i class="bi bi-boxes"></i>
                gelado
            </span>
        @endif

        <button class="button button-primary">
            Levar
        </button>

    </div>

</article>