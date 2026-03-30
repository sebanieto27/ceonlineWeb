@extends('admin.layouts.app')

@section('header', 'Artículos del Blog')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <p class="text-gray-500">Gestioná los artículos y lead magnets del blog optimizados para SEO.</p>
    <a href="{{ route('admin.posts.create') }}" class="bg-primary hover:bg-dark text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors shadow-sm inline-flex items-center gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Nuevo Artículo
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <table class="w-full text-left text-sm text-gray-600">
        <thead class="bg-gray-50 text-gray-700 border-b border-gray-200 text-xs uppercase font-semibold">
            <tr>
                <th class="px-6 py-4">Título</th>
                <th class="px-6 py-4">Estado</th>
                <th class="px-6 py-4">Fecha</th>
                <th class="px-6 py-4 text-right">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($posts as $post)
            <tr class="hover:bg-gray-50 transition-colors">
                <td class="px-6 py-4">
                    <div class="font-medium text-gray-900">{{ $post->title }}</div>
                    <div class="text-xs text-gray-500 mt-0.5 mt-1">{{ str($post->slug)->limit(40) }}</div>
                </td>
                <td class="px-6 py-4">
                    @if($post->is_published)
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Publicado
                        </span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Borrador
                        </span>
                    @endif
                </td>
                <td class="px-6 py-4 text-xs">
                    {{ $post->created_at->format('d/m/Y') }}
                </td>
                <td class="px-6 py-4 text-right space-x-2">
                    <a href="{{ route('admin.posts.edit', $post) }}" class="text-primary hover:text-dark font-medium transition-colors inline-flex items-center gap-1">
                        Editar
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Seguro que querés eliminar este artículo?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 font-medium transition-colors">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                    <div class="flex flex-col items-center">
                        <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        <p>No hay artículos creados todavía.</p>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    @if($posts->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $posts->links() }}
    </div>
    @endif
</div>
@endsection
