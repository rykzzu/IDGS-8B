@extends('layouts.layoutPrincipal')

@section('titulo')
Registro
@endsection

@section('contenido')
<form action="/registro" method="POST">
  @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input name="name" type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Name</label>
      </div>

      @error('name')
      <p style="color: red">{{$message}}</p>
      @enderror

      <div class="form-outline mt-5">
        <input name="username" type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">User Name</label>
      </div>

      @error('username')
      <p style="color: red">{{$message}}</p>
      @enderror

      <div class="form-outline mt-5">
        <input name="email" type="email" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Email</label>
      </div>

      @error('email')
      <p style="color: red">{{$message}}</p>
      @enderror

      <div class="form-outline mt-5">
        <input name="password" type="password" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Password</label>
      </div>

      @error('password')
      <p style="color: red">{{$message}}</p>
      @enderror

    </div>

  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Registrarse</button>
</form>
@endsection