@extends('layouts.app')

@section('content')
<main role="main" class="container-fluid mt-2 mb-2">
<div class="card">
  <h5 class="card-header">Service Orders 
  <form class="form-inline mr-2 float-right">
     <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form></h5>
  <div class="card-body">
      <ul>
          <li>
              <a class="" href="{{ route('serviceorder.index') }}?status=pending">Pending</a>
          </li>
          <li>
              <a class="" href="{{ route('serviceorder.index') }}?status=completed">Completed</a>
          </li>
          <li>
              <a class="" href="{{ route('serviceorder.index') }}?status=cancelled">Cancelled</a>
          </li>
          <li>
              <a class="" href="{{ route('serviceorder.index') }}?status=all">All</a>
          </li>
      </ul>
  </div>
</div>
</main>


@endsection
