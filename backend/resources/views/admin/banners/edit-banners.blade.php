@include('admin.header')
@include('admin.sidebar')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form
                action="{{ route('admin.banners.update', $banner) }}"
                class="banners main-footer"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                @method('PUT')

                <h2 class="text-center mb-5">Edit Banner</h2>

                <h4 class="mb-2">Current Image</h4>
                <div class="mb-4">
                    <img
                        src="{{ asset('storage/' . $banner->image) }}"
                        alt="{{ $banner->title ?: 'Banner' }}"
                        width="240"
                        height="140"
                        style="object-fit: cover;"
                    >
                </div>

                <h4 class="mb-2">Replace Image</h4>
                <input
                    type="file"
                    class="form-control mb-4"
                    name="image"
                    id="image"
                >

                <h4 class="mb-2">Heading</h4>
                <input
                    class="form-control mb-3"
                    type="text"
                    name="subtitle"
                    value="{{ old('subtitle', $banner->subtitle) }}"
                >

                <h4 class="mb-2">Title</h4>
                <input
                    class="form-control mb-3"
                    type="text"
                    name="title"
                    value="{{ old('title', $banner->title) }}"
                >

                <h4 class="mb-2">Description</h4>
                <textarea
                    class="form-control mb-3"
                    name="description"
                    rows="4"
                >{{ old('description', $banner->description) }}</textarea>

                <h4 class="mb-2">Button</h4>
                <input
                    class="form-control mb-3"
                    type="text"
                    name="button_text"
                    value="{{ old('button_text', $banner->button_text) }}"
                >

                <h4 class="mb-2">Button Link</h4>
                <input
                    class="form-control mb-3"
                    type="text"
                    name="button_link"
                    value="{{ old('button_link', $banner->button_link) }}"
                >

                <h4 class="mb-2">Position</h4>
                <select class="form-control mb-3" name="position">
                    <option value="left" @selected(old('position', $banner->position) === 'left')>
                        Left Banner
                    </option>
                    <option value="right" @selected(old('position', $banner->position) === 'right')>
                        Right Banner
                    </option>
                </select>

                <h4 class="mb-2">Status</h4>
                <select class="form-control mb-4" name="status">
                    <option value="1" @selected(old('status', $banner->status) == 1)>Active</option>
                    <option value="0" @selected(old('status', $banner->status) == 0)>Inactive</option>
                </select>

                <button type="submit" class="input-group-text mx-auto mb-4">
                    Update Banner
                </button>
            </form>
        </div>

        @include('admin.footer')
    </div>
</div>
