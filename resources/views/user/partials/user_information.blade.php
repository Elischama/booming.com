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
            <span><i class="fa fa-plus-square-o g-pos-rel g-top-1 g-mr-8"></i> Ajouter une annonce</span>
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