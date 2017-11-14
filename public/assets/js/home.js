/**
 * Created by root on 13/11/17.
 */
$(function(){

    $('#DisableAnnonce').on('click', function(e){
        e.preventDefault();

        var url = $('#DisableAnnonce').attr('href');

        $('#DisableAnnonce').html('<i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            url : url,
            type: 'GET',
            success: function (response) {

                if (response.success){

                    $('#DisableAnnonce').html('<i class="fa fa-close"></i>');
                    $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">'+ response.success +'</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

                }
            },
            errors: function () {
                $('#DisableAnnonce').html('<i class="fa fa-close"></i>');
                $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">Une erreure est survenue veuillez vérifer votre connexion internet et réesayer</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

            }
        })

    })
});