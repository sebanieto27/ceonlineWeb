<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            SEO — Estado por página
        </x-slot>
        <x-slot name="description">
            Cobertura de meta tags por página. Verde = completo, amarillo = incompleto, rojo = sin configurar.
        </x-slot>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-white/10 text-left">
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400">Página</th>
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400">Estado</th>
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400 text-center">Title</th>
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400 text-center">Long.</th>
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400 text-center">Desc.</th>
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400 text-center">Long.</th>
                        <th class="py-2 pr-4 font-semibold text-gray-600 dark:text-gray-400 text-center">OG Image</th>
                        <th class="py-2 font-semibold text-gray-600 dark:text-gray-400"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-white/5">
                    @foreach ($rows as $row)
                    <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                        <td class="py-2.5 pr-4 font-medium text-gray-900 dark:text-white">{{ $row['label'] }}</td>
                        <td class="py-2.5 pr-4">
                            @if ($row['status'] === 'ok')
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">✅ Completo</span>
                            @elseif ($row['status'] === 'partial')
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">⚠️ Incompleto</span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400">❌ Sin meta</span>
                            @endif
                        </td>
                        <td class="py-2.5 pr-4 text-center">
                            @if ($row['has_title'])
                                <span class="text-emerald-500">✓</span>
                            @else
                                <span class="text-red-400">✗</span>
                            @endif
                        </td>
                        <td class="py-2.5 pr-4 text-center text-xs">
                            @if ($row['title_len'] > 0)
                                <span class="{{ $row['title_len'] > 70 ? 'text-red-500' : ($row['title_len'] < 30 ? 'text-amber-500' : 'text-emerald-500') }}">
                                    {{ $row['title_len'] }}c
                                </span>
                            @else
                                <span class="text-gray-400">—</span>
                            @endif
                        </td>
                        <td class="py-2.5 pr-4 text-center">
                            @if ($row['has_desc'])
                                <span class="text-emerald-500">✓</span>
                            @else
                                <span class="text-red-400">✗</span>
                            @endif
                        </td>
                        <td class="py-2.5 pr-4 text-center text-xs">
                            @if ($row['desc_len'] > 0)
                                <span class="{{ $row['desc_len'] > 160 ? 'text-red-500' : ($row['desc_len'] < 80 ? 'text-amber-500' : 'text-emerald-500') }}">
                                    {{ $row['desc_len'] }}c
                                </span>
                            @else
                                <span class="text-gray-400">—</span>
                            @endif
                        </td>
                        <td class="py-2.5 pr-4 text-center">
                            @if ($row['has_og'])
                                <span class="text-emerald-500">✓</span>
                            @else
                                <span class="text-red-400">✗</span>
                            @endif
                        </td>
                        <td class="py-2.5 text-right">
                            @if ($row['meta_id'])
                                <a href="{{ route('filament.admin.resources.page-metas.edit', ['record' => $row['meta_id']]) }}"
                                   class="text-xs text-primary-600 dark:text-primary-400 hover:underline font-medium">
                                    Editar
                                </a>
                            @else
                                <a href="{{ route('filament.admin.resources.page-metas.create') }}"
                                   class="text-xs text-gray-500 hover:underline">
                                    + Crear
                                </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
