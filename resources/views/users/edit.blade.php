@extends('layouts.layout')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Edit User</h2>
    </div>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
      @csrf
      @method('patch')
      <div class="form-body pl-4 pr-4">
        <div class="form-group row">
          <label for="name" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-5">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              placeholder="Nama" value="{{ $user->name }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-5">
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
              placeholder="Email" value="{{ $user->email }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-5">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
              name="password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
          <div class="col-sm-5">
            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror"
              id="confirm_password" name="confirm_password" placeholder="Confirm Password">
            @error('confirm_password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-5 offset-3">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('users') }}" class="btn btn-dark">Cancel</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection