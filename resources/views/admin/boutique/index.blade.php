@extends('admin.layout.layout')

@section('content')
    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Boutique</a></li>
            <li><a href="javascript:void(0)" title="">Editer</a></li>
        </ul>

        <div class="main-content-area">
            <br>
            @include('partials.flash')
            <br>
            <div class="row">

                <div class="col-sm-12">
                    {!! Form::open(['route' => ['boutique.update', $data->id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Nom de votre Boutique', ['class' => 'obligation']) !!}
                            {!! Form::text('name', stripslashes($data->name), ['class' => 'form-control']) !!}
                            @if ($errors->has('name'))
                                <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-6">
                        <label for="category_boutique_id" class="obligation">Catégorie de votre Boutique</label>
                        <select name="category_boutique_id" id="category_boutique_id" class="form-control">
                            @foreach($categories as $category)
                                @if($data->category_boutique_id == $category->id)
                                    <option selected value="{{ $category->id }}">{{ stripslashes($category->libelle) }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ stripslashes($category->libelle) }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('category_boutique_id'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('category_boutique_id') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vous livrez les archandises ?</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <p>Lorsqu'un client passera une commande, veuillez le contacter pour négocier les termes de la livraison.</p>
                                    {{--<div id="detail_livraison">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-sm-6">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--{!! Form::label('cout_livraison', 'Coût de la livraison') !!}--}}
                                                    {{--<div class="input-group">--}}
                                                        {{--{!! Form::text('cout_livraison', $data->cout_livraison, ['class' => 'form-control', 'placeholder' => 'ex: 1000']) !!}--}}
                                                        {{--<div class="input-group-addon">F CFA</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-sm-6">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--{!! Form::label('delai_livraison', 'Delais de Livraison') !!}--}}
                                                    {{--<div class="input-group">--}}
                                                        {{--{!! Form::text('delai_livraison', $data->delai_livraison, ['class' => 'form-control', 'placeholder' => 'ex: 4']) !!}--}}
                                                        {{--<div class="input-group-addon">Jour(s) Après l'achat</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<br>--}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                            {!! Form::label('contact_one', 'Contact n°1', ['class' => 'obligation']) !!}
                            {!! Form::text('contact_one', $data->contact_one, ['required', 'class' => 'form-control']) !!}
                            @if ($errors->has('contact_one'))
                                <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('contact_one') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            {!! Form::label('contact_two', 'Contact n°2') !!}
                            {!! Form::text('contact_two', $data->contact_two, ['placeholder' => 'ex: 45 45 45 45', 'class' => 'form-control']) !!}
                            @if ($errors->has('contact_two'))
                                <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('contact_two') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('ville', 'Ville ou commune', ['class' => 'obligation']) !!}
                        {!! Form::text('ville', stripslashes($data->ville), ['class' => 'form-control']) !!}
                        @if ($errors->has('ville'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('ville') }}</div>
                        @endif
                        <br>
                    </div>

                    {{--<div class="col-sm-6">--}}
                        {{--{!! Form::label('pays', 'Pays', ['class' => 'obligation']) !!}--}}
                        {{--<select class="form-control" name="pays" required>--}}
                            {{--<option value="{{ stripslashes($data->pays) }}" selected>{{ stripslashes($data->pays) }}</option>--}}
                            {{--<option value="Afghanistan">Afghanistan </option>--}}
                            {{--<option value="Afrique_Centrale">Afrique_Centrale </option>--}}
                            {{--<option value="Afrique_du_sud">Afrique_du_Sud </option>--}}
                            {{--<option value="Albanie">Albanie </option>--}}
                            {{--<option value="Algerie">Algerie </option>--}}
                            {{--<option value="Allemagne">Allemagne </option>--}}
                            {{--<option value="Andorre">Andorre </option>--}}
                            {{--<option value="Angola">Angola </option>--}}
                            {{--<option value="Anguilla">Anguilla </option>--}}
                            {{--<option value="Arabie_Saoudite">Arabie_Saoudite </option>--}}
                            {{--<option value="Argentine">Argentine </option>--}}
                            {{--<option value="Armenie">Armenie </option>--}}
                            {{--<option value="Australie">Australie </option>--}}
                            {{--<option value="Autriche">Autriche </option>--}}
                            {{--<option value="Azerbaidjan">Azerbaidjan </option>--}}
                            {{--<option value="Bahamas">Bahamas </option>--}}
                            {{--<option value="Bangladesh">Bangladesh </option>--}}
                            {{--<option value="Barbade">Barbade </option>--}}
                            {{--<option value="Bahrein">Bahrein </option>--}}
                            {{--<option value="Belgique">Belgique </option>--}}
                            {{--<option value="Belize">Belize </option>--}}
                            {{--<option value="Benin">Benin </option>--}}
                            {{--<option value="Bermudes">Bermudes </option>--}}
                            {{--<option value="Bielorussie">Bielorussie </option>--}}
                            {{--<option value="Bolivie">Bolivie </option>--}}
                            {{--<option value="Botswana">Botswana </option>--}}
                            {{--<option value="Bhoutan">Bhoutan </option>--}}
                            {{--<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>--}}
                            {{--<option value="Bresil">Bresil </option>--}}
                            {{--<option value="Brunei">Brunei </option>--}}
                            {{--<option value="Bulgarie">Bulgarie </option>--}}
                            {{--<option value="Burkina_Faso">Burkina_Faso </option>--}}
                            {{--<option value="Burundi">Burundi </option>--}}
                            {{--<option value="Caiman">Caiman </option>--}}
                            {{--<option value="Cambodge">Cambodge </option>--}}
                            {{--<option value="Cameroun">Cameroun </option>--}}
                            {{--<option value="Canada">Canada </option>--}}
                            {{--<option value="Canaries">Canaries </option>--}}
                            {{--<option value="Cap_vert">Cap_Vert </option>--}}
                            {{--<option value="Chili">Chili </option>--}}
                            {{--<option value="Chine">Chine </option>--}}
                            {{--<option value="Chypre">Chypre </option>--}}
                            {{--<option value="Colombie">Colombie </option>--}}
                            {{--<option value="Comores">Colombie </option>--}}
                            {{--<option value="Congo">Congo </option>--}}
                            {{--<option value="Congo_democratique">Congo_democratique </option>--}}
                            {{--<option value="Cook">Cook </option>--}}
                            {{--<option value="Coree_du_Nord">Coree_du_Nord </option>--}}
                            {{--<option value="Coree_du_Sud">Coree_du_Sud </option>--}}
                            {{--<option value="Costa_Rica">Costa_Rica </option>--}}
                            {{--<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>--}}
                            {{--<option value="Croatie">Croatie </option>--}}
                            {{--<option value="Cuba">Cuba </option>--}}
                            {{--<option value="Danemark">Danemark </option>--}}
                            {{--<option value="Djibouti">Djibouti </option>--}}
                            {{--<option value="Dominique">Dominique </option>--}}
                            {{--<option value="Egypte">Egypte </option>--}}
                            {{--<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>--}}
                            {{--<option value="Equateur">Equateur </option>--}}
                            {{--<option value="Erythree">Erythree </option>--}}
                            {{--<option value="Espagne">Espagne </option>--}}
                            {{--<option value="Estonie">Estonie </option>--}}
                            {{--<option value="Etats_Unis">Etats_Unis </option>--}}
                            {{--<option value="Ethiopie">Ethiopie </option>--}}
                            {{--<option value="Falkland">Falkland </option>--}}
                            {{--<option value="Feroe">Feroe </option>--}}
                            {{--<option value="Fidji">Fidji </option>--}}
                            {{--<option value="Finlande">Finlande </option>--}}
                            {{--<option value="France">France </option>--}}
                            {{--<option value="Gabon">Gabon </option>--}}
                            {{--<option value="Gambie">Gambie </option>--}}
                            {{--<option value="Georgie">Georgie </option>--}}
                            {{--<option value="Ghana">Ghana </option>--}}
                            {{--<option value="Gibraltar">Gibraltar </option>--}}
                            {{--<option value="Grece">Grece </option>--}}
                            {{--<option value="Grenade">Grenade </option>--}}
                            {{--<option value="Groenland">Groenland </option>--}}
                            {{--<option value="Guadeloupe">Guadeloupe </option>--}}
                            {{--<option value="Guam">Guam </option>--}}
                            {{--<option value="Guatemala">Guatemala</option>--}}
                            {{--<option value="Guernesey">Guernesey </option>--}}
                            {{--<option value="Guinee">Guinee </option>--}}
                            {{--<option value="Guinee_Bissau">Guinee_Bissau </option>--}}
                            {{--<option value="Guinee equatoriale">Guinee_Equatoriale </option>--}}
                            {{--<option value="Guyana">Guyana </option>--}}
                            {{--<option value="Guyane_Francaise ">Guyane_Francaise </option>--}}
                            {{--<option value="Haiti">Haiti </option>--}}
                            {{--<option value="Hawaii">Hawaii </option>--}}
                            {{--<option value="Honduras">Honduras </option>--}}
                            {{--<option value="Hong_Kong">Hong_Kong </option>--}}
                            {{--<option value="Hongrie">Hongrie </option>--}}
                            {{--<option value="Inde">Inde </option>--}}
                            {{--<option value="Indonesie">Indonesie </option>--}}
                            {{--<option value="Iran">Iran </option>--}}
                            {{--<option value="Iraq">Iraq </option>--}}
                            {{--<option value="Irlande">Irlande </option>--}}
                            {{--<option value="Islande">Islande </option>--}}
                            {{--<option value="Israel">Israel </option>--}}
                            {{--<option value="Italie">italie </option>--}}
                            {{--<option value="Jamaique">Jamaique </option>--}}
                            {{--<option value="Jan Mayen">Jan Mayen </option>--}}
                            {{--<option value="Japon">Japon </option>--}}
                            {{--<option value="Jersey">Jersey </option>--}}
                            {{--<option value="Jordanie">Jordanie </option>--}}
                            {{--<option value="Kazakhstan">Kazakhstan </option>--}}
                            {{--<option value="Kenya">Kenya </option>--}}
                            {{--<option value="Kirghizstan">Kirghizistan </option>--}}
                            {{--<option value="Kiribati">Kiribati </option>--}}
                            {{--<option value="Koweit">Koweit </option>--}}
                            {{--<option value="Laos">Laos </option>--}}
                            {{--<option value="Lesotho">Lesotho </option>--}}
                            {{--<option value="Lettonie">Lettonie </option>--}}
                            {{--<option value="Liban">Liban </option>--}}
                            {{--<option value="Liberia">Liberia </option>--}}
                            {{--<option value="Liechtenstein">Liechtenstein </option>--}}
                            {{--<option value="Lituanie">Lituanie </option>--}}
                            {{--<option value="Luxembourg">Luxembourg </option>--}}
                            {{--<option value="Lybie">Lybie </option>--}}
                            {{--<option value="Macao">Macao </option>--}}
                            {{--<option value="Macedoine">Macedoine </option>--}}
                            {{--<option value="Madagascar">Madagascar </option>--}}
                            {{--<option value="Madère">Madère </option>--}}
                            {{--<option value="Malaisie">Malaisie </option>--}}
                            {{--<option value="Malawi">Malawi </option>--}}
                            {{--<option value="Maldives">Maldives </option>--}}
                            {{--<option value="Mali">Mali </option>--}}
                            {{--<option value="Malte">Malte </option>--}}
                            {{--<option value="Man">Man </option>--}}
                            {{--<option value="Mariannes du Nord">Mariannes du Nord </option>--}}
                            {{--<option value="Maroc">Maroc </option>--}}
                            {{--<option value="Marshall">Marshall </option>--}}
                            {{--<option value="Martinique">Martinique </option>--}}
                            {{--<option value="Maurice">Maurice </option>--}}
                            {{--<option value="Mauritanie">Mauritanie </option>--}}
                            {{--<option value="Mayotte">Mayotte </option>--}}
                            {{--<option value="Mexique">Mexique </option>--}}
                            {{--<option value="Micronesie">Micronesie </option>--}}
                            {{--<option value="Midway">Midway </option>--}}
                            {{--<option value="Moldavie">Moldavie </option>--}}
                            {{--<option value="Monaco">Monaco </option>--}}
                            {{--<option value="Mongolie">Mongolie </option>--}}
                            {{--<option value="Montserrat">Montserrat </option>--}}
                            {{--<option value="Mozambique">Mozambique </option>--}}
                            {{--<option value="Namibie">Namibie </option>--}}
                            {{--<option value="Nauru">Nauru </option>--}}
                            {{--<option value="Nepal">Nepal </option>--}}
                            {{--<option value="Nicaragua">Nicaragua </option>--}}
                            {{--<option value="Niger">Niger </option>--}}
                            {{--<option value="Nigeria">Nigeria </option>--}}
                            {{--<option value="Niue">Niue </option>--}}
                            {{--<option value="Norfolk">Norfolk </option>--}}
                            {{--<option value="Norvege">Norvege </option>--}}
                            {{--<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>--}}
                            {{--<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>--}}
                            {{--<option value="Oman">Oman </option>--}}
                            {{--<option value="Ouganda">Ouganda </option>--}}
                            {{--<option value="Ouzbekistan">Ouzbekistan </option>--}}
                            {{--<option value="Pakistan">Pakistan </option>--}}
                            {{--<option value="Palau">Palau </option>--}}
                            {{--<option value="Palestine">Palestine </option>--}}
                            {{--<option value="Panama">Panama </option>--}}
                            {{--<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>--}}
                            {{--<option value="Paraguay">Paraguay </option>--}}
                            {{--<option value="Pays_Bas">Pays_Bas </option>--}}
                            {{--<option value="Perou">Perou </option>--}}
                            {{--<option value="Philippines">Philippines </option>--}}
                            {{--<option value="Pologne">Pologne </option>--}}
                            {{--<option value="Polynesie">Polynesie </option>--}}
                            {{--<option value="Porto_Rico">Porto_Rico </option>--}}
                            {{--<option value="Portugal">Portugal </option>--}}
                            {{--<option value="Qatar">Qatar </option>--}}
                            {{--<option value="Republique_Dominicaine">Republique_Dominicaine </option>--}}
                            {{--<option value="Republique_Tcheque">Republique_Tcheque </option>--}}
                            {{--<option value="Reunion">Reunion </option>--}}
                            {{--<option value="Roumanie">Roumanie </option>--}}
                            {{--<option value="Royaume_Uni">Royaume_Uni </option>--}}
                            {{--<option value="Russie">Russie </option>--}}
                            {{--<option value="Rwanda">Rwanda </option>--}}
                            {{--<option value="Sahara Occidental">Sahara Occidental </option>--}}
                            {{--<option value="Sainte_Lucie">Sainte_Lucie </option>--}}
                            {{--<option value="Saint_Marin">Saint_Marin </option>--}}
                            {{--<option value="Salomon">Salomon </option>--}}
                            {{--<option value="Salvador">Salvador </option>--}}
                            {{--<option value="Samoa_Occidentales">Samoa_Occidentales</option>--}}
                            {{--<option value="Samoa_Americaine">Samoa_Americaine </option>--}}
                            {{--<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>--}}
                            {{--<option value="Senegal">Senegal </option>--}}
                            {{--<option value="Seychelles">Seychelles </option>--}}
                            {{--<option value="Sierra Leone">Sierra Leone </option>--}}
                            {{--<option value="Singapour">Singapour </option>--}}
                            {{--<option value="Slovaquie">Slovaquie </option>--}}
                            {{--<option value="Slovenie">Slovenie</option>--}}
                            {{--<option value="Somalie">Somalie </option>--}}
                            {{--<option value="Soudan">Soudan </option>--}}
                            {{--<option value="Sri_Lanka">Sri_Lanka </option>--}}
                            {{--<option value="Suede">Suede </option>--}}
                            {{--<option value="Suisse">Suisse </option>--}}
                            {{--<option value="Surinam">Surinam </option>--}}
                            {{--<option value="Swaziland">Swaziland </option>--}}
                            {{--<option value="Syrie">Syrie </option>--}}
                            {{--<option value="Tadjikistan">Tadjikistan </option>--}}
                            {{--<option value="Taiwan">Taiwan </option>--}}
                            {{--<option value="Tonga">Tonga </option>--}}
                            {{--<option value="Tanzanie">Tanzanie </option>--}}
                            {{--<option value="Tchad">Tchad </option>--}}
                            {{--<option value="Thailande">Thailande </option>--}}
                            {{--<option value="Tibet">Tibet </option>--}}
                            {{--<option value="Timor_Oriental">Timor_Oriental </option>--}}
                            {{--<option value="Togo">Togo </option>--}}
                            {{--<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>--}}
                            {{--<option value="Tristan da cunha">Tristan de cuncha </option>--}}
                            {{--<option value="Tunisie">Tunisie </option>--}}
                            {{--<option value="Turkmenistan">Turmenistan </option>--}}
                            {{--<option value="Turquie">Turquie </option>--}}
                            {{--<option value="Ukraine">Ukraine </option>--}}
                            {{--<option value="Uruguay">Uruguay </option>--}}
                            {{--<option value="Vanuatu">Vanuatu </option>--}}
                            {{--<option value="Vatican">Vatican </option>--}}
                            {{--<option value="Venezuela">Venezuela </option>--}}
                            {{--<option value="Vierges_Americaines">Vierges_Americaines </option>--}}
                            {{--<option value="Vierges_Britanniques">Vierges_Britanniques </option>--}}
                            {{--<option value="Vietnam">Vietnam </option>--}}
                            {{--<option value="Wake">Wake </option>--}}
                            {{--<option value="Wallis et Futuma">Wallis et Futuma </option>--}}
                            {{--<option value="Yemen">Yemen </option>--}}
                            {{--<option value="Yougoslavie">Yougoslavie </option>--}}
                            {{--<option value="Zambie">Zambie </option>--}}
                            {{--<option value="Zimbabwe">Zimbabwe </option>--}}
                        {{--</select>--}}
                        {{--@if ($errors->has('pays'))--}}
                            {{--<div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('pays') }}</div>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6">--}}
                        {{--{!! Form::label('logo', 'Logo de la boutique') !!}--}}
                        {{--{!! Form::file('logo', ['class' => 'btn btn-default btn-block']) !!}--}}
                        {{--@if ($errors->has('logo'))--}}
                            {{--<div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('logo') }}</div>--}}
                        {{--@endif--}}
                        {{--<br>--}}
                    {{--</div>--}}

                    <div class="col-sm-12">
                        {!! Form::label('description', 'Description') !!} [<small>Décrivez brièvement votre boutique</small>]
                        {!! Form::textarea('description', stripslashes($data->description), ['class' => 'form-control', 'style' => 'max-width: 100%']) !!}
                        @if ($errors->has('description'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('description') }}</div>
                        @endif
                        <br>
                    </div>

                    <div class="col-sm-offset-4 col-sm-4">
                        <div class="form-group text-center">
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                    <br><br>
                </div>

            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@stop

@section('js')
    {{--<script>--}}
        {{--var livraison = document.getElementById("detail_livraison");--}}
        {{--livraison.style.display = "none";--}}

        {{--$("#oui").click(function(){--}}
            {{--livraison.style.display = "block";--}}
        {{--});--}}
        {{--$("#non").click(function () {--}}
            {{--livraison.style.display = "none";--}}
        {{--})--}}
    {{--</script>--}}
@endsection