@extends('layout.template')
@section('titlekonten', 'Data Buku')
@section('title', 'WEB PERPUS:Data Buku')
@section('konten')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Buku</h3>
            </div>
            <div class="card-body">
              <nav>
                <a class="btn btn-success btn-md" href="/buku_input"><i class="fas fa-plus"></i>Tambah Data</a>
              </nav>
            <br>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th colspan="9"><center>Data Buku</center></th>
              </tr>
              <tr>
               <th>NO</th>
               <th>Kode Buku</th>
               <th>Judul Buku</th>
               <th>Pengarang</th>
               <th>Tahun Terbit</th>
               <th>Jumlah Buku</th>
               <th>foto</th>
               <th>action</th>
              </tr>
            </thead>
            <tbody>
          <?php $no=1;?>
          @foreach ($data_buku as $data)
            <tr>
            <th>{{ $no++}}</th>
            <td>{{$data->kd_buku}}</td>
            <td>{{$data->judul_buku}}</td>
            <td>{{$data->pengarang}}</td>
            <td>{{$data->thn_terbit}}</td>
            <td>{{$data->jumlah}}</td>
            <td><img src="{{url('gambar/'.$data->gambar)}}" width="100px"> </td>
            <td>
              <a href="/buku/edit/{{ $data->id_buku }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="/buku/destroy/{{ $data->id_buku }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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