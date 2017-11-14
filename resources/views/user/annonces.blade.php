@extends('layouts.default')

@section('contenu')

    <section class="g-mb-100 g-mt-100">
        <div class="container">
            <div class="row">

            @include('user.partials.user_information')

            <!-- Profile Content -->
                <div class="col-sm-9">

                    <!-- Projects & Activities Panels -->
                    <div class="row g-mb-40">
                        <div class="col-sm-12 g-mb-40 g-mb-0--lg">
                            <!-- Latest Projects Panel -->
                            <div class="card border-0">

                                @if(!empty($data))

                                    <div class="tab-pane fade active show" id="nav-1-1-default-hor-left-underline--3" role="tabpanel" aria-expanded="true">
                                        <h2 class="h4 g-font-weight-300"><strong>Modifiez votre annonces [{{ stripslashes($data->name) }}]</strong></h2>
                                        <p class="g-mb-25">Veuillez renseigner tous les champs pour modifier votre annonce</p>

                                    {!! Form::open(['route' => ['user.account.annonce.update', $data->id], 'enctype' => 'multipart/form-data']) !!}

                                    <!-- Payment Options -->
                                        <div class="row">
                                            <!-- Visa Card -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Hotel</strong>
                                                    @if($data->categorie_id == 1)
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="1" name="categorie_id" checked>
                                                    @else
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="1" name="categorie_id">
                                                    @endif

                                                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                        <div class="media g-pa-12">
                                                            <div class="media-body align-self-center g-color-blue">
                                                                <i class="fa fa-bed g-font-size-30 align-self-center mx-auto"></i>
                                                            </div>

                                                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Visa Card -->

                                            <!-- Master Card -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Restaurant</strong>
                                                    @if($data->categorie_id == 2)
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" value="2" type="radio" name="categorie_id" checked>
                                                    @else
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" value="2" type="radio" name="categorie_id">
                                                    @endif

                                                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                        <div class="media g-pa-12">
                                                            <div class="media-body align-self-center g-color-lightred">
                                                                <i class="fa fa-cutlery g-font-size-30 align-self-center mx-auto"></i>
                                                            </div>

                                                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Master Card -->

                                            <!-- Amazon Payments -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Maquis</strong>
                                                    @if($data->categorie_id == 3)
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" value="3" type="radio" name="categorie_id" checked>
                                                    @else
                                                        <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" value="3" type="radio" name="categorie_id">
                                                    @endif

                                                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                        <div class="media g-pa-12">
                                                            <div class="media-body align-self-center g-color-orange">
                                                                <i class="fa fa-beer g-font-size-30 align-self-center mx-auto"></i>
                                                            </div>

                                                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Amazon Payments -->
                                        </div>

                                        <div class="row">
                                            <!-- Card Name -->
                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Nom de l'établissement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input class="form-control form-control-md rounded-0 g-py-13 pr-0" value="{{ stripslashes($data->name) }}" name="name" type="text" placeholder="ex: Hotel Ibis">
                                                    </div>
                                                    @if ($errors->has('name'))
                                                        <div class="field_required">
                                                            Le nom de l'établissement est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Ville ou Commune</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" value="{{ stripslashes($data->city) }}" name="city" type="text" placeholder="ex: Abidjan">
                                                    </div>
                                                    @if ($errors->has('city'))
                                                        <div class="field_required">
                                                            La ville ou commune est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Situation géographique</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" value="{{ stripslashes($data->situation) }}" name="situation" type="text" placeholder="ex: Marcory face Cap Sud">
                                                    </div>
                                                    @if ($errors->has('situation'))
                                                        <div class="field_required">
                                                            La situation géographique est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- End Card Number -->
                                        </div>


                                        <div class="row">

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Numéro mobile</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" value="{{ $data->mobile }}" name="mobile" type="text" placeholder="ex: +225 XX XX XX XX">
                                                    </div>
                                                    @if ($errors->has('mobile'))
                                                        <div class="field_required">
                                                            Le numéro de téléphone est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Fixe ou mobile n°2</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" value="{{ $data->fixe }}" name="fixe" type="text" placeholder="ex: +225 XX XX XX XX">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Adresse E-mail</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" value="{{ $data->email }}" name="email" type="email" placeholder="ex: exemple@exemple.com">
                                                    </div>
                                                    @if ($errors->has('email'))
                                                        <div class="field_required">
                                                            L'adresse E-mail est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ajoutez les points forts de votre etablissement</label>

                                                    @if(count($strongPoints) > 0)
                                                    <ul class="u-list-inline">
                                                        @for($i=0; $i<sizeof($strongPoints[0]); $i++)
                                                            <li class="list-inline-item g-mb-10">
                                                                <a class="DeleteStrongPoint u-tags-v1 g-color-green g-brd-around g-brd-green g-bg-green--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15 toolt" title="Cliquez pour suprimer" href="{{ route('user.account.annonce.strong.point.delete', ['annonce' => $data->id, 'tag' => $strongPoints[0][$i]]) }}">{{ $strongPoints[0][$i] }}</a>
                                                            </li>
                                                        @endfor
                                                    </ul>

                                                    @endif

                                                    <input id="strongPoint" class="form-control" name="strong_point" type="text" placeholder="ex: Connexion WI-FI">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Description détaillé de votre etablissement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <textarea id="inputGroup1_3" rows="10" class="form-control form-control-md rounded-0 g-py-13" name="description">{{ stripslashes($data->description) }}</textarea>
                                                    </div>
                                                    @if ($errors->has('description'))
                                                        <div class="field_required">
                                                            La description de l'établissement est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ajouter des images de votre établisement</label>

                                                    @if(count($images) > 0)
                                                        <div class="row">
                                                            @foreach($images as $image)
                                                                <div class="col-sm-3 text-center">
                                                                    <img src="/assets/img/annonces/{{ $image->name }}" style="width: 100%;" alt="">
                                                                    <a href="{{ route('user.account.annonce.image.delete', ['picture_id' => $image->id, 'annonce' => $data->id]) }}" class="DeleteImage btn u-btn-red btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif

                                                    <br>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="input-id" type="file" class="form-control file" name="image[]" data-preview-file-type="text" multiple>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="g-brd-gray-light-v4 g-my-25">

                                        <div class="text-sm-right">
                                            <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="{{ route('user.account.annonce.list') }}">Retour</a>
                                            {!! Form::submit('Modifier mon annonce', ['class' => 'btn u-btn-primary rounded-0 g-py-12 g-px-25']) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>


                                @else


                                    <div class="tab-pane fade active show" id="nav-1-1-default-hor-left-underline--3" role="tabpanel" aria-expanded="true">
                                        <h2 class="h4 g-font-weight-300"><strong>Vous allez enregistrer un Etablissement</strong></h2>
                                        <p class="g-mb-25">Veuillez renseigner tous les champs pour enregistrer votre etablissement</p>

                                    {!! Form::open(['route' => 'user.account.annonce.save', 'enctype' => 'multipart/form-data']) !!}

                                    <!-- Payment Options -->
                                        <div class="row">
                                            <!-- Visa Card -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Hotel</strong>
                                                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="1" name="categorie_id" checked>

                                                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                        <div class="media g-pa-12">
                                                            <div class="media-body align-self-center g-color-blue">
                                                                <i class="fa fa-bed g-font-size-30 align-self-center mx-auto"></i>
                                                            </div>

                                                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Visa Card -->

                                            <!-- Master Card -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Restaurant</strong>
                                                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" value="2" type="radio" name="categorie_id">

                                                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                        <div class="media g-pa-12">
                                                            <div class="media-body align-self-center g-color-lightred">
                                                                <i class="fa fa-cutlery g-font-size-30 align-self-center mx-auto"></i>
                                                            </div>

                                                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Master Card -->

                                            <!-- Amazon Payments -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Maquis</strong>
                                                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" value="3" type="radio" name="categorie_id">

                                                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                                                        <div class="media g-pa-12">
                                                            <div class="media-body align-self-center g-color-orange">
                                                                <i class="fa fa-beer g-font-size-30 align-self-center mx-auto"></i>
                                                            </div>

                                                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <!-- End Amazon Payments -->
                                        </div>

                                        <div class="row">
                                            <!-- Card Name -->
                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Nom de l'établissement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input class="form-control form-control-md rounded-0 g-py-13 pr-0" name="name" type="text" placeholder="ex: Hotel Ibis">
                                                    </div>
                                                    @if ($errors->has('name'))
                                                        <div class="field_required">
                                                            Le nom de l'établissement est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Ville ou Commune</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="city" type="text" placeholder="ex: Abidjan">
                                                    </div>
                                                    @if ($errors->has('city'))
                                                        <div class="field_required">
                                                            La ville ou commune est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Situation géographique</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="situation" type="text" placeholder="ex: Marcory face Cap Sud">
                                                    </div>
                                                    @if ($errors->has('situation'))
                                                        <div class="field_required">
                                                            La situation géographique est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- End Card Number -->
                                        </div>


                                        <div class="row">

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Numéro mobile</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="mobile" type="text" placeholder="ex: +225 XX XX XX XX">
                                                    </div>
                                                    @if ($errors->has('mobile'))
                                                        <div class="field_required">
                                                            Le numéro de téléphone est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Fixe ou mobile n°2</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="fixe" type="text" placeholder="ex: +225 XX XX XX XX">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Adresse E-mail</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="email" type="email" placeholder="ex: exemple@exemple.com">
                                                    </div>
                                                    @if ($errors->has('email'))
                                                        <div class="field_required">
                                                            L'adresse E-mail est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ajoutez les points forts de votre etablissement</label>

                                                    <!-- cookies -->
                                                    <div id="TutoStrongPoint" class="alert fade show g-bg-cyan-opacity-0_1 g-color-cyan rounded-0 g-mb-5" role="alert">
                                                        <button type="button" id="closeStrongPointTuto" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>

                                                        <div class="media">
                                                            <div class="media-body">
                                                                <p class="m-0">Vous devez taper sur la touche entrer du clavier lorsque vous finissez de renseigner un point fort</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <!-- end cookie -->
                                                    <input id="strongPoint" class="form-control" name="strong_point" type="text" placeholder="ex: Connexion WI-FI">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10 required" for="inputGroup1_1">Description détaillé de votre etablissement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <textarea id="inputGroup1_3" rows="10" class="form-control form-control-md rounded-0 g-py-13" name="description"></textarea>
                                                    </div>
                                                    @if ($errors->has('description'))
                                                        <div class="field_required">
                                                            La description de l'établissement est obligatoire
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ajouter des images de votre établisement</label>

                                                    <!-- cookies -->
                                                    <div id="TutoImage" class="alert fade show g-bg-cyan-opacity-0_1 g-color-cyan rounded-0 g-mb-5" role="alert">
                                                        <button type="button" id="closeTutoImage" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>

                                                        <div class="media">
                                                            <div class="media-body">
                                                                <p class="m-0">Pour un meilleur affichage de votre annonce veuillez utiliser des images de même taille</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <!-- end cookie -->

                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="input-id" type="file" class="form-control file" name="image[]" data-preview-file-type="text" multiple>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="g-brd-gray-light-v4 g-my-25">

                                        <div class="text-sm-right">
                                            <button type="reset" class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10">Réinitialiser</button>
                                            {!! Form::submit('Publier mon établissement', ['class' => 'btn u-btn-primary rounded-0 g-py-12 g-px-25']) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>

                                @endif
                            </div>
                            <!-- End Latest Projects Panel -->
                        </div>
                    </div>

                </div>
                <!-- End Profile Content -->
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        $('#strongPoint').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });

        $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});

    </script>
@endsection