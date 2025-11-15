@extends('admin.layouts.master')

@section('title', 'Subscription Plans')

@section('content')
<div class="content">
    <div class="clearfix"></div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title"><i class="fa fa-box"></i> Subscription Plans</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('admin.subscription-plans.create') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Add New Plan
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Frequency</th>
                            <th>Box Size</th>
                            <th>Active Subscriptions</th>
                            <th>Status</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($plans as $plan)
                        <tr>
                            <td>
                                <strong>{{ $plan->name }}</strong>
                                @if($plan->customizable)
                                    <span class="badge badge-info">Customizable</span>
                                @endif
                            </td>
                            <td>${{ number_format($plan->price, 2) }}</td>
                            <td>{{ $plan->frequency_label }}</td>
                            <td>{{ $plan->box_size_label }}</td>
                            <td>
                                <span class="badge badge-secondary">{{ $plan->active_subscriptions_count }}</span>
                            </td>
                            <td>
                                @if($plan->active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.subscription-plans.edit', $plan->id) }}" 
                                   class="btn btn-sm btn-info" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                
                                <form action="{{ route('admin.subscription-plans.toggle', $plan->id) }}" 
                                      method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" 
                                            class="btn btn-sm {{ $plan->active ? 'btn-warning' : 'btn-success' }}" 
                                            title="{{ $plan->active ? 'Deactivate' : 'Activate' }}">
                                        <i class="fa fa-{{ $plan->active ? 'ban' : 'check' }}"></i>
                                    </button>
                                </form>

                                @if($plan->active_subscriptions_count == 0)
                                <form action="{{ route('admin.subscription-plans.destroy', $plan->id) }}" 
                                      method="POST" 
                                      style="display:inline;"
                                      onsubmit="return confirm('Are you sure you want to delete this plan?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No subscription plans found. Create your first plan!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $plans->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
