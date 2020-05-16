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
      <h2 class="card-title">Data Lists</h2>
      <a href="{{ route('datas.create') }}" class="btn waves-effect waves-light btn-primary">
        Tambah Data
      </a>
    </div>
    <div class="table-responsive-xl p-2">
      <table class="table table-bordered table-hover">
        <thead class="bg-primary text-white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Sample</th>
            <th scope="col">Lampu (watt)</th>
            <th scope="col">TT (cm)</th>
            <th scope="col">JD (lb)</th>
            <th scope="col">Nilai Jaccard</th>
            <th scope="col">Nilai Cosine Similarity</th>
            <th scope="col">Nilai Euclidean Distance</th>
            <th scope="col">Nilai Manhattan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data => $value)
          <tr>
            <td>{{ $data + 1 }}</td>
            <td>{{ $value->sample }}</td>
            <td>{{ $value->lampu }}</td>
            <td>{{ $value->tt }}</td>
            <td>{{ $value->jd }}</td>
            <td>{{ $value->jaccard }}</td>
            <td>{{ $value->cosine_similarity }}</td>
            <td>{{ $value->euclidean_distance }}</td>
            <td>{{ $value->manhattan }}</td>
            <td>
              <div class="d-flex flex-column">
                <a href="{{ route('datas.show', $value->id) }}"
                  class="btn btn-btn waves-effect waves-light btn-info mb-2">Detail</a>
                <a href="{{ route('datas.edit', $value->id) }}"
                  class="btn btn-btn waves-effect waves-light btn-warning mb-2">Edit</a>
                <button type="button" class="btn btn-btn waves-effect waves-light btn-danger delete" data-toggle="modal"
                  data-target="#delete-modal" data-url="{{ route('datas.destroy', $value->id) }}">Delete</button>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Danger Header Modal -->
<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-modalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-colored-header bg-danger">
        <h4 class="modal-title" id="delete-modalLabel">Delete Data</h4>
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