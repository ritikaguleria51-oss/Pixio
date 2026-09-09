@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.shop._form', ['formAction' => route('admin.shop.update', $product), 'formMethod' => 'PUT', 'formTitle' => 'Edit Shop Product'])</div>@include('admin.footer')</div></div>