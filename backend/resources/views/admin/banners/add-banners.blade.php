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
                action="http://127.0.0.1:8000/banners"
                class="banners main-footer"
                method="POST"
                enctype="multipart/form-data"
            >
              @csrf

                <h2 class="text-center mb-5">Add Banners</h2>


                <!-- Image -->
                <h4 class="mb-2">Image</h4>

                <div class="input-group mb-4">
                    <div class="custom-file">

                        <label class="custom-file-label" for="image">
                            Choose Image
                        </label>

                        <input
                            type="file"
                            class="custom-file-input"
                            name="image"
                            id="image"
                            required
                        >

                    </div>
                </div>


                <!-- Heading / Sale Badge -->
                <h4 class="mb-2">Heading</h4>

                <input
                    class="form-control mb-3"
                    type="text"
                    placeholder="Sale Up to 50% Off"
                    name="subtitle"
                >


                <!-- Title -->
                <h4 class="mb-2">Title</h4>

                <input
                    class="form-control mb-3"
                    type="text"
                    placeholder="Summer 2024"
                    name="title"
                >


                <!-- Description -->
                <h4 class="mb-2">Description</h4>

                <textarea
                    class="form-control mb-3"
                    placeholder="Enter banner description"
                    name="description"
                    rows="4"
                ></textarea>


                <!-- Button -->
                <h4 class="mb-2">Button</h4>

                <input
                    class="form-control mb-3"
                    type="text"
                    placeholder="Shop Now"
                    name="button_text"
                >


                <!-- Button Link -->
                <h4 class="mb-2">Button Link</h4>

                <input
                    class="form-control mb-3"
                    type="text"
                    placeholder="/shop"
                    name="button_link"
                >


                <!-- Position -->
                <h4 class="mb-2">Position</h4>

                <select
                    class="form-control mb-3"
                    name="position"
                >
                    <option value="left">Left Banner</option>
                    <option value="right">Right Banner</option>
                </select>


                <!-- Upload Button -->
                <div class="input-group-append">

                    <button
                        type="submit"
                        class="input-group-text mx-auto mb-4"
                        name="upload_btn"
                        id="upload_btn"
                    >
                        Upload
                    </button>

                </div>

            </form>

        </div>

        @include('admin.footer')
    </div>
</div>