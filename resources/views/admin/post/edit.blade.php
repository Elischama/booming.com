@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Article</a></li>
            <li><a href="javascript:void(0)" title="">Editer</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">
                <br>
                <div class="col-sm-12">

                    @include('partials.flash')

                    {!! Form::open(['route' => ['post.update', $data->id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Titre de l\'article') !!}
                        {!! Form::text('title', $data->title, ['class' => 'form-control']) !!}
                        @if ($errors->has('title'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    
                    <div class="form-group text-center">
                        <img style="height: 150px;" src="{{ asset('posts/'.$data->picture) }}" alt="">
                    </div>

                    <div class="form-group">
                        {!! Form::label('picture', 'Image de l\'article') !!}
                        {!! Form::file('picture', ['class' => 'btn btn-default btn-block']) !!}
                        @if ($errors->has('picture'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('picture') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('body', 'L\'article') !!}
                        {!! Form::textarea('body', $data->body, ['class' => 'form-control']) !!}
                        @if ($errors->has('body'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('body') }}</div>
                        @endif
                    </div>

                    <div class="form-group text-center">
                        {!! Form::submit('Publier', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::open() !!}
                    <br><br>
                </div>

            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@endsection

@section('js')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@stop