@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add About



      </div>
      <div class="card-body">

        <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter about Title">
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter about phone">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control"></textarea>
          </div>



         <div class="form-group">
          <label for="image">About Image</label>
          <input type="file" class="form-control" name="image" id="image">
        </div>  


        <button type="submit" class="btn btn-primary">Add About</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()