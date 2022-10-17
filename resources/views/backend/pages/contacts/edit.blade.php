@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Contact



      </div>
      <div class="card-body">

        <form action="{{ route('admin.contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $contact->title }}">
            
          </div>

           <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}">
          </div>

          <div class="form-group">
            <label for="email">Email (optional)</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}">
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword">Description</label>
            <textarea name="description" rows="8" cols="30" class="form-control">{{ $contact->description }}</textarea>
          </div>   
        
        <button type="submit" class="btn btn-success">Update contact</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()