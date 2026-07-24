<x-layout>

    <x-slot:title>
        Novo Café
    </x-slot:title>

    <div class="container py-5">

        <h1 class="mb-4">
            Novo Café
        </h1>

        <form
            action="{{ route('coffee.store') }}"
            method="POST">

            @csrf

            @include('coffee.partials.form')

        </form>

    </div>

</x-layout>
