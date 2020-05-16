@extends('layouts.layout')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Tambah Data Uji</h2>
    </div>
    <form action="{{ route('datas.store') }}" method="POST">
      @csrf
      <div class="form-body pl-4 pr-4">
        <div class="form-group row">
          <label for="sample" class="col-sm-3 col-form-label">Sample</label>
          <div class="col-sm-5">
            <input type="text" class="form-control @error('sample') is-invalid @enderror" id="sample" name="sample"
              placeholder="Sample" value="{{ old('sample') }}">
            @error('sample')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="lampu" class="col-sm-3 col-form-label">Lampu (watt)</label>
          <div class="col-sm-5">
            <input type="text" class="form-control @error('lampu') is-invalid @enderror" id="lampu" name="lampu"
              placeholder="Lampu (lampu)" value="{{ old('lampu') }}">
            @error('lampu')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="tt" class="col-sm-3 col-form-label">TT (cm)</label>
          <div class="col-sm-5">
            <input type="text" class="form-control @error('tt') is-invalid @enderror" id="tt" name="tt"
              placeholder="TT (cm)" value="{{ old('tt') }}">
            @error('tt')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="jd" class="col-sm-3 col-form-label">JD (lb)</label>
          <div class="col-sm-5">
            <input type="text" class="form-control @error('jd') is-invalid @enderror" id="jd" name="jd"
              placeholder="JD (lb)" value="{{ old('jd') }}">
            @error('jd')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-5 offset-3">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('datas') }}" class="btn btn-dark">Cancel</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection