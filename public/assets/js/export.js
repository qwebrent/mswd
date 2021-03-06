$(document).ready(function() {
    document.title='MSWD - PWD Information';
$('#pwdtable').DataTable( {
    ordering: false,
    dom: 'lBfrtip',
     buttons: [
         'copyHtml5',
         'excelHtml5',
         'csvHtml5',
         {
             extend: 'pdfHtml5',
             orientation: 'landscape',
             pageSize: 'A4',
             exportOptions:{
                 columns: [0,1,2,3,4,5]
             },
             customize : function(doc){
    doc.styles.tableHeader.alignment = 'left'; //Title Justification
    doc.content[1].table.widths = ['2.6%', '23.6%', '23.6%', '16.6%', '16.6%', '16.6%']; //Column Size
}
        }
     ],
    initComplete: function () {
        this.api().columns([2]).every( function () {
            var column = this;
            var select = $('<select class="form-control small"><option value=""></option></select>')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search( val ? '^'+val+'$' : '', true, false )
                        .draw();
                } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
    }

    });
} );
