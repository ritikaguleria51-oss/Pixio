@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.shop._form', ['product' => null, 'formAction' => route('admin.shop.store'), 'formMethod' => 'POST', 'formTitle' => 'Add Shop Product'])</div>@include('admin.footer')</div></div>