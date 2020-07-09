@extends('backend/master')

@section('content')
	 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Category</h1>
            <a href="{{route('categories.index')}}" class="d-none d-sm-inline-block btn btn-sm bg-gold text-white shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Back</a>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Category Detail</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Description</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>

                  <tr>
                    <td>{{$category->id}}</td>
                    <td>
                      {{$category->name}}
                    </td>
                    <td>
                      {{$category->description}}
                    </td>
                  </tr>
                   </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection