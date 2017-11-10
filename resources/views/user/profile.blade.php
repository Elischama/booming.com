@extends('layouts.default')

@section('contenu')

    <section class="g-mb-100 g-mt-100">
        <div class="container">
            <div class="row">
                <!-- Profile Sidebar -->
                <div class="col-sm-3 g-mb-50 g-mb-0--lg">
                    <!-- User Image -->
                    <div class="u-block-hover g-pos-rel">
                        <figure>
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="/assets/img/users/img5.jpg" alt="">
                        </figure>

                        {{--<!-- Figure Caption -->--}}
                        {{--<figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">--}}
                            {{--<div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">--}}
                                {{--<!-- Figure Social Icons -->--}}
                                {{--<ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">--}}
                                    {{--<li class="list-inline-item align-middle g-mx-7">--}}
                                        {{--<a class="u-icon-v1 u-icon-size--md g-color-white" href="#">--}}
                                            {{--<i class="icon-note u-line-icon-pro"></i>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-inline-item align-middle g-mx-7">--}}
                                        {{--<a class="u-icon-v1 u-icon-size--md g-color-white" href="#">--}}
                                            {{--<i class="icon-notebook u-line-icon-pro"></i>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-inline-item align-middle g-mx-7">--}}
                                        {{--<a class="u-icon-v1 u-icon-size--md g-color-white" href="#">--}}
                                            {{--<i class="icon-settings u-line-icon-pro"></i>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<!-- End Figure Social Icons -->--}}
                            {{--</div>--}}
                        {{--</figcaption>--}}
                        {{--<!-- End Figure Caption -->--}}

                        <!-- User Info -->
                        <span class="g-pos-abs g-top-20 g-left-0">
                            <a class="btn btn-sm u-btn-primary rounded-0" href="#">{{ Auth::user()->firstname }}</a>
                            <small class="d-block g-bg-black g-color-white g-pa-5">{{ Auth::user()->lastname }}</small>
                        </span>
                        <!-- End User Info -->
                    </div>
                    <!-- User Image -->

                    <!-- Sidebar Navigation -->
                    <div class="list-group list-group-border-0 g-mb-40">
                        <!-- Overall -->
                        <a href="/" class="list-group-item justify-content-between active">
                            <span><i class="fa fa-angle-right g-pos-rel g-top-1 g-mr-8"></i> Mon profil</span>
                            {{--<span class="u-label g-font-size-11 g-bg-white g-color-main g-rounded-20 g-px-10">2</span>--}}
                        </a>
                        <!-- End Overall -->

                        <!-- Profile -->
                        <a href="/" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="fa fa-angle-right g-pos-rel g-top-1 g-mr-8"></i> Ajouter une annonce</span>
                        </a>
                        <!-- End Profile -->

                        <!-- Profile -->
                        <a href="/" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="fa fa-comments g-pos-rel g-top-1 g-mr-8"></i> Commentaires</span>
                        </a>
                        <!-- End Profile -->

                        <!-- Profile -->
                        <a href="/" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="fa fa-spinner g-pos-rel g-top-1 g-mr-8"></i> Parametres</span>
                        </a>
                        <!-- End Profile -->

                        <!-- Users Contacts -->
                        <a href="/" class="list-group-item list-group-item-action justify-content-between">
                            <span><i class="fa fa-lock g-pos-rel g-top-1 g-mr-8"></i> Deconnexion</span>
                        </a>

                        <!-- End Settings -->
                    </div>
                    <!-- End Sidebar Navigation -->
                </div>
                <!-- End Profile Sidebar -->

                <!-- Profile Content -->
                <div class="col-sm-9">

                    <!-- Projects & Activities Panels -->
                    <div class="row g-mb-40">
                        <div class="col-sm-12 g-mb-40 g-mb-0--lg">
                            <!-- Latest Projects Panel -->
                            <div class="card border-0">
                                <!-- Panel Header -->
                                <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">

                                    <h3 class="h6 mb-0">
                                        <i class="fa fa-address-book"></i> Contacts
                                    </h3>

                                </div>
                                <!-- End Panel Header -->

                                <!-- Panel Body -->
                                <div class="js-scrollbar card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0" style="overflow-y: scroll;">
                                    <ul class="list-unstyled">

                                        <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
                                            <div class="d-flex g-mt-2 g-mr-15">
                                                <img class="g-width-40 g-height-40 rounded-circle" src="/assets/img/users/img17.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="h6 g-font-weight-600 g-color-black">Unify Template</h5>
                                                    <span class="small text-nowrap g-color-blue">2 min ago</span>
                                                </div>
                                                <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">AnhularJS</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">PHP</span>
                                            </div>
                                        </li>

                                        <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
                                            <div class="d-flex g-mt-2 g-mr-15">
                                                <img class="g-width-40 g-height-40 rounded-circle" src="/assets/img/users/img17.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="h6 g-font-weight-600 g-color-black">Unify Template</h5>
                                                    <span class="small text-nowrap g-color-blue">2 min ago</span>
                                                </div>
                                                <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">AnhularJS</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">PHP</span>
                                            </div>
                                        </li>

                                        <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
                                            <div class="d-flex g-mt-2 g-mr-15">
                                                <img class="g-width-40 g-height-40 rounded-circle" src="/assets/img/users/img17.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="h6 g-font-weight-600 g-color-black">Unify Template</h5>
                                                    <span class="small text-nowrap g-color-blue">2 min ago</span>
                                                </div>
                                                <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">AnhularJS</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">PHP</span>
                                            </div>
                                        </li>

                                        <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
                                            <div class="d-flex g-mt-2 g-mr-15">
                                                <img class="g-width-40 g-height-40 rounded-circle" src="/assets/img/users/img17.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="h6 g-font-weight-600 g-color-black">Unify Template</h5>
                                                    <span class="small text-nowrap g-color-blue">2 min ago</span>
                                                </div>
                                                <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">HTML</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">AnhularJS</span>
                                                <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">PHP</span>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                                <!-- End Panel Body -->
                            </div>
                            <!-- End Latest Projects Panel -->
                        </div>
                    </div>
                    <!-- End Projects & Activities Panels -->

                    <!-- Product Table Panel -->
                    <div class="card border-0">
                        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                            <h3 class="h6 mb-0">
                                <i class="fa fa-list"></i> Mes annonces
                            </h3>
                        </div>

                        <div class="card-block g-pa-0">
                            <!-- Product Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered u-table--v2">
                                    <thead class="text-uppercase g-letter-spacing-1">
                                        <tr>
                                            <th class="g-font-weight-300 g-color-black">Annonces</th>
                                            <th class="g-font-weight-300 g-color-black">Status</th>
                                            <th class="g-font-weight-300 g-color-black">Contacts</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td class="align-middle text-nowrap">
                                            <h4 class="h6 g-mb-2">Lenovo Group</h4>
                                            <div class="js-rating g-font-size-12 g-color-primary" data-rating="3.5"></div>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-block u-btn-primary g-rounded-50 g-py-5" href="#">
                                                <i class="fa fa-arrows-v g-mr-5"></i> Middle
                                            </a>
                                        </td>
                                        <td class="align-middle text-nowrap">
                                            <span class="d-block g-mb-5">
                                                <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 4768 97655
                                            </span>
                                            <span class="d-block">
                                                <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> contact@lenovo.com
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle text-nowrap">
                                            <h4 class="h6 g-mb-2">Samsung Electronics</h4>
                                            <div class="js-rating g-font-size-12 g-color-primary" data-rating="4.5"></div>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-block u-btn-pink g-rounded-50 g-py-5" href="#">
                                                <i class="fa fa-level-up g-mr-5"></i> High
                                            </a>
                                        </td>
                                        <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +44 7689 7655
                          </span>
                                            <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> users@samsung.com
                          </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle text-nowrap">
                                            <h4 class="h6 g-mb-2">Sony Corp.</h4>
                                            <div class="js-rating g-font-size-12 g-color-primary" data-rating="2"></div>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-block u-btn-cyan g-rounded-50 g-py-5" href="#">
                                                <i class="fa fa-sort-amount-desc g-mr-5"></i> Deep
                                            </a>
                                        </td>
                                        <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 0739 3644
                          </span>
                                            <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@sony.com
                          </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle text-nowrap">
                                            <h4 class="h6 g-mb-2">Apple Inc.</h4>
                                            <div class="js-rating g-font-size-12 g-color-primary" data-rating="5"></div>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-block u-btn-purple g-rounded-50 g-py-5" href="#">
                                                <i class="fa fa-level-down g-mr-5"></i> Down
                                            </a>
                                        </td>
                                        <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +1 6589-96451
                          </span>
                                            <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> mail@appple.com
                          </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-middle text-nowrap">
                                            <h4 class="h6 g-mb-2">Dell Corporation</h4>
                                            <div class="js-rating g-font-size-12 g-color-primary" data-rating="4"></div>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-block u-btn-deeporange g-rounded-50 g-py-5" href="#">
                                                <i class="fa fa-bolt g-mr-5"></i> Stabile
                                            </a>
                                        </td>
                                        <td class="align-middle text-nowrap">
                          <span class="d-block g-mb-5">
                            <i class="icon-phone g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> +49 3868 4792
                          </span>
                                            <span class="d-block">
                            <i class="icon-envelope g-font-size-16 g-color-gray-dark-v5 g-pos-rel g-top-2 g-mr-5"></i> clients@dell.com
                          </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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