@extends('auth.layouts.default')

@section('content')

<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center">
            <img class="logo-img mb-3" src="{{url('assets/panel/images/panel-logo.svg')}}" alt="logo"width="64">
            <span class="splash-description">Por favor, insira suas informações</span>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Email') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="custom-control-label">{{ __('Remember me') }}</span>
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </form>
        </div>
        {{-- <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="footer-link">{{ __('Forgot the password?') }}</a>
                @endif
            </div>
        </div> --}}
    </div>
</div>
@endsection
