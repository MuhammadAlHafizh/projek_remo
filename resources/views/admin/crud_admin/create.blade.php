@extends('layouts.app-admin')
@section('judul_halaman', 'Create Admin')
@section('content')

<div class="row">
              <div class="col-sm-8">
      
                <div class="card">
                  <div class="card-body">
                    <form class="form-validate" action="{{ route('Admin.store') }}" method="post">
                    @csrf
                    {{ method_field('POST') }}
        
                      <div class="row g-3 mb-3">
                        <div class="col-md-12">
                          <label class="form-label" for="nama_admin">Nama Admin</label>
                          <input class="form-control" id="nama_admin" type="text" name="nama_admin" required>
                        </div>

                        <div class="col-md-12">
                          <label class="form-label" for="email">Email</label>
                          <input class="form-control" id="email" type="email" name="email" required>
                        </div>

                        <div class="col-md-12">
                          <label class="form-label" for="password">Password</label>
                          <input class="form-control" id="password" type="text" name="password" required>
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
                      </div>
                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                  </div>
                </div>
      
    
              </div>
            </div>
@endsection                    