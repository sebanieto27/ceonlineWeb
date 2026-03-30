<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|url|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();
        $validated['is_published'] = $request->has('is_published');
        if ($validated['is_published']) {
            $validated['published_at'] = now();
        }

        Post::create($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Nota creada correctamente.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|url|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $validated['is_published'] = $request->has('is_published');
        
        if ($validated['is_published'] && !$post->is_published) {
            $validated['published_at'] = now();
        } elseif (!$validated['is_published']) {
            $validated['published_at'] = null;
        }

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', 'Nota actualizada correctamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Nota eliminada correctamente.');
    }
}
