$(function() {

    function updateTable() {
        $.ajax({
            url: '/products/list',
            dataType: 'json',
            success: function(products) {
                $tableBody = $('#productsTableBody');
                $tableBody.html('');

                for(var i in products) {
                    var product = products[i];

                    $tableBody.append('<tr>'
                        + '<td>' + product.name + '</td>'
                        + '<td>' + product.stock + '</td>'
                        + '<td>' + product.price + '</td>'
                        + '<td>' + product.created_at + '</td>'
                        + '<td>' + (product.stock * product.price) + '</td>'
                        + '</tr>');
                }
            }
        });
    }

    $('#productForm').submit(function(e) {
        e.preventDefault();

        var $form = $(this);

        $.ajax({
            url: $form.attr('action'),
            type: 'post',
            data: $form.serialize(),
            success: function() {
                updateTable();
            }
        });
    });

    updateTable();
});
