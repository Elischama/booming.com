@extends('admin.layout.layout')

@section('content')

    <div class="page-header">
        <h2>DASHBOARD</h2>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3">
            <div class="widget style2 bg-red hover-zoom-effect">
                <div class="col-xs-4 widget-icon">
                    <i class="material-icons">email</i>
                </div>
                <div class="col-xs-8 widget-body text-right">
                    <span> New messages </span>
                    <h2 class="num count-to" data-from="0" data-to="250" data-speed="1000" data-fresh-interval="20">250</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style2 bg-green">
                <div class="col-xs-4 widget-icon">
                    <i class="material-icons">face</i>
                </div>
                <div class="col-xs-8 widget-body text-right">
                    <span> New users </span>
                    <h2 class="num count-to" data-from="0" data-to="222" data-speed="1000" data-fresh-interval="20">222</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style2 bg-cyan">
                <div class="col-xs-4 widget-icon">
                    <i class="material-icons">shopping_cart</i>
                </div>
                <div class="col-xs-8 widget-body text-right">
                    <span> New orders </span>
                    <h2 class="num count-to" data-from="0" data-to="90" data-speed="1000" data-fresh-interval="20">90</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style2 bg-indigo">
                <div class="col-xs-4 widget-icon">
                    <i class="material-icons">library_music</i>
                </div>
                <div class="col-xs-8 widget-body text-right">
                    <span> New albums </span>
                    <h2 class="num count-to" data-from="0" data-to="15" data-speed="1000" data-fresh-interval="20">15</h2>
                </div>
            </div>
        </div>
    </div>

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