@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Register</h3>
                    <div class="box">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <div class="control">
                                    <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" value="{{ old('name') }}" id="name" name="name" placeholder="Full name" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" placeholder="user@example.com" value="{{ old('email') }}" id="email" name="email" required>
                                </div>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input class="input {{ $errors->has('phone') ? ' is-danger' : '' }}" type="text" placeholder="9999999999" value="{{ old('phone') }}" id="phone" name="phone" required>
                                    <span class="icon is-small is-left">
                                        +91
                                    </span>
                                </div>
                                @if ($errors->has('phone'))
                                    <p class="help is-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" value="{{ old('password') }}" id="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                                </div>
                            </div>
                            <div class="control has-text-right">
                                <button class="button is-fullwidth is-info"> Register </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
