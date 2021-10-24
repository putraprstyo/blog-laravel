@extends('layouts.main')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal">Registrasi</h1>
            <form action="/registrasi" method="POST">
                @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
          
              <div class="form-floating">
                  <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="username" required placeholder="Name" value="{{old('name')}}">
                  <label for="username">Name</label>
                  @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" required placeholder="username" value="{{old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
                </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" required placeholder="name@example.com" value="{{old('email')}}" >
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" required placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
              </div>
              <small><a href="/login" class="text-decoration-none">Login</a></small>
              <button class="w-100 mt-2 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
        </main>
    </div>
</div>
</div>

@endsection