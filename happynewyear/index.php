<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Happy new year pagina, door Wisse" />
    <meta property="og:description" content="Happy new year pagina, door Wisse">
    <meta property="og:title" content="Happy New Year" />
    <meta property="og:url" content="https://thuis.wissehes.nl/?happynewyear" />
    <meta property="og:image" content="https://thuis.wissehes.nl/img/vuurwerk.jpg">
    <meta property="og:type" content="page" />
    <meta property="og:locale" content="nl_NL" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY NEW YEAR</title>
    <style>
    html {
    background-image: url("/img/vuurwerk.jpg");

  background-repeat: no-repeat; 
    background-position: right;
    background-attachment: fixed;       
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height:100%;
    width:100%; 
}

        h1 {
            color: #42d7f4;
            margin-top: 250px;
            font-size: 50px;
            text-align: center;
            font-family: verdana;
              text-transform: capitalize;

                text-shadow:
    -2px -2px 0 #000,
    2px -2px 0 #000,
    -2px 2px 0 #000,
    2px 2px 0 #000; 
            }
    </style>
</head>
<body>
<h1 id="messageLabel"></h1>
 
<script>
var message = "Happy New Year<?php if ($_GET['name'] !== "" ) {echo "," . ($_GET['name']);}  ?>!!!!"
var msgCount = 0;
var blinkCount = 0;
var blinkFlg = 0;
var timer1, timer2;
var messageLabel = document.getElementById("messageLabel");
 
function textFunc() {
     
    messageLabel.innerHTML = message.substring(0, msgCount);
     
    if (msgCount == message.length) {
        // Stop timer
        clearInterval(timer1);
         
        // Start blinking animation!
        timer2 = setInterval("blinkFunc()", 200);
         
    } else {
        msgCount++;
    }     
}
 
function blinkFunc() {   
    // blink 5 times.
    if (blinkCount < 6) {
         
        if (blinkFlg == 0) {
            messageLabel.innerHTML = message;
            blinkFlg = 1;
            blinkCount++;
             
        } else {
            messageLabel.innerHTML = "";
            blinkFlg = 0;
        }
         
    } else {
        // Stop timer
        clearInterval(timer2);
    }
} 
timer1 = setInterval("textFunc()", 150); // every 150 milliseconds
</script>
</body>
</html>