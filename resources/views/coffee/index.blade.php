<x-layout>
    <x-slot:title>
        Cafés
    </x-slot:title>

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="mb-0">Cafés</h1>
                <p class="text-muted mb-0">
                    {{ $coffees->count() }} cafés cadastrados
                </p>
            </div>

            <a href="{{ route('coffee.create') }}" class="btn btn-primary">
                + Novo Café
            </a>
        </div>

        <div class="card shadow-sm border-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th width="220">Ações</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($coffees as $coffee)
                            <tr>

                                <td>#{{ $coffee->id }}</td>

                                <td>
                                    <strong>{{ $coffee->name }}</strong>
                                </td>

                                <td>
                                    R$ {{ number_format($coffee->price, 2, ',', '.') }}
                                </td>

                                <td>

                                    <div class="btn-group">

                                        <a href="{{ route('coffee.show', $coffee) }}"
                                            class="btn btn-outline-primary btn-sm">
                                            Ver
                                        </a>

                                        <a href="{{ route('coffee.edit', $coffee) }}"
                                            class="btn btn-outline-secondary btn-sm">
                                            Editar
                                        </a>

                                        <form action="{{ route('coffee.destroy', $coffee) }}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-outline-danger btn-sm"
                                                onclick="return confirm('Excluir este café?')">

                                                Excluir

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    Nenhum café cadastrado.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-layout>
