@extends('layouts.default')
@section('contenu')
    <div style="margin-top: 62px;">
    <section style="position: fixed; z-index: 10; width: 100%;" class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll dzsprx-readyall loaded" data-options="{direction: &quot;reverse&quot;, settings_mode_oneelement_max_offset: &quot;150&quot;}">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-bluegray-opacity-0_3--after " style="height: 100%; background-image: url(&quot;../../assets/img-temp/1920x1080/img25.jpg&quot;); transform: translate3d(0px, -93.8988px, 0px);"></div>

        <!-- Promo Block Content -->
        <div class="container u-bg-overlay__inner text-center g-py-30" >
            <h2 class="h1 g-color-white g-font-weight-600 text-uppercase g-mb-30">Recherchez en un clic</h2>

            <!-- Search Form -->
            <form>
                <!-- Search Field -->
                <div class="g-max-width-540 mx-auto g-mb-20">
                    <div class="input-group">
                        <input class="form-control g-font-size-16 border-0" placeholder="Maquis Le Monde Arabe" aria-label="Search words with regular expressions..." type="text">
                        <span class="input-group-btn">
                  <button class="btn btn-primary g-font-size-18 g-py-12 g-px-25" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
                    </div>
                </div>
                <!-- End Search Field -->


            </form>
            <!-- End Search Form -->
        </div>
        <!-- End Promo Block Content -->
    </section>

        <section class="container" style="padding-top: 250px;">

            <div class="row">
                <div>
                <h2 class="h2 g-color-black g-font-weight-600 mb-2">Nous recommandons</h2>
                </div>
                <div>
                @foreach($recommandes as $recommande)
                    <div class="col-sm-6 col-lg-3 g-mb-30">
                        <!-- Blog Grid Overlap Blocks -->
                        <article>
                            <img class="img-fluid w-100" src="/assets/img/annonces/{{ $recommande->vignette }}" alt="Image Description">
                            <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                                <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
                                <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Announcing a free plan for small teams</a>
                                </h2>
                                <p class="g-color-gray-dark-v4 g-line-height-1_8">At Wake, our mission has always been focused on bringing openness and transparency.</p>
                                <a class="g-font-size-13" href="#">Read more...</a>
                            </div>
                        </article>
                        <!-- End Blog Grid Overlap Blocks -->
                    </div>
                @endforeach
                </div>
            </div>
        </section>

    <section class="container" style="padding-top: 250px;">

        <div class="row">
            Les nouveautés
            @foreach($nouveautes as $nouveaute)
                <div class="col-sm-6 col-lg-3 g-mb-30">
                    <!-- Blog Grid Overlap Blocks -->
                    <article>
                        <img class="img-fluid w-100" src="/assets/img/annonces/{{ $nouveaute->vignette }}" alt="Image Description">
                        <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                            <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
                            <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Announcing a free plan for small teams</a>
                            </h2>
                            <p class="g-color-gray-dark-v4 g-line-height-1_8">At Wake, our mission has always been focused on bringing openness and transparency.</p>
                            <a class="g-font-size-13" href="#">Read more...</a>
                        </div>
                    </article>
                    <!-- End Blog Grid Overlap Blocks -->
                </div>
            @endforeach
        </div>
    </section>

    <section class="container" style="padding-top: 250px;">

            <div class="row">

                Les mieux notés
                @foreach($moyennes as $moyenne)
                    <div class="col-sm-6 col-lg-3 g-mb-30">
                        <!-- Blog Grid Overlap Blocks -->
                        <article>
                            <img class="img-fluid w-100" src="/assets/img/annonces/{{ $moyenne->vignette }}" alt="Image Description">
                            <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                                <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
                                <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Announcing a free plan for small teams</a>
                                </h2>
                                <p class="g-color-gray-dark-v4 g-line-height-1_8">At Wake, our mission has always been focused on bringing openness and transparency.</p>
                                <a class="g-font-size-13" href="#">Read more...</a>
                            </div>
                        </article>
                        <!-- End Blog Grid Overlap Blocks -->
                    </div>
                @endforeach

            </div>
        </section>

        <section class="container" style="padding-top: 250px;">

            <div class="row">

                Les plus vus
                @foreach($plusVus as $plusVus)

                    <div class="col-sm-6 col-lg-3 g-mb-30">
                        <!-- Blog Grid Overlap Blocks -->
                        <article>
                            <img class="img-fluid w-100" src="/assets/img/annonces/{{ $plusVus->vignette }}" alt="Image Description">
                            <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                                <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
                                <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Announcing a free plan for small teams</a>
                                </h2>
                                <p class="g-color-gray-dark-v4 g-line-height-1_8">At Wake, our mission has always been focused on bringing openness and transparency.</p>
                                <a class="g-font-size-13" href="#">Read more...</a>
                            </div>
                        </article>
                        <!-- End Blog Grid Overlap Blocks -->
                    </div>
                @endforeach

            </div>
        </section>


</div>
@endsection
