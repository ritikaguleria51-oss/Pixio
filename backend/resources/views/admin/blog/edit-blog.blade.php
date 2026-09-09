@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4">@include('admin.blog._form', ['formAction' => route('admin.blog.update', $post), 'formMethod' => 'PUT', 'formTitle' => 'Edit Blog Post'])</div>@include('admin.footer')</div></div>