/**
 * Created by root on 14/11/17.
 */
$(function(){

    $('.DeleteUser').on('click', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            success: function () {
                console.log('delete success')
            }
        });
        $(this).parent().parent().fadeOut(500);
    });

    $('.ResendMail').on('click', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        $(this).html('<i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            url: url,
            type: 'GET',
            success: function () {
                console.log('sending success')
            }
        });
        $(this).html('<i class="fa fa-check-circle-o"></i>');
    });

    $('#AddNewAdmin').on('keyup', function () {

        var data = $('#AddNewAdminForm').serialize();
        var url = $('#AddNewAdminForm').attr('action');
        $('#NewAdminResult').empty();

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (response) {

                for(i=0; i<response.datas.length; i++){
                    $('#NewAdminResult').append('<tr><td>'+ response.datas[i].firstname +'</td><td>'+ response.datas[i].lastname +'</td><td>'+ response.datas[i].email +'</td><td><a href="/adminzone/users/new-admin/'+response.datas[i].id +'/add" class="btn btn-xs btn-success NewAdminAdd"><i class="fa fa-plus"></i></a></td>');
                }
            }
        });
    });

    //supprimer un admin
    $('.DeleteAdmin').on('click', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            success: function () {
                console.log('delete success')
            }
        });
        $(this).parent().parent().fadeOut(500);
    });

    //valider une annonce

    $('.AnnonceValidate').on('click', function(e){
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            success: function () {

            }
        });
        $(this).parent().parent().fadeOut(500);
    });

    //de-valider une annonce

    $('.AnnonceUnValidate').on('click', function(e){
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            success: function () {

            }
        });
        $(this).parent().parent().fadeOut(500);
    });

    //supprimer une annonce

    $('.AnnonceDelete').on('click', function(e){
        e.preventDefault();

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            success: function () {

            }
        });
        $(this).parent().parent().fadeOut(500);
    });
});