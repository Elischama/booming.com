@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Regles de diffusion</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">

                <div class="col-sm-12">
                    <div class="col-sm-12">
                        @include('partials.flash')
                    </div>
                    {!! Form::open(['route' => 'regle.update', 'enctype' => 'multipart/form-data']) !!}
                    <br>
                    <div class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('title', 'Nom de la page', ['class' => 'obligation']) !!}
                            {!! Form::text('title', $data->title, ['class' => 'form-control', 'placeholder' => '']) !!}
                            @if ($errors->has('title'))
                                <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-12">
                        {!! Form::label('content', 'Description', ['class' => 'obligation']) !!}
                        {!! Form::textarea('content', $data->content, ['class' => 'form-control', 'style' => 'max-width: 100%; height: 500px;']) !!}
                        @if ($errors->has('content'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('content') }}</div>
                        @endif
                        <br><br>
                    </div>

                    <div class="col-sm-offset-4 col-sm-4">
                        <div class="form-group text-center">
                            {!! Form::submit('Publier', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    </div>


                    {!! Form::close() !!}
                    <br><br>
                </div>

            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@endsection

@section('js')
    <script>
        $(function(){
            CKEDITOR.replace( 'content' );
        });
    </script>
@stop