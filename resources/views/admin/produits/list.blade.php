@extends('admin.layout.layout')

@section('content')
    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Produit</a></li>
            <li><a href="javascript:void(0)" title="">Liste</a></li>
        </ul>

        <div class="main-content-area">
            <br>
            @include('partials.flash')
            <br>

            <p><strong>Par Catégorie</strong></p>
            <p>[<a href="{{ route('produit.list') }}">Tout</a>] @foreach($categories as $category)[ <a href="{{ route('produit.bycat', [$category->boutique->slug, $category->slug]) }}">{{ stripslashes($category->libelle) }}</a> ] @endforeach</p>

            @if(count($datas) > 0)

                <div class="cart-lists">

                    <ul>
                        @foreach($datas as $data)
                        <li style="margin-bottom: 1em;">
                            <div class="cart-thumb">
                                <span><img src="{{ asset('produits/'. $data->picture_one) }}" alt=""></span>
                                <h3><a href="javascript:void(0)" title="">{{ stripslashes($data->name) }}</a></h3>
                                <div class="price-cart-item">

                                </div>
                            </div>
                            <div class="c-input-number">
                                <span>Prix : <strong>{{ $data->price }} FCFA</strong></span><br>
                                <span>Etat : <strong>{{ $data->etat }}</strong></span><br>
                                <span>Quantité : <strong>{{ $data->quantity }}</strong></span><br>
                                <span>Catégorie : <strong>{{ stripslashes($data->category_produit->libelle) }}</strong></span><br>
                                @if($data->statut == 1)
                                    <span class="label label-success">En ligne</span>
                                @else
                                    <span class="label label-danger">Désactivé</span>
                                @endif
                            </div>
                            <div class="cart-item-quantity">
                                <a class="query" style="color: orange;" href="{{ route('produit.edit', [$data->boutique->slug, $data->slug]) }}"><i class="fa fa-edit"></i> Modifier</a><br>
                                <a class="query" onclick="return confirm('Cette action est irréversible. Supprimer ?');" style="color: red;" href="{{ route('produit.delete', [$data->boutique->slug, $data->slug]) }}"><i class="fa fa-trash"></i> Supprimer</a><br>
                                @if($data->statut == 1)
                                    <a class="query tool" title="Desactiver signifie que le produit ne sera pas visible en ligne mais ne sera pas non plus supprimé" style="color: blue;" href="{{ route('produit.desable', [$data->boutique->slug, $data->slug]) }}"><i class="fa fa-close"></i> Désactiver</a>
                                @else
                                    <a class="query" style="color: green;" href="{{ route('produit.enable', [$data->boutique->slug, $data->slug]) }}"><i class="fa fa-check"></i> Activer</a>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <div style="width:75%;margin-left:auto;margin-right:auto;text-align:center;background:#e3e3e3;padding:20px;border-radius:8px">

                    <div style="width:100px;height:100px;margin-left:auto;margin-right:auto;text-align:center; ">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 470.333 470.333" style="enable-background:new 0 0 470.333 470.333;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M235.167,470.333c129.767,0,235.167-105.4,235.167-235.167S364.933,0,235.167,0S0,105.4,0,235.167
                                            S105.4,470.333,235.167,470.333z M235.167,34c110.783,0,201.167,90.383,201.167,201.167S345.95,436.333,235.167,436.333
                                            S34,345.95,34,235.167S124.383,34,235.167,34z"></path>
                                        <path d="M164.333,196.633c7.083,0,13.883-2.833,18.983-7.933c10.483-10.483,10.483-27.483,0-37.967
                                            c-5.1-5.1-11.9-7.933-18.983-7.933s-13.883,2.833-18.983,7.933c-10.483,10.483-10.483,27.483,0,37.967
                                            C150.45,193.8,157.25,196.633,164.333,196.633z"></path>
                                        <path d="M299.2,196.633c7.083,0,13.883-2.833,18.983-7.933c10.483-10.483,10.483-27.483,0-37.967
                                            c-5.1-5.1-11.9-7.933-18.983-7.933s-13.883,2.833-18.983,7.933c-10.483,10.483-10.483,27.483,0,37.967
                                            C285.317,193.8,291.833,196.633,299.2,196.633z"></path>
                                        <path d="M157.25,328.667c0.567-1.7,11.617-38.25,73.667-38.25c64.033,0,82.167,38.817,82.733,40.233
                                            c2.833,6.517,9.067,10.483,15.583,10.483c2.267,0,4.25-0.283,6.517-1.417c8.783-3.683,12.75-13.6,9.067-22.1
                                            c-1.133-2.55-26.35-61.2-114.183-61.2c-89.533,0-105.967,61.2-106.533,63.75l16.433,4.25L157.25,328.667z"></path>
                                    </g>
                                </g><g></g><g></g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                    </div>

                    <p>&nbsp;</p><h4 align="center" style="color: red;">Aucun produit disponible dans votre boutique :(</h4>
                </div>
            @endif

            <div class="row">
                <div class="col-sm-12">
                    {{ $datas->links() }}
                </div>
            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@stop
@section('js')
    <script>
        $('.dropdown-toggle').dropdown();

//        $(function(){
//
//            var loading = document.getElementById("loading");
//
//            $('.edit').click(function(event) {
//                event.preventDefault();
//                var url = $(this).attr('href');
//
//                loading.style.display = "block";
//
//                $.ajax({
//                    url: url,
//                    type: 'GET',
//                    success:function (response) {
//
//                        if (response.success){
//
//                            loading.style.display = "none";
//
//                        }else{
//
//                            // notification
//                            setTimeout(function () {
//                                toastr.options = {
//                                    closeButton: true,
//                                    progressBar: true,
//                                    showMethod: 'slideDown',
//                                    timeOut: 4000
//                                };
//                                toastr.error('Une erreur est survenu, veuillez réesayer', 'PANIER');
//
//                            }, 4000);
//
//                            loading.style.display = "none";
//
//                        }
//
//
//                    },
//                    error:function(data){
//                        console.log('Error')
//                    }
//                });
//            });
//        });
    </script>
@endsection