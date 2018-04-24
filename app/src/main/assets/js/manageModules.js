$(document).ready(function () {
    reload_table();
    $("#defaultTable").on("click", ".btnEdit", function () {
        var id = $(this).val();
        $.ajax({
            url: "http://localhost/C273Webservices/getModuleDetails.php",
            data: "code=" + id,
            type: "GET",
            cache: false,
            dataType: "JSON",
            success: function (data) {
                $('#edit_form [name=modulecode]').val(data.module_code);
                $('#edit_form [name=modulename]').val(data.module_name);
                
                $('#edit_modal').modal('show');


            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error " + textStatus + ": " + errorThrown);
            }
        });
    });
        $("#defaultTable").on("click", ".btnDelete", function () {
        var id = $(this).val();
        if (confirm('Are you sure you want to delete this module?')) {
            $.ajax({
                url: "http://localhost/C273Webservices/deleteModule.php",
                data: "code=" + id,
                type: "GET",
                cache: false,
                dataType: "JSON",
                success: function (data) {
                    reload_table();
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                }
            });
        }
    });
    
    
    
/*
    $('#add_modal').on('hidden.bs.modal', function(){
        $('#add_form')[0].reset();
    });
        $('#add_modal').on('show.bs.modal', function(){
        $('#add_form')[0].validator();
    });
    */

$("#btnAdd").click(function () {
        $('#add_modal').modal('show');
    });
        $('#add_form').validator().on('submit', function (e) {
        if (!e.isDefaultPrevented()) {

            $.ajax({
                url: "http://localhost/C273Webservices/addModule.php",
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
    
    $(".btnEdit").click(function () {
        $('#edit_modal').modal('show');
    });
        $('#edit_form').validator().on('submit', function (e) {
        if (!e.isDefaultPrevented()) {

            $.ajax({
                url: "http://localhost/C273Webservices/editModule.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                success: function (data) {
                    $('#edit_modal').modal('hide');
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
        url: "http://localhost/C273Webservices/getModules.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {
            var message = "";
            for (i = 0; i < response.length; i++) {
                message += "<tr>"
                        + "<td>" + response[i].module_code + "</td>"
                        + "<td>" + response[i].module_name 
                        + "<td><button class='btnEdit btn btn-primary' value='" + response[i].module_code + "'><span class='glyphicon glyphicon-pencil'></span> Edit</button>&nbsp;&nbsp;"
                        + "<button class='btnDelete btn btn-danger' value='" + response[i].module_code + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td>"

                        + "</tr>";
            }
            $("#defaultTable tbody").html(message);
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error " + textStatus + ": " + errorThrown);
        }
    });
}