@extends('layouts.master')

@push('css')

@endpush

@section('content')
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Anggota</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Show Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodeAnggota">Kode Anggota :</label>
                    <input type="text" name="kode_anggota" id="kodeAnggota" class="form-control"  placeholder="Masukkan Kode Anggota" value="{{ $anggotas[0]->kode_anggota }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="namaAnggota">Nama Anggota :</label>
                    <input type="text" name="nama_anggota" id="namaAnggota" class="form-control" placeholder="Masukkan Nama Anggota" value="{{ $anggotas[0]->nama_anggota }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="jkAnggota">Jenis Kelamin Anggota :</label>
                    <input type="text" name="jk_anggota" id="jkAnggota" class="form-control" placeholder="Masukkan Jenis Kelamin Anggota" value="{{ $anggotas[0]->jk_anggota }}" disabled>
                  </div>
                  <div class="form-group">
                      <label>Jurusan Anggota :</label>
                        <select class="custom-select" name="jurusan_anggota" id="jurusanAnggota" disabled>
                        <option selected> {{ $anggotas[0]->jurusan_anggota }} </option>
                        <option value="">Pilih Jurusan</option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TP">Teknik Pemesinan</option>
                        <option value="TFLM">Teknik Pengelasan</option>
                        <option value="DPIB">Desain Bangunan</option>
                        <option value="TO">Teknik Otomotif</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="noTelp">No. Telepon Anggota :</label>
                      <input type="text" class="form-control" name="no_telp_anggota" id="noTelp" placeholder="Masukkan No. Telepon" value="{{ $anggotas[0]->no_telp_anggota }}"disabled>
                  </div>
                  <div class="form-group">
                      <label>Alamat Anggota :</label>
                      <textarea class="form-control" name="alamat_anggota" id="alamatAnggota" rows="3" placeholder="Masukkan Alamat" disabled>{{ $anggotas[0]->alamat_anggota }}</textarea>
                  </div>  
                </div>
                <!-- /.card-body -->
            </div>

                <div class="card-footer">
                  <a href="{{ route('anggota.index') }}" class="btn btn-danger"><i class="fas fa-close"></i>Back</a>
                </div>

            @endsection