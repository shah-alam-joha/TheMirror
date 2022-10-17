@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit About



      </div>
      <div class="card-body">

        <form action="{{ route('admin.about.update', $about->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}">
          </div> 

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $about->phone }}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
          <textarea name="description" rows="8" cols="30" class="form-control"> {{ $about->description }} </textarea>
            </div>


        <div class="form-group">
          <label for="oldimage">About Old Image</label> <br>

          <img src="{{ asset('images/abouts/' .$about->image) }}" width="100"> <br>

           <label for="image">abouter New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div> 
        
        
        <button type="submit" class="btn btn-success">Update about</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()