@extends('layout.template')
@section('titlekonten', 'Data Peminjam ')
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
                <h3>Edit Data Peminjam</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data_peminjam as $data)
              <form action="/peminjam/update" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="hidden" name="id" value="{{ $data->id_peminjam }}">
                          <input type="text" name="kode_buku" class="form-control" id="kode_buku" value="{{$data->kode_buku}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="nm_peminjam">Nama Peminjam</label>
                          <input type="text" name="nm_peminjam" class="form-control" id="nm_peminjam" value="{{$data->nm_peminjam}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="nm_buku">Nama Buku</label>
                          <input type="text" name="nm_buku" class="form-control" id="nm_buku" value="{{$data->nm_buku}}">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="tgl_meminjam">Tanggal Meminjam</label>
                          <input type="date" name="tgl_meminjam" class="form-control" id="tgl_meminjam" value="{{$data->tgl_meminjam}}">
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