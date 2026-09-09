@include('admin.header')
@include('admin.sidebar')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            @include('admin.about-me._form', [
                'formAction' => route('admin.about-me.store'),
                'formMethod' => 'POST',
                'formTitle' => 'Add About Me Content',
            ])
        </div>
        @include('admin.footer')
    </div>
</div>
