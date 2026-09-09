@include('admin.header')
@include('admin.sidebar')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.features.update', $feature) }}" class="features main-footer" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2 class="text-center mb-5">Edit Feature</h2>

                <h4 class="mb-2">Current Image</h4>
                <div class="mb-4">
                    <img src="{{ str_starts_with($feature->image, 'http') ? $feature->image : asset('storage/' . $feature->image) }}"
                         alt="{{ $feature->name }}"
                         width="180"
                         height="140"
                         style="object-fit: cover; border-radius: 50%;">
                </div>

                <h4 class="mb-2">Replace Image</h4>
                <input type="file" class="form-control mb-4" name="image">

                <h4 class="mb-2">Feature Name</h4>
                <input class="form-control mb-3" type="text" name="name" value="{{ old('name', $feature->name) }}" required>

                <h4 class="mb-2">Feature Description</h4>
                <textarea class="form-control mb-4" name="description" rows="3">{{ old('description', $feature->description) }}</textarea>

                <h4 class="mb-2">Section Small Title</h4>
                <input class="form-control mb-3" type="text" name="section_small_title" value="{{ old('section_small_title', $feature->section_small_title) }}">

                <h4 class="mb-2">Section Title</h4>
                <input class="form-control mb-3" type="text" name="section_title" value="{{ old('section_title', $feature->section_title) }}">

                <h4 class="mb-2">Section Description</h4>
                <textarea class="form-control mb-3" name="section_description" rows="3">{{ old('section_description', $feature->section_description) }}</textarea>

                <h4 class="mb-2">Explore Text</h4>
                <input class="form-control mb-4" type="text" name="explore_text" value="{{ old('explore_text', $feature->explore_text) }}">

                <h4 class="mb-2">Status</h4>
                <select class="form-control mb-4" name="status">
                    <option value="1" @selected(old('status', $feature->status) == 1)>Active</option>
                    <option value="0" @selected(old('status', $feature->status) == 0)>Inactive</option>
                </select>

                <button type="submit" class="input-group-text mx-auto mb-4">Update Feature</button>
            </form>
        </div>

        @include('admin.footer')
    </div>
</div>
