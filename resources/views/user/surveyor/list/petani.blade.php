@extends('user.surveyor.base')

@section('title', 'List Petani | GOPRO')

@section('titlepageheader', 'List Petani')

@section('surveyor')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Data Petani</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Kontak</th>
                        <th>Perusahaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($user as $us)
                    <tr>
                        <td>{{ $us -> nama }}</td>
                        <td>{{ $us -> tanggallahir }}</td>
                        <td>{{ $us -> jeniskelamin }}</td>
                        <td>{{ $us -> status }}</td>
                        <td>{{ $us -> username }}</td>
                        <td>{{ $us -> email }}</td>
                        <td>{{ $us -> kontak }}</td>
                        <td>{{ $us -> perusahaan }}</td>
                        <td><a class="btn btn-primary" href="{{ route('detailpetani', $us->id) }}">Detail</a></td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Status</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Kontak</th>
                      <th>Perusahaan</th>
                      <th>Aksi</th>
                  </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
