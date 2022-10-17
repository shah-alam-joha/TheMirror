@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add team



      </div>
      <div class="card-body">

        <form action="{{ route('admin.team.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter team Name">
          </div>

          <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter team designation">
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter team phone">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control" placeholder="Enter team Description"></textarea>
          </div>


         <div class="form-group">
          <label for="image">Image</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              



        <button type="submit" class="btn btn-primary">Add Team</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()