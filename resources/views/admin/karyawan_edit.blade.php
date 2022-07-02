@extends('layout.template')
@section('titlekonten', 'Data Karyawan ')
@section('title', 'WEB PERPUS:Data Karyawan')
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
                <h3>Edit Data Karyawan</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data_krywn as $data)
              <form action="/karyawan/update" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="nm_karyawan">Nama Karyawan</label>
                        <input type="hidden" name="id" value="{{ $data->id_karyawan }}">
                          <input type="text" name="nm_karyawan" class="form-control" id="nm_karyawan" value="{{$data->nm_karyawan}}">
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