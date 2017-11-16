@extends('layouts.default')

@section('contenu')
    <section>
    <div class="row" style="margin-top: 500px">

        @foreach($annonces as $annonce)

                <div class="col-md-6 g-mb-50">
                    <!-- Article -->
                    <article class="media">
                        <!-- Article Image -->
                        <a class="g-width-100" href="#">
                            <img class="img-fluid g-rounded-50x" src="assets/img-temp/500x500/img9.jpg" alt="Image description">
                        </a>
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="media-body align-self-center g-pl-10">
                            <div class="d-flex justify-content-between u-heading-v1-4 g-bg-main g-theme-brd-gray-light-v1 g-mb-8">
                                <h3 class="align-self-center u-heading-v1__title g-color-black g-font-weight-700 g-font-size-13 text-uppercase mb-0">{{ $annonce->name }}</h3>

                                <div class="align-self-center g-pos-rel g-bg-main g-pl-15">
                                    <a href="/annonces/{{ $annonce->id }}"><strong class="g-font-weight-700 g-font-size-13 g-color-white g-bg-primary g-rounded-3 g-py-4 g-px-12">$1.20</strong></a>
                                </div>
                            </div>

                            <p class="mb-0">{{ $annonce->description }}</p>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
                @endforeach

            </div>

    </section>
@endsection