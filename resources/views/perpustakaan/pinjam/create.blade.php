        @extends('layouts.master')
        
        @push('css')

        @endpush

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('peminjaman.store') }}" method="POST">
                @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="tanggalPinjam">Tanggal Pinjam :</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" id="tanggalPinjam" placeholder="Masukkan Tanggal Pinjam" value="{{ old('tanggal_pinjam') }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggalKembali">Tanggal Kembali :</label>
                        <input type="date" class="form-control" name="tanggal_kembali" id="tanggalKembali" placeholder="Masukkan Nama" value="{{ old('tanggal_kembali') }}">
                    </div>
                    <div class="form-group">
                        <label> Anggota :</label>
                        <select class="custom-select" name="anggota_id" id="anggota">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($anggotas as $key => $value )
                                <option value="{{ $value->id }}">{{ $value->nama_anggota }}</option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse 
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Petugas :</label>
                        <select class="custom-select" name="petugas_id" id="petugas">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($petugass as $key => $value )
                                <option value="{{ $value->id }}">{{ $value->nama_petugas }}</option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse 
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Buku :</label>
                        <select class="custom-select" name="buku_id" id="buku">
                            <option disabled selected>--Pilih Salah Satu--</option>
                            @forelse ($bukus as $key => $value )
                                <option value="{{ $value->id }}">{{ $value->judul_buku }}</option>
                            @empty
                                <option disabled>--Data Masih Kosong--</option>
                            @endforelse 
                        </select>
                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
        @endsection