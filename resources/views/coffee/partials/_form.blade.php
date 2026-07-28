@props(['coffee' => null, 'action', 'method' => 'POST'])

@php
    $heatOptions = ['hot', 'iced'];
    $sizeOptions = ['small', 'medium', 'large'];
@endphp

<form action="{{ $action }}" method="POST">
    @csrf
    @if(strtoupper($method) !== 'POST')
        @method($method)
    @endif

    <div class="form-group">
        <label class="form-label" for="name">Nome</label>
        <input
            type="text"
            id="name"
            name="name"
            class="form-input @error('name') is-invalid @enderror"
            placeholder="Ex: Espresso Duplo"
            value="{{ old('name', $coffee->name ?? '') }}"
            required>
        @error('name')
            <span class="form-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label class="form-label" for="description">
            Descrição <span class="form-optional">(opcional)</span>
        </label>
        <textarea
            id="description"
            name="description"
            class="form-textarea @error('description') is-invalid @enderror"
            placeholder="Notas de sabor, origem do grão..."
            maxlength="200">{{ old('description', $coffee->description ?? '') }}</textarea>
        @error('description')
            <span class="form-error">{{ $message }}</span>
        @else
            {{-- <span class="form-hint">Máximo de 200 caracteres.</span> --}}
        @enderror
    </div>

    <div class="form-group">
        <label class="form-label" for="heat">Temperatura</label>
        <select id="heat" name="heat" class="form-select @error('heat') is-invalid @enderror" required>
            @foreach($heatOptions as $option)
                <option value="{{ $option }}" @selected(old('heat', $coffee->heat ?? null) === $option)>
                    {{ $option }}
                </option>
            @endforeach
        </select>
        @error('heat')
            <span class="form-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label class="form-label" for="size">Tamanho</label>
        <select id="size" name="size" class="form-select @error('size') is-invalid @enderror" required>
            @foreach($sizeOptions as $option)
                <option value="{{ $option }}" @selected(old('size', $coffee->size ?? null) === $option)>
                    {{ $option }}
                </option>
            @endforeach
        </select>
        @error('size')
            <span class="form-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label class="form-label" for="volume_ml">Volume (ml)</label>
        <input
            type="number"
            id="volume_ml"
            name="volume_ml"
            class="form-input @error('volume_ml') is-invalid @enderror"
            value="{{ old('volume_ml', $coffee->volume_ml ?? '') }}"
            min="1"
            required>
        @error('volume_ml')
            <span class="form-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label class="form-label" for="price">Preço</label>
        <input
            type="number"
            id="price"
            name="price"
            step="0.01"
            class="form-input @error('price') is-invalid @enderror"
            value="{{ old('price', $coffee->price ?? '') }}"
            min="0"
            required>
        @error('price')
            <span class="form-error">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex gap-3 mt-2">
        <button type="submit" class="button button-primary">Salvar</button>
        <a href="{{ url()->previous() }}" class="button button-danger">Cancelar</a>
    </div>
</form>