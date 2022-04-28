$(document).ready(function () {
    "use strict";
    // On store
    $('#form-comment').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $(this).find('input[name="id"]').val();
        let formData = new FormData(this);
        let url = 'comments';
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
                location.reload();
            },
            error: function (response) {
                var responses = response.responseJSON.errors;
                $.each(responses, function (key, value) {
                    $('#' + key + '-input-error').text(value);
                });
            }
        });
    });
});