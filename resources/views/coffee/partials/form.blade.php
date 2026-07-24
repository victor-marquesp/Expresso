<form
    action="{{ route('coffee.store') }}"
    method="POST"
    class="card shadow-sm"
>
    @csrf

    <div class="card-body">

        <div class="mb-3">
            <label for="name" class="form-label">
                Nome
            </label>

            <input
                type="text"
                id="name"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $coffee->name) }}"
                placeholder="Ex.: Cappuccino"
            >

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">
                Descrição
            </label>

            <textarea
                id="description"
                name="description"
                rows="4"
                class="form-control @error('description') is-invalid @enderror"
                placeholder="Descrição do café..."
            >{{ old('description', $coffee->description) }}</textarea>

            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <label for="price" class="form-label">
                    Preço
                </label>

                <input
                    type="number"
                    step="0.01"
                    min="0"
                    id="price"
                    name="price"
                    class="form-control @error('price') is-invalid @enderror"
                    value="{{ old('price', $coffee->price) }}"
                >

                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="volume_ml" class="form-label">
                    Volume (ml)
                </label>

                <input
                    type="number"
                    min="1"
                    id="volume_ml"
                    name="volume_ml"
                    class="form-control @error('volume_ml') is-invalid @enderror"
                    value="{{ old('volume_ml', $coffee->volume_ml) }}"
                >

                @error('volume_ml')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="size" class="form-label">
                    Tamanho
                </label>

                <select
                    id="size"
                    name="size"
                    class="form-select @error('size') is-invalid @enderror"
                >
                    <option value="">Selecione</option>

                    @foreach (\App\Enums\Size::cases() as $size)
                        <option
                            value="{{ $size->value }}"
                            @selected(old('size', $coffee->size->value) == $size->value)
                        >
                            {{ $size->name }}
                        </option>
                    @endforeach

                </select>

                @error('size')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>

        <div class="mb-4">
            <label class="form-label">
                Temperatura
            </label>

            <div class="d-flex gap-4">

                @foreach (\App\Enums\Heat::cases() as $heat)
                    <div class="form-check">

                        <input
                            class="form-check-input"
                            type="radio"
                            name="heat"
                            id="heat_{{ $heat->value }}"
                            value="{{ $heat->value }}"
                            @checked(old('heat', $coffee->heat->value) == $heat->value)
                        >

                        <label
                            class="form-check-label"
                            for="heat_{{ $heat->value }}"
                        >
                            {{ $heat->name }}
                        </label>

                    </div>
                @endforeach

            </div>

            @error('heat')
                <div class="text-danger small mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

    </div>

    <div class="card-footer d-flex justify-content-end gap-2">

        <a
            href="{{ route('coffee.index') }}"
            class="btn btn-outline-secondary"
        >
            Cancelar
        </a>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Salvar Café
        </button>

    </div>
</form>