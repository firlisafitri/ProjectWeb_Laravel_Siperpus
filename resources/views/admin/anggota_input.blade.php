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
                <h3>Input Data Anggota</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/anggota" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="nama">Nama Anggota</label>
                          <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama Anggota">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="nohp">Nomer Handphone</label>
                          <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Enter Nomer Handphone">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="alamat">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="gambar">Foto</label>
                          <input type="text" name="gambar" class="form-control" id="gambar" placeholder="Enter Nama Foto">
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                  <div class="card-footer">
                    <div class="text-right">  
                      <button type="submit" class="btn btn-primary">Simpan Data</button>
                      <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                  </div>
                </form>
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