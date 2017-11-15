@extends('admin.layout.layout')

@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <h2>
                    {{ stripslashes($data->name) }}
                </h2>
            </div>
            
            <div class="row">
                <div class="col-sm-8">

                    @if(count($images) > 0)
                        <div id="ImageAnnonce">
                            @foreach($images as $image)
                                <div><img style="width: 100%;" src="/assets/img/annonces/{{ $image->name }}" alt=""></div>
                            @endforeach
                        </div>
                    @endif

                    <h3>Description</h3>
                    {!! $data->description !!}

                        <h3>Points Forts</h3>
                    <ul>

                        @for($i=0; $i<sizeof($strongPoins[0]); $i++)
                            <li><i class="fa fa-check"></i> {{ $strongPoins[0][$i] }}</li>
                        @endfor
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h3>[A propos de l'annonce]</h3>
                    <p>Ville/Commune : {{ $data->city }}</p>
                    <p>Localisation : {{ $data->situation }}</p>
                    <p>Numéro Tél. : {{ $data->mobile }}</p>
                    @if(!empty($data->fixe))
                    <p>Numéro Tél. : {{ $data->fixe }}</p>
                    @endif
                    <p>Categorie : {{ $data->categorie->libelle }}</p>
                    @if($data->verified == 0)
                    <p>Statut : <span class="label label-warning">Non Confirmé</span></p>
                    @else
                    <p>Statut : <span class="label label-success">Confirmé</span></p>
                    @endif
                    <p>E-mail : {{ $data->email }}</p>
                    <hr>
                    <h3>[A propos de l'annonceur]</h3>
                    <p>Nom: {{ stripslashes($data->user->firstname. ' ' . $data->user->lastname) }}</p>
                    <p>E-mail: {{ $data->user->email }}</p>
                    <p>Numéro Tél.: {{ $data->user->mobile }}</p>
                    <hr>
                    <h3>[Action]</h3>

                    @if($data->verified == 0)
                    <a href="{{ route('annonce.validate', $data->id) }}" class="btn btn-success btn-sm">Valider <i class="fa fa-check-square-o"></i></a>
                    @else
                    <a href="{{ route('annonce.un.validate', $data->id) }}" class="btn btn-warning btn-sm">Désactiver <i class="fa fa-close"></i></a>
                    @endif
                    <a href="{{ route('annonce.delete', $data->id) }}" class="btn btn-danger btn-sm">Supprimer <i class="fa fa-trash-o"></i></a>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#ImageAnnonce').slick({
                dots: false,
                infinite: true,
                speed: 500,
                fade: false,
                autoplay: true,
                arrows: false,
            });
        });
    </script>
@endsection

@section('jss')
    <script>
        creerCookie('__adminTitle', $('#cookBoutique').val()+' chez '+$('#cookUser').val()+' | YooBoutik');

        $('.close-tuto').click(function(){
            creerCookie('__tuto', 'tutoriel administration yooboutique');
        });

        if (lireCookie('__tuto') != null){
            $('#tuto').append('<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="close-tuto" aria-hidden="true">&times;</span></button>Bienvenue dans votre zone d\'administration. c\'est ici que vous allez publier vos produits, faire vos promo etc ... explication des elements du menu<br><ol><li>Ma boutique : vous permet de modifier les informations de votre boutique et ajouter/modifier la pochette de votre boutique</li><li>Catégorie produit : Vos produits serons regroupés par catégorie, vous pouvez en créer au tant que vous souhaitez</li><li>Produits : Gestion (Ajout / Modification / Suppression) de vos produits</li><li>Offres Speciales : Vous pouvez faire des offres sur vos produits déjà publié</li><li>Epingler un produit : Si vous êtes particuliairement fière d\'un de vos produit vous pouvez l\'épingler, il sera mis en avant</li><li>Commandes : Les commandes passés dans votre boutique y serons</li></ol></div>');
        }
    </script>
@endsection