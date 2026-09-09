@include('admin.header')
@include('admin.sidebar')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <section class="content">
                <div class="main-footer">
                    <div class="card">
                        <div class="card-header"><h3 class="card-title">All About Me Content</h3></div>
                        <div class="card-body">
                            @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
                            <table class="table table-bordered table-hover">
                                <thead><tr><th>Hero</th><th>Title</th><th>Intro</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead>
                                <tbody>
                                    @forelse($aboutContents as $aboutContent)
                                        <tr>
                                            <td>@if($aboutContent->hero_image)<img src="{{ asset('storage/' . $aboutContent->hero_image) }}" alt="Hero" width="120" height="70" style="object-fit:cover">@endif</td>
                                            <td>{{ $aboutContent->hero_title }}</td>
                                            <td>{{ $aboutContent->intro_title }}</td>
                                            <td>{{ $aboutContent->status ? 'Active' : 'Inactive' }}</td>
                                            <td><a href="{{ route('admin.about-me.edit', $aboutContent) }}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="{{ route('admin.about-me.destroy', $aboutContent) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this About Me content?');">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="6" class="text-center">No About Me content found</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('admin.footer')
    </div>
</div>
