<x-layout>

    <x-slot:title>
        Cafés
    </x-slot>

    <x-page-header :title="'Cafés'">

        <a href="{{ route('coffees.create') }}">
            <button class="button button-primary">
                + Café
            </button>
        </a>

    </x-page-header>

    <section class="product-grid">

        @foreach($coffees as $coffee)

            <x-product-card :coffee="$coffee" />

        @endforeach

    </section>

</x-layout>