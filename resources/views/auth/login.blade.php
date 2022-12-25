@extends('layouts.auth-master')

@section('content')

<div class="bg-warning mt-5 p-3" style="width: 500px;height: auto;margin: auto;border-radius: 15px;">
    <div class="row-sm-10 d-flex justify-content-center">
        <div class="col-sm-10">
            <form method="post" action="{{ route('login.perform') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <img class="mb-2 mt-3" src="{{ asset('image/laravel-image.png') }}" alt="" width="80" height="80" style="border-radius: 50%">

                <h1 class="h3 mb-3 fw-normal">Please Login</h1>

                @include('layouts.partials.messages')

                <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email or Username</label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <h5 class="text-white mt-3">
                    Do you have acount?
                    <a href="{{ route('register.show') }}" class="w-100 text-success mt-3" >Register!</a>
                </h5>

                @include('auth.partials.copy')
            </form>
        </div>
    </div>
</div>

@endsection
