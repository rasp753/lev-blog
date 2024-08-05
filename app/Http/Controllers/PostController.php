<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Post $post): View
    {
        return view('posts/index')
            ->with(
                'posts',
                $post->getPaginateByLimit(10)
            );
    }

    public function show(Post $post): View
    {
        return view('posts/show')->with('post', $post);
    }

    public function create(Category $category): View
    {
        return view('posts/create')->with('categories', $category->all());
    }

    public function store(PostRequest $request, Post $post): RedirectResponse
    {
        $validated = $request->validated();
        $post->fill($validated['post'])->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post): View
    {
        return view('posts/edit')->with('post', $post);
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $validated = $request->validated();
        $post->fill($validated['post'])->save();
        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect('/posts');
    }
}
