@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' =>'E-Pengurusan Rawatan Perubatan'])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    {{-- <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
      <h3>{{ __('Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.') }} </h3>
    </div> --}}
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="card card-login card-hidden mb-5">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Log Masuk') }}</strong></h4>
            {{-- <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div> --}}
          </div>
          <div class="card-body">
            <p class="card-description text-center">
              {{-- {{ __('Or Sign in with ') }} 
              <strong>kamarulashraff05@gmail.com</strong> {{ __(' and the password ') }}
              <strong>12345678</strong>  --}}
            </p>
            <div class="bmd-form-group{{ $errors->has('ic') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="text" name="ic" class="form-control" placeholder="{{ __('No Kad Pengenalan...') }}" value="{{ old('ic') }}" required>
              </div>
              @if ($errors->has('ic'))
                <div id="ic-error" class="error text-danger pl-3" for="ic" style="display: block;">
                  <strong>{{ $errors->first('ic') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Ingat saya') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">{{ __('Log Masuk') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Lupa kata laluan?') }}</small>
                </a>
            @endif
        </div>
        <div class="col-6 text-right">
            {{-- <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Create new account') }}</small>
            </a> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
