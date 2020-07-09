@extends('frontend.master')

@section('content')

<div class="card-body">
<h1 class="headerTitle text-center text-white p-2">Hotel Reservation System</h1>
    <h3 class="secTitle text-center p-2 mt-3">Register Form</h3>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name:') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address:') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password:') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row">
            <label for="profile" class="col-md-4 col-form-label text-md-right">Profile:</label>
            <div class="col-md-6">
                <input type="file" name="profile" id="profile">
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone:</label>
             <div class="col-md-6">
            <input type="number" name="phone" id="phone" class="form-control">
             </div>
         </div>

        <div class="form-group row">
            <label for="nrc" class="col-md-4 col-form-label text-md-right">NRC:</label>
                <div class="col-md-6">
                    <input type="text" name="nric" id="nrc" class="form-control">
                </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-gold">
                    {{ __('Register') }}
                </button>
                <a href="{{route('login')}}" class="text-gold d-block mt-3">Already have an account? | Login here.</a>
            </div>
        </div>
    </form>
</div>
@endsection
