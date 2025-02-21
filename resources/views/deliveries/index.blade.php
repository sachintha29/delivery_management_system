@extends('layouts.app')

@section('content')
<h2>Delivery Requests List</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('deliveries.create') }}" class="btn btn-primary">Add Delivery Request</a>

<table class="table mt-4" id="students" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Pickup Address</th>
            <th>Pickup Name</th>
            <th>Pickup Contact </th>
            <th>Delivery Address </th>
            <th>Delivery Name </th>
            <th>Delivery Contact </th>
            <th>Type of Goods </th>
            <th>Delivery Provider </th>
            <th>Priority </th>
            <th>Shipment Pickup date </th>
            <th>Shipment pickup time </th>
            <th>Package Des</th>
            <th>Lengh(m)</th>
            <th>Height(m) </th>
            <th>Width(m) </th>
            <th>Weight(kg)</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($delivery_requests as $delivery_request)
            <tr>
                <td>{{ $delivery_request->id }}</td>
                <td>{{ $delivery_request->pickup_address }}</td>
                <td>{{ $delivery_request->pickup_name }}</td>
                <td>{{ $delivery_request->pickup_contact_no }}</td>
                <td>{{ $delivery_request->delivery_address }}</td>
                <td>{{ $delivery_request->delivery_name }}</td>
                <td>{{ $delivery_request->delivery_contact_no }}</td>
                <td>{{ $delivery_request->type_of_goods }}</td>
                <td>{{ $delivery_request->delivery_provider }}</td>
                <td>{{ $delivery_request->priority }}</td>
                <td>{{ $delivery_request->shipment_pickup_date }}</td>
                <td>{{ $delivery_request->shipment_pickup_time }}</td>
                <td>{{ $delivery_request->package_description }}</td>
                <td>{{ $delivery_request->length }}</td>
                <td>{{ $delivery_request->height }}</td>
                <td>{{ $delivery_request->width }}</td>
                <td>{{ $delivery_request->weight }}</td>
                <td>{{ $delivery_request->status }}</td>


                <td style="width:100px;">
                    <a href="{{ route('deliveries.edit', $delivery_request->id) }}" class="btn btn-warning">Edit Status</a>
                    @if ( $delivery_request->status == 'pending')
                    <form action="{{ route('deliveries.destroy', $delivery_request->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Delivery Request?')">Delete</button>
                    </form>
                    @endif

                </td>

            </tr>
        @endforeach
    </tbody>
</table>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $('#students').DataTable({
            searching: true, // Enable search
            responsive: true, // Enable responsiveness
            lengthChange: true, // Enable length change
            paging: true, // Enable pagination
            ordering: true, // Enable sorting
        });
    });
</script>
@endsection
