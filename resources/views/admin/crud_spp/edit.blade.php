@extends('layouts.app-admin')
@section('judul_halaman', 'Update Spp')
@section('content')

<div class="row">
              <div class="col-sm-8">
      
                <div class="card">
                  <div class="card-body">
                    <form class="form-validate" action="{{ route('Spp.update', $edit->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
        
                      <div class="row g-3 mb-3">
                        <div class="col-md-12">
                          <label class="form-label" for="nama_spp">Nama SPP</label>
                          <input class="form-control" id="nama_spp" type="text" name="nama_spp" value="{{ $edit->nama_spp }}" required>
                        </div>

                        <div class="col-md-12">
                          <label class="form-label" for="nominal">Nominal</label>
                          <input class="form-control" id="nominal" type="text" name="nominal" value="{{ $edit->nominal }}" required>
                        </div>

                        <div class="col-md-12">
                          <label class="form-label" for="tahun">Tahun</label>
                          <input class="form-control" id="tahun" type="text" name="tahun" value="{{ $edit->tahun }}" required>
                        </div>

                        <div class="col-md-12">
                          <label class="form-label" for="bulan">Bulan</label>
                          <input class="form-control" id="bulan" type="text" name="bulan" value="{{ $edit->bulan }}" required>
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