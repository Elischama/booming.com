@extends('layouts.default')

@section('contenu')


    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(/assets/img/img24.jpg);">
        <div class="container u-bg-overlay__inner">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <!-- Heading -->
                    <h1 class="g-color-white text-uppercase mb-4">Connectez-vous ou Créez un compte</h1>
                    <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
                    <!-- End Heading -->
                </div>
            </div>

            <div class="row justify-content-center align-items-center no-gutters">
                <div class="col-lg-5 g-bg-teal g-rounded-left-5--lg-up">
                    <div class="g-pa-50">
                        <!-- Form -->
                        <form class="g-py-15" style="margin-top: 1.2em;">
                            <h2 class="h3 g-color-white mb-4">Connexion</h2>
                            <div class="mb-4">
                                <div class="input-group">
                                    <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                                        <i class="icon-finance-067 u-line-icon-pro"></i>
                                    </span>
                                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="email" placeholder="Username">
                                </div>
                            </div>

                            <div class="g-mb-40">
                                <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-white g-color-white">
                                      <i class="icon-communication-062 u-line-icon-pro"></i>
                                    </span>
                                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13" type="tel" placeholder="Password">
                                </div>
                            </div>

                            <div class="g-mb-60">
                                <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13" type="button">Login</button>
                            </div>

                            <br><br>

                            <div class="text-center g-pos-rel pb-2 g-mb-60">
                                <div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
                                <span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">OR</span>
                            </div>

                            <br><br>

                            <button class="btn btn-block u-btn-facebook rounded text-uppercase g-py-13 g-mb-15" type="button">
                                <i class="mr-3 fa fa-facebook"></i>
                                <span class="g-hidden-xs-down">Login with</span> Facebook
                            </button>
                            <button class="btn btn-block u-btn-twitter rounded text-uppercase g-py-13" type="button">
                                <i class="mr-3 fa fa-twitter"></i>
                                <span class="g-hidden-xs-down">Login with</span> Twitter
                            </button>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>

                <div class="col-lg-5 g-bg-white g-rounded-right-5--lg-up">
                    <div class="g-pa-50">
                        <!-- Form -->
                        {!! Form::open(['route' => 'register', 'class' => 'g-py-15']) !!}
                            <h2 class="h3 g-color-black mb-4">Créez un compte</h2>
                            <p class="mb-4">Créez un compte maintenant et devenez annonceur sur booming !</p>

                            <div class="mb-4">
                                <div class="input-group rounded">
                                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-communication-128 u-line-icon-pro"></i>
                                </span>
                                    {!! Form::text('firstname', null, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Nom']) !!}
                                </div>
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-finance-067 u-line-icon-pro"></i>
                                    </span>
                                    {!! Form::text('lastname', null, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Prénom(s)']) !!}

                                </div>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-communication-062 u-line-icon-pro"></i>
                                    </span>
                                    {!! Form::email('email', null, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Adresse E-mail']) !!}

                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-media-094 u-line-icon-pro"></i>
                                    </span>
                                    {!! Form::text('mobile', null, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Numéro téléphone']) !!}

                                </div>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-media-094 u-line-icon-pro"></i>
                                    </span>
                                    {!! Form::password('password', ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Mot de Passe']) !!}

                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-media-094 u-line-icon-pro"></i>
                                    </span>
                                    {!! Form::password('password_confirmation', ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Confirmation du Mot de Passe']) !!}
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-2">
                                    En pousuivant votre inscription, vous acceptez les <a href="#">Terms and Conditions</a>
                                </label>
                            </div>

                            {!! Form::submit('Créer mon compte', ['class' => 'btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13']) !!}
                        {!! Form::close() !!}
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection















{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
