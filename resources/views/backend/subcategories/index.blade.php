@extends('backend/master')

@section('content')
  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Subcategory</h1>
            <a href="{{route('subcategories.create')}}" class="d-none d-sm-inline-block btn btn-sm bg-gold shadow-sm text-white"><i class="fas fa-download fa-sm text-white-50"></i>Add New</a>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Subcategory List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Type</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Type</th>
                      <th>Price</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                  @php $i=1; @endphp

                  @foreach($subcategories as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      {{$row->type}}
                    </td>
                     <td>
                      {{$row->price}}
                    </td>
                    <td>
                      {{$row->category_id}}
                    </td>
                    <td>
                     <div class="btn-group">
                        <a href="{{route('subcategories.edit', $row->id)}}" class="btn btn-warning">Edit</a>
                      </div>
                      <div class="btn-group">
                       <form action="{{route('subcategories.destroy', $row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
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