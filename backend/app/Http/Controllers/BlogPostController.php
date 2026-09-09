<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{

public function apiShow($id)
{
    $post = BlogPost::where('status', true)->findOrFail($id);

    return response()->json($post);
}


    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.all-blog', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.add-blog');
    }

    public function apiIndex()
    {
        $posts = BlogPost::where('status', true)->latest()->get();
        $first = $posts->first();

        return response()->json([
            'eyebrow' => $first?->eyebrow,
            'page_title' => $first?->page_title,
            'page_intro' => $first?->page_intro,
            'posts' => $posts->values(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validatePost($request, true);
        if ($request->hasFile('image')) $validated['image'] = $request->file('image')->store('blog', 'public');
        $validated['status'] = $request->boolean('status', true);
        BlogPost::create($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post added successfully!');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit-blog', ['post' => $blog]);
    }

    public function update(Request $request, BlogPost $blog)
    {
        $validated = $this->validatePost($request, false);
        if ($request->hasFile('image')) {
            if ($blog->image) Storage::disk('public')->delete($blog->image);
            $validated['image'] = $request->file('image')->store('blog', 'public');
        }
        $validated['status'] = $request->boolean('status');
        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully!');
    }

    public function destroy(BlogPost $blog)
    {
        if ($blog->image) Storage::disk('public')->delete($blog->image);
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully!');
    }

    private function validatePost(Request $request, bool $imageRequired): array
    {
        return $request->validate([
            'eyebrow' => 'nullable|string|max:255',
            'page_title' => 'nullable|string|max:255',
            'page_intro' => 'nullable|string',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => ($imageRequired ? 'nullable|' : 'nullable|') . 'file|max:5120',
            'link_text' => 'nullable|string|max:255',
            'link_url' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}