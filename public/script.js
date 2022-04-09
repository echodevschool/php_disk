$(document).ready(function () {
    //$('')
    //$('').func()
    //$('').func(func2())

    $('#click_me').click(function () {
        $.ajax({
            type: 'POST',
            url: '/ajaxtest.php',
            data: $('#myForm').serializeArray()
        }).done(function (data) {
            data = JSON.parse(data);
            console.log(data.status);
        }).fail(function (data) {
            console.log(data);
        }).always(function () {
            console.log('always');
        });
    });
});