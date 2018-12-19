<?php

namespace App\Http\Controllers;

use App\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            return view('serviceOrder.list', ['search'=>$search, 'data' => 
                    ServiceOrder::where('Account_Name', 'like', "%$search%")
                    ->orWhere('Account_Company', 'like', "%$search%")
                    ->orWhere('Service_Instance', 'like', "%$search%")
                    ->orderBy('Id', 'desc')->paginate(10)]);
        }
        $status = $request->query('status');
        if ($status == 'pending') {
            return view('serviceOrder.list', ['status'=>$status, 'data' => 
                    ServiceOrder::whereNull('Date_Completed')
                    ->whereNull('Date_Cancelled')
                    ->orderBy('Id', 'desc')->paginate(10)]);
        }
        if ($status == 'completed') {
            return view('serviceOrder.list', ['status'=>$status, 'data' => 
                    ServiceOrder::whereNotNull('Date_Completed')
                    ->whereNull('Date_Cancelled')
                    ->orderBy('Id', 'desc')->paginate(10)]);
        }
        if ($status == 'cancelled') {
            return view('serviceOrder.list', ['status'=>$status, 'data' => 
                    ServiceOrder::whereNotNull('Date_Cancelled')
                    ->orderBy('Id', 'desc')->paginate(10)]);
        }
        if ($status == 'all') {
            return view('serviceOrder.list', ['status'=>$status,'data' => ServiceOrder::orderBy('Id', 'desc')->paginate(10)]);
        }
        return view('serviceOrder.index');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $serviceOrder = ServiceOrder::findOrFail($Id);
        return view('serviceOrder.view', ['data' => $serviceOrder]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceOrder $serviceOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceOrder $serviceOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceOrder $serviceOrder)
    {
        //
    }
}
