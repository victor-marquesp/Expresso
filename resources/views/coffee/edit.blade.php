<x-layout>

    <x-slot:title>Editar Café</x-slot:title>

    <x-page-header title="Atualizar Café">

    </x-page-header>

    <section class="container">
        @include('coffee.partials._form', ['coffee' => $coffee, 'action' => route('coffees.update', $coffee), 'method' => 'PUT'])
    </section>

</x-layout>
