/**
 * Created by Habib Ullah on 07-May-17.
 * habib.ciitlahore@gmail.com
 */

$("#contactForm").submit(function (e) {
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
        {
            url: formURL,
            type: "POST",
            data: postData,
            success: function (data, textStatus, jqXHR) {
                $("#message").html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $("#message").html(textStatus+"<br>"+errorThrown+"<br>"+jqXHR);
            }
        });
    e.preventDefault();
});
