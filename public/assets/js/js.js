$(document).ready(function () {
    "use strict";
    var $table = $('#tree-table'),
        rows = $table.find('tr');

    rows.each(function (index, row) {
        var $row = $(row),
            id = $row.data('id'),
            $columnName = $row.find('td[data-column="name"]'),
            children = $table.find('tr[data-parent="' + id + '"]');

        if (children.length) {
            var expander = $columnName;

            children.hide();

            expander.on('click', function (e) {
                var $target = $(e.target);
                if ($target.hasClass('fa-folder-o')) {
                    $target
                        .removeClass('fa-folder-o')
                        .addClass('fa-folder-open-o');

                    children.show();
                } else if ($target.hasClass('fa-folder-open-o')) {
                    $target
                        .removeClass('fa-folder-open-o')
                        .addClass('fa-folder-o');

                    reverseHide($table, $row);
                }
            });
        }
    });
});

// Reverse hide all elements
reverseHide = function (table, element) {
    var $element = $(element),
        id = $element.data('id'),
        children = table.find('tr[data-parent="' + id + '"]');

    if (children.length) {
        children.each(function (i, e) {
            reverseHide(table, e);
        });

        $element
            .find('.fa-folder-open-o')
            .removeClass('fa-folder-open-o')
            .addClass('fa-folder-o');

        children.hide();
    }
};