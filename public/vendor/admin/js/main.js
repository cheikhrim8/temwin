function selectProfilUser(element) {
    var id = $(element).val();
    $.ajax({
        type: 'get',
        url: racine + 'admin/users/selectProfilForUser/' + id ,
        success: function (show_objects) {
            if(show_objects==1){
                $('.objects-container').removeClass('d-none');
                $('#for_object').val("1");
            }
            else{
                $('.objects-container').addClass('d-none');
                $('#for_object').val("0");
            }
            // $('.selectpicker').selectpicker({
            //     size: 4
            // });
        },
        error: function () { $.alert("Une erreur est survenue veuillez rÃ©essayer ou actualiser la page!"); }
    });
}
// Ouvrire le modal d'ajout de profile a un user
function addProfileToUser(id) {
    $.ajax({
        type: 'get',
        url: racine + 'admin/users/addProfileToUser/' + id,
        success: function (data) {
            $("#second-modal .modal-header-body").html(data);
            $("#second-modal").modal();

            $("#select-wilaya select").change(function () {
                var link = racine + 'territoires/getMoughataasAndCommunesOfWilaya/' + $(this).val();
                $.ajax({
                    type: 'GET',
                    url: link,
                    success: function (data) {
                        $("#select-moughataa select").html(data.moughataas);
                        $("#select-commune select").html(data.communes);
                        $("#select-moughataa select, #select-commune select").selectpicker('refresh');
                        $("#select-moughataa select").focus();
                    },
                    error: function () {
                        console.log('La requête n\'a pas abouti');
                    }
                });
            });
            // Afficher communes quand on selectionne une moughataa
            $("#select-moughataa select").change(function () {
                var link = racine + 'territoires/getCommunesOfMoughataaAndWilaya/' + $("#select-wilaya select").val() + '/' + $(this).val();
                $.ajax({
                    type: 'GET',
                    url: link,
                    success: function (data) {
                        $("#select-commune select").html(data);
                        // $("#select-commune").show();
                        $("#select-commune select").selectpicker('refresh');
                        $("#select-commune select").focus();
                        // $(".addfiche").attr('disabled', 'disabled');
                    },
                    error: function () {
                        $.alert("Une erreur est survenue veuillez réessayer ou actualiser la page!");
                    }
                });
            });
            $("#profile-niveau").change(function () {
                if ($(this).val() == 4){
                    $("#wilayas-section").hide();
                    $("#moughataas-section").hide();
                    $("#communes-section").hide();
                }
                else if ($(this).val() == 3){
                    $("#wilayas-section").show();
                    $("#moughataas-section").hide();
                    $("#communes-section").hide();
                }
                else if ($(this).val() == 2){
                    $("#wilayas-section").show();
                    $("#moughataas-section").show();
                    $("#communes-section").hide();
                }
                else{
                    $("#wilayas-section").show();
                    $("#moughataas-section").show();
                    $("#communes-section").show();
                }
            });

            resetInit();
        },
        error: function () {
            $.alert("Une erreur est survenue veuillez rÃ©essayer ou actualiser la page!");
        }
    });
}

function saveProfileUser(id, element) {
    saveform(element, function(id){
        //$(element).attr('disabled','disabled');
        setTimeout(function () {
            $('#second-modal').modal('toggle');
            getTheContent('admin/users/getTab/' + id + '/2' , '#tab2');
        }, 1000);
    });
}

function deleteProfileFromUser(link, text) {
    confirmAction(link, text, function(id){
        getTheContent($('#link2').attr("link"), '#tab2');
    });
}

function loguser()
{

    $( '#loginModal #form-errors' ).hide();
    $("#loginModal .form-loading").show();
    var data = $('#loginModal form').serialize();
    $.ajax({
        type: $('#loginModal form').attr("method"),
        url: $('#loginModal form').attr("action"),
        data: data,
        dataType: 'json',
        success: function(data){
            window.location.href = data;
        },
        error: function(data){
            if (data.status === 422) {
                var errors = data.responseJSON;
                errorsHtml = '<ul class="list-group">';
                var erreurs = (errors.errors) ? errors.errors : errors;
                $.each(erreurs, function (key, value) {
                    errorsHtml += '<li class="list-group-item list-group-item-danger">' + value[0] + '</li>';
                });
                errorsHtml += '</ul>';
                $('#loginModal #form-errors').show().html(errorsHtml);
            }

            else {
                $.alert('La requête n\'a pas abouti');
            }
            $("#loginModal .form-loading").hide();
            // $(element).removeAttr('disabled');
        }
    });
}

function showMessageSuccess(data)
{

    $("#resultat_resetpsw").html(data).show();
    setTimeout(function () {
        $("#resultat_resetpsw").html('').hide();
    }, 5000);
}
