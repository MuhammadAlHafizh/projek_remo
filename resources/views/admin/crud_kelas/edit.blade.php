@extends('layouts.app-admin')
@section('judul_halaman', 'Update Kelas')
@section('content')

<div class="row">
              <div class="col-sm-8">
      
                <div class="card">
                  <div class="card-body">
                    <form class="form-validate" action="{{ route('Kelas.update', $edit->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
        
                      <div class="row g-3 mb-3">
                        <div class="col-md-12">
                          <label class="form-label" for="nama_kelas">Nama Kelas</label>
                          <input class="form-control" id="nama_kelas" type="text" name="nama_kelas" value="{{ $edit->nama_kelas }}" required>
                        </div>

                        <div class="col-md-12">
                          <label class="form-label" for="nama_kelas">Kompetensi</label>
                          <input class="form-control" id="nama_kelas" type="text" name="kompetensi" value="{{ $edit->kompetensi }}" required>
                        </div>
                        <!--
                        <div class="col-md-3">
                          <label class="form-label" for="validationDefault04">State</label>
                          <select class="form-select" id="validationDefault04" required="">
                            <option selected="" disabled="" value="">Choose...</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="validationDefault05">Zip</label>
                          <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="" data-bs-original-title="" title="">
                        </div>
                        -->
                      </div>

                      <!--
                      <div class="mb-3">
                        <div class="form-check">
                          <div class="checkbox p-0">
                            <input class="form-check-input" id="invalidCheck2" type="checkbox" required="" data-bs-original-title="" title="">
                            <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
                          </div>
                        </div>
                      </div>
                      -->
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
                </div>
      
    
              </div>
            </div>
@endsection                    