@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label>{{ __('Name') }}</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label>{{ __('Username') }}</label>
                        <input type="text" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    </div>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label>{{ __('Leeftijd') }}</label>
                        <input type="date" name="age" required>
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input type="password" name="password" required autocomplete="new-password">
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-group">
                        <label>{{ __('Confirm Password') }}</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <button type="submit" class="button buttonBlue">{{ __('register') }}
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
