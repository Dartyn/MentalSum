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
                var num1 = 0;
                var num2 = 0;
                var num3 = 0;
                var num4 = 0;

                num1 = Math.floor(Math.random() * 1001);
                num2 = Math.floor(Math.random() * 1001);
                num3 = Math.floor(Math.random() * 1001);
                num4 = Math.floor(Math.random() * 1001);




                //num2 = Math.floor((Math.random() * 12) + 1);

                console.log(num1);
                $("#firstNum").html(num1);
                $("#secondNum").html(num2);

                var set = 0;
                $("[value=Submit]").click(function () {
                    
                    var first = num1;
                    var second = num2;
                    var answer = Number(first) + Number(second);
                    var input = document.getElementById('answer').value;
                    
        
        if (input == answer) {
                        $("#cw").html("Correct");

                    } else {
                        $("#cw").html("Wrong");
                        $("#te").html("Correct answer is " + answer);
                    }

                    set++;
                    
                    


                    num1 = Math.floor(Math.random() * 145);
                    num2 = Math.floor(Math.random() * 145);
                    
                    $("#quesNo").html(set + "/25");
                    
                    if(set == 25){
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

        <div id="addition" data-role="page" data-title="Home">
            <div data-role="header" data-position="fixed" data-tap-toggle="false">
                <h2>Mental Sums</h2>
                <a href="" data-rel="back" id="back"rel="external" class="ui-btn ui-btn-inline ui-mini ui-shadow ui-corner-all ui-alt-icon ui-nodisc-icon ui-icon-back ui-btn-icon-notext">Back</a>
                <div id="quesNo"></div>
            </div>
            <div class="ui-content">
                <fieldset>
                    <div id="firstNum"></div>
                    +
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
                    <button type="submit">View Results</button>
                </form>





                <div id="cw"></div>
                <div id="te"></div>
                <div id="display"></div>
            </div>
        </div>
        
        
        <div id="subtraction" data-role="page" data-title="Home">
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
                    <button type="submit">View Results</button>
                </form>





                <div id="cw"></div>
                <div id="te"></div>
                <div id="display"></div>
            </div>
        </div>
        <div id="multiplication" data-role="page" data-title="Home">
            <div data-role="header" data-position="fixed" data-tap-toggle="false">
                <h2>Mental Sums</h2>
                <a href="" data-rel="back" id="back"rel="external" class="ui-btn ui-btn-inline ui-mini ui-shadow ui-corner-all ui-alt-icon ui-nodisc-icon ui-icon-back ui-btn-icon-notext">Back</a>
                <div id="quesNo"></div>
            </div>
            <div class="ui-content">
                <fieldset>
                    <div id="firstNum"></div>
                    +
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
                    <button type="submit">View Results</button>
                </form>





                <div id="cw"></div>
                <div id="te"></div>
                <div id="display"></div>
            </div>
        </div>
        <div id="division" data-role="page" data-title="Home">
            <div data-role="header" data-position="fixed" data-tap-toggle="false">
                <h2>Mental Sums</h2>
                <a href="" data-rel="back" id="back"rel="external" class="ui-btn ui-btn-inline ui-mini ui-shadow ui-corner-all ui-alt-icon ui-nodisc-icon ui-icon-back ui-btn-icon-notext">Back</a>
                <div id="quesNo"></div>
            </div>
            <div class="ui-content">
                <fieldset>
                    <div id="firstNum"></div>
                    +
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
                    <button type="submit">View Results</button>
                </form>





                <div id="cw"></div>
                <div id="te"></div>
                <div id="display"></div>
            </div>
        </div>
    </body>
</html>
