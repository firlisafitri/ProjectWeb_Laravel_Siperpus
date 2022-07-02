@extends('layout.template')
@section('titlekonten', 'Data Karyawan')
@section('title', 'WEB PERPUS:Data Karyawan')
@section('konten')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Karyawan</h3>
            </div>
            <div class="card-body">
              <nav>
                <a class="btn btn-success btn-md" href="/karyawan_input"><i class="fas fa-plus"></i>Tambah Data</a>
              </nav>
            <br>
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th colspan="9"><center>Data Karyawan</center></th>
              </tr>
              <tr>
               <th>NO</th>
               <th>Nama Karyawan</th>
               <th>Nomer Handphone</th>
               <th>Alamat</th>
               <th>Foto</th>
               <th>action</th>
              </tr>
            </thead>
            <tbody>
          <?php $no=1;?>
          @foreach ($data_krywn as $data)
            <tr>
            <th>{{ $no++}}</th>
            <td>{{$data->nm_karyawan}}</td>
            <td>{{$data->nohp}}</td>
            <td>{{$data->alamat}}</td>
            <td><img src="{{url('gambar/'.$data->gambar)}}" width="100px"> </td>
            <td>
              <a href="/karyawan/edit/{{ $data->id_karyawan }}" class="btn btn-sm btn-warning">Edit</a>
              <a href="/karyawan/destroy/{{ $data->id_karyawan }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data ini ?')">Delete</a>
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