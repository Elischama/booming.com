@if(session('success'))
    <div class="container" style="margin-top: 2em; margin-bottom: -2em;">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert">
                    <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="media">
                        <div class="media-body">
                            <p class="m-0">{{ session('success') }}</p>
                            <span class="g-font-size-12 g-color-gray">À l'instant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(session('warning'))
    <div class="container" style="margin-top: 2em; margin-bottom: -2em;">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade show g-bg-orange-opacity-0_1 g-color-orange rounded-0 g-mb-5" role="alert">
                    <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="media">
                        <div class="media-body">
                            <p class="m-0">{{ session('warning') }}</p>
                            <span class="g-font-size-12 g-color-gray">À l'instant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(session('danger'))
    <div class="container" style="margin-top: 2em; margin-bottom: -2em;">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert">
                    <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="media">
                        <div class="media-body">
                            <p class="m-0">{{ session('danger') }}</p>
                            <span class="g-font-size-12 g-color-gray">À l'instant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@elseif(session('info'))
    <div class="container" style="margin-top: 2em; margin-bottom: -2em;">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert fade show g-bg-cyan-opacity-0_1 g-color-cyan rounded-0 g-mb-5" role="alert">
                    <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <div class="media">
                        <div class="media-body">
                            <p class="m-0">{{ session('info') }}</p>
                            <span class="g-font-size-12">À l'instant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif