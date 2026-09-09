@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">
@if($errors->any())<div class="alert alert-danger">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>@endif
<form action="{{ route('admin.featured-offers.store') }}" class="featured-offers main-footer" method="POST" enctype="multipart/form-data">@csrf
<h2 class="text-center mb-5">Add Featured Offer</h2>
<h4>Offer Image</h4><input type="file" class="form-control mb-4" name="image" required>
<h4>Section Subtitle</h4><input class="form-control mb-3" name="section_subtitle" placeholder="Handpicked">
<h4>Section Title</h4><input class="form-control mb-3" name="section_title" placeholder="Featured offer for you">
<h4>See All</h4><input class="form-control mb-3" name="see_all_text" placeholder="See All"><input class="form-control mb-4" name="see_all_link" placeholder="/shop">
<h4>Offer Tag</h4><input class="form-control mb-3" name="tag" placeholder="20% Off" required>
<h4>Offer Title</h4><input class="form-control mb-3" name="title" placeholder="Luxury Bras" required>
<h4>Background Style</h4><select class="form-control mb-4" name="background_class"><option value="offer-pink">Pink</option><option value="offer-blue">Blue</option><option value="offer-light-pink">Light Pink</option><option value="offer-gray">Gray</option></select>
<h4>Button</h4><input class="form-control mb-3" name="button_text" placeholder="Collect Now"><input class="form-control mb-4" name="button_link" placeholder="/shop">
<button type="submit" class="input-group-text mx-auto mb-4">Save Featured Offer</button>
</form></div>@include('admin.footer')</div></div>
