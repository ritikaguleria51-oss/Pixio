@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.about-us._form', ['formAction' => route('admin.about-us.store'), 'formMethod' => 'POST', 'formTitle' => 'Add About Us Content'])</div>@include('admin.footer')</div></div>