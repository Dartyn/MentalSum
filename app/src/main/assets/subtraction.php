<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="css/themes/mentalSum.css" rel="stylesheet" type="text/css"/>
        <link href="css/themes/mentalSum.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/mentalSums.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery.mobile-1.4.5.min.js"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                
                $("button").hide();
                $("[name=scorage]").hide();
                var score = 0;
                for (i = 0; i < 25; i++) {
                    var num1 = Math.floor(Math.random() * 1001);
                    var num2 = Math.floor(Math.random() * 501);

                    var num3 = Math.floor(Math.random() * 1001);
                    var num4 = Math.floor(Math.random() * 501);
                    var answer = num1 - num2;


                }
                $("#firstNum").html(num1);
                $("#secondNum").html(num2);

                var set = 0;
                $("[value=Submit]").click(function () {
                    var num3 = Math.floor(Math.random() * 1001);
                    var num4 = Math.floor(Math.random() * 501);
                    $("#firstNum").html(num3);
                    $("#secondNum").html(num4);
                    var input = document.getElementById('answer').value;
                    if (input == answer) {
                        $("#cw").html("Correct");
                        $("#te").hide();
                        score++;
                        var newanswer = num3 - num4;

                        answer = newanswer;

                    } else {
                        $("#cw").html("Wrong");
                        $("#te").show();
                        $("#te").html("Correct answer is " + answer);
                        var newanswer = num3 - num4;

                        answer = newanswer;
                    }




                    $("#answer").val("");

                    set++;
                    $("#scoring").html(score);
                    $("[name=scorage]").val(score);
                    




                    $("#quesNo").html(set + "/25");

                    if (set == 25) {
                        $("[type=reset]").hide();
                        $("[type=button").hide();
                        $("button").show();
                        $("#display").html("Press Show Results");
                    }

                });
                $("[value=Clear]").click(function () {
                    $("#answer").val("");
                });



            });
            function addText(event) {
                var targ = event.target || event.srcElement;
                document.getElementById("answer").value += targ.textContent || targ.innerText;
            }
        </script>
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: auto auto auto auto;
                grid-gap: 10px;
                background-color: #2196F3;
                padding: 10px;
            }
            .grid-container > div {
                background-color: rgba(255, 255, 255, 0.8);
                border: 1px solid black;
                text-align: center;
                font-size: 30px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <?php include ("header.php"); ?>
        <div id="addition" data-role="page" data-title="Home">
            <div data-role="header" data-position="fixed" data-tap-toggle="false">
                <h2>Mental Sums</h2>
                <a href="" data-rel="back" id="back"rel="external" class="ui-btn ui-btn-inline ui-mini ui-shadow ui-corner-all ui-alt-icon ui-nodisc-icon ui-icon-back ui-btn-icon-notext">Back</a>
                <div id="quesNo"></div>
                
            </div>
            <div class="ui-content">
                <fieldset>
                    <div id="firstNum"></div>
                    -
                    <div id="secondNum"></div>

                    <input type="text" id="answer" name="answer" value="">

                </fieldset>

                <ol onclick="addText(event)">
                    <div class="grid-container">
                        <div id="1">1</div>
                        <div id="2">2</div>
                        <div id="3">3</div>  
                        <div id="4">4</div>
                        <div id="5">5</div>
                        <div id="6">6</div>
                        <div id="7">7</div>
                        <div id="8">8</div>
                        <div id="9">9</div>
                        <div id="0">0</div>
                    </div>
                </ol>
                <input type="reset" value="Clear">
                <input type="button" value="Submit"> 

                <form action="results.php" method="post">
                    <input name="scorage" type="text">
                    <input name="operator" type="text" value="subtraction">
                    <button type="submit">View Results</button>
                </form>





                <div id="cw"></div>
                <div id="te"></div>
                <div id="display"></div>
            </div>
            <div data-role="footer"  data-position="fixed" data-tap-toggle="false">


                <div id="scoring">0</div>
            </div>
        </div>
        
    </body>
</html>
