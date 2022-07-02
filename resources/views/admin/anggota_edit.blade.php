@extends('layout.template')
@section('titlekonten', 'Data Anggota')
@section('title', 'WEB PERPUS:Data Anggota')
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
                <h3>Edit Data Anggota</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data_agt as $data)
              <form action="/anggota/update" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="nama">Nama Anggota</label>
                        <input type="hidden" name="id" value="{{ $data->id_anggota }}">
                          <input type="text" name="nama" class="form-control" id="nama" value="{{$data->nama}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="nohp">Nomer Handphone</label>
                          <input type="text" name="nohp" class="form-control" id="nohp"value="{{$data->nohp}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="alamat" value="{{$data->alamat}}">
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