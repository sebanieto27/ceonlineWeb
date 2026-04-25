<x-filament-panels::page>
    <form wire:submit.prevent>
        {{ $this->form }}
    </form>

    {{-- URL generada --}}
    <x-filament::section class="mt-6">
        <x-slot name="heading">URL generada</x-slot>
        <x-slot name="description">Copiá esta URL para usarla en tus anuncios o publicaciones.</x-slot>

        @if ($generatedUrl)
            <div class="flex items-center gap-3">
                <code
                    class="flex-1 block bg-gray-100 dark:bg-white/5 text-sm px-4 py-3 rounded-lg text-gray-800 dark:text-gray-200 break-all font-mono border border-gray-200 dark:border-white/10"
                >{{ $generatedUrl }}</code>
                <button
                    type="button"
                    x-data="{ copied: false }"
                    x-on:click="
                        navigator.clipboard.writeText('{{ addslashes($generatedUrl) }}');
                        copied = true;
                        setTimeout(() => copied = false, 2000);
                    "
                    class="shrink-0 inline-flex items-center gap-1.5 px-4 py-2.5 bg-primary-600 hover:bg-primary-700 text-white text-sm font-semibold rounded-lg transition-colors"
                >
                    <span x-show="!copied">
                        <x-heroicon-o-clipboard class="w-4 h-4" />
                    </span>
                    <span x-show="copied">
                        <x-heroicon-o-check class="w-4 h-4" />
                    </span>
                    <span x-text="copied ? 'Copiado!' : 'Copiar URL'"></span>
                </button>
            </div>

            {{-- Desglose de parámetros --}}
            @php
                $parsed = parse_url($generatedUrl);
                parse_str($parsed['query'] ?? '', $params);
            @endphp
            @if ($params)
            <div class="mt-4 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                @foreach ($params as $key => $value)
                <div class="bg-gray-50 dark:bg-white/5 rounded-lg px-3 py-2 border border-gray-200 dark:border-white/10">
                    <p class="text-[10px] font-bold uppercase tracking-wider text-gray-400 dark:text-gray-500">{{ $key }}</p>
                    <p class="text-sm font-semibold text-gray-900 dark:text-white truncate">{{ $value }}</p>
                </div>
                @endforeach
            </div>
            @endif
        @else
            <div class="flex items-center gap-3 text-gray-400 dark:text-gray-500">
                <x-heroicon-o-link class="w-5 h-5" />
                <p class="text-sm">Completá los campos de arriba para generar la URL.</p>
            </div>
        @endif
    </x-filament::section>
</x-filament-panels::page>
