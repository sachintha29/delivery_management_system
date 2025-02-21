<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeliveryRequest;
use Illuminate\Support\Facades\DB;

class DeliveryRequestController extends Controller
{
    public function index()
    {
        $delivery_requests = DeliveryRequest::all();
        return view('deliveries.index', compact('delivery_requests'));
    }

    public function create()
    {
        return view('deliveries.create');
    }

    //Delivery Request Create Function
    public function store(Request $request)
    {
        $request->validate([
            'pickup_address' => 'required|string|max:400',
            'pickup_name' => 'required|string|max:150',
            'pickup_contact_no' => 'required|string|max:20',
            'pickup_email' => 'email',
            'delivery_address' => 'required|string|max:400',
            'delivery_name' => 'required|string|max:150',
            'delivery_contact_no' => 'required|string|max:20',
            'delivery_email' => 'email',
            'type_of_goods' => 'required',
            'delivery_provider' => 'required',
            'priority' => 'required',
            'package_description' => 'required|string',
            'length' => 'required|numeric',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
            'weight' => 'required|numeric',
            'status'=>'required',
        ]);

        // $delivery_request = DeliveryRequest::create($request->only('pickup_address', 'pickup_name','pickup_contact_no','pickup_email'));

        try {
            DB::beginTransaction();

            $data = $request->all();


            $deliveryrequest = DeliveryRequest::create($data);



            DB::commit();

            return redirect()->route('deliveries.index')->with('message', 'Delivery Request successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('deliveries.index')->with('error', $e->getMessage());
        }



        return redirect()->route('deliveries.index')->with('success', 'Delivery Request added  successfully!');
    }


    public function edit(DeliveryRequest $deliveryrequest)
    {
        return view('deliveries.edit', compact('deliveryrequest'));
    }

    public function update(Request $request, DeliveryRequest $deliveryrequest)
    {
        // Validate the incoming request
        $request->validate([
            'status' => 'required',
        ]);

        $deliveryrequest->update($request->only('status'));


        return redirect()->route('deliveries.index')->with('success', 'Delivery Request Status Updated successfully!');
    }



    public function destroy(DeliveryRequest $deliveryrequest)
    {
        $deliveryrequest->delete();
        return redirect()->route('deliveries.index')->with('success', 'Delivery Request deleted  successfully!');
    }
}
