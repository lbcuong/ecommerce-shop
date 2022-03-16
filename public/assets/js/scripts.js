$(document).ready(function () {
  "use strict";

  $("#add-province").change(function (e) {
    e.preventDefault();
    let provinceId = $(this).val();
    let cartUrl = 'carts/district';
    let token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
      url: cartUrl,
      type: 'post',
      data: {
        '_token': token,
        'provinceId': provinceId,
      },
      success: function (data) {
        $("#add-district").html(data);
      }
    });
  })

  $("#add-district").change(function (e) {
    e.preventDefault();
    let districtId = $(this).val();
    let cartUrl = 'carts/ward';
    let token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
      url: cartUrl,
      type: 'post',
      data: {
        '_token': token,
        'districtId': districtId,
      },
      success: function (data) {
        $("#add-ward").html(data);
      }
    });
  })

});