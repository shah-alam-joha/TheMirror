@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Faq



      </div>
      <div class="card-body">

        <form action="{{ route('admin.faq.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('backend.partials.messages')
          

          <div class="form-group">
            <label for="question">Faq Question</label>
            <input type="text" class="form-control" id="question" name="question" placeholder="Enter faq question">
          </div>

          <div class="form-group">
            <label for="answer">Faq Answer</label>
            <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter faq answer">
          </div>

          <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" class="form-control" id="priority" name="priority" placeholder="Enter faq priority">
          </div>

        <button type="submit" class="btn btn-primary">Add faq</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()