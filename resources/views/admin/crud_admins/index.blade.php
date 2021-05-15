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
                    <li class="breadcrumb-item">Admin
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
<section class="app-user-list">
  <!-- list section start -->
  <div class="card">
	<div class="card-datatable table-responsive pt-0">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
			<div class="d-flex justify-content-between align-items-center header-actions mx-1 row mt-75">
				<div class="col-lg-12 col-xl-6">
				<h4 style="margin-left: 5px;">List Admin</h4>
				</div>
				<div class="col-lg-12 col-xl-6 pl-xl-75 pl-0">
					<div class="dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1">
						<div class="mr-1">
							<div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <form action="{{ url()->current() }}" method="get">
								<input type="search" name="keyword" class="form-control" placeholder="Search Admin" autocomplete="off" aria-controls="DataTables_Table_0" {{ request('keyword') }}>
                                </form>
							</div>
						</div>
						<div class="dt-buttons btn-group flex-wrap">
							<a href="{{ route('Admin.create') }}" type="button" class="btn btn-icon btn-outline-success waves-effect mt-add-1">
							<i data-feather="user-plus"></i>
              				</a>
						</div>
					</div>
				</div>
			</div>
			<table class="user-list-table table dataTable no-footer dtr-column collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1151px;">
			<thead class="thead-light">
			<tr role="row">
	    	<th class="control" rowspan="1" colspan="1" style="width: 10px;" aria-label="">No</th>
            <th class="control" rowspan="1" colspan="1" style="width: 200px;" aria-label="">Nama</th>
            <th class="control" rowspan="1" colspan="1" style="width: 0px;" aria-label="">Password</th>
            <th class="control" rowspan="1" colspan="1" style="width: 0px;" aria-label="">Action</th>
			</tr>
			</thead>
			<tbody>
                @foreach($data as $no =>$d)
			<tr role="row" class="odd">
                <td class="sorting_1" style="">{{ $no+1 }}</td>
				<td>
					<div class="d-flex justify-content-left align-items-center">
						<div class="avatar-wrapper">
							<div class="avatar mr-1">
								<img src="{{ asset('app-assets/images/avatars/1-small.png') }}" alt="Avatar" height="32" width="32">
							</div>
						</div>
						<div class="d-flex flex-column">
							<a class="user_name text-truncate"><span class="font-weight-bold">{{ $d->nama_lengkap }}</span></a><small class="emp_post text-muted">{{ $d->email }}</small>
						</div>
					</div>
				</td>
                <td>{{ $d->password }}</td>
				<td>
					<div class="d-flex align-items-center col-actions">
						<form action="{{ route('Admin.destroy', $d->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-icon btn-flat-danger waves-effect mr-1">
						<i data-feather="trash"></i>
						</button>
						</form>

						<a href="{{ route('Admin.edit', $d->id) }}" class="btn btn-icon btn-flat-warning waves-effect mr-1">
						<i data-feather="edit"></i>
						</a>	
					</div>
				</td>
			</tr>
			@endforeach
			</tbody>
			</table>
            
		{{ $data->links('vendor.pagination.custom') }}
		</div>
	</div>
  </div>
  <!-- list section end -->
</section>
@endsection