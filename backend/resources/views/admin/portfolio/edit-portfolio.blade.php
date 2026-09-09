@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.portfolio._form', ['formAction' => route('admin.portfolio.update', $project), 'formMethod' => 'PUT', 'formTitle' => 'Edit Portfolio Project'])</div>@include('admin.footer')</div></div>