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
                    if (index == 'image') {
                        $('.img-thumbnail').attr('src', value);
                    }
                    if (index == 'detail') {
                        $('p[name=' + index + ']').html(value);
                    }
                    if (index == 'name') {
                        $('h5[name=' + index + ']').html(value + "'s detail");
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
                console.log(data);
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

        $(".add-new-data").addClass("show");
        $(".overlay-bg").addClass("show");
    });

    // On store
    $('#form-create-edit-item').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let formData = new FormData(this);
        let url = 'itemsDatatable/';
        console.log(formData);
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                $('#name-input-error').text(response.responseJSON.errors.name);
                $('#category-input-error').text(response.responseJSON.errors.category_id);
                $('#price-input-error').text(response.responseJSON.errors.price);
                $('#quantity-input-error').text(response.responseJSON.errors.quantity);
                $('#detail-input-error').text(response.responseJSON.errors.detail);
                $('#image-input-error').text(response.responseJSON.errors.image);
            }
        });
    });

    // On update
    $('#form-create-edit-item').on('submit', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $(this).attr("data-id");
        let formData = new FormData(this);
        let url = 'itemsDatatable/';
        console.log(formData);
        $.ajax({
            type: 'PUT',
            url: url + id,
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                $('#name-input-error').text(response.responseJSON.errors.name);
                $('#category-input-error').text(response.responseJSON.errors.category_id);
                $('#price-input-error').text(response.responseJSON.errors.price);
                $('#quantity-input-error').text(response.responseJSON.errors.quantity);
                $('#detail-input-error').text(response.responseJSON.errors.detail);
                $('#image-input-error').text(response.responseJSON.errors.image);
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
        let url = 'itemsDatatable/';

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

});