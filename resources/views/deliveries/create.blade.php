@extends('layouts.app')

@section('content')
<h2>Add Delivery Request</h2>

 {{-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form method="POST" action="{{ route('deliveries.store') }}">
    @csrf
    <div class="mb-3">
        <label for="pickup_address" class="form-label">Pickup Address</label>
        <input type="text" name="pickup_address" class="form-control" value="{{ old('pickup_address') }} " requried>
    </div>

    <div class="mb-3">
        <label for="pickup_name" class="form-label">Pickup Name</label>
        <input type="text" name="pickup_name" class="form-control" value="{{ old('pickup_name') }} " requried>

    </div>


    <div class="mb-3">
        <label for="pickup_email" class="form-label">Pickup Email</label>
        <input type="email" name="pickup_email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="mb-3">
        <label for="pickup_contact_no" class="form-label">Pickup Contact Number</label>
        <input type="text" name="pickup_contact_no" class="form-control" value="{{ old('pickup_contact_no') }} " requried>
    </div>

    <div class="mb-3">
        <label for="delivery_address" class="form-label">Delivery Address</label>
        <input type="text" name="delivery_address" class="form-control" value="{{ old('delivery_address') }} " requried>
    </div>

    <div class="mb-3">
        <label for="delivery_name" class="form-label">Delivery Name</label>
        <input type="text" name="delivery_name" class="form-control" value="{{ old('delivery_name') }} " requried>
    </div>


    <div class="mb-3">
        <label for="delivery_email" class="form-label">Delivery Email</label>
        <input type="email" name="delivery_email" class="form-control" value="{{ old('delivery_email') }}">
    </div>

    <div class="mb-3">
        <label for="delivery_contact_no" class="form-label">Delivery Contact Number</label>
        <input type="text" name="delivery_contact_no" class="form-control" value="{{ old('delivery_contact_no') }} " requried>
    </div>

    <div class="mb-3">
        <label for="type_of_goods">Type of Good</label>
        <select name="type_of_goods" class="form-control" required>
            <option value="">--Select Type of Good--</option>
            <option value="Document">Document</option>
            <option value="Parcel">Parcel</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="delivery_provider">Delivery Provider</label>
        <select name="delivery_provider" class="form-control" required>
            <option value="">--Select Delivery Provider--</option>
            <option value="DHL">DHL</option>
            <option value="STARTRACK">STARTRACK</option>
            <option value="ZOOM2U">ZOOM2U</option>
            <option value="TGG">TGG</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="priority">Priority</label>
        <select name="priority" class="form-control" required>
            <option value="">--Select Priority--</option>
            <option value="Standard">Standard</option>
            <option value="Express">Express</option>
            <option value="Immediate">Immediate</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="shipment_pickup_date">Shipment Pick Up Date</label>
        <input type="date" name="shipment_pickup_date" id="shipment_pickup_date" class="form-control" value="{{ old('shipment_pickup_date') }}" min="today">
    </div>

    <div class="mb-3">
        <label for="shipment_pickup_time">Shipment Pick Up Time</label>
        <input type="time" name="shipment_pickup_time" id="shipment_pickup_time" class="form-control" value="{{ old('shipment_pickup_time') }}">
    </div>

    <div class="form-group">
        <label for="package_description">Pacakage Destription</label>
        <textarea name="package_description" id="package_description" class="form-control" rows="4" required>{{ old('package_description') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="length" class="form-label">Length (m)</label>
        <input type="text" name="length" class="form-control" value="{{ old('length') }}" step="0.01" min="0" value="0">
    </div>

    <div class="mb-3">
        <label for="height" class="form-label">Height (m)</label>
        <input type="number" name="height" class="form-control" value="{{ old('height') }}" step="0.01" min="0" value="0">
    </div>

    <div class="mb-3">
        <label for="width" class="form-label">Width (m)</label>
        <input type="number" name="width" class="form-control" value="{{ old('width') }}" step="0.01" min="0" value="0">
    </div>

    <div class="mb-3">
        <label for="weight" class="form-label">Weight (Kg)</label>
        <input type="number" name="weight" class="form-control" value="{{ old('width') }}" step="0.01" min="0" value="0">
    </div>

    <div class="mb-3">
        {{-- <label for="status" class="form-label">weight (Kg)</label> --}}
        <input type="hidden" name="status" value="pending">
    </div>







    {{-- <div class="mb-3">
        <label for="course_ids" class="form-label">Courses</label>
        <select name="course_ids[]" class="form-control" multiple>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ in_array($course->id, old('course_ids', [])) ? 'selected' : '' }}>{{ $course->name }}</option>
            @endforeach
        </select>
    </div> --}}

    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
