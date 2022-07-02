@extends('layout.template')
@section('titlekonten', 'Data Pengembalian')
@section('title', 'WEB PERPUS:Data Pengembalian')
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
                <h3>Edit Data Pengembalian</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($data_kembali as $data)
              <form action="/pengembalian/update" method="post">
              @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <div class="form-group">
                        <label for="kd_buku">Kode Buku</label>
                        <input type="hidden" name="id" value="{{ $data->id_pengembalian }}">
                          <input type="text" name="kd_buku" class="form-control" id="kd_buku" value="{{$data->kd_buku}}">
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
                        <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                          <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian" value="{{$data->tgl_pengembalian}}">
                      </div>
                    </div>
                    <div class="col-6">
                     <div class="form-group">
                        <label for="denda">Denda</label>
                          <input type="text" name="denda" class="form-control" id="denda" value="{{$data->denda}}">
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