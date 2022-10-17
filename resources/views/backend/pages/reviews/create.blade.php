@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Review



      </div>
      <div class="card-body">

        <form action="{{ route('admin.review.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter review Name">
          </div>

          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter review Address">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control"></textarea>
          </div>



         <div class="form-group">
          <label for="image">Reviewer Image</label>
          <input type="file" class="form-control" name="image" id="image">
        </div>  


        <button type="submit" class="btn btn-primary">Add Review</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()