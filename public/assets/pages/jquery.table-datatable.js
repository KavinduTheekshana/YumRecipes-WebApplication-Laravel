/*
 Theme: Amezia - Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Datatable
 */


$(document).ready(function() {
    $('#datatable').DataTable();

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf', 'colvis']
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

    $(document).ready(function() {
        $('#datatable2').DataTable();  
    } );
} );




