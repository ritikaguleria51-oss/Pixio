@include('admin.header')
@include('admin.sidebar')

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <section class="content">
                <div class="main-footer">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All Home Content</h3>
                                </div>

                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Small Title</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Buttons</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($homeContents as $homeContent)
                                                <tr>
                                                    <td>
                                                        <img
                                                            src="{{ str_starts_with($homeContent->image, 'http') ? $homeContent->image : asset('storage/' . $homeContent->image) }}"
                                                            alt="{{ $homeContent->title ?: 'Home content' }}"
                                                            width="120"
                                                            height="70"
                                                            style="object-fit: cover;"
                                                        >
                                                    </td>
                                                    <td>{{ $homeContent->small_title }}</td>
                                                    <td>{{ $homeContent->title }}</td>
                                                    <td>{{ $homeContent->description }}</td>
                                                    <td>
                                                        {{ $homeContent->primary_button_text }}<br>
                                                        {{ $homeContent->secondary_button_text }}
                                                    </td>
                                                    <td>
                                                        @if($homeContent->status)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.home.edit', $homeContent) }}" class="btn btn-primary">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.home.destroy', $homeContent) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Home content?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center">No home content found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.footer')
    </div>
</div>
