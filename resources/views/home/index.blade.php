@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <style>
        .control .control-right, .control .control-left{
            position: absolute;
            background-color: #000;
            top: 41em;
            color: #fff;
            padding: 30px 15px;
            font-size: 18px;
            opacity: .3;
            cursor: pointer;
        }
        .control .control-right{
            right: 2.5em;
        }
        .control .control-left{
            left: 2.5em
        }
        #item-block .g-brd-around{
            height: 22em !important;
        }
        #item-block .img-one, #item-block .img-two{
            width: 295px !important;
            height: 173px !important;
        }
        #item-block .img-three{
            width: 295px !important;
            height: 215px !important;
        }
        figure{
            cursor: pointer;
        }
        figure img{
            transform: scale(1.1);
            transition: 0.2s linear;
        }
        figure:hover img{
            transform: scale(1);
        }
    </style>
@endsection

@section('contenu')

    <!-- Promo Block - Parallax -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll dzsprx-readyall" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-bluegray-opacity-0_3--after " style="height: 130%; background-image: url(../assets/img/bg-home.jpg);"></div>

        <!-- Promo Block Content -->
        <div class="container u-bg-overlay__inner text-center g-py-150">
            <h2 class="h1 g-color-white g-font-weight-600 text-uppercase g-mb-30">Que recherchez-vous ? {{--<span class="g-color-primary">New</span>--}}</h2>

            <!-- Search Form -->
            {!! Form::open(['route' => 'index.search', 'method' => 'GET']) !!}
                <!-- Search Field -->
                <div class="g-max-width-800 mx-auto g-mb-20">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control g-font-size-16 border-0" placeholder="Maquis, Hotel, Restaurants ?" aria-label="Maquis, Hotel, Restaurants ?">
                        <span class="input-group-btn">
                            <button class="btn btn-primary g-font-size-18 g-py-12 g-px-25" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <!-- End Search Field -->

                <!-- Checkboxes -->
                <div class="g-font-size-15">
                    <!-- Label -->
                    <label class="form-check-inline u-check g-color-white g-pl-25">
                        <a href="{{ route('annonce.hotel') }}"><i class="fa fa-hotel"></i> Hotel</a>
                    </label>
                    <!-- End Label -->

                    <!-- Label -->
                    <label class="form-check-inline u-check g-color-white g-pl-25 g-ml-20--md">
                        <a href="{{ route('annonce.resto') }}"><i class="fa fa-cutlery"></i> Restaurants</a>
                    </label>
                    <!-- End Label -->

                    <!-- Label -->
                    <label class="form-check-inline u-check g-color-white g-pl-25 g-ml-20--md">
                        <a href="{{ route('annonce.maquis') }}"><i class="fa fa-beer"></i> Maquis</a>
                    </label>
                    <!-- End Label -->
                </div>
                <!-- End Checkboxes -->
            {!! Form::close() !!}
            <!-- End Search Form -->
        </div>
        <!-- End Promo Block Content -->
    </section>
    <!-- End Promo Block - Parallax -->

    <section class="container g-pt-50 g-pb-5">
        <div class="mb-5">
            <h2 class="h3 g-color-black mb-0">Recommandées par booming</h2>
            <div class="d-inline-block g-width-50 g-height-1 g-bg-black"></div>
        </div>

        <div id="homeSlide" class="row">

            @foreach($recommandes as $recommande)

            <div class="col-md-4 g-mb-30">
                <!-- Article -->
                <article class="u-shadow-v11 g-pos-rel g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover text-center rounded g-transition-0_3 g-transition--linear">
                    <!-- Article Image -->
                    <figure>
                        <a href="{{ route('annonce.detail', $recommande->slug) }}"><img style="height: 200px;" class="w-100" src="/assets/img/annonces/{{ $recommande->vignette }}" alt="Image Description"></a>
                        <figcaption class="u-ribbon-v1 g-color-white g-bg-blue-opacity-0_7 g-font-weight-600 g-font-size-11 g-top-10 g-left-10 g-rounded-50 g-px-15">
                            @if($recommande->categorie_id == 1)
                                Hotel
                            @elseif($recommande->categorie_id == 2)
                                Restaurant
                            @else
                                Maquis
                            @endif
                        </figcaption>
                    </figure>
                    <!-- End Article Image -->

                    <!-- Article Content -->
                    <div class="g-py-10 g-px-20 text-left">
                        <h3 class="h4 g-color-black">
                            <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="{{ route('annonce.detail', $recommande->slug) }}">{{ stripslashes($recommande->name) }}</a>
                        </h3>

                        @php($noteAll = 0)

                        @if(count($recommande->notes))

                        @foreach($recommande->notes as $item)
                            @php($noteAll = $noteAll + $item->note)
                        @endforeach

                        @php($note = ceil($noteAll / count($recommande->notes)))

                        @else
                            @php($note = 0)
                        @endif

                        <span class="js-rating d-inline-block small g-color-primary g-mr-15">
                            <div class="g-rating g-font-size-16">
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
                        <span class="g-color-dark-v5 g-font-size-12">remarque client</span>

                        <ul class="list-inline g-color-gray-dark-v5 g-font-size-12 text-center">
                            <li class="list-inline-item g-brd-right g-brd-gray-light-v3 g-line-height-1 g-pr-7 g-mr-5">
                                <span>{{ $recommande->city }}</span>
                            </li>
                            <li class="list-inline-item">
                                <time datetime="2013-01-02">le {{ date_format($recommande->created_at, 'j F') }}</time>
                            </li>
                        </ul>

                        <hr class="g-brd-gray-light-v4 g-my-10">

                        <ul class="list-inline g-mb-0 text-center">
                            <li class="list-inline-item g-mb-10">
                                <a title="{{ count($recommande->comments) }} commentaires" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $recommande->slug) }}">
                                    <i class="fa fa-comments"></i>
                                    <span class="g-ml-5">{{ count($recommande->comments) }}</span>
                                </a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a title="{{ $recommande->vues }} vues" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $recommande->slug) }}">
                                    <i class="align-middle fa fa-eye"></i>
                                    <span class="g-ml-5">{{ $recommande->vues }}</span>
                                </a>
                            </li>
                            <li class="list-inline-item g-mb-10">
                                <a title="{{ count($recommande->reservations) }} reservations" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $recommande->slug) }}">
                                    <i class="align-middle fa fa-mail-reply"></i>
                                    <span class="g-ml-5">{{ count($recommande->reservations) }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Article Content -->
                </article>
                <!-- End Article -->
            </div>

            @endforeach

        </div>

    </section>

    <section id="item-block" class="container g-py-5">
        <div class="text-center g-mb-5">
            <h2 class="h1 g-color-black g-font-weight-600">Que recherchez-vous ?</h2>
            <p class="lead">Booming vous aide à trouver à Abidjan l'hotels, le restaurant et/ou le maquis idéal pour vous</p>
        </div>

        <div class="row no-gutters g-mx-minus-10">
            <div class="col-md-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-purple--hover text-center rounded g-transition-0_3 g-px-30 g-py-20">
                    <img class="img-one img-fluid u-block-hover__main--zoom-v1 mb-5" src="assets/img/hotel.png" alt="Image Description">
                    <h3 class="h4 g-font-weight-600">Hotel</h3>

                    <a class="u-link-v2" href="{{ route('annonce.hotel') }}"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-md-4 g-px-5 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-20">
                    <img class="img-two img-fluid u-block-hover__main--zoom-v1 mb-5" src="/assets/img/resto.png" alt="Image Description">
                    <h3 class="h4 g-font-weight-600">Restaurant</h3>

                    <a class="u-link-v2" href="{{ route('annonce.resto') }}"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-teal--hover text-center rounded g-transition-0_3 g-px-30 g-py-20">
                    <img class="img-three img-fluid u-block-hover__main--zoom-v1" src="/assets/img/maquis.png" alt="Image Description">
                    <h3 class="h4 g-font-weight-600">Maquis</h3>

                    <a class="u-link-v2" href="{{ route('annonce.maquis') }}"></a>
                </div>
                <!-- End Projects -->
            </div>

        </div>
    </section>

    <section class="container g-pt-5 g-pb-5">
        <div class="mb-5">
            <h2 class="h3 g-color-black mb-0">Annonces les plus vues</h2>
            <div class="d-inline-block g-width-50 g-height-1 g-bg-black"></div>
        </div>

        <div id="homeSlide" class="row">
            @foreach($vues as $vue)

                <div class="col-md-4 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-pos-rel g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover text-center rounded g-transition-0_3 g-transition--linear">
                        <!-- Article Image -->
                        <figure>
                            <a href="{{ route('annonce.detail', $vue->slug) }}"><img style="height: 200px;" class="w-100" src="/assets/img/annonces/{{ $vue->vignette }}" alt="Image Description"></a>
                            <figcaption class="u-ribbon-v1 g-color-white g-bg-blue-opacity-0_7 g-font-weight-600 g-font-size-11 g-top-10 g-left-10 g-rounded-50 g-px-15">
                                @if($vue->categorie_id == 1)
                                    Hotel
                                @elseif($vue->categorie_id == 2)
                                    Restaurant
                                @else
                                    Maquis
                                @endif
                            </figcaption>
                        </figure>
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-10 g-px-20 text-left">
                            <h3 class="h4 g-color-black">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="{{ route('annonce.detail', $vue->slug) }}">{{ stripslashes($vue->name) }}</a>
                            </h3>

                            @php($noteAll = 0)

                            @if(count($vue->notes))

                                @foreach($vue->notes as $item)
                                    @php($noteAll = $noteAll + $item->note)
                                @endforeach

                                @php($note = ceil($noteAll / count($vue->notes)))

                            @else
                                @php($note = 0)
                            @endif

                            <span class="js-rating d-inline-block small g-color-primary g-mr-15">
                                <div class="g-rating g-font-size-16">
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
                            <span class="g-color-dark-v5 g-font-size-12">remarque client</span>

                            <ul class="list-inline g-color-gray-dark-v5 g-font-size-12 text-center">
                                <li class="list-inline-item g-brd-right g-brd-gray-light-v3 g-line-height-1 g-pr-7 g-mr-5">
                                    <span>{{ $vue->city }}</span>
                                </li>
                                <li class="list-inline-item">
                                    <time datetime="2013-01-02">le {{ date_format($vue->created_at, 'j F') }}</time>
                                </li>
                            </ul>

                            <hr class="g-brd-gray-light-v4 g-my-10">

                            <ul class="list-inline g-mb-0 text-center">
                                <li class="list-inline-item g-mb-10">
                                    <a title="{{ count($vue->comments) }} commentaires" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $vue->slug) }}">
                                        <i class="fa fa-comments"></i>
                                        <span class="g-ml-5">{{ count($vue->comments) }}</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mb-10">
                                    <a title="{{ $vue->vues }} vues" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $vue->slug) }}">
                                        <i class="align-middle fa fa-eye"></i>
                                        <span class="g-ml-5">{{ $vue->vues }}</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mb-10">
                                    <a title="{{ count($vue->reservations) }} reservations" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $vue->slug) }}">
                                        <i class="align-middle fa fa-mail-reply"></i>
                                        <span class="g-ml-5">{{ count($vue->reservations) }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>

            @endforeach
        </div>

    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="/assets/img/create_my_store.jpg" alt="" style="width: 100%; height: 100px;">
            </div>
        </div>
    </div>
    <section class="container g-pt-10 g-pb-100">
        <div class="mb-5">
            <h2 class="h3 g-color-black mb-0">Annonces les mieux notées</h2>
            <div class="d-inline-block g-width-50 g-height-1 g-bg-black"></div>
        </div>

        <div id="homeSlide" class="row">
            @foreach($notees as $notee)

                <div class="col-md-4 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v11 g-pos-rel g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover text-center rounded g-transition-0_3 g-transition--linear">
                        <!-- Article Image -->
                        <figure>
                            <a href="{{ route('annonce.detail', $notee->slug) }}"><img style="height: 200px;" class="w-100" src="/assets/img/annonces/{{ $notee->vignette }}" alt="Image Description"></a>
                            <figcaption class="u-ribbon-v1 g-color-white g-bg-blue-opacity-0_7 g-font-weight-600 g-font-size-11 g-top-10 g-left-10 g-rounded-50 g-px-15">
                                @if($notee->categorie_id == 1)
                                    Hotel
                                @elseif($notee->categorie_id == 2)
                                    Restaurant
                                @else
                                    Maquis
                                @endif
                            </figcaption>
                        </figure>
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-10 g-px-20 text-left">
                            <h3 class="h4 g-color-black">
                                <a class="g-color-black g-color-primary--hover g-text-underline--none--hover" href="{{ route('annonce.detail', $notee->slug) }}">{{ stripslashes($notee->name) }}</a>
                            </h3>

                            @php($noteAll = 0)

                            @if(count($notee->notes))

                                @foreach($notee->notes as $item)
                                    @php($noteAll = $noteAll + $item->note)
                                @endforeach

                                @php($note = ceil($noteAll / count($notee->notes)))

                            @else
                                @php($note = 0)
                            @endif

                            <span class="js-rating d-inline-block small g-color-primary g-mr-15">
                                <div class="g-rating g-font-size-16">
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
                            <span class="g-color-dark-v5 g-font-size-12">remarque client</span>

                            <ul class="list-inline g-color-gray-dark-v5 g-font-size-12 text-center">
                                <li class="list-inline-item g-brd-right g-brd-gray-light-v3 g-line-height-1 g-pr-7 g-mr-5">
                                    <span>{{ $notee->city }}</span>
                                </li>
                                <li class="list-inline-item">
                                    <time datetime="2013-01-02">le {{ date_format($notee->created_at, 'j F') }}</time>
                                </li>
                            </ul>

                            <hr class="g-brd-gray-light-v4 g-my-10">

                            <ul class="list-inline g-mb-0 text-center">
                                <li class="list-inline-item g-mb-10">
                                    <a title="{{ count($notee->comments) }} commentaires" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $notee->slug) }}">
                                        <i class="fa fa-comments"></i>
                                        <span class="g-ml-5">{{ count($notee->comments) }}</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mb-10">
                                    <a title="{{ $notee->vues }} vues" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $notee->slug) }}">
                                        <i class="align-middle fa fa-eye"></i>
                                        <span class="g-ml-5">{{ $notee->vues }}</span>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mb-10">
                                    <a title="{{ count($notee->reservations) }} reservations" class="toolt d-inline-block g-brd-around g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v4 g-font-size-12 g-text-underline--none--hover g-rounded-50 g-py-4 g-px-15" href="{{ route('annonce.detail', $notee->slug) }}">
                                        <i class="align-middle fa fa-mail-reply"></i>
                                        <span class="g-ml-5">{{ count($notee->reservations) }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>

            @endforeach
        </div>

    </section>
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(../../assets/img/bg/pattern5.png);">
        <div class="d-md-flex justify-content-md-center text-center">
            <div class="align-self-md-center">
                <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Vous aussi devenez annonceur sur booming</p>
            </div>
            <div class="align-self-md-center">
                <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="">Poster mon annonce</a>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script></script>
@endsection