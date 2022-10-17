@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Team



      </div>
      <div class="card-body">

        <form action="{{ route('admin.team.update', $team->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $team->name }}">
            
          </div>

           <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{ $team->designation }}">
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{ $team->phone }}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control">{{ $team->description }}</textarea>
          </div>

        <div class="form-group">
          <label for="oldimage">Team member Old Image</label> <br>

          <img src="{{ asset('images/teams/' .$team->image) }}" width="100"> <br>

           <label for="image">Team member New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              

        
        
        <button type="submit" class="btn btn-success">Update Team</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()