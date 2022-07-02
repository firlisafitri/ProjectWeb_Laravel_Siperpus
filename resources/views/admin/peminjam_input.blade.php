@extends('layout.template')
@section('titlekonten', 'Data Peminjam')
@section('title', 'WEB PERPUS:Data Peminjam')
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
                <h3>Input Data Peminjam</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/peminjam" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                          <input type="text" name="kode_buku" class="form-control" id="kode_buku" placeholder="Enter Kode Buku">
                      </div>
                    </div>
                    <div class="col-6">
                     <div class="form-group">
                        <label for="nm_peminjam">Nama Peminjam</label>
                          <input type="text" name="nm_peminjam" class="form-control" id="nm_peminjam" placeholder="Enter Nama Peminjam">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="nm_buku">Nama Buku</label>
                          <input type="text" name="nm_buku" class="form-control" id="nm_buku" placeholder="Enter Nama Buku">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="tgl_meminjam">Tanggal Meminjam</label>
                          <input type="date" name="tgl_meminjam" class="form-control" id="tgl_meminjam" placeholder="Enter Tanggal Meminjam">
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