@extends('layouts.default')

@section('contenu')

    <section class="g-mb-100 g-mt-100">
        <div class="container">
            <div class="row">

            @include('user.partials.user_information')

            <!-- Profile Content -->
                <div class="col-sm-9">

                    <div class="" id="nav-1-1-default-hor-left-underline--2" role="tabpanel" aria-expanded="true">
                        <h2 class="h4 g-font-weight-300"><strong>Modifier mes informations</strong></h2>

                        {!! Form::open(['route' => 'user.account.setting.save', 'class' => 'g-py-15']) !!}

                        <div class="row">
                            <div class="col-sm-6">

                                <div class="mb-4">
                                    <div class="input-group rounded">
                                <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-communication-128 u-line-icon-pro"></i>
                                </span>
                                        {!! Form::text('firstname', $user->firstname, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Nom']) !!}
                                    </div>
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="mb-4">
                                    <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-finance-067 u-line-icon-pro"></i>
                                    </span>
                                        {!! Form::text('lastname', $user->lastname, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Prénom(s)']) !!}

                                    </div>
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-sm-6">

                                <div class="mb-4">
                                    <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-communication-062 u-line-icon-pro"></i>
                                    </span>
                                        {!! Form::email('email', $user->email, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Adresse E-mail']) !!}

                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="mb-4">
                                    <div class="input-group rounded">
                                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                                      <i class="icon-media-094 u-line-icon-pro"></i>
                                    </span>
                                        {!! Form::text('mobile', $user->mobile, ['class' => 'form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13', 'placeholder' => 'Numéro téléphone']) !!}

                                    </div>
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                        </div>

                        {!! Form::submit('Enregistre', ['class' => 'btn btn-md pull-right u-btn-primary rounded text-uppercase g-py-13']) !!}
                        {!! Form::close() !!}

                    </div>

                </div>
                <!-- End Profile Content -->
            </div>
        </div>
    </section>

@endsection