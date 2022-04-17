<style>

    .page_main{
        display: flex;
        justify-content: center
    }
    .pagination {
        background: #fff;
        display: inline-block;
        border-radius: 10px;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .pagination a {
        margin: 0 2px;
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination a.active {
        background-color: #EE5151;
        color: white;
        border-radius: 5px;
    }

    .pagination a:hover:not(.active) {
        background-color: #EE5151;
        border-radius: 5px;
        transition:all .3s;
        color: #fff;
    }

</style>

<div class="page_main">
@if ($paginator->hasPages())
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <a class="page-link" href="#" tabindex="-1">ก่อนหน้า</a>
            @else
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">ก่อนหน้า</a>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="page-link active">{{ $page }}</a>
                        @else
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">ถัดไป</a>
            @else
                <a class="page-link disabled" href="#">ถัดไป</a>
            @endif
        </ul>
@endif
</div>
