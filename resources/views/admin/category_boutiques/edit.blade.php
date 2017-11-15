@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Categorie Boutique</a></li>
            <li><a href="javascript:void(0)" title="">Editer</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <br>
                <div class="col-sm-12">

                    @include('partials.flash')

                    {!! Form::open(['route' => ['category.boutique.update', $data->id]]) !!}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::label('icon', 'Icone de la categorie') !!}
                                {!! Form::text('icon', $data->icon, ['class' => 'form-control', 'placeholder' => 'ex: fa fa-users']) !!}
                                @if ($errors->has('icon'))
                                    <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('icon') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::label('libelle', 'Nom de la categorie') !!}
                                {!! Form::text('libelle', $data->libelle, ['class' => 'form-control', 'placeholder' => 'ex: Mode Homme']) !!}
                                @if ($errors->has('libelle'))
                                    <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('libelle') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-4 col-sm-4">
                            <div class="form-group text-center">
                                {!! Form::submit('Publier', ['class' => 'btn btn-primary btn-block']) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::open() !!}
                    <br><br>
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@endsection