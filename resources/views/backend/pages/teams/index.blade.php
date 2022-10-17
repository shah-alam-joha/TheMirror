@extends('backend.layouts.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Manage Team



      </div>
      <div class="card-body">


        @include('backend.partials.messages')


        <table class="table table-hover table-stiped" id="dataTable">
          <thead>
            

            <tr>
              <th>#</th>
              <th>Team Name</th>
              <th>Team Designation</th>
              <th>Team Phone</th>
              <th>Team Image</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            

            @foreach ( $teams as $team )
            <tr>
              <td>#</td>
              <td> {{ $team->name }} </td>
              <td> {{ $team->designation }} </td>
              
              <td> {{ $team->phone }} </td>
              <td>
                <img src="{{ asset('images/teams/' .$team->image) }}" width="100">
              </td>
            

              <td> 
                <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-success">Edit</a>
                <!-- Button trigger modal -->
                
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModel{{$team->id}}">
                  Delete
                </button>

                <!--Delete Modal -->
                <div class="modal fade" id="deleteModel{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete it?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('admin.team.delete', $team->id ) }}" method="post">

                          @csrf

                          <button type="submit" class="btn btn-danger">Permanent Delete</button>
                        </form>

                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>

              </td>

            </tr>
            @endforeach 
          </tbody>

          <tfoot>
           <tr>
            <th>#</th>
            <th>Team Name</th>
            <th>Team Designation</th>
            <th>Team Phone</th>
            <th>Team Image</th>
            <th>Action</th>
          </tr>
        </tfoot>

      </table>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()