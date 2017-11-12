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
                                <!-- Panel Header -->
                                <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">

                                    <h3 class="h6 mb-0">
                                        <i class="fa fa-edit"></i> Ajouter un Établissement
                                    </h3>

                                </div>
                                <div class="tab-pane fade active show" id="nav-1-1-default-hor-left-underline--3" role="tabpanel" aria-expanded="true">
                                    <h2 class="h4 g-font-weight-300">Vous allez enregistrer un <strong id="anonce_name">maqui</strong></h2>
                                    <p class="g-mb-25">Veuillez renseigner tous les champs pour enregistrer votre etablissement</p>

                                    {!! Form::open(['route' => 'user.account.annonce.save', 'enctype' => 'multipart/form-data']) !!}

                                        <!-- Payment Options -->
                                        <div class="row">
                                            <!-- Visa Card -->
                                            <div class="col-sm-4">
                                                <label class="u-check w-100 g-mb-25">
                                                    <strong class="d-block g-color-gray-dark-v2 g-font-weight-700 g-mb-10">Hotel</strong>
                                                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" value="1" name="categorie_id">

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
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Nom de l'établissement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input class="form-control form-control-md rounded-0 g-py-13 pr-0" name="name" type="text" placeholder="ex: Hotel Ibis">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ville ou Commune</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="city" type="text" placeholder="ex: Abidjan">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Situation géographique</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="situation" type="text" placeholder="ex: Marcory face Cap Sud">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Card Number -->
                                        </div>


                                        <div class="row">

                                            <div class="col-sm-4">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Numéro mobile</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="mobile" type="text" placeholder="ex: +225 XX XX XX XX">
                                                    </div>
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
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Adresse E-mail</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="inputGroup1_3" class="form-control form-control-md rounded-0 g-py-13" name="email" type="email" placeholder="ex: exemple@exemple.com">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ajoutez les points forts de votre etablissement</label>
                                                    <input id="strongPoint" class="form-control" name="strong_point" type="text" placeholder="ex: Connexion WI-FI">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Description détaillé de votre etablissement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <textarea id="inputGroup1_3" rows="10" class="form-control form-control-md rounded-0 g-py-13" name="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group g-mb-20">
                                                    <label class="g-color-gray-dark-v2 g-font-weight-700 g-mb-10" for="inputGroup1_1">Ajouter des images de votre établisement</label>
                                                    <div class="input-group g-brd-primary--focus">
                                                        <input id="input-id" type="file" class="form-control file" name="image[]" data-preview-file-type="text" multiple>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="g-brd-gray-light-v4 g-my-25">

                                        <div class="text-sm-right">
                                            <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#">Cancel</a>
                                            {!! Form::submit('Publier mon établissement', ['class' => 'btn u-btn-primary rounded-0 g-py-12 g-px-25']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
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