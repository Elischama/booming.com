/**
 * Created by root on 13/11/17.
 */
$(function(){

    // cookies

    function creerCookie(nom, valeur){

        var date = new Date();
        date.setTime(date.getTime() + (365*24*60*60*1000));
        var exp = date.toGMTString();

        document.cookie = nom+'='+valeur+';expires='+exp+';path=/';
    }

    function lireCookie(nom){
        var nomEtEgal = nom + '=';

        var cookieTableau = document.cookie.split(';');

        for(var i=0; i<cookieTableau.length; i++){
            var cookie = cookieTableau[i];

            while(cookie.charAt(0)==' '){
                cookie = cookie.substring(1, cookie.length);
            }

            if (cookie.indexOf(nomEtEgal) == 0) {
                return cookie.substring(nomEtEgal.length, cookie.length);
            }
        }

        return null;
    }

    // cookies


    // archiver une annonce
    $('#DisableAnnonce').on('click', function(e){
        e.preventDefault();

        var url = $('#DisableAnnonce').attr('href');
        var data = $(this);

        $('#DisableAnnonce').html('<i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            url : url,
            type: 'GET',
            data: data,
            success: function (response) {

                if (response.success){

                    data.parent().parent().fadeOut(1000);
                    $('#DisableAnnonce').html('<i class="fa fa-close"></i>');
                    $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">'+ response.success +'</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

                }
            },
            errors: function () {
                $('#DisableAnnonce').html('<i class="fa fa-close"></i>');
                $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">Une erreure est survenue veuillez vérifer votre connexion internet et réesayer</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

            }
        })

    });


    // de-archiver une annonce
    $('#EnableAnnonce').on('click', function(e){
        e.preventDefault();

        var url = $('#EnableAnnonce').attr('href');
        var data = $(this);

        $('#EnableAnnonce').html('<i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            url : url,
            type: 'GET',
            data: data,
            success: function (response) {

                if (response.success){

                    data.parent().parent().fadeOut(1000);
                    $('#EnableAnnonce').html('<i class="fa fa-check"></i>');
                    $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">'+ response.success +'</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

                }
            },
            errors: function () {
                $('#EnableAnnonce').html('<i class="fa fa-close"></i>');
                $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">Une erreure est survenue veuillez vérifer votre connexion internet et réesayer</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

            }
        })

    });


    // supprimer une annonce
    $('#DeleteAnnonce').on('click', function(e){
        e.preventDefault();

        var url = $('#DeleteAnnonce').attr('href');
        var data = $(this);

        $('#DeleteAnnonce').html('<i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            url : url,
            type: 'GET',
            data: data,
            success: function (response) {

                if (response.success){

                    data.parent().parent().fadeOut(1000);
                    $('#DeleteAnnonce').html('<i class="fa fa-trash"></i>');
                    $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-primary-opacity-0_1 g-color-primary rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">'+ response.success +'</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

                }
            },
            errors: function () {
                $('#DeleteAnnonce').html('<i class="fa fa-close"></i>');
                $('#NotificationSection').html('<div class="container" style="margin-top: 7em; margin-bottom: -6em;"><div class="row"><div class="col-sm-12"><div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0 g-mb-5" role="alert"><button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><div class="media"><div class="media-body"><p class="m-0">Une erreure est survenue veuillez vérifer votre connexion internet et réesayer</p><span class="g-font-size-12 g-color-gray">À l\'instant</span></div></div></div></div></div></div>');

            }
        })

    });



    // create cookie in form annonce
    $('#closeStrongPointTuto').on('click', function () {
        creerCookie('CloseStrongPointTuto', 'Fermer le tutoriel sur les points forts');
    });

    $('#closeTutoImage').on('click', function () {
        creerCookie('CloseImageTuto', 'Fermer le tutoriel sur les images');
    });

    if(lireCookie('CloseStrongPointTuto') != null){
        $('#TutoStrongPoint').hide();
    }

    if(lireCookie('CloseImageTuto') != null){
        $('#TutoImage').hide();
    }


    // delete strong point
    $('.DeleteStrongPoint').on('click', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        var data = $(this);

        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function () {
                data.fadeOut(200);
            },
            errors: function () {
                console.log('ca passe meme pas')
            }
        });

    });

    // delete image

    $('.DeleteImage').on('click', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        var data = $(this);

        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function () {
                data.parent().fadeOut(200);
            },
            errors: function () {
                console.log('ca passe meme pas')
            }
        });

    });

});