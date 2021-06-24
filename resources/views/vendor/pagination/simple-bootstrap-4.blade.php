@if ($paginator->hasPages())
    <nav aria-label="Paginate">
        <div class="clearfix">
        {{-- <ul class="pagination"> --}}
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li class="page-item disabled" aria-disabled="true"> --}}
                    <span class="btn btn-primary float-left">&larr; Newer Posts </span>
                
            @else
                {{-- <li class="page-item"> --}}
                    <a class="btn btn-primary float-left" href="{{ $paginator->previousPageUrl() }}" rel="prev">Newer Posts &rarr;</a>
                    {{-- <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a> 
                </li>--}}
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- <li class="page-item"> --}}
                    <a class="btn btn-primary float-right" href="{{ $paginator->nextPageUrl() }}" rel="next">Older Posts &rarr;</a>
                   {{-- <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li> --}}
            @else 
                 <span class="btn btn-primary float-right">Older Posts</span>
                {{--<li class="page-item disabled" aria-disabled="true">--}}
                {{-- <span class="page-link">@lang('pagination.next')</span> --}}
        
            @endif
        
    </nav>
</div>
@endif

 
         
        