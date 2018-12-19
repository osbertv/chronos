@extends('layouts.app')

@php
 if (!isset($status)) $status = '';
 if (!isset($search)) $search = '';
@endphp
@section('content')
<main role="main" class="container-fluid mt-2 mb-2">
<div class="card">
  <h5 class="card-header">Service Orders 
  <form class="form-inline mr-2 float-right">
     <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form></h5>
  <div class="card-body">

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Order #</th>
            <th scope="col">
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Status: {{$status}}
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('serviceorder.index') }}?status=all"">All</a>
                    <a class="dropdown-item" href="{{ route('serviceorder.index') }}?status=pending">Pending</a>
                    <a class="dropdown-item" href="{{ route('serviceorder.index') }}?status=completed">Completed</a>
                    <a class="dropdown-item" href="{{ route('serviceorder.index') }}?status=cancelled">Cancelled</a>
                  </div>
                </div>
            </th>
            <th scope="col">Date</th>
            <th scope="col">Type</th>
            <th scope="col">Account</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $row)
            <tr>
                <th scope="row"><a data-toggle="modal" data-target="#viewServiceOrder" data-link="{{ route('serviceorder.index').'/'.$row->Id }}" href="">  {{ $row->Id }} </a></th>
              <td>
                  @if ($row->Date_Completed)
                    Completed
                  @elseif  ($row->Date_Cancelled)
                    Cancelled
                  @else
                    Pending
                  @endif
              </td>
              <td>{{ date("Y-m-d",strtotime($row->Issued_Date)) }}</td>
              <td>{{ $row->service_type }}</td>
              <td>{{ $row->Account_Name }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

    @component('layouts.nav.page', ['data'=>$data,'status'=>$status,'search'=>$search])
    @endcomponent
    
  </div>
</div>
</main>

<div class="modal" id="viewServiceOrder" tabindex="-1" role="dialog" aria-labelledby="viewServiceOrderLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding:0;margin:0;width:540px">
        <div class="modal-body">
            <div id="viewServiceOrderData">
                
            </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">  Close  </button>
                <button type="button" class="btn btn-sm btn-primary">  Edit  </button>
                <button type="button" class="btn btn-sm btn-primary" onclick='viewServiceOrderDataFrame.contentWindow.print()'>  Print </button>
        </div>
    </div>
  </div>
</div>

<script>
    $('#viewServiceOrder').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var link = button.data('link');
        $('#viewServiceOrderData').html("<iframe id='viewServiceOrderDataFrame' src='" + link + "' scrolling='no' style='padding:0;margin:0;border:0;width:520px;height:640px'></iframe>");
    })
</script>
@endsection
