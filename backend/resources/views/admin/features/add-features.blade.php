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

            <form action="{{ route('admin.features.store') }}" class="features main-footer" method="POST" enctype="multipart/form-data">
                @csrf
                <h2 class="text-center mb-5">Add Feature</h2>

                <h4 class="mb-2">Feature Image</h4>
                <input type="file" class="form-control mb-4" name="image" required>

                <h4 class="mb-2">Feature Name</h4>
                <input class="form-control mb-3" type="text" name="name" placeholder="Shirts" required>

                <h4 class="mb-2">Feature Description</h4>
                <textarea class="form-control mb-4" name="description" rows="3" placeholder="Enter feature description"></textarea>

                <h4 class="mb-2">Section Small Title</h4>
                <input class="form-control mb-3" type="text" name="section_small_title" placeholder="TRENDING NOW">

                <h4 class="mb-2">Section Title</h4>
                <input class="form-control mb-3" type="text" name="section_title" placeholder="Featured Categories">

                <h4 class="mb-2">Section Description</h4>
                <textarea class="form-control mb-3" name="section_description" rows="3" placeholder="Discover the most trending products in Pixio."></textarea>

                <h4 class="mb-2">Explore Text</h4>
                <input class="form-control mb-4" type="text" name="explore_text" placeholder="EXPLORE • MORE • COLLECTION •">

                <button type="submit" class="input-group-text mx-auto mb-4">Save Feature</button>
            </form>
        </div>

        @include('admin.footer')
    </div>
</div>
