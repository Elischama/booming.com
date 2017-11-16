@extends('admin.layout.layout')

@section('content')

    <div class="page-header">
        <h2>ANNONCES EN ATTENTES DE VALIDATIONS</h2>
    </div>

    @if(count($datas) > 0)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <h2>
                    {{ count($datas) }} Annonces
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Ville/Commune</th>
                            <th>Mobile</th>
                            <th>Catégorie</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ stripslashes($data->name) }}</td>
                                <td>{{ stripslashes($data->city) }}</td>
                                <td>{{ $data->mobile }}</td>
                                <td>{{ $data->categorie->libelle }}</td>

                                @if($data->verified == 0)
                                    <td class="AnnonceLabel"><span class="label label-warning">Non Validé</span></td>
                                @else
                                    <td class="AnnonceLabel"><span class="label label-success">Validé</span></td>
                                @endif
                                <td>
                                    @if($data->verified == 0)
                                        <a href="{{ route('annonce.validate', $data->id) }}" class="AnnonceValidate btn btn-xs btn-info"><i class="fa fa-check-square-o"></i></a>
                                    @else
                                        <a href="{{ route('annonce.un.validate', $data->id) }}" class="AnnonceUnValidate btn btn-xs btn-instagram"><i class="fa fa-close"></i></a>
                                    @endif
                                    <a href="{{ route('annonce.delete', $data->id) }}" class="AnnonceDelete btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                    <a href="{{ route('annonce.show', $data->id) }}" class="btn btn-xs btn-dribbble"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @php($i++)
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else

        @include('layouts.partials.empty')

    @endif

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