@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.pricing._form', ['formAction' => route('admin.pricing.update', $plan), 'formMethod' => 'PUT', 'formTitle' => 'Edit Pricing Plan'])</div>@include('admin.footer')</div></div>