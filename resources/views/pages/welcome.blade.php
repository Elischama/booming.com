@extends('layouts.default')
@section('contenu')
    <div style="margin-top: 62px;">
    <section style="position: fixed; z-index: 10; width: 100%;" class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll dzsprx-readyall loaded" data-options="{direction: &quot;reverse&quot;, settings_mode_oneelement_max_offset: &quot;150&quot;}">
        <div class="divimage dzsparallaxer--target w-100 u-bg-overlay g-bg-img-hero g-bg-bluegray-opacity-0_3--after " style="height: 100%; background-image: url(&quot;../../assets/img-temp/1920x1080/img25.jpg&quot;); transform: translate3d(0px, -93.8988px, 0px);"></div>

        <!-- Promo Block Content -->
        <div class="container u-bg-overlay__inner text-center g-py-60" >
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

    <section class="container" style="padding-top: 300px;">


    </section>

    <section class="container">
        @foreach($themes as $theme)
        <div class="u-heading-v5-2 g-mb-20">
            <h2 class="text-uppercase h3 u-heading-v5__title">{{ $theme->libelle }}</h2>
        </div>

        <div class="row text-center">

            <div class="col-md-3 g-mb-30">
                <a class=" d-block u-block-hover u-bg-overlay  g-bg-black-opacity-0_5--after" href="/annonces/" title="Lightbox Gallery" data-fancybox-gallery="lightbox-gallery-13-2-hidden">
                    <img class="img-fluid u-block-hover__main--zoom-v1" src="../../assets/img-temp/400x270/img4.jpg" alt="Image Description">
                    <strong class="h5 d-block w-100 u-bg-overlay__inner g-absolute-centered g-px-20 g-font-weight-400 g-color-white g-mt-10">  </strong>
                </a>
            </div>

        </div>
        @endforeach
    </section>

</div>
@endsection