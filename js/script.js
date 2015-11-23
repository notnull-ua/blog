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

                var url = "?option=admin";
                if (Number(data) === 1)
                    $(location).attr('href', url);
                else $('.result').html(data);
            },
            error: function (xhr, str) {
                alert('Возникла ошибка:' + xhr.responseCode);
            }
        });
    });


    $('.next').click(function () {
        getAjax('get_next_articles',start, step);
        start += step;

    });
    var id_article = $("#id_article").text();
    $('.next-comments').click(function () {
        getCommentsAjax(start, step,id_article);
        start += step;
    });
});
var start = 5, step = 5;

function getAjax(action,start, step) {
    $.ajax({
        type: "GET",
        url: 'ajax.php',
        data: {'action': action, 'start': start, 'step': step},
        success: function (data) {
            printArticle(data);
        },
        error: function (xhr) {
            alert("Error:" + xhr.responseCode);
        }
    });
}
function getCommentsAjax(start, step, id) {
    $.ajax({
        type: "GET",
        url: 'ajax.php',
        data: {'action': 'get_next_comments', 'start': start, 'step': step, 'id':id},
        success: function (data) {
            printComments(data);
        },
        error: function (xhr) {
            alert("Error:" + xhr.responseCode);
        }
    });
}
function printArticle(data) {
    var data = jQuery.parseJSON(data);
    if (data.length != 0) {
        console.log(data[0].id);
        data.forEach(function (item, i) {
            var article = "<article class='media'> " +
                "<h2 class='media-heading'>" + item.title + "</h2> " +
                "<p>" + item.date + "</p> " +
                "<div class='media-body'>" +
                " <img class='img-responsive'  src='" + item.img_src + "' > " +
                "<p>" + item.description + "</p> " +
                "<p><a class='btn btn-default' href='?option=view&id_article=" + item.id + "' role='button'>View details &raquo;</a></p>" +
                "</div> " +
                "</article>";
            $('.articles').append(article);
            if (data.length < step) {
                $('.next').remove();
            }


        });
    }
    else {
        $('.next').remove();
    }


}

function printComments (data){
    var data = jQuery.parseJSON(data);
    console.log(data);
    if (data.length != 0) {
        data.forEach(function (item, i) {
            var comment = "<div class='comment'>" +
                "<span class='date'>" + item.date + "</span>" +
                "<h4 class='author'>" + item.author + "</h4>" +
                "<p class='text'>" + item.text + "</p>" +
                "</div>";
            $('.comments').append(comment);
        });

    }
    else $('.next-comments').remove();
}