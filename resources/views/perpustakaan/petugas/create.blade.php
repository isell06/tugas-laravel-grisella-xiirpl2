        @extends('layouts.master')

        @push('css')

        @endpush

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{ route('petugass.store') }}" method="POST">
                @csrf 
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaPetugas">Nama Petugas :</label>
                            <input type="text" class="form-control" name="nama_petugas" id="namaPetugas" placeholder="Masukkan Nama" value="{{ old('nama_petugas') }}">
                        </div>
                        <div class="form-group">
                            <label>Jabatan Petugas :</label>
                            <select class="custom-select" name="jabatan_petugas">
                            <option value="">Pilih Jabatan</option>
                            <option value="kepala-perpus">Kepala Perpustakaan</option>
                            <option value="asisten-kepala-perpus">Asisten Kepala Perpustakaan</option>
                            <option value="admin">Administrasi</option>
                            <option value="Lainnya">DLL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="noTelp">No. Telepon Petugas :</label>
                            <input type="text" class="form-control" name="no_telp_petugas" id="noTelp" placeholder="Masukkan No. Telepon" value="{{ old('no_telp_petugas') }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat Petugas :</label>
                            <textarea class="form-control" name="alamat_petugas" id="alamatPetugas" rows="3" placeholder="Masukkan Alamat" value="{{ old('alamat_petugas') }}"></textarea>
                        </div>  
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('petugass.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        @endsection