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

                    <div class="form-group">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    </div>

                    <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input type="password" name="password" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <label>{{ __('Confirm Password') }}</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password">

                    </div>
                    <button type="submit" class="button buttonBlue">{{ __('register') }}
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
