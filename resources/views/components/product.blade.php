@props(['coffee'])

<section class="product-detail">
    <img src="{{ $coffee->picture_path ? asset('storage/' . $coffee->picture_path) : asset('images/no-picture.webp') }}"
        alt="{{ $coffee->name }}" class="product-detail-image">

    <div class="product-detail-info">

        <span class="product-detail-price">
            R$ {{ number_format($coffee->price, 2, ',', '.') }}
        </span>

        <div class="product-detail-meta">
            <span>{{ $coffee->volume_ml }} ml</span>
            {{-- <span>&middot;</span> --}}
            <span class="badge badge-neutral">{{ $coffee->size->value }}</span>
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
        </div>

        @if (!empty($coffee->description))
            <p class="product-detail-description">
                {{ $coffee->description }}
            </p>
        @else
            <p class="product-detail-description">
                Sem descrição
            </p>
        @endif

        <div class="product-detail-actions">

            <a href="#">
                <button class="button button-primary button-md">
                    Adicionar ao pedido
                </button>
            </a>

            <a href="{{ route('coffees.edit', $coffee) }}">
                <button class="button button-secondary button-md">
                    Editar
                </button>
            </a>

            <button class="button button-danger" data-bs-toggle="modal" data-bs-target="#removeCoffeeModal">
                Remover café
            </button>

        </div>

    </div>

    <div class="modal fade" id="removeCoffeeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Remover {{ $coffee->name }}?</h3>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    Essa ação não pode ser desfeita. O café será removido do cardápio permanentemente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button-ghost" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <form action="{{ route('coffees.destroy', $coffee) }}" method="POST" style="display: contents;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button button-danger">
                            Remover
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
