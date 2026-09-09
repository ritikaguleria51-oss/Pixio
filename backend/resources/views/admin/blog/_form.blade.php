@php
    $value = fn ($field) => old($field, $post?->{$field});
@endphp

@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>@endif
<form action="{{ $formAction }}" method="POST" enctype="multipart/form-data" class="main-footer">
    @csrf @if($formMethod !== 'POST') @method($formMethod) @endif
    <h2 class="text-center mb-5">{{ $formTitle }}</h2>
    <h4>Blog Page</h4>
    <input class="form-control mb-3" name="eyebrow" placeholder="The Pixio journal" value="{{ $value('eyebrow') }}">
    <input class="form-control mb-3" name="page_title" placeholder="Stories, style and everyday inspiration." value="{{ $value('page_title') }}">
    <textarea class="form-control mb-4" name="page_intro" rows="3" placeholder="Page introduction">{{ $value('page_intro') }}</textarea>
    <h4>Post</h4>
    <input class="form-control mb-3" name="title" placeholder="Post title" value="{{ $value('title') }}" required>
    <input class="form-control mb-3" name="category" placeholder="Fashion" value="{{ $value('category') }}" required>
    <label class="form-label">Post Image {{ $post?->image ? '(optional)' : '' }}</label>
    <input type="file" class="form-control mb-3" name="image" accept="image/*">
    @if($post?->image)<img src="{{ asset('storage/' . $post->image) }}" alt="Post" width="180" height="120" style="object-fit:cover" class="mb-4">@endif
    <div class="row"><div class="col-md-6"><input class="form-control mb-4" name="link_text" placeholder="Read article" value="{{ $value('link_text') }}"></div><div class="col-md-6"><input class="form-control mb-4" name="link_url" placeholder="/blog" value="{{ $value('link_url') }}"></div></div>
    <label class="form-check mb-4"><input class="form-check-input" type="checkbox" name="status" value="1" {{ old('status', $post?->status ?? true) ? 'checked' : '' }}> Active</label>
    <button type="submit" class="btn btn-primary">{{ $post ? 'Update Blog' : 'Save Blog' }}</button>
</form>