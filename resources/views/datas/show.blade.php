@extends('layouts.layout')

@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Detail Data</h2>
    </div>
    <div class="form-body pl-4 pr-4">
      <div class="form-group row">
        <label for="sample" class="col-sm-3 col-form-label">Sample</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="sample" name="sample" placeholder="Sample"
            value="{{ $data->sample }}" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="lampu" class="col-sm-3 col-form-label">Lampu (watt)</label>
        <div class="col-sm-5">
          <input type="text" class="form-control " id="lampu" name="lampu" placeholder="Lampu (lampu)"
            value="{{ $data->lampu }}" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="tt" class="col-sm-3 col-form-label">TT (cm)</label>
        <div class="col-sm-5">
          <input type="text" class="form-control " id="tt" name="tt" placeholder="TT (cm)" value="{{ $data->tt }}"
            readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="jd" class="col-sm-3 col-form-label">JD (lb)</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="jd" name="jd" placeholder="JD (lb)" value="{{ $data->jd }}"
            readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nilai Jaccard</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" value="{{ $data->jaccard }}" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nilai Cosine Similarity</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" value="{{ $data->cosine_similarity }}" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nilai Euclidean Distance</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" value="{{ $data->euclidean_distance }}" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Nilai Manhattan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" value="{{ $data->manhattan }}" readonly>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-5 offset-3">
          <a href="{{ route('datas') }}" class="btn btn-dark">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection