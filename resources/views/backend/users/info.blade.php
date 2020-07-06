@extends('backend/master')

@section('content')
  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Userinfo</h1>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Userinfo Detail</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  @foreach($userinfo as row)
                  <tr>
                    <td>User ID</td>
                    <td>{{$row->user_id}}</td>
                  </tr>
                  @endforeach            
                </table>
              </div>
            </div>
          </div>

@endsection