<x-layout>
    <x-slot:title>
        {{ $coffee->name }}
    </x-slot:title>

    <div class="container py-5">

        <a href="{{ route('coffee.index') }}"
           class="btn btn-outline-secondary mb-4">
            ← Voltar
        </a>

        <div class="card shadow-sm border-0">

            <div class="row g-0">

                <div class="col-md-5">
                    <img
                        src="https://cdn.freecodecamp.org/curriculum/css-cafe/coffee.jpg"
                        class="img-fluid rounded-start h-100 object-fit-cover"
                        alt="{{ $coffee->name }}">
                </div>

                <div class="col-md-7">

                    <div class="card-body h-100 d-flex flex-column">

                        <h1 class="display-6">
                            {{ $coffee->name }}
                        </h1>

                        <p class="text-muted">
                            {{ $coffee->description ?? 'Sem descrição cadastrada.' }}
                        </p>

                        <hr>

                        <div class="row mb-4">

                            <div class="col-6">
                                <small class="text-muted">ID</small>
                                <div class="fw-semibold">
                                    #{{ $coffee->id }}
                                </div>
                            </div>

                            <div class="col-6">
                                <small class="text-muted">Preço</small>
                                <div class="fw-semibold">
                                    R$ {{ number_format($coffee->price, 2, ',', '.') }}
                                </div>
                            </div>

                        </div>

                        <div class="mt-auto d-flex gap-2">

                            <a href="{{ route('coffee.edit', $coffee) }}"
                               class="btn btn-primary">
                                Editar
                            </a>

                            <form action="{{ route('coffee.destroy', $coffee) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-outline-danger"
                                        type="submit",
                                        onclick="return confirm('Are you sure you want to delete this chirp?')">
                                    Excluir
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</x-layout>
