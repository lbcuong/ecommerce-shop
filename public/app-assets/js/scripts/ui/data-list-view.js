/*=========================================================================================
    File Name: data-list-view.js
    Description: List View
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {
  "use strict"
  // init list view datatable
  var dataListView = $(".data-list-view").DataTable({
    responsive: false,
    columnDefs: [
      {
        orderable: true,
        targets: 0,
        checkboxes: { selectRow: true }
      }
    ],
    dom:
      '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
    oLanguage: {
      sLengthMenu: "_MENU_",
      sSearch: ""
    },
    aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
    select: {
      style: "multi"
    },
    order: [[1, "asc"]],
    bInfo: false,
    pageLength: 4,
    buttons: [
      {
        text: "<i class='feather icon-plus'></i> Add New",
        action: function () {
          $(this).removeClass("btn-secondary")
          $(".add-new-data").addClass("show")
          $(".overlay-bg").addClass("show")
          $("#data-name, #data-price").val("")
          $("#data-category, #data-status").prop("selectedIndex", 0)
        },
        className: "btn-outline-primary"
      }
    ],
    initComplete: function (settings, json) {
      $(".dt-buttons .btn").removeClass("btn-secondary")
    }
  });

  dataListView.on('draw.dt', function () {
    setTimeout(function () {
      if (navigator.userAgent.indexOf("Mac OS X") != -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
      }
    }, 50);
  });

  // init thumb view datatable
  var dataThumbView = $(".data-thumb-view").DataTable({
    responsive: false,
    columnDefs: [
      {
        orderable: true,
        targets: 0,
        checkboxes: { selectRow: true }
      }
    ],
    dom:
      '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
    oLanguage: {
      sLengthMenu: "_MENU_",
      sSearch: ""
    },
    aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
    select: {
      style: "multi"
    },
    order: [[1, "asc"]],
    bInfo: false,
    pageLength: 4,
    buttons: [
      {
        text: "<i class='feather icon-plus'></i> Add New",
        action: function () {
          $(this).removeClass("btn-secondary")
          $('#header').html('Add Data');
          $(".add-new-data").addClass("show")
          $(".overlay-bg").addClass("show")
        },
        className: "btn-outline-primary"
      }
    ],
    initComplete: function (settings, json) {
      $(".dt-buttons .btn").removeClass("btn-secondary")
    }
  })

  dataThumbView.on('draw.dt', function () {
    setTimeout(function () {
      if (navigator.userAgent.indexOf("Mac OS X") != -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
      }
    }, 50);
  });

  // To append actions dropdown before add new button
  var actionDropdown = $(".actions-dropodown")
  actionDropdown.insertBefore($(".top .actions .dt-buttons"))


  // Scrollbar
  if ($(".data-items").length > 0) {
    new PerfectScrollbar(".data-items", { wheelPropagation: false })
  }

  // Close sidebar
  $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function () {
    $(".add-new-data").removeClass("show")
    $(".edit-data").removeClass("show")
    $(".overlay-bg").removeClass("show")
    $("#data-name, #data-price").val("")
    $("#data-category, #data-status").prop("selectedIndex", 0)
    $('#form-item-create').closest('form').find("input, textarea, select").val("");
    $('#form-item-create').closest('form').find("select").val(4);
    $('#form-item-create').closest('form').find("span").html("");
  })

  // On Edit
  $('body').on("click", ".action-edit", function (e) {
    e.stopPropagation();
    e.preventDefault();
    let id = $(this).attr("data-id");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url: 'items/edit/' + id,
      method: "POST",
      data: {},
      type: 'json',
      success: function (data) {
        console.log(data);
        $('#header').html('Edit Data');
        $('.action-edit').attr('action', data.route);
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

  // On Update
  $('#form-item-create').on('submit', function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    let formData = new FormData(this);
    let url = 'items/update';
    console.log(formData);
    $.ajax({
      url: url,
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log(response);
        if (response) {
          location.reload();
        }
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

  // On Delete
  $('.action-delete').on("click", function (e) {
    e.stopPropagation();
    $(this).closest('td').parent('tr').fadeOut();
  });

  // dropzone init
  Dropzone.options.dataListUpload = {
    complete: function (files) {
      var _this = this
      // checks files in class dropzone and remove that files
      $(".hide-data-sidebar, .cancel-data-btn, .actions .dt-buttons").on(
        "click",
        function () {
          $(".dropzone")[0].dropzone.files.forEach(function (file) {
            file.previewElement.remove()
          })
          $(".dropzone").removeClass("dz-started")
        }
      )
    }
  }
  Dropzone.options.dataListUpload.complete()

  // mac chrome checkbox fix
  if (navigator.userAgent.indexOf("Mac OS X") != -1) {
    $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
  }

  // On detail
  $('body').on("click", ".action-detail", function (e) {
    e.stopPropagation();
    e.preventDefault();
    let id = $(this).attr("data-id");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url: 'items/show/' + id,
      method: "POST",
      data: {},
      type: 'json',
      success: function (data) {
        $('.action-detail').attr('action', data.route);
        $('#primary').modal("show");
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
  });

  // $("body").on('click', ("tbody tr[role='row']") || (".dt-checkboxes"), function (e){
  //   if ($("tr[role='row']").hasClass("selected")) {
  //     alert('Yes');
  //   } else {
  //     alert('No');
  //   } 
  // })
})
