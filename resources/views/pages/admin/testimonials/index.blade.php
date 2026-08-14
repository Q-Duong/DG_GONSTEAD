@extends('layouts.default_auth')
@section('admin_content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold m-0">@lang('admin_testimonials.index.title')</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> @lang('admin_testimonials.index.add_new')
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th>@lang('admin_testimonials.fields.image')</th>
                            <th>@lang('admin_testimonials.fields.name')</th>
                            <th>@lang('admin_testimonials.fields.condition')</th>
                            <th>@lang('admin_testimonials.fields.status')</th>
                            <th class="text-end px-4">@lang('admin_testimonials.fields.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $item)
                        <tr>
                            <td class="px-4">{{ $loop->iteration }}</td>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="img" class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <span class="text-muted small">@lang('admin_testimonials.labels.no_image')</span>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $item->name }}</td>
                            <td>{{ $item->condition }}</td>
                            <td>
                                @if($item->is_active)
                                    <span class="badge bg-success">@lang('admin_testimonials.labels.active')</span>
                                @else
                                    <span class="badge bg-secondary">@lang('admin_testimonials.labels.inactive')</span>
                                @endif
                            </td>
                            <td class="text-end px-4">
                                <a href="{{ route('admin.testimonials.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $item->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('@lang('admin_testimonials.messages.confirm_delete')')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                @lang('admin_testimonials.messages.no_data')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
        {{-- Phân trang --}}
        <div class="card-footer bg-white border-0 py-3">
            {{ $testimonials->links() }}
        </div>
    </div>
</div>
@endsection