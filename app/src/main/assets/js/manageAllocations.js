$(document).ready(function () {
    reload_table();
   
    $('#add_modal').on('hidden.bs.modal', function () {
        $('#add_form')[0].reset();
    });
    $('#add_modal').on('show.bs.modal', function () {
        $('#add_form')[0].validator();
    });

    $("#btnAdd").click(function () {
        $('#add_modal').modal('show');
    });
    $('#add_form').validator().on('submit', function (e) {
        if (!e.isDefaultPrevented()) {

            $.ajax({
                url: "http://localhost/C273Webservices/addAllocation.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                success: function (data) {
                    $('#add_modal').modal('hide');
                    reload_table();
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                }
            });
            return false;
        }
    });

    
});

function reload_table() {
    $.ajax({
        type: "GET",
        url: "http://localhost/C273Webservices/getAllocationDetails.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            for (i = 0; i < response.length; i++) {
                message += "<tr>"
                        + "<td>" + response[i].student_id + "</td>"
                        + "<td>" + response[i].module_code + "</td>"
                        + "<td>" + response[i].class + "</td>"
                        + "<td><button class='btnEdit btn btn-primary' value='" + response[i].student_id + "'><span class='glyphicon glyphicon-pencil'></span> Edit</button>&nbsp;&nbsp;"
                        + "<button class='btnDelete btn btn-danger' value='" + response[i].student_id + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td>"

                        + "</tr>";
            }
            $("#defaultTable tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error " + textStatus + ": " + errorThrown);
        }
    });
}

