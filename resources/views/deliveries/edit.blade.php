@extends('layouts.app')

@section('content')
<h2>Edit Delivery Request status</h2>

<!-- Display validation errors -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('deliveries.update', $deliveryrequest->id) }}">
    @csrf
    @method('PUT')

    <div class="mt-3">
        <label for="status">Status</label>
        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
            <option value="">--Select Status--</option>
            <option value="pending" {{ old('status', $deliveryrequest->status) == 'pending' ? 'selected' : '' }}>Pending</option>
            @if ($deliveryrequest->status == "pending")
            <option value="processed" {{ old('status', $deliveryrequest->status) == 'processed' ? 'selected' : '' }}>Processed</option>
            <option value="shipped" {{ old('status', $deliveryrequest->status) == 'shipped' ? 'selected' : '' }}>Shipped</option>
            <option value="canceled" {{ old('status', $deliveryrequest->status) == 'canceled' ? 'selected' : '' }}>Canceled</option>
            @else
            <option value="processed" {{ old('status', $deliveryrequest->status) == 'processed' ? 'selected' : '' }}>Processed</option>
            <option value="shipped" {{ old('status', $deliveryrequest->status) == 'shipped' ? 'selected' : '' }}>Shipped</option>
            @endif
        </select>
        @error('relationship')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Save Changes</button>
</form>
@endsection
