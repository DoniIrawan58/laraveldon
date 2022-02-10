@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

         @if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login:)</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">
                 Not Registered?
                 <a href="/register">Register Now!</a>
                 <p class="mt-2 mb-3 text-muted text-center text-decoration-none">&copy; 2022</p>
            </small>
          </main>
    </div>
</div>

  @endsection
