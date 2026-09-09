@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4"><section class="content"><div class="main-footer"><div class="card"><div class="card-header"><h3 class="card-title">All Blog Posts</h3></div><div class="card-body">
    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
    <table class="table table-bordered table-hover"><thead><tr><th>Image</th><th>Title</th><th>Category</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead><tbody>
    @forelse($posts as $post)<tr><td>@if($post->image)<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" width="120" height="70" style="object-fit:cover">@endif</td><td>{{ $post->title }}</td><td>{{ $post->category }}</td><td>{{ $post->status ? 'Active' : 'Inactive' }}</td><td><a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-primary">Edit</a></td><td><form action="{{ route('admin.blog.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post?');">@csrf @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button></form></td></tr>@empty<tr><td colspan="6" class="text-center">No blog posts found</td></tr>@endforelse
    </tbody></table>
</div></div></div></section></div>@include('admin.footer')</div></div>