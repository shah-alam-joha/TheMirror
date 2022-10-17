@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add slider



      </div>
      <div class="card-body">

        <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter slider Name">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Priority</label>
            <input type="number" class="form-control" id="priority" name="priority" placeholder="Enter slider Priority">
          </div>



         <div class="form-group">
          <label for="image">Slider Image</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              



        <button type="submit" class="btn btn-primary">Add slider</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()