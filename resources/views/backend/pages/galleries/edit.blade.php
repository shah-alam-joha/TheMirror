@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Gallery



      </div>
      <div class="card-body">

        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="image_title">Name</label>
            <input type="text" class="form-control" id="image_title" name="image_title" value="{{ $gallery->image_title }}">
          </div> 

          <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" class="form-control" id="priority" name="priority" value="{{ $gallery->priority }}">
          </div>

        <div class="form-group">
          <label for="oldimage">Gallery Old Image</label> <br>

          <img src="{{ asset('images/galleries/' .$gallery->image) }}" width="100"> <br>

           <label for="image">Gallery New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div> 
        
        
        <button type="submit" class="btn btn-success">Update gallery</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()