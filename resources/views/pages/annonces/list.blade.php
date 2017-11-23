@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="/assets/css/search.css">
    <style>
        #home-section #js-header{
            display: none;
        }
    </style>
@endsection

@section('contenu')

    @include('layouts.partials.search')


    <section class="g-pt-60 g-pb-90">
        <div class="container">

            <div class="row">
                <div class="col-sm-9">

                    @if(count($annonces) > 0)

                        @foreach($annonces as $annonce)
                            <!-- Search Result -->
                            <article>
                                <div class="row">
                                    <div class="col-sm-4">
                                        @if($annonce->categorie_id == 1)
                                        <div class="type-annonce hotel-tag">
                                            <i class="fa fa-bed"></i> Hotel
                                        </div>
                                        @elseif($annonce->categorie_id == 2)
                                        <div class="type-annonce resto-tag">
                                            <i class="fa fa-cutlery"></i> Restaurant
                                        </div>
                                        @else
                                        <div class="type-annonce maqui-tag">
                                            <i class="fa fa-beer"></i> Maquis
                                        </div>
                                        @endif
                                        <div class="img-annonce-black">
                                            <a href="{{ route('annonce.detail', $annonce->slug) }}" title="{{ $annonce->name }}">
                                                <img class="img-responsive img-annonce" src="/assets/img/annonces/{{ $annonce->vignette }}" alt="{{ stripslashes($annonce->name) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <header class="g-mb-15">
                                            <h2 class="h4 g-mb-5">
                                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="{{ route('annonce.detail', $annonce->slug) }}">{{ stripslashes($annonce->name) }}</a>
                                            </h2>

                                            <div class="d-lg-flex justify-content-between align-items-center g-mb-15">
                                                <!-- Search Info -->
                                                <ul class="list-inline g-mb-10 g-mb-0--lg">

                                                    <li class="list-inline-item g-mr-30">
                                                        <i class="fa fa-calendar g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> {{ \Carbon\Carbon::parse($annonce->created_at)->format('d/m/Y')}}
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-eye g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> {{ $annonce->vues }} &nbsp;&nbsp;&nbsp;
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa fa-comments-o g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> {{ count($annonce->comments) }}
                                                    </li>
                                                </ul>
                                                <!-- End Search Info -->

                                                <!-- Share, Print and More -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <div class="dropdown g-mb-10 g-mb-0--md">
                                                            <span class="d-block g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              <i class="fa fa-angle-down g-pos-rel g-top-1"></i> options
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
                                                                <a class="dropdown-item g-px-10" href="#">
                                                                    <i class="icon-directions g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Signaler
                                                                </a>
                                                                <a class="dropdown-item g-px-10" href="#">
                                                                    <i class="icon-cloud-download g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Annonceurs
                                                                </a>

                                                                <div class="dropdown-divider"></div>

                                                                <a class="dropdown-item g-px-10" href="#">
                                                                    <i class="icon-plus g-font-size-12 g-color-gray-dark-v5 g-mr-5"></i> Voir plus
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- End Share, Print and More -->
                                            </div>

                                            {{--@if(count($annonce->strong_point) > 0)--}}
                                            {{--<ul class="u-list-inline">--}}
                                                {{--@foreach($annonce->strong_point as $item)--}}

                                                    {{--<li class="list-inline-item g-mb-10">--}}
                                                        {{--<a class="u-tags-v1 g-color-main g-bg-gray-light-v4 g-bg-black--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15" href="#">--}}
                                                            {{--<i class="fa fa-tag mr-1"></i>--}}
                                                            {{--tags--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}

                                                {{--@endforeach--}}
                                            {{--</ul>--}}
                                            {{--@endif--}}

                                        </header>

                                        <p class="g-mb-15">{{ substr($annonce->description, 0, 140) }} <em>[...]</em></p>

                                        <div class="d-lg-flex justify-content-between align-items-center">
                                            <!-- Search Info -->
                                            <ul class="list-inline g-mb-10 g-mb-0--lg">
                                                <li class="list-inline-item g-mr-30">
                                                    <img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="/assets/img/users/{{ $annonce->user->avatar }}" alt="{{ $annonce->user->firstname.' '.$annonce->user->lastname }}"> <a class="u-link-v5 g-color-main g-color-primary--hover" href="#">{{ $annonce->user->firstname.' '.$annonce->user->lastname }}</a>
                                                </li>
                                            </ul>
                                            <!-- End Search Info -->

                                            @php($noteAll = 0)
                                            @foreach($annonce->notes as $item)
                                                @php($noteAll = $noteAll + $item->note)
                                            @endforeach

                                            @php($note = ceil($noteAll / 5))
                                            <!-- Search Rating -->
                                            <div>
                                                <span class="js-rating g-color-primary mr-2" data-rating="5">
                                                    <div class="g-rating" style="display: inline-block; position: relative; z-index: 1; white-space: nowrap; margin-left: -2px; margin-right: -2px;">
                                                        @if($note == 0)
                                                            @include('pages.annonces.note.0')
                                                        @elseif($note == 1)
                                                            @include('pages.annonces.note.1')
                                                        @elseif($note == 2)
                                                            @include('pages.annonces.note.2')
                                                        @elseif($note == 3)
                                                            @include('pages.annonces.note.3')
                                                        @elseif($note == 4)
                                                            @include('pages.annonces.note.4')
                                                        @else
                                                            @include('pages.annonces.note.5')
                                                        @endif
                                                    </div>
                                                </span>
                                                <span class="g-color-gray-dark-v5">{{ $note }}/5 note client</span>
                                            </div>
                                            <!-- End Search Rating -->
                                        </div>
                                    </div>
                                </div>

                            </article>
                            <!-- End Search Result -->

                            <hr class="g-brd-gray-light-v4 g-my-40">

                        @endforeach

                        {{ $annonces->links('layouts.partials.pagination') }}
                    <!-- Pagination -->
                    {{--<nav class="g-mb-50" aria-label="Page Navigation">--}}

                        {{--<ul class="list-inline">--}}
                            {{--<li class="list-inline-item">--}}
                                {{--<a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Previous">--}}
                                    {{--<span aria-hidden="true">--}}
                                      {{--<i class="fa fa-angle-left"></i>--}}
                                    {{--</span>--}}
                                    {{--<span class="sr-only">Previous</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item g-hidden-sm-down">--}}
                                {{--<a class="u-pagination-v1__item u-pagination-v1-5 u-pagination-v1-5--active rounded g-pa-4-11" href="#">1</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item g-hidden-sm-down">--}}
                                {{--<a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">2</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item g-hidden-sm-down">--}}
                                {{--<a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">3</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item g-hidden-sm-down">--}}
                                {{--<span class="g-pa-4-11">...</span>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item g-hidden-sm-down">--}}
                                {{--<a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">80</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item">--}}
                                {{--<a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="#" aria-label="Next">--}}
                                    {{--<span aria-hidden="true">--}}
                                      {{--<i class="fa fa-angle-right"></i>--}}
                                    {{--</span>--}}
                                    {{--<span class="sr-only">Next</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="list-inline-item float-right">--}}
                                {{--<span class="u-pagination-v1__item-info g-pa-4-11">Page 1 of 80</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</nav>--}}
                    <!-- End Pagination -->

                    @endif

                </div>
                <div class="col-sm-3">

                        <!-- Categories -->
                        <h2 class="h5 text-uppercase g-color-gray-dark-v1">Categories</h2>
                        <hr class="g-brd-gray-light-v4 g-my-15">
                        <ul class="list-unstyled g-mb-40">
                            <li class="my-3">
                                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1 g-parent" href="#">
                                    Design <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 text-center rounded g-px-10 g-py-3">99</span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                                    Development <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">5</span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                                    Services <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">15</span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                                    Support <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">12</span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                                    Investment <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">5</span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1" href="#">
                                    Financing <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 g-bg-primary--parent-hover text-center rounded g-px-10 g-py-3">1</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Categories -->

                        <!-- Tags -->
                        <h2 class="h5 text-uppercase g-color-gray-dark-v1">Tags</h2>
                        <hr class="g-brd-gray-light-v4 g-my-15">
                        <ul class="list-inline g-mb-40">
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Web Design</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Unify</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Template</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">HTML</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">CSS</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Mobile</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">iOS</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">UI</a>
                            </li>
                            <li class="list-inline-item my-2">
                                <a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-4 g-px-10" href="#">Web</a>
                            </li>
                        </ul>
                        <!-- End Tags -->

                        <!-- Sort By -->
                        <h2 class="h5 text-uppercase g-color-gray-dark-v1">Sort By</h2>
                        <hr class="g-brd-gray-light-v4 g-my-15">
                        <div class="btn-group justified-content g-mb-40">
                            <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio" checked="">
                                <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked rounded-0">Date Added</span>
                            </label>
                            <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                                <span class="btn btn-block u-btn-outline-lightgray g-color-white--checked g-bg-primary--checked g-brd-left-none--md rounded-0">Relevance</span>
                            </label>
                        </div>
                        <!-- End Sort By -->

                        <!-- Result Types -->
                        <h2 class="h5 text-uppercase g-color-gray-dark-v1">Result Types</h2>
                        <hr class="g-brd-gray-light-v4 g-my-15">
                        <form>
                            <!-- Checkbox -->
                            <div class="form-group g-mb-10">
                                <label class="u-check g-pl-30">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Design
                                </label>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Checkbox -->
                            <div class="form-group g-mb-10">
                                <label class="u-check g-pl-30">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked="">
                                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Development
                                </label>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Checkbox -->
                            <div class="form-group g-mb-10">
                                <label class="u-check g-pl-30">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Services
                                </label>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Checkbox -->
                            <div class="form-group g-mb-10">
                                <label class="u-check g-pl-30">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Support
                                </label>
                            </div>
                            <!-- End Checkbox -->

                            <!-- Checkbox -->
                            <div class="form-group g-mb-10">
                                <label class="u-check g-pl-30">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                                        <i class="fa" data-check-icon=""></i>
                                    </div>
                                    Investment
                                </label>
                            </div>
                            <!-- End Checkbox -->
                        </form>
                        <!-- End Result Types -->

                </div>
            </div>


        </div>
    </section>


@endsection

@section('js')
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "70%";
            // document.getElementById("flipkart-navbar").style.width = "50%";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "rgba(0,0,0,0)";
        }
    </script>
@endsection