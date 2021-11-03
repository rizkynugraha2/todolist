@extends('layouts.main')

@section('container')
<h1 class="text-center">Please Register Now !</h1>
<form action="/register" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label" >Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
      <label for="username" class="form-label" >Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label" >Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="yourname@example.com">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label" >Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <small>
      <div class="mt-2">
          Already registered?
          <a href="/">Back to Login</a>
      </div>
  </small>
@endsection