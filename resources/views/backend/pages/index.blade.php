@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card card-body">
      

<h3>Welcome to your Admin panel</h3>
<br>

<br>
<p>
<a href="{{ route('index') }}" class="btn btn-primary btn-lg" target="_blank">Visit Main Site</a>
</p>
    </div>   
     
    
      <!-- content-wrapper ends -->
     
      <!-- partial -->
    </div>
 </div>


    <!-- main-panel ends -->
    @endsection()