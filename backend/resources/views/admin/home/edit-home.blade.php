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

            <form action="{{ route('admin.home.update', $homeContent) }}" class="home-content main-footer" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2 class="text-center mb-5">Edit Home Content</h2>

                <h4 class="mb-2">Current Image</h4>
                <div class="mb-4">
                    <img src="{{ str_starts_with($homeContent->image, 'http') ? $homeContent->image : asset('storage/' . $homeContent->image) }}"
                         alt="{{ $homeContent->title ?: 'Home content' }}"
                         width="240"
                         height="140"
                         style="object-fit: cover;">
                </div>

                <h4 class="mb-2">Replace Image</h4>
                <input type="file" class="form-control mb-4" name="image">

                <h4 class="mb-2">Small Title</h4>
                <input class="form-control mb-3" type="text" name="small_title" value="{{ old('small_title', $homeContent->small_title) }}">

                <h4 class="mb-2">Main Title</h4>
                <input class="form-control mb-3" type="text" name="title" value="{{ old('title', $homeContent->title) }}">

                <h4 class="mb-2">Description</h4>
                <textarea class="form-control mb-4" name="description" rows="4">{{ old('description', $homeContent->description) }}</textarea>

                <h4 class="mb-2">Primary Button</h4>
                <input class="form-control mb-3" type="text" name="primary_button_text" value="{{ old('primary_button_text', $homeContent->primary_button_text) }}">
                <input class="form-control mb-4" type="text" name="primary_button_link" value="{{ old('primary_button_link', $homeContent->primary_button_link) }}">

                <h4 class="mb-2">Secondary Button</h4>
                <input class="form-control mb-3" type="text" name="secondary_button_text" value="{{ old('secondary_button_text', $homeContent->secondary_button_text) }}">
                <input class="form-control mb-4" type="text" name="secondary_button_link" value="{{ old('secondary_button_link', $homeContent->secondary_button_link) }}">

                <h4 class="mb-3">Feature One</h4>
                <input class="form-control mb-3" type="text" name="feature_one_value" value="{{ old('feature_one_value', $homeContent->feature_one_value) }}">
                <input class="form-control mb-4" type="text" name="feature_one_label" value="{{ old('feature_one_label', $homeContent->feature_one_label) }}">

                <h4 class="mb-3">Feature Two</h4>
                <input class="form-control mb-3" type="text" name="feature_two_value" value="{{ old('feature_two_value', $homeContent->feature_two_value) }}">
                <input class="form-control mb-4" type="text" name="feature_two_label" value="{{ old('feature_two_label', $homeContent->feature_two_label) }}">

                <h4 class="mb-3">Feature Three</h4>
                <input class="form-control mb-3" type="text" name="feature_three_value" value="{{ old('feature_three_value', $homeContent->feature_three_value) }}">
                <input class="form-control mb-4" type="text" name="feature_three_label" value="{{ old('feature_three_label', $homeContent->feature_three_label) }}">

                <h4 class="mb-2">Image Sale Badge</h4>
                <input class="form-control mb-3" type="text" name="sale_prefix" value="{{ old('sale_prefix', $homeContent->sale_prefix) }}">
                <input class="form-control mb-3" type="text" name="sale_percent" value="{{ old('sale_percent', $homeContent->sale_percent) }}">
                <input class="form-control mb-4" type="text" name="sale_suffix" value="{{ old('sale_suffix', $homeContent->sale_suffix) }}">

                <h4 class="mb-2">Image Collection Label</h4>
                <input class="form-control mb-3" type="text" name="collection_label" value="{{ old('collection_label', $homeContent->collection_label) }}">
                <input class="form-control mb-4" type="text" name="collection_title" value="{{ old('collection_title', $homeContent->collection_title) }}">

                <h4 class="mb-2">Status</h4>
                <select class="form-control mb-4" name="status">
                    <option value="1" @selected(old('status', $homeContent->status) == 1)>Active</option>
                    <option value="0" @selected(old('status', $homeContent->status) == 0)>Inactive</option>
                </select>

                <button type="submit" class="input-group-text mx-auto mb-4">Update Home Content</button>
            </form>
        </div>

        @include('admin.footer')
    </div>
</div>
