@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.pricing._form', ['plan' => null, 'formAction' => route('admin.pricing.store'), 'formMethod' => 'POST', 'formTitle' => 'Add Pricing Plan'])</div>@include('admin.footer')</div></div>