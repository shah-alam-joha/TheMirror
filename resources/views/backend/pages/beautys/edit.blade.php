@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Beauty Service



      </div>
      <div class="card-body">

        <form action="{{ route('admin.beauty.update', $beauty->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')

           <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $beauty->title }}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control">{{ $beauty->description }}</textarea>
          </div>

        <div class="form-group">
          <label for="oldimage">Beauty Service Old Image</label> <br>

          <img src="{{ asset('images/beautys/' .$beauty->image) }}" width="100"> <br>

           <label for="image">Beauty Service New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              

        
        
        <button type="submit" class="btn btn-success">Update Beauty Service</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()