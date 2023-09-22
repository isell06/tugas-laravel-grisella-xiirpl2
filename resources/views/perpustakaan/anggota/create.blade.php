        @extends('layouts.master')

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeAnggota">Kode Anggota :</label>
                        <input type="text" class="form-control" name="kode_anggota" id="kodeAnggota" placeholder="Masukkan Kode">
                    </div>
                    <div class="form-group">
                        <label for="namaAnggota">Nama Anggota :</label>
                        <input type="text" class="form-control" name="nama_anggota" id="namaAnggota" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="jkAnggota">Jenis Kelamin Anggota :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk_anggota" value="L">
                                <label class="form-check-label">L</label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_anggota" value="P">
                            <label class="form-check-label">P</label>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Jurusan Anggota :</label>
                        <select class="custom-select" name="jurusan_anggota" id="jurusanAnggota">
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
                        <input type="text" class="form-control" name="no_telp_anggota" id="noTelp" placeholder="Masukkan No. Telepon">
                    </div>
                    <div class="form-group">
                        <label>Alamat Anggota :</label>
                        <textarea class="form-control" name="alamat_anggota" id="alamatAnggota" rows="3" placeholder="Masukkan Alamat"></textarea>
                    </div>  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('anggota.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
        @endsection