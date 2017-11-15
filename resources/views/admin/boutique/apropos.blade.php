@extends('admin.layout.layout')

@section('content')
    <div class="panel-content">
        <ul class="breadcrumbs">
            <li><a href="javascript:void(0)" title="">Accueil</a></li>
            <li><a href="javascript:void(0)" title="">Boutique</a></li>
            <li><a href="javascript:void(0)" title="">A propos</a></li>
        </ul>

        <div class="main-content-area">
            <br>
            @include('partials.flash')
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-sec">
                        <div class="profile-head">
                            <div class="profile-avatar">
                                <span>
                                    @if(empty($data->logo))
                                        <img style="width: 100px !important; height: 100px !important;" src="{{ asset('boutiques/files/yb_min_2.png') }}" alt="">
                                    @else
                                        <img style="width: 100px !important; height: 100px !important;" src="{{ asset('boutiques/logo/'. $data->logo) }}" alt="">
                                    @endif
                                </span>
                                <div class="profile-name">
                                    <h3>{{ stripslashes($data->name) }}</h3>
                                    <i>chez <strong>{{ stripslashes($data->user->lastname.' '.$data->user->name) }}</strong></i>
                                    <ul class="social-btns">
                                        <li><a class="tool" title="Partager votre boutique sur facebook" href="http://www.facebook.com/sharer.php?u={{ route('front.boutique.detail', $data->slug) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="tool" title="Partager votre boutique sur twitter" href="https://twitter.com/intent/tweet?text=Ma boutique {{ $data->name }} disponible sur YooBoutik {{ route('front.boutique.detail', $data->slug) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="profile-count">
                                <li>{{ count($produits) }}<i>Articles publiés</i></li>
                                {{--<li>{{ count($commandes) }}<i>Commandes traités</i></li>--}}
                                {{--<li>{{ $nbr_produits }}<i>Articles vendus</i></li>--}}
                                {{--<li>{{ $chiffre }} F<i>Chiffres réalisés</i></li>--}}
                            </ul>

                            @php($is_sponsoring = 0)
                            @foreach($sponsorings as $sponsoring)
                                @if($sponsoring->boutique_id == $data->id)
                                    @php($is_sponsoring = 1)
                                @endif
                            @endforeach

                            {{--<ul class="profile-connect">--}}
                                {{--@if($is_sponsoring == 1)--}}
                                    {{--<li><a style="background-color: green; color: #fff;" href="" title=""><i class="fa fa-check"></i> Sponsoriser</a></li>--}}
                                {{--@else--}}
                                    {{--<li><a onclick="return confirm('Vouler vous Sponsorier votre boutique'); " href="{{ route('Sponsoring.store') }}" title="">Sponsoriser votre boutique ?</a></li>--}}
                                {{--@endif--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- Panel Content -->
    </div>
@stop