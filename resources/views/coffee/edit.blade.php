<x-layout>

    <x-slot:title>
        Editar Café
    </x-slot:title>

    <div class="container py-5">

        <h1 class="mb-4">
            Editar Café
        </h1>

        <form
            action="{{ route('coffee.update', $coffee) }}"
            method="POST">

            @csrf
            @method('PUT')

            @include('coffee.partials.form', compact('coffee'))

        </form>

    </div>

</x-layout>
