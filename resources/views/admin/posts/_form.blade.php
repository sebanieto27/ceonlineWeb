<div class="space-y-6">
    <!-- Título y Estado -->
    <div class="grid md:grid-cols-3 gap-6">
        <div class="md:col-span-2">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Título del Artículo *</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required
                   class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                   placeholder="Ej: 5 beneficios de digitalizar tu consorcio">
            @error('title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
        </div>
        
        <div class="flex items-center mt-6">
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post->is_published) ? 'checked' : '' }}
                       class="rounded border-gray-300 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 w-5 h-5">
                <span class="text-sm font-medium text-gray-700">Publicar artículo (visible)</span>
            </label>
        </div>
    </div>

    <!-- Imagen -->
    <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">URL de la Imagen Principal (Opcional)</label>
        <input type="url" id="image" name="image" value="{{ old('image', $post->image) }}"
               class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
               placeholder="https://ejemplo.com/imagen.jpg">
        @error('image')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <!-- Extracto -->
    <div>
        <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Extracto (Bajada) *</label>
        <textarea id="excerpt" name="excerpt" rows="2" required
                  class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                  placeholder="Un resumen corto y atractivo para atrapar al lector...">{{ old('excerpt', $post->excerpt) }}</textarea>
        @error('excerpt')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <!-- Contenido Principal -->
    <div>
        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenido HTML / Texto *</label>
        <textarea id="content" name="content" rows="12" required
                  class="w-full font-mono text-sm rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                  placeholder="<p>Escribí acá el contenido de tu artículo usando HTML...</p>">{{ old('content', $post->content) }}</textarea>
        @error('content')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
        <p class="mt-1 text-xs text-gray-500">Formato esperado: HTML. Podés insertar tus lead magnets (formularios, banners, links) directamente en el contenido.</p>
    </div>

    <hr class="border-gray-200">

    <!-- Optimización SEO / Marketing -->
    <div>
        <h3 class="text-lg font-medium text-gray-900 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
            Optimización SEO & Marketing
        </h3>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label for="seo_title" class="block text-sm font-medium text-gray-700 mb-1">Meta Título (SEO)</label>
                <input type="text" id="seo_title" name="seo_title" value="{{ old('seo_title', $post->seo_title) }}"
                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                       placeholder="Máximo 60 caracteres recomendado">
                @error('seo_title')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>
            
            <div>
                <label for="seo_description" class="block text-sm font-medium text-gray-700 mb-1">Meta Descripción (SEO)</label>
                <textarea id="seo_description" name="seo_description" rows="2"
                          class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                          placeholder="Máximo 155 caracteres recomendado">{{ old('seo_description', $post->seo_description) }}</textarea>
                @error('seo_description')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
            </div>
        </div>
    </div>
</div>
