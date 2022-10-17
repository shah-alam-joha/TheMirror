@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Brand



      </div>
      <div class="card-body">

        <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}">
            
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Priority</label>
          <input type="number" id="priority" name="priority"  class="form-control" value="{{ $brand->priority}}">
            </div>


        <div class="form-group">
          <label for="oldimage">Brand Old Image</label> <br>

          <img src="{{ asset('images/brands/' .$brand->image) }}" width="100"> <br>

           <label for="image">Brand New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              

        
        
        <button type="submit" class="btn btn-success">Update Brand</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()