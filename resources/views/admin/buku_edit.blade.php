@extends('layout.template')
@section('titlekonten', 'Data Buku')
@section('title', 'WEB PERPUS:Data Buku')
@section('konten')
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" >
              <style>
                  h3 {text-align: center;}
                  </style>
                <h3>Edit Data Buku</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data_buku as $data)
              <form action="/buku/update" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="kd_buku">Kode Buku</label>
                        <input type="hidden" name="id" value="{{ $data->id_buku }}">
                          <input type="text" name="kd_buku" class="form-control" id="kd_buku" value="{{$data->kd_buku}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                          <input type="text" name="judul_buku" class="form-control" id="judul_buku"value="{{$data->judul_buku}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                          <input type="text" name="pengarang" class="form-control" id="pengarang" value="{{$data->pengarang}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="thn_terbit">Tahun Terbit</label>
                          <input type="text" name="thn_terbit" class="form-control" id="thn_terbit" value="{{$data->thn_terbit}}">
                      </div>
                    </div>
                    <div class="col-6">
                     <div class="form-group">
                        <label for="jumlah">Jumlah Buku</label>
                          <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{$data->jumlah}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="gambar">Foto</label>
                          <input type="text" name="gambar" class="form-control" id="gambar" value="{{$data->gambar}}">
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                  <div class="card-footer">
                    <div class="text-right">  
                      <button type="submit" class="btn btn-primary">Update Data</button>
                      <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                  </div>
                </form>
            @endforeach
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection