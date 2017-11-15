@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Boutique</a></li>
            <li><a href="javascript:void(0)" title="">Photo de profil</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <br>
                <div class="col-sm-12">

                    @include('partials.flash')

                    {!! Form::open(['route' => 'boutique.pochette.save', 'enctype' => 'multipart/form-data']) !!}

                    <div id="notification"></div>

                    <div class="form-group">
                        {!! Form::label('pochette', 'Ajouter une pochette à votre boutique') !!}
                        {!! Form::file('pochette', ['class' => 'btn btn-default btn-block', 'required']) !!}
                        @if ($errors->has('pochette'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('pochette') }}</div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-4 col-sm-4">
                            <div class="form-group text-center">
                                {!! Form::submit('Publier', ['class' => 'btn btn-primary btn-block']) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <br><br>
                </div>

                <div class="col-sm-12 text-center">
                    @if(!empty($data->pochette))
                        <img src="{{ asset('boutiques/pochette/'. $data->pochette) }}" style="width: 300px; height: 300px;" alt="Photo de profil de votre boutique">
                        <br><br>
                        <a href="{{ route('boutique.pochette.delete') }}" style="color: red;"><i class="fa fa-trash"></i> Supprimer</a>
                    @else
                        <img src="{{ asset('boutiques/pochette/pochette.png') }}" style="width: 300px; height: 300px; border: 1px solid lightgrey" alt="Photo par defaut">
                    @endif
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@endsection

@section('js')

    <script>
        $(function(){

            var p = lireCookie('__pochette');

            if (p==null){
                $('#notification').append('<div class="alert alert-info alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <span class="fa fa-exclamation-circle" aria-hidden="true"></span> Cette image sera la photo de profil de votre boutique veuillez choisir une image carré au risque de la voir déformé à l\'affichage</div>');
            }

            $('.close').click(function(){
                creerCookie('__pochette', 'notification check');
            })
        });
    </script>

@stop