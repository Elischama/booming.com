@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Produit</a></li>
            <li><a href="javascript:void(0)" title="">Ajouter</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">

                <div class="col-sm-12">
                    <br><br>
                    {!! Form::open(['route' => 'produit.create', 'enctype' => 'multipart/form-data']) !!}

                    <div class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('name', 'Nom du Produit', ['class' => 'obligation']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ex: Infinix Note 5', 'required']) !!}
                            @if ($errors->has('name'))
                                <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('category_produit_id', 'Choisir une categorie', ['class' => 'obligation']) !!}
                        <select name="category_produit_id" id="category_produit_id" required class="form-control">
                            <option value="">--Choisissez une catégorie--</option>
                            @foreach($datas as $data)
                            <option value="{{ $data->id }}">{{ stripslashes($data->libelle) }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_produit_id'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('category_produit_id') }}</div>
                        @endif
                        <div id="show-formcat" style="text-decoration: underline; cursor: pointer; color: #00aaf0"><i class="fa fa-plus"></i> Ajouter une catégoie</div>

                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('etat', 'Condition', ['class' => 'obligation']) !!}
                        <select name="etat" id="" required class="form-control">
                            <option value="Neuf" selected>Neuf</option>
                            <option value="Second Main">Seconde main</option>
                        </select>
                        @if ($errors->has('etat'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('etat') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('disponibility', 'Disponibilité', ['class' => 'obligation']) !!}
                        <select name="disponibility" id="" required class="form-control">
                            <option value="En Stock">En Stock</option>
                            <option value="Bientôt Disponible">Bientôt Disponible</option>
                        </select>
                        @if ($errors->has('disponibility'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('disponibility') }}</div>
                        @endif
                        <br>
                    </div>

                    <div id="form-categorie" style="display: none;" class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('libelle', 'Nouvelle catégorie', ['class' => 'obligation']) !!}
                            {!! Form::text('libelle', null, ['id' => 'catvalue','class' => 'form-control']) !!}
                        </div>
                        <a href="" class="btn btn-primary" id="formcat">Publier</a>
                        <button class="btn btn-danger" id="formcatclose">fermer</button>
                        <br>
                    </div>
                    <div id="success-categorie" style="display: none;" class="col-sm-12">
                        <div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Nouvelle catégorie ajouté avec succès</div>
                    </div>

                    <div class="col-sm-6">
                        <br>
                        <div id="notification-price"></div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        <br>
                        <div id="notification-qty"></div>
                        <br>
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('price', 'Prix', ['class' => 'obligation']) !!} [<small><em>Saisir le prix sans la devise</em></small>]
                        {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'ex: 45000', 'required']) !!}
                        @if ($errors->has('price'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('price') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-6">
                        {!! Form::label('quantity', 'Quantité', ['class' => 'obligation']) !!}
                        {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'ex: 250', 'required']) !!}
                        @if ($errors->has('quantity'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('quantity') }}</div>
                        @endif
                        <br>
                    </div>

                    <div class="col-sm-12">
                        <br>
                        <div id="notification-taille"></div>
                        <br>
                    </div>

                    <div class="col-sm-6">
                        {!! Form::label('picture_one', 'Image n°1', ['class' => 'obligation']) !!}
                        {!! Form::file('picture_one', ['class' => 'btn btn-default btn-block', 'required']) !!}
                        @if ($errors->has('picture_one'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('picture_one') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-6">
                        {!! Form::label('picture_two', 'Image n°2', ['class' => 'obligation']) !!}
                        {!! Form::file('picture_two', ['class' => 'btn btn-default btn-block', 'required']) !!}
                        @if ($errors->has('picture_two'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('picture_two') }}</div>
                        @endif
                        <br>
                    </div>


                    <div class="col-sm-12">
                        {!! Form::label('description', 'Description', ['class' => 'obligation']) !!} [<small>Bref description du produit</small>]
                        {!! Form::textarea('description', 'Ce produit est disponible dans ma boutique !', ['class' => 'form-control', 'style' => 'max-width: 100%']) !!}
                        @if ($errors->has('description'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('description') }}</div>
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

            var price = lireCookie('__priceProduct');
            var qty = lireCookie('__qtyProduct');
            var taille = lireCookie('__tailleProduct');

            if (price==null){
                $('#notification-price').append('<div class="alert alert-info alert-dismissible" role="alert"> <button id="close-price" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <span class="fa fa-exclamation-circle" aria-hidden="true"></span> Saisissez le prix du produit sans la devise <s>FCFA</s></div>');
            }
            if (qty==null){
                $('#notification-qty').append('<div class="alert alert-info alert-dismissible" role="alert"> <button id="close-qty" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <span class="fa fa-exclamation-circle" aria-hidden="true"></span> Saisissez la quantité uniquement en chiffre</div>');
            }
            if (taille==null){
                $('#notification-taille').append('<div class="alert alert-info alert-dismissible" role="alert"> <button id="close-taille" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <span class="fa fa-exclamation-circle" aria-hidden="true"></span> Pour un affichage plus esthétique Les images doivent être carré. <strong>Dimensions</strong> (non obligatoire) : largeur = 500 pixel / largeur = 500 pixel</div>');
            }

            $('#close-price').click(function(){
                creerCookie('__priceProduct', 'notification price checked');
            });
            $('#close-qty').click(function(){
                creerCookie('__qtyProduct', 'notification quantity checked');
            });
            $('#close-taille').click(function(){
                creerCookie('__tailleProduct', 'notification taille checked');
            });

            // ajouter une new categori

            var formcat = document.getElementById("form-categorie");
            var successform = document.getElementById("success-categorie");
            var formcatclose = document.getElementById("formcatclose");

            $('#formcatclose').click(function (e) {
                e.preventDefault();

                $('#form-categorie').hide('2000');
                $('#show-formcat').show();
            });
            $('#show-formcat').click(function () {

                $('#form-categorie').show('2000');
                $('#show-formcat').hide();
            });

            $('#formcat').click(function(e){
                e.preventDefault();

                var url = '/managestore/category-product/fast-add/create?libelle='+$('#catvalue').val();

                $.ajax({
                    url: url,
                    type: 'GET',
                    success:function (response) {

                        if (response.success){

                            formcat.style.display = "none";

                            $('#success-categorie').show('1000');

                            setTimeout(function(){
                                $('#success-categorie').hide('1000');
                            }, 3000);

                            $('#show-formcat').show();

                            $('#category_produit_id')
                                .append('<option value="'+ response.id +'">' + $('#catvalue').val() + '</option>');


                        }else{

                            $('#catvalue').addClass('animated shake');
                            $('#catvalue').css('border-color', 'red');

                            setTimeout(function(){
                                $('#catvalue').removeClass('animated shake');
                            }, 1000);

                        }

                    },
                    error:function(data){
                        console.log('Error')
                    }
                });
            });
        });
    </script>
@stop