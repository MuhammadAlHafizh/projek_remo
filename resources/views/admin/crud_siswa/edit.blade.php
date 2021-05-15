@extends('layouts.app-admin')
@section('judul_halaman', 'Update Siswas')
@section('content')

<div class="row">
              <div class="col-sm-8">
      
                <div class="card">
                  <div class="card-body">
                  <form class="form-validate" action="{{ route('Siswa.update', $siswa->id) }}" method="post">
                    @method('PUT')
                    @csrf
        
                      <div class="row g-3 mb-3">
                        <div class="col-md-12">
                          <label class="form-label" for="nama_siswa">Nama Siswa</label>
                          <input class="form-control" id="nama_siswa" type="text" name="nama_siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" required>
                        </div>

                  
                        <div class="col-md-12">
                          <label class="form-label" for="kelas_id">Kelas</label>              
                        <select class="form-select @error('kelas_id') is-invalid @enderror" id="kelas_id" name="kelas_id" value="{{ old('kelas_id', $siswa->kelas_id) }}" aria-label="select example">
                          <option value="">- Pilih -</option>
                          @foreach($kelas as $item)
                          <option value="{{$item->id}}" {{ old('kelas_id', $siswa->kelas_id) == $item->id ? 'selected' : null}} >{{$item->nama_kelas}}</option>
                          @endforeach
                        </select>
                          @error('kelas_id')
      						        <small class="text-danger"> {{ $message }}</small>
      						        @enderror
                        <!-- <div class="invalid-feedback">Example invalid select feedback</div> -->
                        </div>


                        <div class="col-md-12">
                          <label class="form-label" for="nis">NIS</label>
                          <input class="form-control" id="nis" type="text" name="nis" value="{{ old('nis', $siswa->nis) }}" required>
                        </div>

                  
                        <div class="col-md-12">
                          <label class="form-label" for="alamat">Alamat</label>
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $siswa->alamat) }}">
                          @error('alamat')
      						        <small class="text-danger"> {{ $message }}</small>
      						        @enderror

                        </div>

                  
                        <div class="col-md-12">
                          <label class="form-label" for="no_telp">No.Telepon</label>
                          <input class="form-control" id="no_telp" type="text" name="no_telp" value="{{ old('no_telp', $siswa->no_telp) }}" required>
                        </div>

                  
                        <div class="col-md-12">
                          <label class="form-label" for="email">E-mail</label>
                          <input class="form-control" id="email" type="text" name="email" value="{{ old('email', $siswa->email) }}" required>
                        </div>

                  
                        <div class="col-md-12">
                          <label class="form-label" for="password">Password</label>
                          <input class="form-control" id="password" type="text" name="password" value="{{ old('password', $siswa->password) }}" required>
                        </div>

                      </div>
                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                  </div>
                </div>
      
    
              </div>
            </div>
@endsection                    
    
    
   
   