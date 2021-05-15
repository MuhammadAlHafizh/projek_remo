

@if ($paginator->hasPages())
<div class="d-flex justify-content-between mx-2 row mb-1">
				<div class="col-sm-12 col-md-6">
					
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
						<ul class="pagination">
                            @if ($paginator->onFirstPage())
							<li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous" aria-label="@lang('pagination.previous')">
								<a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link" data-page="prev">&nbsp;</a>
							</li>
                            @else
                            <li class="paginate_button page-item previous" id="DataTables_Table_0_previous" aria-label="@lang('pagination.previous')">
								<a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link" aria-label="@lang('pagination.previous')" data-page="prev">&nbsp;</a>
							</li>
                            @endif
                            


    @foreach ($elements as $element)
        
    @if (is_string($element))
        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="paginate_button page-item active" aria-current="page">
					<a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link" data-page="1">{{ $page }}</a>
				</li>
            @else
                <li class="paginate_button page-item ">
					<a href="{{ $url }}" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">{{ $page }}</a>
				</li>
            @endif
        @endforeach
    @endif
    @endforeach
							
				
                            @if ($paginator->hasMorePages())
                            <li class="paginate_button page-item next" id="DataTables_Table_0_next">
								<a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" data-page="next" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">&nbsp;</a>
							</li>
                            @else
                            <li class="paginate_button page-item next disable" id="DataTables_Table_0_next">
								<a aria-disabled="true" rel="next" aria-label="@lang('pagination.next')" data-page="next" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">&nbsp;</a>
							</li>
                            @endif

						</ul>
					</div>
				</div>
			</div>
            @endif