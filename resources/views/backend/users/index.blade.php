@extends('backend/master')

@section('content')
  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">User</h1>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">User List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                  @php $i=1; @endphp

                  @foreach($users as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      {{$row->name}}
                    </td>
                    <td>
                      {{$row->email}}
                    </td>
                    <td>
                     <div class="btn-group">
                        <a href="{{route('users.show', $row->id)}}" class="btn btn-success">Details</a>
                      </div>
                      <div class="btn-group">
                       <form action="{{route('users.destroy', $row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
                         @csrf
                         @method('DELETE')
                         <input type="submit" value="Delete" class="btn btn-danger">
                      </form>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                   </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@endsection