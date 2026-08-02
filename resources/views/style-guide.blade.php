<x-layout>
    <x-slot:title>
        Styleguide
    </x-slot>

    <x-page-header :title="'Styleguide'">
        <span class="badge badge-neutral">uso interno</span>
    </x-page-header>

    {{-- ============================================================
         CORES
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Cores</h2>
        <div class="flex gap-4" style="flex-wrap: wrap;">
            @foreach ([
                ['Background', 'var(--color-bg)'],
                ['Background Secondary', 'var(--color-bg-secondary)'],
                ['Surface', 'var(--color-surface)'],
                ['Surface Hover', 'var(--color-surface-hover)'],
                ['Primary', 'var(--color-primary)'],
                ['Accent', 'var(--color-accent)'],
                ['Success', 'var(--color-success)'],
                ['Warning', 'var(--color-warning)'],
                ['Danger', 'var(--color-danger)'],
                ['Info', 'var(--color-info)'],
            ] as [$label, $var])
                <div style="width: 140px;">
                    <div style="height: 64px; border-radius: var(--radius-md); background-color: {{ $var }}; border: 1px solid var(--color-border);"></div>
                    <p class="text-small text-secondary mt-2">{{ $label }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         TIPOGRAFIA
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Tipografia</h2>
        <div class="flex-col gap-3">
            <p class="text-display" style="font-family: var(--font-secondary);">Display / Playfair 56</p>
            <h1>H1 / Playfair 40</h1>
            <h2>H2 / Nunito 32</h2>
            <h3>H3 / Nunito 24</h3>
            <h4>H4 / Nunito 20</h4>
            <p>Body / Nunito 16 — texto padrão de parágrafo.</p>
            <p class="text-small text-secondary">Small / Nunito 14 — texto secundário.</p>
            <p class="text-caption text-disabled">CAPTION / NUNITO 12</p>
        </div>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         BOTÕES
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Botões</h2>

        <p class="text-small text-secondary mb-2">Variantes</p>
        <div class="flex gap-3 mb-4" style="flex-wrap: wrap;">
            <button class="button button-primary">Primary</button>
            <button class="button button-secondary">Secondary</button>
            <button class="button button-accent">Accent</button>
            <button class="button button-ghost">Ghost</button>
            <button class="button button-danger">Danger</button>
            <button class="button button-primary" disabled>Disabled</button>
        </div>

        <p class="text-small text-secondary mb-2">Tamanhos</p>
        <div class="flex gap-3" style="align-items: center; flex-wrap: wrap;">
            <button class="button button-primary button-sm">Small</button>
            <button class="button button-primary">Medium</button>
            <button class="button button-primary button-lg">Large</button>
        </div>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         BADGES
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Badges</h2>
        <div class="flex gap-3" style="flex-wrap: wrap;">
            <span class="badge badge-neutral">Neutral</span>
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-success">Disponível</span>
            <span class="badge badge-warning">Estoque baixo</span>
            <span class="badge badge-danger">Esgotado</span>
            <span class="badge badge-info">Novo</span>
        </div>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         FORMULÁRIO
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Formulário</h2>
        <form style="max-width: 420px;">
            <div class="form-group">
                <label class="form-label" for="sg-name">Nome do café</label>
                <input type="text" id="sg-name" class="form-input" placeholder="Ex: Espresso Duplo">
            </div>

            <div class="form-group">
                <label class="form-label" for="sg-desc">
                    Descrição <span class="form-optional">(opcional)</span>
                </label>
                <textarea id="sg-desc" class="form-textarea" placeholder="Notas de sabor, origem do grão..."></textarea>
                <span class="form-hint">Máximo de 200 caracteres.</span>
            </div>

            <div class="form-group">
                <label class="form-label" for="sg-heat">Temperatura</label>
                <select id="sg-heat" class="form-select">
                    <option>Quente</option>
                    <option>Gelado</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="sg-price">Preço</label>
                <input type="text" id="sg-price" class="form-input is-invalid" value="abc">
                <span class="form-error">Informe um valor numérico válido.</span>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" id="sg-featured" class="form-check-input">
                    <label for="sg-featured" class="form-check-label">Destacar na home</label>
                </div>
            </div>

            <div class="form-group">
                <label for="picture">Foto</label>
                <input type="file" id="picture" class="form-file" accept="image/*">
            </div>

            <button type="button" class="button button-primary button-block">Salvar café</button>
        </form>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         PRODUCT CARD
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Product Card</h2>
        <div class="product-grid" style="max-width: 700px;">
            <article class="product-card">
                <img src="https://cdn.freecodecamp.org/curriculum/css-cafe/coffee.jpg" alt="Espresso" class="product-card-image">
                <div class="product-card-body">
                    <div class="product-card-header">
                        <h3>Espresso Duplo</h3>
                        <span class="product-price">R$ 12,90</span>
                    </div>
                    <p class="product-volume">60 ml</p>
                    <span class="product-temperature is-hot">Quente</span>
                    <button class="button button-primary">Levar</button>
                </div>
            </article>
            <article class="product-card">
                <img src="https://cdn.freecodecamp.org/curriculum/css-cafe/coffee.jpg" alt="Cold Brew" class="product-card-image">
                <div class="product-card-body">
                    <div class="product-card-header">
                        <h3>Cold Brew</h3>
                        <span class="product-price">R$ 16,50</span>
                    </div>
                    <p class="product-volume">300 ml</p>
                    <span class="product-temperature is-cold">Gelado</span>
                    <button class="button button-primary">Levar</button>
                </div>
            </article>
        </div>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         MODAL (infra do Bootstrap, estilo do Design System)
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Modal</h2>
        <button type="button" class="button button-secondary" data-bs-toggle="modal" data-bs-target="#sgModal">
            Abrir modal de confirmação
        </button>

        <div class="modal fade" id="sgModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Remover café?</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        Essa ação não pode ser desfeita. O item será removido do cardápio permanentemente.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button button-ghost" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="button button-danger" data-bs-dismiss="modal">Remover</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr style="border-color: var(--color-divider); margin: var(--space-6) 0;">

    {{-- ============================================================
         TOAST (infra do Bootstrap, estilo do Design System)
    ============================================================= --}}
    <section class="mb-6">
        <h2 class="mb-4">Toast</h2>
        <div class="flex gap-3" style="flex-wrap: wrap;">
            <button type="button" class="button button-secondary" data-toast-target="#sgToastSuccess">Sucesso</button>
            <button type="button" class="button button-secondary" data-toast-target="#sgToastDanger">Erro</button>
        </div>

        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
            <div id="sgToastSuccess" class="toast toast-success" role="status" aria-live="polite" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Café salvo</strong>
                    <small>agora</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Fechar"></button>
                </div>
                <div class="toast-body">
                    O café foi adicionado ao cardápio com sucesso.
                </div>
            </div>

            <div id="sgToastDanger" class="toast toast-danger" role="status" aria-live="polite" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Falha ao salvar</strong>
                    <small>agora</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Fechar"></button>
                </div>
                <div class="toast-body">
                    Verifique os campos do formulário e tente novamente.
                </div>
            </div>
        </div>
    </section>

    {{-- Instancia os toasts do Bootstrap sob demanda.
         Requer bootstrap.bundle.min.js importado no app.js. --}}
    <script>
        document.querySelectorAll('[data-toast-target]').forEach(function (trigger) {
            trigger.addEventListener('click', function () {
                var el = document.querySelector(trigger.getAttribute('data-toast-target'));
                var toast = bootstrap.Toast.getOrCreateInstance(el);
                toast.show();
            });
        });
    </script>
</x-layout>
