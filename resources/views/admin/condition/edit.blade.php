@extends('admin.layout.layout')

@section('content')

    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Produit</a></li>
            <li><a href="javascript:void(0)" title="">Editer</a></li>
        </ul>
        <div class="main-content-area">
            <div class="row">

                <div class="col-sm-12">
                    <br><br>
                    {!! Form::open(['route' => ['produit.update', $data->id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('name', 'Nom du Produit', ['class' => 'obligation']) !!}
                            {!! Form::text('name', $data->name, ['class' => 'form-control', 'placeholder' => 'ex: Infinix Note 5', 'required']) !!}
                            @if ($errors->has('name'))
                                <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <br>
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('category_produit_id', 'Choisir une categorie', ['class' => 'obligation']) !!}
                        <select name="category_produit_id" id="" required class="form-control">
                            @foreach($categories as $category)
                                @if($data->category_produit_id == $category->id)
                                    <option selected value="{{ $category->id }}">{{ $category->libelle }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->libelle }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if ($errors->has('category_produit_id'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('category_produit_id') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('etat', 'Condition', ['class' => 'obligation']) !!}
                        <select name="etat" id="" required class="form-control">
                            @if($data->etat == 'Neuf')
                                <option value="Neuf" selected>Neuf</option>
                                <option value="Second Main">Second Main</option>
                            @else
                                <option value="Neuf">Neuf</option>
                                <option value="Second Main" selected>Second Main</option>
                            @endif
                        </select>
                        @if ($errors->has('etat'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('etat') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('disponibility', 'Disponibilité', ['class' => 'obligation']) !!}
                        <select name="disponibility" id="" required class="form-control">
                            @if($data->disponibility == 'En Stock')
                                <option value="En Stock" selected>En Stock</option>
                                <option value="Bientôt Disponible">Bientôt Disponible</option>
                            @else
                                <option value="En Stock">En Stock</option>
                                <option value="Bientôt Disponible" selected>Bientôt Disponible</option>
                            @endif
                        </select>
                        @if ($errors->has('disponibility'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('disponibility') }}</div>
                        @endif
                        <br>
                    </div>

                    <div class="col-sm-6">
                        {!! Form::label('price', 'Prix', ['class' => 'obligation']) !!} [<small><em>Saisir le prix sans la devise <s>FCFA</s></em></small>]
                        {!! Form::number('price', $data->price, ['class' => 'form-control', 'placeholder' => 'ex: 45000', 'required']) !!}
                        @if ($errors->has('price'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('price') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-6">
                        {!! Form::label('quantity', 'Quantité', ['class' => 'obligation']) !!} [<small><em>La quantité est uniquement en chiffre</em></small>]
                        {!! Form::number('quantity', $data->quantity, ['class' => 'form-control', 'placeholder' => 'ex: 250', 'required']) !!}
                        @if ($errors->has('quantity'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('quantity') }}</div>
                        @endif
                        <br>
                    </div>

                    <div class="col-sm-offset-4 col-sm-2"><img class="img-thumbnail" src="{{ asset('produits/'. $data->picture_one) }}" alt=""></div>
                    <div class="col-sm-2"><img class="img-thumbnail" src="{{ asset('produits/'. $data->picture_two) }}" alt=""></div>

                    <div class="col-sm-6">
                        {!! Form::label('picture_one', '1ere Image', ['class' => 'obligation']) !!}
                        {!! Form::file('picture_one', ['class' => 'btn btn-default btn-block']) !!}
                        @if ($errors->has('picture_one'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('picture_one') }}</div>
                        @endif
                    </div>

                    <div class="col-sm-6">
                        {!! Form::label('picture_two', '2ème Image', ['class' => 'obligation']) !!}
                        {!! Form::file('picture_two', ['class' => 'btn btn-default btn-block']) !!}
                        @if ($errors->has('picture_two'))
                            <div class="auth_errors"><i class="fa fa-close"></i> {{ $errors->first('picture_two') }}</div>
                        @endif
                        <br>
                    </div>


                    <div class="col-sm-12">
                        {!! Form::label('description', 'Description', ['class' => 'obligation']) !!} [<small>Bref description du produit</small>]
                        {!! Form::textarea('description', $data->description, ['class' => 'form-control', 'style' => 'max-width: 100%']) !!}
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