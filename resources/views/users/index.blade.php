@extends('layouts.layout')

@section('content')
<div class="col-md-12">
  @if (session('success'))
  <!-- MAKA TAMPILKAN ALERT SUCCESS -->
  <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>{{ session('success') }}</strong>
  </div>
  @endif
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">User Lists</h2>
      <a href="{{ route('users.create') }}" class="btn waves-effect waves-light btn-primary">
        Tambah User
      </a>
    </div>
    <div class="table-responsive p-2">
      <table class="table table-bordered table-hover">
        <thead class="bg-primary text-white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user => $value)
          <tr>
            <td>{{ $user + 1 }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>
              <a href="{{ route('users.edit', $value->id) }}"
                class="btn btn-btn waves-effect waves-light btn-warning">Edit</a>
              {{-- <button class="btn btn-btn waves-effect waves-light btn-danger">Delete</button> --}}
              <button type="button" class="btn btn-btn waves-effect waves-light btn-danger delete" data-toggle="modal"
                data-target="#dalete-modal" data-url="{{ route('users.destroy', $value->id) }}">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Danger Header Modal -->
<div id="dalete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dalete-modalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-colored-header bg-danger">
        <h4 class="modal-title" id="dalete-modalLabel">Delete User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <p>Anda Yakin Ingin Menghapus Data Ini ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <form action="" method="POST" id="form-delete">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Ya, hapus!</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection