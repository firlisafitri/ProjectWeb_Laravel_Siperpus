@extends('layout.template')
@section('titlekonten', 'Data Pengembalian')
@section('title', 'WEB PERPUS:Data Pengembalian')
@section('konten')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pengembalian</h3>
            </div>
            <div class="card-body">
              <nav>
                <a class="btn btn-success btn-md" href="/pengembalian_input"><i class="fas fa-plus"></i>Tambah Data</a>
              </nav>
            <br>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th colspan="9"><center>Data Pengembalian</center></th>
              </tr>
              <tr>
               <th>NO</th>
               <th>Kode Buku</th>
               <th>Nama Peminjam</th>
               <th>Nama Buku</th>
               <th>Tanggal Pengembalian</th>
               <th>Denda</th>
               <th>action</th>
              </tr>
            </thead>
            <tbody>
          <?php $no=1;?>
          @foreach ($data_kembali as $data)
            <tr>
            <th>{{ $no++}}</th>
            <td>{{$data->kd_buku}}</td>
            <td>{{$data->nm_peminjam}}</td>
            <td>{{$data->nm_buku}}</td>
            <td>{{$data->tgl_pengembalian}}</td>
            <td>{{$data->denda}}</td>
            <td>
              <a href="/pengembalian/edit/{{ $data->id_pengembalian }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="/pengembalian/destroy/{{ $data->id_pengembalian }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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