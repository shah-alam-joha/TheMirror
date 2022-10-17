@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Brand



      </div>
      <div class="card-body">

        <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Brand Name">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Priority</label>
            <input type="number" class="form-control" id="priority" name="priority" placeholder="Enter Brand Priority">
          </div>



         <div class="form-group">
          <label for="image">Brand Image</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              



        <button type="submit" class="btn btn-primary">Add Brand</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()