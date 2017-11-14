@extends('layouts.default')

@section('contenu')

    <div id="NotificationSection"></div>

    <section class="g-mb-100 g-mt-100">
        <div class="container">
            <div class="row">

            @include('user.partials.user_information')

            <!-- Profile Content -->
                <div class="col-sm-9">

                    <!-- Product Table Panel -->
                    <div class="card border-0">
                        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                            <h3 class="h6 mb-0">
                                <i class="fa fa-list"></i> Archives
                            </h3>
                        </div>

                        <div class="card-block g-pa-0">
                            <!-- Product Table -->
                            <div class="table-responsive">

                                @if(count($datas) > 0)

                                    <table class="table table-bordered u-table--v2">
                                        <thead class="text-uppercase g-letter-spacing-1">
                                            <tr>
                                                <th class="g-font-weight-300 g-color-black">Annonces</th>
                                                <th class="g-font-weight-300 g-color-black">Statut</th>
                                                <th class="g-font-weight-300 g-color-black">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datas as $data)
                                        <tr>
                                            <td class="align-middle text-nowrap">
                                                <h4 class="h6 g-mb-2">{{ stripslashes($data->name) }}</h4>
                                                <div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
                                            </td>
                                            <td class="align-middle">
                                                <a class="btn btn-block u-btn-red g-rounded-50 g-py-5" href="#">
                                                    <i class="fa fa-archive g-mr-5"></i> Archivé
                                                </a>
                                            </td>
                                            <td class="align-middle text-nowrap">
                                                {{--<a href="{{ route('user.account.annonce.edit', ['id' => $data->id]) }}" class="btn u-btn-orange g-py-5 toolt" title="Modifier cette annonce"><i class="fa fa-edit"></i></a>--}}
                                                {{--<a id="DisableAnnonce" href="{{ route('user.account.annonce.disable', $data->id) }}" class="btn btn-dark g-py-5 toolt" title="Archiver cette annonce"><i class="fa fa-archive"></i></a>--}}
                                                <a id="EnableAnnonce" href="{{ route('user.account.annonce.enable', $data->id) }}" class="btn u-btn-indigo g-py-5 toolt" title="Réactiver cette annonce"><i class="fa fa-check"></i></a>
                                                <a id="DeleteAnnonce" href="{{ route('user.account.annonce.delete', $data->id) }}" class="btn u-btn-red g-py-5 toolt" title="Supprimer l'annonce"><i class="fa fa-trash"></i></a>
                                                {{--<a href="" class="btn btn-success g-py-5 toolt" title="Sponsoriser mon annonce"><i class="fa fa-toggle-up"></i></a>--}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{--<tr>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                                                {{--<h4 class="h6 g-mb-2">Samsung Electronics</h4>--}}
                                                {{--<div class="js-rating g-font-size-12 g-color-primary" data-rating="4.5"></div>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle">--}}
                                                {{--<a class="btn btn-block u-btn-pink g-rounded-50 g-py-5" href="#">--}}
                                                    {{--<i class="fa fa-level-up g-mr-5"></i> High--}}
                                                {{--</a>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                              {{--<span class="d-block g-mb-5">--}}
                                {{--<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +44 7689 7655--}}
                              {{--</span>--}}
                                                {{--<span class="d-block">--}}
                                {{--<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> users@samsung.com--}}
                              {{--</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}

                                        {{--<tr>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                                                {{--<h4 class="h6 g-mb-2">Sony Corp.</h4>--}}
                                                {{--<div class="js-rating g-font-size-12 g-color-primary" data-rating="2"></div>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle">--}}
                                                {{--<a class="btn btn-block u-btn-cyan g-rounded-50 g-py-5" href="#">--}}
                                                    {{--<i class="fa fa-sort-amount-desc g-mr-5"></i> Deep--}}
                                                {{--</a>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                              {{--<span class="d-block g-mb-5">--}}
                                {{--<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 0739 3644--}}
                              {{--</span>--}}
                                                {{--<span class="d-block">--}}
                                {{--<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@sony.com--}}
                              {{--</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}

                                        {{--<tr>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                                                {{--<h4 class="h6 g-mb-2">Apple Inc.</h4>--}}
                                                {{--<div class="js-rating g-font-size-12 g-color-primary" data-rating="5"></div>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle">--}}
                                                {{--<a class="btn btn-block u-btn-purple g-rounded-50 g-py-5" href="#">--}}
                                                    {{--<i class="fa fa-level-down g-mr-5"></i> Down--}}
                                                {{--</a>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                              {{--<span class="d-block g-mb-5">--}}
                                {{--<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 6589-96451--}}
                              {{--</span>--}}
                                                {{--<span class="d-block">--}}
                                {{--<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> mail@appple.com--}}
                              {{--</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}

                                        {{--<tr>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                                                {{--<h4 class="h6 g-mb-2">Dell Corporation</h4>--}}
                                                {{--<div class="js-rating g-font-size-12 g-color-primary" data-rating="4"></div>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle">--}}
                                                {{--<a class="btn btn-block u-btn-deeporange g-rounded-50 g-py-5" href="#">--}}
                                                    {{--<i class="fa fa-bolt g-mr-5"></i> Stabile--}}
                                                {{--</a>--}}
                                            {{--</td>--}}
                                            {{--<td class="align-middle text-nowrap">--}}
                                              {{--<span class="d-block g-mb-5">--}}
                                                {{--<i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +49 3868 4792--}}
                                              {{--</span>--}}
                                                                {{--<span class="d-block">--}}
                                                {{--<i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@dell.com--}}
                                              {{--</span>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}
                                        </tbody>
                                    </table>
                                @else

                                    @include('layouts.partials.empty')

                                @endif
                            </div>
                            <!-- End Product Table -->
                        </div>
                    </div>
                    <!-- End Product Table Panel -->
                </div>
                <!-- End Profile Content -->
            </div>
        </div>
    </section>

@endsection