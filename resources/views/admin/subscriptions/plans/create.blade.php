@extends('admin.layouts.master')

@section('title', 'Create Subscription Plan')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><i class="fa fa-plus"></i> Create New Subscription Plan</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.subscription-plans.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Plan Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name') }}" required>
                            @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="price" 
                                   class="form-control @error('price') is-invalid @enderror" 
                                   value="{{ old('price') }}" required>
                            @error('price')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Frequency <span class="text-danger">*</span></label>
                            <select name="frequency" class="form-control @error('frequency') is-invalid @enderror" required>
                                <option value="weekly" {{ old('frequency') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                <option value="biweekly" {{ old('frequency') == 'biweekly' ? 'selected' : '' }}>Bi-Weekly</option>
                                <option value="monthly" {{ old('frequency') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                            </select>
                            @error('frequency')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Frequency Interval <span class="text-danger">*</span></label>
                            <input type="number" name="frequency_interval" 
                                   class="form-control @error('frequency_interval') is-invalid @enderror" 
                                   value="{{ old('frequency_interval', 1) }}" min="1" required>
                            <small class="form-text text-muted">e.g., Every 1 week, Every 2 weeks</small>
                            @error('frequency_interval')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Box Size</label>
                            <select name="box_size" class="form-control">
                                <option value="">Standard</option>
                                <option value="1" {{ old('box_size') == 1 ? 'selected' : '' }}>Small</option>
                                <option value="2" {{ old('box_size') == 2 ? 'selected' : '' }}>Medium</option>
                                <option value="3" {{ old('box_size') == 3 ? 'selected' : '' }}>Large</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customizable" 
                                       name="customizable" value="1" {{ old('customizable', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customizable">
                                    Allow customers to customize items
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Max Items (if customizable)</label>
                            <input type="number" name="max_items" class="form-control" 
                                   value="{{ old('max_items') }}" min="1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" 
                                   value="{{ old('sort_order', 0) }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="active" 
                                       name="active" value="1" {{ old('active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="active">Active</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Create Subscription Plan
                    </button>
                    <a href="{{ route('admin.subscription-plans.index') }}" class="btn btn-secondary">
                        <i class="fa fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
