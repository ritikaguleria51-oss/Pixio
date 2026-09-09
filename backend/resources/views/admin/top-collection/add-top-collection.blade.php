@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">
@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>@endif
<form action="{{ route('admin.top-collection.store') }}" class="top-collection main-footer" method="POST" enctype="multipart/form-data">@csrf
<h2 class="text-center mb-5">Add Top Collection</h2>
<h4>Top Left Image</h4><input type="file" class="form-control mb-4" name="top_left_image" required>
<h4>Top Right Image</h4><input type="file" class="form-control mb-4" name="top_right_image" required>
<h4>Bottom Left Image</h4><input type="file" class="form-control mb-4" name="bottom_left_image" required>
<h4>Bottom Right Image</h4><input type="file" class="form-control mb-4" name="bottom_right_image" required>
<h4>Badge</h4><input class="form-control mb-3" name="badge" placeholder="Exclusive Showcase">
<h4>Heading</h4><input class="form-control mb-3" name="heading" placeholder="Upgrade your style with our top-notch collection.">
<h4>Button</h4><input class="form-control mb-3" name="button_text" placeholder="All Collections"><input class="form-control mb-4" name="button_link" placeholder="/shop">
<button type="submit" class="input-group-text mx-auto mb-4">Save Top Collection</button>
</form></div>@include('admin.footer')</div></div>
