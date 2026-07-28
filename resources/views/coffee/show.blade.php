<x-layout>
    <x-slot:title>
        {{ $coffee->name }}
    </x-slot>

    <x-page-header :title="$coffee->name">

        <a href="{{ route('coffees.index') }}" class="button button-ghost">
            ← Voltar
        </a>

    </x-page-header>

    <x-product :coffee="$coffee"></x-product>

</x-layout>
