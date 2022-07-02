@extends('layout.template')
@section('titlekonten', 'Data Anggota')
@section('title', 'WEB PERPUS:Data Anggota')
@section('konten')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Anggota</h3>
            </div>
            <div class="card-body">
              <nav>
                <a class="btn btn-success btn-md" href="/anggota_input"><i class="fas fa-plus"></i>Tambah Data</a>
              </nav>
            <br>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th colspan="9"><center>Data Anggota</center></th>
              </tr>
              <tr>
               <th>NO</th>
               <th>Nama Anggota</th>
               <th>Nomer Handphone</th>
               <th>Alamat</th>
               <th>Foto</th>
               <th>action</th>
              </tr>
            </thead>
            <tbody>
          <?php $no=1;?>
          @foreach ($data_agt as $data)
            <tr>
            <th>{{ $no++}}</th>
            <td>{{$data->nama}}</td>
            <td>{{$data->nohp}}</td>
            <td>{{$data->alamat}}</td>
            <td><img src="{{url('gambar/'.$data->gambar)}}" width="100px"> </td>
            <td>
              <a href="/anggota/edit/{{ $data->id_anggota }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="/anggota/destroy/{{ $data->id_anggota }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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