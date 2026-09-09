@include('admin.header')
@include('admin.sidebar')
<div id="layoutSidenav"><div id="layoutSidenav_content"><div class="container-fluid px-4"><section class="content"><div class="main-footer"><div class="card"><div class="card-header"><h3 class="card-title">All Pricing Plans</h3></div><div class="card-body">
    @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
    <div class="table-responsive"><table class="table table-bordered table-hover align-middle"><thead><tr><th>Plan</th><th>Price</th><th>Popular</th><th>Status</th><th>Edit</th><th>Delete</th></tr></thead><tbody>
    @forelse($plans as $plan)
        <tr>
            <td><strong>{{ $plan->name }}</strong><br><small>{{ $plan->description }}</small></td>
            <td>{{ $plan->currency }}{{ $plan->price }}{{ $plan->period_label }}</td>
            <td>{{ $plan->popular ? 'Yes' : 'No' }}</td>
            <td>{{ $plan->status ? 'Active' : 'Inactive' }}</td>
            <td><a href="{{ route('admin.pricing.edit', $plan) }}" class="btn btn-primary">Edit</a></td>
            <td><form action="{{ route('admin.pricing.destroy', $plan) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this pricing plan?');">@csrf @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button></form></td>
        </tr>
        <tr class="table-light">
            <td colspan="6">
                <div class="row g-3">
                    <div class="col-lg-4"><strong>Hero</strong><p class="mb-1">{{ $plan->hero_kicker }} | {{ $plan->hero_title }}</p><small>{{ $plan->hero_description }}</small></div>
                    <div class="col-lg-4"><strong>Intro</strong><p class="mb-1">{{ $plan->intro_kicker }} | {{ $plan->intro_title }}</p><small>{{ $plan->intro_description }}</small></div>
                    <div class="col-lg-4"><strong>Billing</strong><p class="mb-1">{{ $plan->monthly_label }} / {{ $plan->yearly_label }}</p><small>{{ $plan->yearly_badge }}</small></div>
                    <div class="col-lg-6"><strong>{{ $plan->feature_heading }}</strong><ul class="mb-0">@foreach(range(1, 5) as $number)<li class="{{ $plan->{"feature_{$number}_included"} ? 'text-success' : 'text-muted' }}">{{ $plan->{"feature_{$number}_name"} ?: 'Feature '.$number }} - {{ $plan->{"feature_{$number}_included"} ? 'Included' : 'Not included' }}</li>@endforeach</ul></div>
                    <div class="col-lg-3"><strong>Plan CTA</strong><p class="mb-1">{{ $plan->button_text }}</p><small>{{ $plan->button_url }}</small></div>
                    <div class="col-lg-3"><strong>Bottom Note</strong><p class="mb-1">{{ $plan->note_title }}</p><small>{{ $plan->note_description }}<br>{{ $plan->note_link_text }}: {{ $plan->note_link_url }}</small></div>
                </div>
            </td>
        </tr>
    @empty
        <tr><td colspan="6" class="text-center">No pricing plans found</td></tr>
    @endforelse
    </tbody></table>
    </div>
</div></div></div></section></div>@include('admin.footer')</div></div>