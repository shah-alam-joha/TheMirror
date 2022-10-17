@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Service



      </div>
      <div class="card-body">

        <form action="{{ route('admin.service.update', $service->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}">
            
          </div>

           <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{ $service->phone }}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control">{{ $service->description }}</textarea>
          </div>

        <div class="form-group">
          <label for="oldimage">Service Old Image</label> <br>

          <img src="{{ asset('images/services/' .$service->image) }}" width="100"> <br>

           <label for="image">Service New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              

        
        
        <button type="submit" class="btn btn-success">Update Service</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()