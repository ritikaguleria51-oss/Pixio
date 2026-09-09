@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.about-us._form', ['aboutUsContent' => $aboutUsContent, 'formAction' => route('admin.about-us.update', $aboutUsContent), 'formMethod' => 'PUT', 'formTitle' => 'Edit About Us Content'])</div>@include('admin.footer')</div></div>