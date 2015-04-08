$(function () {
    $('#action').click(function () {
        alert($('#form-login').serialize());
    });
});