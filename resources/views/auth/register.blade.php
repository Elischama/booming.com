@extends('layouts.default')

@section('contenu')


    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-100" style="background-image: url(/assets/img/img24.jpg);">
        <div class="container u-bg-overlay__inner">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <!-- Heading -->
                    <h1 class="g-color-white text-uppercase mb-4">Créez un compte</h1>
                    <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
                    <!-- End Heading -->
                </div>
            </div>

            <div class="row justify-content-center align-items-center no-gutters">

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