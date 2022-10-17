@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Gallery



      </div>
      <div class="card-body">

        <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="image_title">Image Title</label>
            <input type="text" class="form-control" id="image_title" name="image_title" placeholder="Enter gallery image title">
          </div>

          <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" class="form-control" id="priority" name="priority" placeholder="Enter gallery Address">
          </div>


         <div class="form-group">
          <label for="image">Gallary Image</label>
          <input type="file" class="form-control" name="image" id="image">
        </div>  


        <button type="submit" class="btn btn-primary">Add Gallery</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()