<x-layout>

    <x-slot:title>Novo Café</x-slot:title>

    <x-page-header title="Adicionar Café">

    </x-page-header>

    <section class="container">
        @include('coffee.partials._form', ['action' => route('coffees.store')])
    </section>
    
</x-layout>
