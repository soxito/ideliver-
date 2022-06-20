$(document).ready(function() {
    $('#payNow').hide()

    var parcelsG = JSON.parse($.session.get('parcels'));


var items =[];

console.log(isBlank());

$.each(parcelsG, function (index, file) {

    if(isEmpty(file.mass)==false){

        items.push([
            file.mass,
            file.length,
            file.breadth,
            file.height,
            file.units,
        ]);
    }

});
$('#items').dataTable({
    // datasource definition
    data: items,

    // layout definition
    layout: {
        scroll: false,
        height: null,
        footer: false,
    },

    sortable: true,

    filterable: false,

    pagination: false,

    columns: [
        {
            title: 'Mass',
            "render": function (id, type, row, meta) {

                  $(row).addClass('min-w-175px');
                return id;

            }
        },
        {
            title: 'Length',
            className: 'dt-body-right'
        },
        {
            title: 'Breadth',
            className: 'dt-body-right',

        },
        {
            title: 'Height',
            className: 'dt-body-right',

        },
        {
            title: 'Units',
            className: 'dt-body-right',

        }
    ],
});

$('input[type=radio][name=bedStatus]').on('change', function() {
    switch ($(this).val()) {
        case 'dawnwing':
            $('#payNow').show()
            var vat = $('#dawnwing_amount').val()*0.15;
            var grandTotal = $('#dawnwing_amount').val()-vat;
            $('#amount').html( '<input type="hidden"  class="form-control" name="amount" id="amount" value="'+$('#dawnwing_amount').val()+'" />');
            $('#amountTotal').html( 'R '+$('#dawnwing_amount').val()+'');
            $('#grandTotal').html( 'R '+grandTotal.toFixed(2)+'');
            $('#vat').html( 'R '+vat.toFixed(2)+'');
            break;
        case 'skynet':
            $('#payNow').show()
            var vat = $('#skynet_amount').val()*0.15
            var grandTotal = $('#skynet_amount').val()-vat;
            $('#amount').html( '<input type="hidden" class="form-control" name="amount" id="amount" value="'+$('#skynet_amount').val()+'" />');
            $('#amountTotal').html( 'R '+$('#skynet_amount').val()+'');
            $('#grandTotal').html( 'R '+grandTotal.toFixed(2)+'');
            $('#vat').html( 'R '+vat.toFixed(2)+'');
            break;
    }
});
});
