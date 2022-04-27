$(document).ready(function () {
    "use strict";

    $("#form-create-edit-item #name").keyup(function () {
        $("#form-create-edit-item #name-input-error").html("")
    });
    $("#form-create-edit-item #category_id").keyup(function () {
        $("#form-create-edit-item #category_id-input-error").html("")
    });
    $("#form-create-edit-item #price").keyup(function () {
        $("#form-create-edit-item #price-input-error").html("")
    });
    $("#form-create-edit-item #quantity").keyup(function () {
        $("#form-create-edit-item #quantity-input-error").html("")
    });
    $("#form-create-edit-item #detail").keyup(function () {
        $("#form-create-edit-item #detail-input-error").html("")
    });
    $("#form-create-edit-item #image").on('click', function () {
        if ($("#form-create-edit-item #image").val() == '') {
            $("#form-create-edit-item #image-input-error").html("")
        }
    });

    $('.action-create-item').on("click", function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#modal-create-edit-item').modal("show");
        $('#form-create-edit-item').closest('form').find("input, textarea").val("");
        $('#form-create-edit-item').closest('form').find("select").val(4);
        $('#form-create-edit-item').closest('form').find("span").html("");
        $('#header').html('Add Data');
    })

    // On detail
    $('body').on("click", ".action-detail-item", function (e) {
        e.stopPropagation();
        e.preventDefault();
        let id = $(this).attr("data-id");
        let url = 'itemsDatatable/';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: url + id,
            method: "GET",
            data: { id: id },
            dataType: 'json',
            success: function (data) {
                $('.action-detail').attr('action', data.route);
                $('#modal-detail-item').modal("show");
                $.each(data.itemData, function (index, value) {
                    switch (index) {
                        case 'image':
                            $('.img-thumbnail').attr('src', value);
                            break;
                        case 'detail':
                            $('p[name=' + index + ']').html(value);
                            break;
                        case 'name':
                            $('h5[name=' + index + ']').html(value + "'s detail");
                            break;
                        default:
                            $('input[name=' + index + ']').val(value);
                    }
                });
            }
        });
    })

    // On Edit
    $('body').on("click", ".action-edit-item", function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#form-create-edit-item').closest('form').find("span").html("");
        let id = $(this).attr("data-id");
        let url = 'itemsDatatable/';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url + id + '/' + 'edit',
            type: "GET",
            data: { id: id },
            dataType: 'json',
            success: function (data) {
                $('#header').html('Edit Data');
                $('.action-edit').attr('action', data.route);
                $('#modal-create-edit-item').modal("show");
                $.each(data.itemData, function (index, value) {
                    switch (index) {
                        case 'detail':
                            $('textarea[name=' + index + ']').val(value);
                            break;
                        case 'category_id':
                            $('select[name=' + index + ']').val(value);
                            break;
                        default:
                            $('input[name=' + index + ']').val(value);
                    }
                });
            }
        });
    });

    // On store or update
    $('#form-create-edit-item').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $(this).find('input[name="id"]').val();
        let formData = new FormData(this);
        let url = (id.length !== 0) ? window.location.pathname + 'update/' + id : window.location.pathname;
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

    // On destroy
    $('body').on('click', '.action-delete-item', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let id = $(this).attr("data-id");
        let url = window.location.pathname + '/' + id;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                Swal.fire(
                    {
                        type: "success",
                        title: 'Deleted!',
                        text: 'Your data has been deleted.',
                        confirmButtonClass: 'btn btn-success',
                    }
                ).then(function (result) {      // submit after click OK ( customize )
                    if (result.value) {
                        $.ajax({
                            type: "DELETE",
                            url: url,
                            data: { id: id },
                            dataType: 'json',
                            success: function (response) {
                                location.reload();
                            },
                            error: function (response) {
                                console.log(response);
                            }
                        });
                    }
                });
            }
        })
    });

    // Check all checkbox
    $('#items-checkbox-master').on('click', function (e) {
        $(".items-checkbox").prop('checked', $(this).prop('checked'));
        if ($(this).prop('checked') == true) {
            $('.destroy-multiple').removeClass('disabled');
        }
        else {
            $('.destroy-multiple').addClass('disabled');
        }
    });

    // Check each checkbox
    $('body').on('click', '.items-checkbox', function (e) {
        if ($('input.items-checkbox[type="checkbox"]:checked').length > 0) {
            $('.destroy-multiple').removeClass('disabled');
        }
        else {
            $('.destroy-multiple').addClass('disabled');
        }
    });

    // On destroy multiple
    $('.destroy-multiple').on('click', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let ids = [];
        $(".items-checkbox:checked").each(function () {
            ids.push($(this).attr('data-id'));
        });

        let idList = ids.join(",");
        let url = $(this).attr("data-route")

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                Swal.fire(
                    {
                        type: "success",
                        title: 'Deleted!',
                        text: 'Your data has been deleted.',
                        confirmButtonClass: 'btn btn-success',
                    }
                ).then(function (result) {      // submit after click OK ( customize )
                    if (result.value) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: { 'ids': idList },
                            dataType: 'json',
                            success: function (response) {
                                location.reload();
                            },
                            error: function (response) {
                                console.log(response);
                            }
                        });
                    }
                });
            }
        })
    });
});