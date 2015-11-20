/**
 * Created by Vladislav on 19.11.2015.
 */
$(document).ready(function () {
    $('#data').submit(function () {
        var data = $('#data').serialize();
        $.ajax({
            type: 'post',
            url: 'singIn.php',
            data: data,
            success: function (data) {

                var url= "?option=admin";
                if(Number(data) === 1)
                $(location).attr('href',url);
                else $('.result').html(data);
            },
            error: function (xhr, str) {
                alert('Возникла ошибка:' + xhr.responseCode);
            }
        });
    });

});