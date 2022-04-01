$(document).ready(function () {
    "use strict";

    $("#form-create-edit-user #name").keyup(function () {
        $("#form-create-edit-user #name-input-error").html("")
    });
    $("#form-create-edit-user #category_id").keyup(function () {
        $("#form-create-edit-user #email-input-error").html("")
    });
    $("#form-create-edit-user #password").keyup(function () {
        $("#form-create-edit-user #password-input-error").html("")
    });
    $("#form-create-edit-user #confirm-password").keyup(function () {
        $("#form-create-edit-user #confirm-password-input-error").html("")
    });

    $('.action-create-user').on("click", function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#modal-create-edit-user').modal("show");
        $('#form-create-edit-user').closest('form').find("input").val("");
        $('#header').html('Add Data');
    })

    // On detail
    $('body').on("click", ".action-detail-user", function (e) {
        e.stopPropagation();
        e.preventDefault();
        let id = $(this).attr("data-id");
        let url = 'users/';
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
                $('#modal-detail-user').modal("show");
                $.each(data.user, function (index, value) {
                    switch (index) {
                        case 'image':
                            $('#user-avatar').attr('src', value);
                            break;
                        case 'name':
                            $('h5[name=' + index + ']').html(value + "'s details");
                            $('p[name=' + index + ']').html(value);
                            break;
                        default:
                            $('p[name=' + index + ']').html(value);
                    }
                });
            }
        });
    })

    // On Edit
    $('body').on("click", ".action-edit-user", function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('#form-create-edit-user').closest('form').find("span").html("");
        let id = $(this).attr("data-id");
        let url = 'users/';
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
                $('#modal-create-edit-user').modal("show");
                $.each(data.user, function (index, value) {
                    $('input[name=' + index + ']').val(value);
                });
            }
        });
    });

    // On store or update
    $('#form-create-edit-user').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $(this).find('input[name="id"]').val();
        let formData = new FormData(this);
        let r = $(this).find('input[name="role"]').val();
        console.log(r);
        let url = 'users/';
        $.ajax({
            type: 'POST',
            url: (id.length !== 0) ? url + 'update/' + id : url,
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                $('#name-input-error').text(response.responseJSON.errors.name);
                $('#email-input-error').text(response.responseJSON.errors.email);
                $('#password-input-error').text(response.responseJSON.errors.password);
                $('#confirm-password-input-error').text(response.responseJSON.errors.confirm_password);
            }
        });
    });

    // On destroy
    $('body').on('click', '.action-delete-user', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let id = $(this).attr("data-id");
        let url = 'users/';

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
                            url: url + id,
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
    $('#users-checkbox-master').on('click', function (e) {
        $(".users-checkbox").prop('checked', $(this).prop('checked'));
        if ($(this).prop('checked') == true) {
            $('.destroy-multiple').removeClass('disabled');
        }
        else {
            $('.destroy-multiple').addClass('disabled');
        }
    });

    // Check each checkbox
    $('body').on('click', '.users-checkbox', function (e) {
        if ($('input.users-checkbox[type="checkbox"]:checked').length > 0) {
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
        $(".users-checkbox:checked").each(function () {
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