<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
    <nav class="g-mb-50" aria-label="Page Navigation">
        <ul class="list-inline">
            <li class="list-inline-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="{{ $paginator->url(1) }}">
                    <span aria-hidden="true">
                        <i class="fa fa-angle-double-left"></i>
                    </span>
                    <span class="sr-only">Précédant</span>
                </a>

            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <?php
                $half_total_links = floor($link_limit / 2);
                $from = $paginator->currentPage() - $half_total_links;
                $to = $paginator->currentPage() + $half_total_links;
                if ($paginator->currentPage() < $half_total_links) {
                    $to += $half_total_links - $paginator->currentPage();
                }
                if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                    $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                }
                ?>
                @if ($from < $i && $i < $to)
                    <li class="list-inline-item">
                        <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="{{ $paginator->url($i) }}">
                            {{ $i }}
                        </a>
                    </li>
                @endif
            @endfor
            <li class="list-inline-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="{{ $paginator->url($paginator->lastPage()) }}">
                    <span aria-hidden="true">
                        <i class="fa fa-angle-double-right"></i>
                    </span>
                    <span class="sr-only">Suivant</span>
                </a>
            </li>
        </ul>
    </nav>
@endif