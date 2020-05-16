$(document).ready(function () {
  $('.delete').click(function () {
    $('#form-delete').attr('action', $(this).data('url'));
  })
})