@extends('index')

@section('title')
  Dashboard
@endsection

@section('content')
<div class="card mb-4">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center">
      <h5>Dashboard</h5>
    </div>
  </div>
</div>
<div class="card mb-4 py-2 px-4">
  <div class="d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-12 col-md-6 mb-4 text-center">
        <a class="nav-link text-info" href="{{ route('block.add')}}">
          <i class="ti-pencil-alt menu-icon icon-lg"></i>
          <br>
          <span class="menu-title">Block</span>
        </a>
      </div>
      <div class="col-12 col-md-6 mb-4 text-center">
        <a class="nav-link text-info" href="{{ route('head.add')}}">
          <i class="ti-pencil-alt menu-icon icon-lg"></i>
          <br>
          <span class="menu-title">Head</span>
        </a>
      </div>
      <div class="col-12 col-md-6 mb-4 text-center">
        <a class="nav-link text-info" href="{{ route('cam.add')}}">
          <i class="ti-pencil-alt menu-icon icon-lg"></i>
          <br>
          <span class="menu-title">Cam</span>
        </a>
      </div>
      <div class="col-12 col-md-6 mb-4 text-center">
        <a class="nav-link text-info" href="{{ route('crank.add')}}">
          <i class="ti-pencil-alt menu-icon icon-lg"></i>
          <br>
          <span class="menu-title">Crank</span>
        </a>
      </div>
      <div class="col-12 col-md-6 mb-4 text-center">
        <a class="nav-link text-info" href="{{ route('assy.add')}}">
          <i class="ti-pencil-alt menu-icon icon-lg"></i>
          <br>
          <span class="menu-title">Assy</span>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection