@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Beauty Service



      </div>
      <div class="card-body">

        <form action="{{ route('admin.beauty.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Beauty service title">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control" placeholder="Enter Beauty service Description"></textarea>
          </div>


         <div class="form-group">
          <label for="image">Beauty Service Image</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              



        <button type="submit" class="btn btn-primary">Add Beauty Service</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()