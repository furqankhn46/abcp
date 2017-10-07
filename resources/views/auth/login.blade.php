@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <h4 class="title has-text-centered has-text-primary">Login</h4>
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}                
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" placeholder="user@example.com" value="{{ old('email') }}" id="email" name="email">
                            <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fa fa-warning"></i>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>                        
                        @endif
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <p class="control has-icons-left">
                            <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" name="password" id="password">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>                        
                        @endif
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary">Login</button>
                        </div>
                        <div class="control">
                            <a class="button is-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
