@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Boutique</a></li>
            <li><a href="javascript:void(0)" title="">Photo de Couverture</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <br>
                <div class="col-sm-12">

                    @include('partials.flash')

                    {!! Form::open(['route' => 'boutique.banner.save', 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('banner', 'Modifier la photo de couverture de votre boutique') !!} [<small><em>Veuillez utiliser les mêmes dimensions que la photo par défaut</em></small>]
                        {!! Form::file('banner', ['class' => 'btn btn-default btn-block', 'required']) !!}
                        @if ($errors->has('banner'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('banner') }}</div>
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
                    @if(!empty($data->banner))
                        <img src="{{ asset('boutiques/banner/'. $data->banner) }}" style="width: 848px; height: 243px;" alt="">
                        <br><br>
                        <a href="{{ route('boutique.banner.delete') }}" style="color: red;"><i class="fa fa-trash"></i> Supprimer</a>
                    @else
                        <img src="{{ asset('boutiques/files/fb_couverture.png') }}" style="width: 848px; height: 243px;" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@endsection