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

            <form
                action="{{ route('admin.home.store') }}"
                class="home-content main-footer"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf
                <h2 class="text-center mb-5">Add Home Content</h2>

                <h4 class="mb-2">Main Image</h4>
                <input type="file" class="form-control mb-4" name="image" required>

                <h4 class="mb-2">Small Title</h4>
                <input class="form-control mb-3" type="text" name="small_title" placeholder="NEW SEASON 2026">

                <h4 class="mb-2">Main Title</h4>
                <input class="form-control mb-3" type="text" name="title" placeholder="Define Your Style.">

                <h4 class="mb-2">Description</h4>
                <textarea class="form-control mb-4" name="description" rows="4" placeholder="Enter home banner description"></textarea>

                <h4 class="mb-2">Primary Button</h4>
                <input class="form-control mb-3" type="text" name="primary_button_text" placeholder="SHOP WOMEN">
                <input class="form-control mb-4" type="text" name="primary_button_link" placeholder="/shop?category=women">

                <h4 class="mb-2">Secondary Button</h4>
                <input class="form-control mb-3" type="text" name="secondary_button_text" placeholder="SHOP MEN">
                <input class="form-control mb-4" type="text" name="secondary_button_link" placeholder="/shop?category=men">

                <h4 class="mb-3">Feature One</h4>
                <input class="form-control mb-3" type="text" name="feature_one_value" placeholder="100+">
                <input class="form-control mb-4" type="text" name="feature_one_label" placeholder="New Styles">

                <h4 class="mb-3">Feature Two</h4>
                <input class="form-control mb-3" type="text" name="feature_two_value" placeholder="50%">
                <input class="form-control mb-4" type="text" name="feature_two_label" placeholder="Season Sale">

                <h4 class="mb-3">Feature Three</h4>
                <input class="form-control mb-3" type="text" name="feature_three_value" placeholder="Free">
                <input class="form-control mb-4" type="text" name="feature_three_label" placeholder="Shipping">

                <h4 class="mb-2">Image Sale Badge</h4>
                <input class="form-control mb-3" type="text" name="sale_prefix" placeholder="UP TO">
                <input class="form-control mb-3" type="text" name="sale_percent" placeholder="50%">
                <input class="form-control mb-4" type="text" name="sale_suffix" placeholder="OFF">

                <h4 class="mb-2">Image Collection Label</h4>
                <input class="form-control mb-3" type="text" name="collection_label" placeholder="THE LATEST">
                <input class="form-control mb-4" type="text" name="collection_title" placeholder="COLLECTION 01233">

                <button type="submit" class="input-group-text mx-auto mb-4">
                    Save Home Content
                </button>
            </form>
        </div>

        @include('admin.footer')
    </div>
</div>
