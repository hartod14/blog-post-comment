@extends('home')

@section('container')
    <main class="form-signin">
        <form action="/login" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <div class="form-floating">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="email" autofocus required value="{{ old('email') }} ">
                <label for="email">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <small class="d-block text-center mt-2">Not Registered? <a href="/register">Register Now!</a></small>
    </main>
@endsection
