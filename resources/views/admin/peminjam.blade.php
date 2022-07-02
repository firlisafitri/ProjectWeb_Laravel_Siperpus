@extends('layout.template')
@section('titlekonten', 'Data Peminjam')
@section('title', 'WEB PERPUS:Data Peminjam')
@section('konten')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Peminjam</h3>
            </div>
            <div class="card-body">
              <nav>
                <a class="btn btn-success btn-md" href="/peminjam_input"><i class="fas fa-plus"></i>Tambah Data</a>
              </nav>
            <br>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th colspan="9"><center>Data Peminjam</center></th>
              </tr>
              <tr>
               <th>NO</th>
               <th>Kode Buku</th>
               <th>Nama Peminjam</th>
               <th>Nama Buku</th>
               <th>Tanggal Meminjam</th>
               <th>action</th>
              </tr>
            </thead>
            <tbody>
          <?php $no=1;?>
          @foreach ($data_peminjam as $data)
            <tr>
            <th>{{ $no++}}</th>
            <td>{{$data->kode_buku}}</td>
            <td>{{$data->nm_peminjam}}</td>
            <td>{{$data->nm_buku}}</td>
            <td>{{$data->tgl_meminjam}}</td>
            <td>
              <a href="/peminjam/edit/{{ $data->id_peminjam }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="/peminjam/destroy/{{ $data->id_peminjam }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
            </td>
          </tr>
        @endforeach
          </tbody>
        </tfoot>
      </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection