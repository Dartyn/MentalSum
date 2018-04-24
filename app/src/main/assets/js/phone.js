$(document).ready(function () {
    $('form').validator().on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var phonesize = $("#size").val();
            var modelofphone = $("[type=radio]:checked").val();
            
            $.ajax({
                type: "GET",
                url: "http://localhost/C273_P10CRUD/get_phone.php",
                data: "size=" + phonesize + "&model=" + modelofphone,
                cache: false,
                dataType: "JSON",
                success: function (response) {
                    var message = response.result;

                    $(".phonepriceresult").html(message);
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                }
            }); // end of ajax
            return false;
        }
        ;
    });
});