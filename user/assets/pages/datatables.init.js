/*
 Template Name: Dashor - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesdesign
 Website: www.themesdesign.in
 File: Datatable js
 */

$(document).ready(function () {
  $("#datatable").DataTable();

  //Buttons examples
  var table = $("#datatable-buttons").DataTable({
    lengthChange: false,
    buttons: [, "pdf", "excel", "colvis"],
  });

  table
    .buttons()
    .container()
    .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

  $(document).ready(function () {
    $("#datatable2").DataTable();
  });
});
