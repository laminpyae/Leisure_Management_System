@extends('backend/master')

@section('content')
  <!-- Page Heading -->
          <!-- Page Heading -->
          @include('flash::message')
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Room</h1>
            <a href="{{route('rooms.create')}}" class="d-none d-sm-inline-block btn btn-sm bg-gold text-white shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Add New</a>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Room Number</th>
                      <th>Subcategory</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Room Number</th>
                      <th>Subcategory</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                  @php $i=1; @endphp

                  @foreach($rooms as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      {{$row->room_no}}
                    </td>
                     <td>
                      {{$row->subcategory->type}}
                     <!--  @php
                      foreach($row->subcategory->facilities as $val)
                        echo $val->name.' , ';
                       @endphp -->
                    </td>
                    <td>
                      {{$row->status}}
                    </td>
                    <td>
                     <div class="btn-group">
                        <a href="{{route('rooms.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                      </div>
                      <div class="btn-group">
                       <form action="{{route('rooms.destroy', $row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
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