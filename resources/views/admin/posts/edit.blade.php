@extends('admin.layouts.app')

@section('header', 'Editar: ' . $post->title)

@section('content')
<div class="mb-6 flex items-center justify-between">
    <a href="{{ route('admin.posts.index') }}" class="text-gray-500 hover:text-gray-900 flex items-center gap-2 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Volver al listado
    </a>
    <a href="/blog/{{ $post->slug }}" target="_blank" class="text-primary hover:text-dark flex items-center gap-2 transition-colors font-medium text-sm">
        Ver en sitio
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200">
    <form action="{{ route('admin.posts.update', $post) }}" method="POST" class="p-6">
        @csrf
        @method('PUT')
        @include('admin.posts._form', ['post' => $post])
        
        <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-end gap-3">
            <a href="{{ route('admin.posts.index') }}" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                Cancelar
            </a>
            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-dark font-medium transition-colors shadow-sm">
                Actualizar Artículo
            </button>
        </div>
    </form>
</div>
@endsection
