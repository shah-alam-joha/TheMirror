@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Review



      </div>
      <div class="card-body">

        <form action="{{ route('admin.review.update', $review->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $review->name }}">
          </div> 

          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $review->address }}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description (optional)</label>
          <textarea name="description" rows="8" cols="30" class="form-control"> {{ $review->description }} </textarea>
            </div>


        <div class="form-group">
          <label for="oldimage">Reviewer Old Image</label> <br>

          <img src="{{ asset('images/reviews/' .$review->image) }}" width="100"> <br>

           <label for="image">Reviewer New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div> 
        
        
        <button type="submit" class="btn btn-success">Update review</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()