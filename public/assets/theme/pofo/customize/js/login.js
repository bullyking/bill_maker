$(document).ready(function() {
    var url = $('.url').val();
    var token = $('.token').val();

    $('body').on('click', '.btn-login', function() {
        var uname = $('#username').val();
        var password = $('#password').val();
        // console.log('uname', uname);
        // console.log('password', password);

        $.ajax({
            method: 'GET',
            url: url + '/login_pofo/' + uname + '/' + password,
            success: function(data) {
                console.log('data', data);
            }
        });
    })
});
