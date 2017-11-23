@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="/assets/css/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <style>
        #home-section #js-header{
            display: none;
        }
        .control .control-right, .control .control-left{
            position: absolute;
            background-color: #000;
            top: 20em;
            color: #fff;
            padding: 30px 15px;
            font-size: 18px;
            opacity: .3;
        }
        .control .control-right{
            right: 2.5em;
        }
        .control .control-left{
            left: 2.5em
        }
        .note span{
            margin: 4px;
        }
        #ConnexionBlock{
            display: none;
        }
    </style>
@endsection

@section('contenu')

    @include('layouts.partials.search')

    @include('layouts.partials.flash-font')

    <section class="g-py-50">
        <div class="container">
            <div class="row">

                <!-- Content -->
                <div class="col-sm-8 g-mb-30 g-mb-0--lg">
                    <article class="u-shadow-v11 rounded g-pa-30">
                        <!-- Content Header -->
                        <div class="row">
                            <div class="col-md-9 g-mb-30 g-mb-0--md">
                                <div class="media">
                                    <div class="d-flex align-self-center g-mt-3 g-mr-20">
                                        @if($data->categorie_id == 1)
                                            <i class="fa fa-hotel fa-3x"></i>
                                        @elseif($data->categorie_id == 2)
                                            <i class="fa fa-cutlery fa-3x"></i>
                                        @else
                                            <i class="fa fa-beer fa-3x"></i>
                                        @endif
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block g-mb-3">
                                          <a class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href="">{{ stripslashes($data->name) }}</a>
                                        </span>
                                        <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                                          <i class="fa fa-map-marker g-pos-rel g-top-1 mr-1"></i> {{ $data->city }}
                                        </span>
                                        <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                                          <i class="fa fa-flag-o g-pos-rel g-top-1 mr-1"></i> {{ $data->situation }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Content Header -->

                        <hr class="g-brd-gray-light-v4">

                    @if(count($pictures) > 0)

                        <div class="annonce-slide">
                            <div class="annonce-picture">
                                @foreach($pictures as $picture)
                                    <div><img src="/assets/img/annonces/{{ $picture->name }}" alt=""></div>
                                @endforeach
                            </div>
                            <div class="control text-right">
                                <span class="control-left"><i class="fa fa-angle-left"></i></span>
                                <span class="control-right"><i class="fa fa-angle-right"></i></span>
                            </div>
                        </div>

                    @endif

                    <!-- Jobs Description -->
                        <br>
                        {{--<h3 class="h5 g-color-gray-dark-v1 g-mb-10">Jobs Description</h3>--}}

                        {!! $data->description !!}

                        <!-- End Jobs Description -->

                        <hr class="g-brd-gray-light-v4">

                        @if(count($data->service) > 0)
                        <!-- Your Tasks -->
                        <h3 class="h5 g-color-gray-dark-v1 g-mb-10">Nos points fort</h3>

                        <div class="row">

                            @foreach($data->service as $value)
                            <div class="col-sm-6">
                                <i class="fa fa-check-circle-o g-color-primary g-mr-8"></i>
                                <span> {{ $value }}</span>
                            </div>
                            @endforeach

                        </div>
                        <!-- End Your Tasks -->

                        <hr class="g-brd-gray-light-v4">
                        @endif

                        <div class="card border-0 g-mb-40">
                            <!-- Panel Header -->
                            <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                                <h3 class="h6 mb-0">
                                    <i class="fa fa-comments g-pos-rel g-top-1 g-mr-5"></i> Commentaires
                                </h3>
                            </div>
                            <!-- End Panel Header -->

                            <!-- Panel Body -->
                            <div class="card-block g-pa-0">
                                <div id="CommentBlock">
                                    @foreach($comments as $comment)
                                    <div class="media g-mb-20">

                                        @if(empty($comment->user->avatar))
                                            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="/assets/img/users/user.ico" alt="{{ $comment->user->firstname.' '.$comment->user->lastname }}">
                                        @else
                                            <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="/assets/img/users/{{ $comment->user->avatar }}" alt="{{ $comment->user->firstname.' '.$comment->user->lastname }}">
                                        @endif

                                        <div class="media-body g-brd-around g-brd-gray-light-v4 g-pa-20">
                                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                                                <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5 g-mb-0--sm">{{ $comment->user->firstname.' '.$comment->user->lastname }}</h5>
                                            </div>

                                            <p>{{ $comment->comment }}</p>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @if(Auth::user())
                                    <div class="media g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-20">
                                        <img class="d-flex g-width-50 g-height-50 g-mt-3 g-mr-20" src="https://htmlstream.com/preview/unify-v2.2/assets/img-temp/100x100/img14.jpg" alt="Image Description">
                                        <div class="media-body">
                                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm">
                                                <h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5 g-mb-0--sm">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</h5>
                                            </div>

                                            {!! Form::open(['route' => ['comment.save', $data->id], 'class' => 'g-py-15', 'id' => 'CommentForm']) !!}

                                            <div class="mb-4">
                                                <div class="input-group">
                                                    {!! Form::hidden('name', Auth::user()->firstname.' '.Auth::user()->firstname) !!}
                                                    {!! Form::textarea('comment', null, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded', 'placeholder' => 'Commentaire', 'style' => 'height: 70px;']) !!}
                                                </div>
                                                @if ($errors->has('message'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('message') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <input type="submit" class="btn btn-sm u-btn-primary pull-right g-font-weight-600 g-font-size-12" value="Commenter">

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                @else
                                    <a id="ConnexionBlock-link" class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href="/login">Connectez-vous pour commenter cette annonce</a>

                                    {{--<br>--}}
                                    {{--<div id="ConnexionBlock" class="">--}}

                                        {{--<div class="row justify-content-center align-items-center no-gutters">--}}
                                            {{--<div class="col-sm-12 g-bg-teal g-rounded-left-5--lg-up">--}}
                                                {{--<div class="g-pa-50">--}}
                                                    {{--<!-- Form -->--}}
                                                    {{--{!! Form::open(['route' => 'login', 'class' => 'g-py-15']) !!}--}}
                                                    {{--<h2 class="h3 g-color-white mb-4">Connexion</h2>--}}

                                                    {{--<div class="mb-4">--}}
                                                        {{--<div class="input-group">--}}
                                                            {{--<span class="input-group-addon g-width-45 g-brd-white g-color-white">--}}
                                                                {{--<i class="icon-finance-067 u-line-icon-pro"></i>--}}
                                                            {{--</span>--}}
                                                            {{--{!! Form::email('email', null, ['class' => 'form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Adresse E-mail']) !!}--}}
                                                        {{--</div>--}}
                                                        {{--@if ($errors->has('email'))--}}
                                                            {{--<span class="help-block">--}}
                                                                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                            {{--</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}

                                                    {{--<div class="mb-4">--}}
                                                        {{--<div class="input-group rounded">--}}
                                                            {{--<span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">--}}
                                                                {{--<i class="icon-media-094 u-line-icon-pro"></i>--}}
                                                            {{--</span>--}}
                                                            {{--{!! Form::password('password', ['class' => 'form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Mot de Passe']) !!}--}}

                                                        {{--</div>--}}
                                                        {{--@if ($errors->has('password'))--}}
                                                            {{--<span class="help-block">--}}
                                                                {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                                            {{--</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}

                                                    {{--<div class="g-mb-60">--}}
                                                        {{--<button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="submit">Connexion</button>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="text-center g-pos-rel pb-2 g-mb-60">--}}
                                                        {{--<div class="d-inline-block w-100 g-height-1 g-bg-white"></div>--}}
                                                        {{--<span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-20">OU</span>--}}
                                                    {{--</div>--}}

                                                    {{--<button class="btn btn-block u-btn-facebook rounded text-uppercase g-py-13 g-mb-5" type="button">--}}
                                                        {{--<i class="mr-3 fa fa-facebook"></i>--}}
                                                        {{--<span class="g-hidden-xs-down">Login with</span> Facebook--}}
                                                    {{--</button>--}}
                                                {{--{!! Form::close() !!}--}}
                                                {{--<!-- End Form -->--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                @endif
                            </div>
                            <!-- End Panel Body -->
                        </div>

                        <!-- End Offer Details & Skills -->
                    </article>
                </div>
                <!-- End Content -->

                <!-- Sidebar -->
                <div class="col-sm-4">
                    <aside class="u-shadow-v11 rounded g-pa-30">
                        <!-- Content Header -->
                        <div class="media g-mb-20">
                            <div class="d-flex align-self-center g-mt-3 g-mr-15">
                                {{--<img class="g-width-40 g-height-40" src="https://htmlstream.com/preview/unify-v2.2/assets/img-temp/logos/img1.png" alt="{{ $data->name }}">--}}
                                @if($data->categorie_id == 1)
                                    <i class="fa fa-hotel fa-3x"></i>
                                @elseif($data->categorie_id == 2)
                                    <i class="fa fa-cutlery fa-3x"></i>
                                @else
                                    <i class="fa fa-beer fa-3x"></i>
                                @endif
                            </div>
                            <div class="media-body">
                                <span class="d-block">
                                    <a class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href="#">{{ $data->name }}</a>
                                </span>
                                <span class="js-rating d-inline-block small g-color-primary g-mr-15" data-rating="4.5">
                                    <div class="g-rating">
                                        @if($data->note == 0)
                                            @include('pages.annonces.note.0')
                                        @elseif($data->note == 1)
                                            @include('pages.annonces.note.1')
                                        @elseif($data->note == 2)
                                            @include('pages.annonces.note.2')
                                        @elseif($data->note == 3)
                                            @include('pages.annonces.note.3')
                                        @elseif($data->note == 4)
                                            @include('pages.annonces.note.4')
                                        @else
                                            @include('pages.annonces.note.5')
                                        @endif
                                    </div>
                                </span>
                                <span class="g-color-gray-dark-v5">{{ $data->note }} / 5 note client</span>
                            </div>
                        </div>
                        <!-- End Content Header -->


                        <hr class="g-brd-gray-light-v4">

                        <!-- Contacts -->
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-baseline g-mb-12">
                                <i class="fa fa-map-marker g-color-gray-dark-v5 g-mr-10"></i>
                                <span>{{ $data->city }}</span>
                            </li>
                            <li class="d-flex align-items-baseline g-mb-10">
                                <i class="fa fa-phone g-color-gray-dark-v5 g-mr-10"></i>
                                <span>{{ $data->mobile }}</span>
                            </li>
                            <li class="d-flex align-items-baseline g-mb-10">
                                <i class="fa fa-phone g-color-gray-dark-v5 g-mr-10"></i>
                                <span>{{ $data->user->mobile }}</span>
                            </li>
                            <li class="d-flex align-items-baseline g-mb-10">
                                <i class="fa fa-envelope-o g-color-gray-dark-v5 g-mr-10"></i>
                                <a class="u-link-v5 g-color-main g-color-primary--hover" href="mailto:{{ $data->email }}">{{ $data->email }}</a>
                            </li>
                            {{--<li class="d-flex align-items-baseline g-mb-10">--}}
                                {{--<i class="icon-globe g-color-gray-dark-v5 g-mr-10"></i>--}}
                                {{--<a class="u-link-v5 g-color-main g-color-primary--hover" href="#">htmlstream.com</a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- End Contacts -->

                        <hr class="g-brd-gray-light-v4">

                        <span class="d-block">
                            <a class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href="">Noter cette annonce</a>
                        </span>

                        {!! Form::open(['route' => ['note.save', $data->id], 'class' => 'g-py-15 text-center', 'id' => 'NoteForm']) !!}

                        <div id="NoteGroup-0" class="note" style="color: #6DC820; cursor: pointer;">
                            <span class="note-1"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-2"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-3"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-4"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-5"><i class="fa fa-star-o fa-2x"></i></span>
                            0/5
                            {!! Form::hidden('note', null) !!}
                        </div>
                        <div id="NoteGroup-1" class="note" style="color: #6DC820; cursor: pointer;">
                            <span class="note-1"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-2"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-3"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-4"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-5"><i class="fa fa-star-o fa-2x"></i></span>
                            1/5
                        </div>
                        <div id="NoteGroup-2" class="note" style="color: #6DC820; cursor: pointer;">
                            <span class="note-1"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-2"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-3"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-4"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-5"><i class="fa fa-star-o fa-2x"></i></span>
                            2/5
                        </div>
                        <div id="NoteGroup-3" class="note" style="color: #6DC820; cursor: pointer;">
                            <span class="note-1"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-2"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-3"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-4"><i class="fa fa-star-o fa-2x"></i></span>
                            <span class="note-5"><i class="fa fa-star-o fa-2x"></i></span>
                            3/5
                        </div>
                        <div id="NoteGroup-4" class="note" style="color: #6DC820; cursor: pointer;">
                            <span class="note-1"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-2"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-3"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-4"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-5"><i class="fa fa-star-o fa-2x"></i></span>
                            4/5
                        </div>
                        <div id="NoteGroup-5" class="note" style="color: #6DC820; cursor: pointer;">
                            <span class="note-1"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-2"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-3"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-4"><i class="fa fa-star fa-2x"></i></span>
                            <span class="note-5"><i class="fa fa-star fa-2x"></i></span>
                            5/5
                        </div>

                        <div class="mb-4 note-input">
                            <div class="note-input-hidden"></div>
                            <br>
                            <small>Ajouter une remarque et/ou enregistrez votre note</small>
                            <div class="input-group">
                                {!! Form::text('remarque', null, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15', 'placeholder' => 'remarque']) !!}
                            </div>

                            <br>
                            <input type="submit" class="btn btn-sm u-btn-primary g-font-weight-600 g-font-size-12" value="Enregistrer ma note">
                        </div>
                        {!! Form::close() !!}

                        <hr class="g-brd-gray-light-v4">

                        <span class="d-block">
                            <a class="u-link-v5 g-font-size-18 g-color-gray-dark-v1 g-color-primary--hover" href="">Contacter l'annonceur</a>
                        </span>

                        {!! Form::open(['route' => ['reservation.save', $data->id], 'class' => 'g-py-15', 'id' => 'ReservationForm']) !!}

                        <div class="flash-reservation"></div>

                        <div class="mb-4">
                            <div class="input-group">
                                @if(Auth::user())
                                    {!! Form::text('name', Auth::user()->firstname.' '.Auth::user()->lastname, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15', 'placeholder' => 'Nom & Prénom(s)']) !!}
                                @else
                                    {!! Form::text('name', null, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15', 'placeholder' => 'Nom & Prénom(s)']) !!}
                                @endif
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                @if(Auth::user())
                                    {!! Form::text('mobile', Auth::user()->mobile, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15', 'placeholder' => 'Numéro de téléphone']) !!}
                                @else
                                    {!! Form::text('mobile', null, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15', 'placeholder' => 'Numéro de téléphone']) !!}
                                @endif
                            </div>
                            @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <div class="input-group">
                                {!! Form::textarea('message', null, ['class' => 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15', 'placeholder' => 'Message']) !!}
                            </div>
                            @if ($errors->has('message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" id="ReservationForm-submit" class="btn btn-xl btn-block u-btn-primary text-uppercase g-font-weight-600 g-font-size-12">Envoyer mon message</button>

                        {!! Form::close() !!}
                    </aside>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.annonce-picture').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: false,
                cssEase: 'linear',
                nextArrow: '.annonce-slide .control-right',
                prevArrow: '.annonce-slide .control-left',
            });
        });
        $(function () {
            $('#CommentForm').on('submit', function (e) {
                e.preventDefault();

                var url = $(this).attr('action');
                var data = $('#CommentForm').serialize();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function (response) {

                        $('#CommentForm')[0].reset();

                        if (response.avatar) {
                            $('#CommentBlock').append('<div class="media g-mb-20"><img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="/assets/img/users/'+ response.avatar +'" alt="'+ response.username +'"><div class="media-body g-brd-around g-brd-gray-light-v4 g-pa-20"><div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm"><h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5 g-mb-0--sm">'+ response.username +'</h5></div><p>'+ response.comment +'</p></div></div>');
                        }else{
                            $('#CommentBlock').append('<div class="media g-mb-20"><img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-20" src="/assets/img/users/user.ico" alt="'+ response.username +'"><div class="media-body g-brd-around g-brd-gray-light-v4 g-pa-20"><div class="d-sm-flex justify-content-sm-between align-items-sm-center g-mb-15 g-mb-10--sm"><h5 class="h4 g-font-weight-300 g-mr-10 g-mb-5 g-mb-0--sm">'+ response.username +'</h5></div><p>'+ response.comment +'</p></div></div>');
                        }
                    },
                    errors: function () {
                        console.log('ca passe meme pas')
                    }
                });

            });
        })
    </script>
@endsection