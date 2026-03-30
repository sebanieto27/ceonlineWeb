@extends('admin.layouts.app')

@section('header', 'Crear Nuevo Artículo')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <a href="{{ route('admin.posts.index') }}" class="text-gray-500 hover:text-gray-900 flex items-center gap-2 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
        Volver al listado
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200">
    <form action="{{ route('admin.posts.store') }}" method="POST" class="p-6">
        @csrf
        @include('admin.posts._form', ['post' => new \App\Models\Post])
        
        <div class="mt-8 pt-6 border-t border-gray-200 flex items-center justify-end gap-3">
            <a href="{{ route('admin.posts.index') }}" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                Cancelar
            </a>
            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-dark font-medium transition-colors shadow-sm">
                Guardar Artículo
            </button>
        </div>
    </form>
</div>
@endsection
