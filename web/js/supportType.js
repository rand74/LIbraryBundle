$('#types').on('change', function () {
    $('.form').addClass('hidden');
    $('#' + $(this).val()).removeClass('hidden');
});