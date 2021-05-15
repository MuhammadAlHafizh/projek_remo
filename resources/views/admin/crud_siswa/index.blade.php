@extends('layouts.app-admin')

@section('judul_halaman', 'List Siswa')
@section('content')
<div class="row">
              <div class="col-sm-12">
                <div class="card">
				  <!--
                  <div class="card-header">
                    <h5>Hover Table </h5>
                  </div>
				  -->

				  
                  <div class="card-body">
                    <div class="table-responsive">
                      <div id="example-style-4_wrapper" class="dataTables_wrapper">
					  	<div class="dataTables_length" id="example-style-4_length">
						  <!--
						  <label>Show <select name="example-style-4_length" aria-controls="example-style-4" class="">
						  	<option value="10">10</option><option value="25">25</option>
							<option value="50">50</option><option value="100">100</option>
							</select> entries</label>
							-->
							<a href="{{ route('Siswa.create') }}">
				    <button class="btn btn-success" data-toggle="tooltip" title="" data-bs-original-title="btn btn-info" data-original-title="btn btn-primary active">Create</button>
							</a>
							</div>

							<div id="example-style-4_filter" class="dataTables_filter">
								<input type="search" class="" placeholder="Search" aria-controls="example-style-4" data-bs-original-title="" title=""></></div><table class="hover dataTable" id="example-style-4" role="grid" aria-describedby="example-style-4_info">
                        <thead>
                          <tr role="row">
						  <th class="sorting_asc" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 126px;">No</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">ID</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 2000px;">Nama Siswa</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 900px;">Kelas ID</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 2000px;">Kompetensi</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 900px;">NIS</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 900px;">Alamat</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 900px;">No.Telepon</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 900px;">E-mail</th>
						  <th class="sorting" tabindex="0" aria-controls="example-style-4" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 500px;">Aksi</th></tr>
                        </thead>
                        <tbody>
						@foreach($data as $num =>$item)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{ $num+1 }}</td>
							<td>{{ $item->id }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
							<td>{{ $item->kelas->kompetensi }}</td>
							<td>{{ $item->nis }}</td>
							<td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_telp }}</td>
							<td>{{ $item->email }}</td>
							<td>{{ $item->password }}</td>
                            <td>
								<form action="{{ route('Siswa.destroy', $item->id) }}" method="POST">
                    				@csrf
                    				@method('DELETE')                    
                              		<button Type="submit" class="btn btn-danger btn-xs" type="button">Delete</button>
                				</form>
							

                                    <a href="{{ route('Siswa.edit', $item->id) }}">
									<button class="btn btn-warning btn-xs" type="button">Edit</button>
									</a>
							</td>
                          </tr>
						@endforeach
						</tbody>
						<!--
                        <tfoot>
                          <tr>
						  <th rowspan="1" colspan="1">No</th>
						  <th rowspan="1" colspan="1">ID</th>
						  <th rowspan="1" colspan="1">Nama Kelas</th>
						  <th rowspan="1" colspan="1">Kompetensi</th>
						  <th rowspan="1" colspan="1">Aksi</th></tr>
                        </tfoot>
						-->
                      </table>
						<!--
					  <div class="dataTables_info" id="example-style-4_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example-style-4_paginate"><a class="paginate_button previous disabled" aria-controls="example-style-4" data-dt-idx="0" tabindex="0" id="example-style-4_previous" data-bs-original-title="" title="">Previous</a><span><a class="paginate_button current" aria-controls="example-style-4" data-dt-idx="1" tabindex="0" data-bs-original-title="" title="">1</a><a class="paginate_button " aria-controls="example-style-4" data-dt-idx="2" tabindex="0" data-bs-original-title="" title="">2</a><a class="paginate_button " aria-controls="example-style-4" data-dt-idx="3" tabindex="0" data-bs-original-title="" title="">3</a><a class="paginate_button " aria-controls="example-style-4" data-dt-idx="4" tabindex="0" data-bs-original-title="" title="">4</a><a class="paginate_button " aria-controls="example-style-4" data-dt-idx="5" tabindex="0" data-bs-original-title="" title="">5</a><a class="paginate_button " aria-controls="example-style-4" data-dt-idx="6" tabindex="0" data-bs-original-title="" title="">6</a></span><a class="paginate_button next" aria-controls="example-style-4" data-dt-idx="7" tabindex="0" id="example-style-4_next" data-bs-original-title="" title="">Next</a></div></div>
					  -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
			
			
			
						

	
			
	
			
	


<!--

			<form class="add-new-user modal-content pt-0 form-validate" validate="validate" action="{{ route('Kelas.store') }}" method="post">
          	{{ method_field('POST') }}
            @csrf


					<div class="form-group">
						<label class="form-label" for="prioritas">Status</label>
						<input type="text" class="form-control dt-full-name" id="prioritas" placeholder="Status" name="status" autocomplete="off" required>
						@error('status')
						<small class="text-danger" style="margin-top: 2px;"> {{ $message }}</small>
						@enderror
						
					</div>

					<button type="submit" class="btn btn-primary mr-1 data-submit waves-effect waves-float waves-light">Create</button>
					<button type="button" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">Cancel</button>
					-->