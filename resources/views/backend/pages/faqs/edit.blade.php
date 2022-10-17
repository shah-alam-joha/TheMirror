@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit faq



      </div>
      <div class="card-body">

        <form action="{{ route('admin.faq.update', $faq->id) }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="question">Faq</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $faq->question }}">
          </div> 

          <div class="form-group">
            <label for="answer">Faq</label>
            <input type="text" class="form-control" id="answer" name="answer" value="{{ $faq->answer }}">
          </div> 

          <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" class="form-control" id="priority" name="priority" value="{{ $faq->priority }}">
          </div>
        
        <button type="submit" class="btn btn-success">Update Faq</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()