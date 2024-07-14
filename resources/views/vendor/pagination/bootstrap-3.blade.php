@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Botón de Página Anterior --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>&laquo; Anterior</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Anterior</a></li>
        @endif

        {{-- Páginas --}}
        @foreach ($elements as $element)
            {{-- Página Simple --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Páginas Individuales --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botón de Página Siguiente --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Siguiente &raquo;</a></li>
        @else
            <li class="disabled"><span>Siguiente &raquo;</span></li>
        @endif
    </ul>
@endif
