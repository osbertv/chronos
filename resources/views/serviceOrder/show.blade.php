@extends('layouts.app')
@section('content')
<main role="main" class="container-fluid mt-2 mb-2">
<div class="card mr-auto ml-auto" style="width:44rem">
    <div class="card-header">
        <div class="row">
            <h5 class="col-10">Service Order # {{ $data->Id }}</h5>
            <div class="col-2">
                <div class="row">Type : {{ $data->service_type }}</div>
                <div class="row">Due : {{ date("Y-m-d",strtotime($data->Date_Due)) }}</div>
                 
            </div>
        </div>
    </div>
  <div class="card-body">
    <div class="container-fluid">
        <div class="row bg-light">
            <h6>Customer Information</h6>
        </div>    
        <div class="row">
            <div style="width:4rem" class="text-primary">Name</div>
            <div style="width:28rem">: {{ $data->Account_Name }}</div>
            <div style="width:4rem" class="text-primary">Account</div>
            <div style="width:4rem">: {{ $data->Account }}</div>
        </div>
        <div class="row">
            <div style="width:4rem" class="text-primary">Company</div>
            <div style="width:28rem">: {{ $data->Account_Company }}</div>
            <div style="width:4rem" class="text-primary">Phone</div>
            <div style="width:4rem">: {{ $data->Contact_No }}</div>
        </div>
        <div class="row">
            <div style="width:4rem" class="text-primary">Address</div>
            <div style="width:34rem">: {{ $data->Service_AddressA }}</div>
        </div>
        <div class="row">
            <div style="width:4rem"> </div>
            <div style="width:34rem">: {{ $data->Service_AddressB }}</div>
        </div>
    </div>
      
    <div class="container-fluid">
        <div class="row bg-light">
            <h6>Billing Charges</h6>
        </div>    
        <div class="row">
            <div style="width:8rem" class="text-primary">Particulars</div>
            <div style="width:11rem" class="text-primary">Amount</div>
            <div style="width:11rem" class="text-primary">Date</div>
            <div style="width:11rem" class="text-primary">Equipment</div>
        </div>
    </div>        
      
  </div>
</div>
@endsection