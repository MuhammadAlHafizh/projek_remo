
@extends('layouts.app-admin')
@section('content-header')
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Table Master
                    </li>
                    <li class="breadcrumb-item">Pengguna
                    </li>
                    <li class="breadcrumb-item">Edit User
                    </li>
                  </ol>
                </div> 
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
@endsection

@section('content-body')
<section class="app-user-edit">
  <div class="card">
    <div class="card-body">
      <div class="tab-content">
        <!-- Account Tab starts -->
        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
          <!-- users edit media object start -->
          <div class="media mb-2">
            <img src="{{ asset('app-assets/images/avatars/7.png') }}" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90">
            <div class="media-body mt-50">
              <h4>{{ $edit->nama_lengkap }}</h4>
              <div class="col-12 d-flex mt-1 px-0">
                <label class="btn btn-primary mr-75 mb-0 waves-effect waves-float waves-light" for="change-picture">
                  <span class="d-none d-sm-block">Change</span>
                  <input class="form-control" type="file" id="change-picture" hidden="" accept="image/png, image/jpeg, image/jpg">
                  <span class="d-block d-sm-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit mr-0"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                  </span>
                </label>
                <button class="btn btn-outline-secondary d-none d-sm-block waves-effect">Remove</button>
                <button class="btn btn-outline-secondary d-block d-sm-none waves-effect">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-0"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                </button>
              </div>
            </div>
          </div>
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form class="form-validate" validate="validate" action="{{ route('User.update', $edit->id)}}" method="post">
           @csrf
           @method('put')
            <div class="row">
        
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $edit->nama_lengkap }}" required>
                  @error('nama_lengkap')
						      <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
      						@enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" name="email" id="email" value="{{ $edit->email }}" required>
                  @error('email')
						      <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
      						@enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" name="password" id="password" value="{{ $edit->password }}" required>
                  @error('password')
						      <small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
      						@enderror
                </div>
              </div>

              <!-- <div class="col-md-4">
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="status">
                    <option>Active</option>
                    <option>Blocked</option>
                    <option>Deactivated</option>
                  </select>
                </div>
              </div> -->
              <!-- <div class="col-md-4">
                <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control" id="role">
                    <option>Admin</option>
                    <option>User</option>
                    <option>Staff</option>
                  </select>
                </div>
              </div> -->
              <!-- <div class="col-md-4">
                <div class="form-group">
                  <label for="company">Company</label>
                  <input type="text" class="form-control" value="WinDon Technologies Pvt Ltd" placeholder="Company name" id="company">
                </div>
              </div> -->
          
              <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light">Update</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>
        <!-- Account Tab ends -->

     

      </div>
    </div>
  </div>
</section>
@endsection











                    