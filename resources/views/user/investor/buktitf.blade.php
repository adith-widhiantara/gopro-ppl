@extends('user.petani.product.base')

@section('title', 'Detail Proyek')

@section('product')
<div style="margin-top: 10px;" class="container">
  <div class="card">
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload Bukti Transfer</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="buktitf1">
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
      </form>
    </div>
  </div>
</div>
@endsection
