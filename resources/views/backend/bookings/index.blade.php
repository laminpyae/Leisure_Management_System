@extends('backend/master')

@section('content')
  <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-2 text-gray-800">Booking</h1>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Booking List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Reservation No.</th>
                      <th>Check in Date</th>
                      <th>Check out Date</th>
                      <th>Total Charges</th>
                      <th>Customer Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Reservation No.</th>
                      <th>Check in Date</th>
                      <th>Check out Date</th>
                      <th>Total Charges</th>
                      <th>Customer Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                  @php $i=1; @endphp

                  @foreach($bookings as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      {{$row->reservation_no}}
                    </td>
                     <td>
                      {{$row->checkin_date}}
                    </td>
                    <td>
                      {{$row->checkout_date}}
                    </td>
                    <td>
                      {{$row->total_charges}}
                    </td>
                    <td>
                      {{$row->user->name}}
                    </td>
                    <td>
                     <div class="btn-group">
                        <a href="{{route('bookings.edit', $row->id)}}" class="btn btn-success">Confirm</a>
                      </div>
                      <div class="btn-group">
                       <form action="{{route('bookings.destroy', $row->id)}}" method="POST" onsubmit="return confirm('Are you Sure?')">
                         @csrf
                         @method('DELETE')
                         <input type="submit" value="Cancel" class="btn btn-danger">
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