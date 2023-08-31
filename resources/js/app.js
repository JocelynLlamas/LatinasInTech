require('./bootstrap');

$(document).ready(function () {
    $('#inputArea').keypress(function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            $(this).closest('form').submit();
        }
    });
});

