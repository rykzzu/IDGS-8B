@extends('layouts.layoutPrincipal')

@section('titulo')
Login
@endsection

@section('contenido')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-6">
            <img
            src="https://mdbcdn.b-cdn.net/img/new/standard/city/040.webp"
            class="img-fluid shadow-2-strong"
            alt="Palm Springs Road"
            />
        </div>

        <div class="col-6">
        <form action="{{route('login')}}" method="POST">
          @csrf
          @if(session('mensaje'))
          <p style="color: red">{{session('mensaje')}}</p>
          @endif
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input name="email" type="email" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input name="password" type="password" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
      </div>
    </div>

  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
        </div>
    </div>

</div>

@endsection