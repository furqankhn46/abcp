@extends('layouts.app')

@section('content')
    <section>
        <div class="container has-text-centered">
            <div class="column is-8 is-offset-2">
                <div class="box">
                    <h4 class="title is-4 has-text-grey">Create new user</h4>
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="field">
                            <div class="control">
                                <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" value="{{ $user->name }}" id="name" name="name" placeholder="Full name" required autofocus>
                            </div>
                            @if ($errors->has('name'))
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" placeholder="user@example.com" value="{{ $user->email }}" id="email" name="email" required>
                            </div>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input {{ $errors->has('phone') ? ' is-danger' : '' }}" type="text" placeholder="9999999999" value="{{ $user->phone }}" id="phone" name="phone" required>
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
                                <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" value="{{ old('password') }}" id="password" name="password">
                            </div>
                            @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <div class="control">
                                <input class="input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="control has-text-right">
                            <button class="button is-fullwidth is-info"> Update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
