@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.portfolio._form', ['project' => null, 'formAction' => route('admin.portfolio.store'), 'formMethod' => 'POST', 'formTitle' => 'Add Portfolio Project'])</div>@include('admin.footer')</div></div>