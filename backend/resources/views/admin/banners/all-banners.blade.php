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
                                    <h3 class="card-title">All Banners</h3>
                                </div>

                                <div class="card-body">

                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <table class="table table-bordered table-hover">

                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Heading</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Button</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse($banners as $banner)

                                                <tr>

                                                    <td>
                                                        <img
                                                            src="{{ asset('storage/' . $banner->image) }}"
                                                            width="120"
                                                            height="70"
                                                            style="object-fit: cover;"
                                                        >
                                                    </td>

                                                    <td>
                                                        {{ $banner->subtitle }}
                                                    </td>

                                                    <td>
                                                        {{ $banner->title }}
                                                    </td>

                                                    <td>
                                                        {{ $banner->description }}
                                                    </td>

                                                    <td>
                                                        {{ $banner->button_text }}
                                                    </td>

                                                    <td>
                                                        {{ $banner->position }}
                                                    </td>

                                                    <td>
                                                        @if($banner->status)
                                                            <span class="badge bg-success">
                                                                Active
                                                            </span>
                                                        @else
                                                            <span class="badge bg-danger">
                                                                Inactive
                                                            </span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('admin.banners.edit', $banner) }}"
                                                           class="btn btn-primary">
                                                            Edit
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <form action="{{ route('admin.banners.destroy', $banner) }}"
                                                              method="POST"
                                                              onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>

                                                </tr>

                                            @empty

                                                <tr>
                                                    <td colspan="9" class="text-center">
                                                        No banners found
                                                    </td>
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