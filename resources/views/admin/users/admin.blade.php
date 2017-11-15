@extends('admin.layout.layout')

@section('content')

    <div class="page-header">
        <h2>TOUS LES ADMINISTRATEURS DE BOOMING</h2>
    </div>

    @if(count($datas) > 0)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">

                {!! Form::open(['route' => 'new.admin', 'id' => 'AddNewAdminForm']) !!}
                    <div class="form-group focused">
                        <label>Ajouter un administrateur</label>
                        <input type="text" class="form-control" id="AddNewAdmin" name="email" placeholder="Saisissez l'adresse e-mail" autofocus>
                        {{--<input type="submit">--}}
                    </div>
                {!! Form::close() !!}

                <div class="body table-responsive">
                    <table class="table table-striped" id="NewAdminResult"></table>
                </div>

                <h2>
                    {{ count($datas) }} Administrateurs
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>E-mail</th>
                            <th>Mobile</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                        @foreach($datas as $data)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ stripslashes($data->firstname) }}</td>
                                <td>{{ stripslashes($data->lastname) }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->mobile }}</td>

                                @if($data->verified == 0)
                                    <td><span class="label label-warning">Non Confimé</span></td>
                                @else
                                    <td><span class="label label-success">Confirmé</span></td>
                                @endif
                                <td>
                                    @if($data->verified == 0)
                                    <a href="{{ route('user.resend', $data->id) }}" class="ResendMail btn btn-xs btn-info"><i class="fa fa-send-o"></i></a>
                                    @endif
                                    <a href="{{ route('delete.admin', $data->id) }}" class="DeleteAdmin btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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