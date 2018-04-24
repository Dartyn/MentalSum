<?php
/*
  include 'dbFunctions.php';



  $history = Array();
  $query = "SELECT * FROM mental_sum";

  $results = mysqli_query($link, $query);



  while ($row = mysqli_fetch_assoc($results)) {
  $history[] = $row;
  }
  mysqli_close($link);

  echo json_encode($history);

 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/jquery.mobile-1.4.5.min.js"></script>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


        <script>
            $(document).ready(function () {
                reload_table();
                $.ajax({
                    type: "GET",
                    url: "http://localhost/SecondApp/getMentalSumDetails.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {
                        var message = "";
                        var message2 = "";
                        var message3 = "";
                        for (i = 0; i < response.length; i++) {
                            message += "<tr><td>" + response[i].player_id + "</td>";

                            message2 += "<tr><td>" + response[i].score + "</td>";
                            message3 += "<tr><td>" + response[i].operator + "</td>";

                        }
                        $("#player_id").html(message);
                        $('#time').html(message2);
                        $('#score').html(message3);
                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error " + textStatus + ": " + errorThrown);
                    }
                });
                $("[name=delete]").click(function () {
                    $.ajax({
                        type: "GET",
                        url: "http://localhost/SecondApp/deletehistory.php",
                        cache: false,
                        dataType: "JSON",
                        success: function (response) {
                            reload_table();
                        },
                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });
                    alert("Record deleted.");
                });



            });
            function reload_table() {
                $.ajax({
                    type: "GET",
                    url: "http://localhost/SecondApp/getMentalSumDetails.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {
                        var message = "";
                        for (i = 0; i < response.length; i++) {
                            message += "<tr>"
                                    + "<td>" + response[i].student_id + "</td>"
                                    + "<td>" + response[i].first_name + "</td>"
                                    + "<td>" + response[i].last_name + "</td>"
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
        </script>
    </head>
    <body>
        <div class="container">
            <table border="2" id="table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Player Number </th>
                        <th>Score </th>
                        <th>Option Picked</th>
                    </tr>
                </thead>
                <tbody>


                <td><div id="player_id"></div></td>
                <td><div id="time"></div></td>
                <td><div id="score"></div></td>


                </tbody>
            </table>

            <input type="button" name="delete" value="Delete All" >
            
            <div class="modal fade" id="delete_modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title">Delete Student Details</h3>
                        </div>
                        <div class="modal-body">
                            <form action="#" id="delete_form" class="form-horizontal" method="post">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Student ID</label>
                                        <div class="col-md-9">
                                            <input name="studentid" class="form-control" type="text" required readonly>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input name="firstname" class="form-control" type="text" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input name="lastname" class="form-control" type="text" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btnSave" class="btn btn-primary">Delete</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div><!-- /.modal-body -->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div>
    </body>
</html>
