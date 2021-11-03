@extends('layouts.main')

@section('container')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('loginerror'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginerror')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1 class="text-center">Sign in</h1>
<form action="/" method="post">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label" >Username</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label" >Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <small>
     <div class="d-block mt-3"> 
      Not Registered?
      <a href="/register" class="">Register Now!</a>
     </div>
  </small>
@endsection