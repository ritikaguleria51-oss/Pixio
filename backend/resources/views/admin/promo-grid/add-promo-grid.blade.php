@include('admin.header')
@include('admin.sidebar')

<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">
@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>@endif
<form action="{{ route('admin.promo-grid.store') }}" class="promo-grid main-footer" method="POST" enctype="multipart/form-data">
@csrf
<h2 class="text-center mb-5">Add Promo Grid</h2>
<h4>Large Banner Image</h4><input type="file" class="form-control mb-3" name="large_image" required>
<input class="form-control mb-3" name="large_label" placeholder="Woman collection"><input class="form-control mb-4" name="large_link" placeholder="/shop">
<h4>Section Content</h4><input class="form-control mb-3" name="heading" placeholder="Set your wardrobe with our amazing selection!"><textarea class="form-control mb-3" name="description" rows="3" placeholder="Section description"></textarea><input class="form-control mb-4" name="heading_link" placeholder="/shop">
<h4>Small Card One</h4><input type="file" class="form-control mb-3" name="small_one_image" required><input class="form-control mb-3" name="small_one_label" placeholder="Child Fashion"><input class="form-control mb-4" name="small_one_link" placeholder="/shop">
<h4>Small Card Two</h4><input type="file" class="form-control mb-3" name="small_two_image" required><input class="form-control mb-3" name="small_two_label" placeholder="Man collection"><input class="form-control mb-4" name="small_two_link" placeholder="/shop">
<h4>Sale Badge</h4><input class="form-control mb-3" name="sale_percent" placeholder="50%"><input class="form-control mb-4" name="sale_text" placeholder="Sale">
<button type="submit" class="input-group-text mx-auto mb-4">Save Promo Grid</button>
</form></div>@include('admin.footer')</div></div>
