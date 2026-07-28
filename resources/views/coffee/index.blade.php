<x-layout>

    <x-slot:title>
        Cafés
    </x-slot>

    <x-page-header :title="'Cafés'">

        <button class="button button-primary">
            + Café
        </button>

    </x-page-header>

    <section class="product-grid">

        @foreach($coffees as $coffee)

            <x-product-card :coffee="$coffee" />

        @endforeach

    </section>

</x-layout>