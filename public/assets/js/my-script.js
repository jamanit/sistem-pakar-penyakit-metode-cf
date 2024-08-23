$(document).ready(function () {
    $('.select2').select2();
});

$('.modal').on('shown.bs.modal', function () {
    $(this).find('.select2').each(function () {
        $(this).select2({
            dropdownParent: $(this).closest('.modal')
        });
    });
});

$(function () {
    $('#summernote').summernote()

    var tableCount = 4;
    for (var i = 1; i <= tableCount; i++) {
        $("#example" + i).DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example' + i + '_wrapper .col-md-6:eq(0)');
    }

    var tableCount = 4;
    for (var j = 1; j <= tableCount; j++) {
        $("#example2" + j).DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        })
    };
});