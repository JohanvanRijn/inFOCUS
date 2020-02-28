@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" required><span class="bar"></span>
                    </div>
                    <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input type="password" name="password" required><span class="bar"></span>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="button buttonBlue">{{ __('Login') }}
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
