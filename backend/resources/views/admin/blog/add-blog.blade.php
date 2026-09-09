@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.blog._form', ['post' => null, 'formAction' => route('admin.blog.store'), 'formMethod' => 'POST', 'formTitle' => 'Add Blog Post'])</div>@include('admin.footer')</div></div>