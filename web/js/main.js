/**
 * Created by juliengrima on 13/08/2017.
 */
// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    carousel();
    text();
    selecteur();
    modal();
    hide_Show();
});

// ********************************************************************
// *
// *
// *                       JS General
// *
// *
// ********************************************************************

// ********************************************************************
// *                       FORMS
// ********************************************************************

function text() {
    $('#textarea1').val('New Text', 'autoresize');
}

function selecteur() {

    $('select').material_select();

}

// ********************************************************************
// *                       Sliders
// ********************************************************************

function carousel() {
    $('.slider').slider({fullWidth: true});
}

// ********************************************************************
// *                     MODALS
// ********************************************************************

function modal() {
    $('.modal').modal();
}

// ********************************************************************
// *                     DROPDOWN
// ********************************************************************

function dropdown() {
    $('.dropdown-trigger').dropdown();
}

// ********************************************************************
// *                    IMAGE DISPLAY
// ********************************************************************

function hide_Show() {

    // $('#hide').click(function () {
    //     if (this.css('display'), 'none'){
    //         $('.upload_file_event').css('display', 'block')
    //     }
    //     else {
    //         $('.upload_file_event').css('display', 'none')
    //     }
    // })

    $(document).ready(function() {
        $('.uploadForm').submit(function(e) {
            if($('.userImage').val()) {
                e.preventDefault();
                $('#loader-icon').show();
                $(this).ajaxSubmit({
                    target:   '#targetLayer',
                    beforeSubmit: function() {
                        $("#progress-bar").width('0%');
                    },
                    uploadProgress: function (event, position, total, percentComplete){
                        $("#progress-bar").width(percentComplete + '%');
                        $("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
                    },
                    success:function (){
                        $('#loader-icon').hide();
                    },
                    resetForm: false
                });
                return false;
            }
        });
    });
}