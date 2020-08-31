<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{
  font-family:Sriracha-Regular;
  src:url("font/Sriracha-Regular.ttf")format("truetype");
}
  body{
    background:#47A1ED;
    width:100%;
  }
.la-timer,
.la-timer > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-timer {
    display: block;
    font-size: 0;
    color:#fff;
}
.la-timer.la-dark {
    color: #333;
}
.la-timer > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-timer {
    width: 32px;
    height: 32px;
}
.la-timer > div {
    width: 32px;
    height: 32px;
    background: transparent;
    border-width: 2px;
    border-radius: 100%;
}
.la-timer > div:before,
.la-timer > div:after {
    position: absolute;
    top: 14px;
    left: 14px;
    display: block;
    width: 2px;
    margin-top: -1px;
    margin-left: -1px;
    content: "";
    background: currentColor;
    border-radius: 2px;
    -webkit-transform-origin: 1px 1px 0;
       -moz-transform-origin: 1px 1px 0;
        -ms-transform-origin: 1px 1px 0;
         -o-transform-origin: 1px 1px 0;
            transform-origin: 1px 1px 0;
    -webkit-animation: timer-loader 1250ms infinite linear;
       -moz-animation: timer-loader 1250ms infinite linear;
         -o-animation: timer-loader 1250ms infinite linear;
            animation: timer-loader 1250ms infinite linear;
    -webkit-animation-delay: -625ms;
       -moz-animation-delay: -625ms;
         -o-animation-delay: -625ms;
            animation-delay: -625ms;
}
.la-timer > div:before {
    height: 12px;
}
.la-timer > div:after {
    height: 8px;
    -webkit-animation-duration: 15s;
       -moz-animation-duration: 15s;
         -o-animation-duration: 15s;
            animation-duration: 15s;
    -webkit-animation-delay: -7.5s;
       -moz-animation-delay: -7.5s;
         -o-animation-delay: -7.5s;
            animation-delay: -7.5s;
}
.la-timer.la-sm {
    width: 16px;
    height: 16px;
}
.la-timer.la-sm > div {
    width: 16px;
    height: 16px;
    border-width: 1px;
}
.la-timer.la-sm > div:before,
.la-timer.la-sm > div:after {
    top: 7px;
    left: 7px;
    width: 1px;
    margin-top: -.5px;
    margin-left: -.5px;
    border-radius: 1px;
    -webkit-transform-origin: .5px .5px 0;
       -moz-transform-origin: .5px .5px 0;
        -ms-transform-origin: .5px .5px 0;
         -o-transform-origin: .5px .5px 0;
            transform-origin: .5px .5px 0;
}
.la-timer.la-sm > div:before {
    height: 6px;
}
.la-timer.la-sm > div:after {
    height: 4px;
}
.la-timer.la-2x {
    width: 64px;
    height: 64px;
}
.la-timer.la-2x > div {
    width: 64px;
    height: 64px;
    border-width: 4px;
}
.la-timer.la-2x > div:before,
.la-timer.la-2x > div:after {
    top: 28px;
    left: 28px;
    width: 4px;
    margin-top: -2px;
    margin-left: -2px;
    border-radius: 4px;
    -webkit-transform-origin: 2px 2px 0;
       -moz-transform-origin: 2px 2px 0;
        -ms-transform-origin: 2px 2px 0;
         -o-transform-origin: 2px 2px 0;
            transform-origin: 2px 2px 0;
}
.la-timer.la-2x > div:before {
    height: 24px;
}
.la-timer.la-2x > div:after {
    height: 16px;
}
.la-timer.la-3x {
    width: 96px;
    height: 96px;
}
.la-timer.la-3x > div {
    width: 96px;
    height: 96px;
    border-width: 6px;
}
.la-timer.la-3x > div:before,
.la-timer.la-3x > div:after {
    top: 42px;
    left: 42px;
    width: 6px;
    margin-top: -3px;
    margin-left: -3px;
    border-radius: 6px;
    -webkit-transform-origin: 3px 3px 0;
       -moz-transform-origin: 3px 3px 0;
        -ms-transform-origin: 3px 3px 0;
         -o-transform-origin: 3px 3px 0;
            transform-origin: 3px 3px 0;
}
.la-timer.la-3x > div:before {
    height: 36px;
}
.la-timer.la-3x > div:after {
    height: 24px;
}
/*
 * Animation
 */
@-webkit-keyframes timer-loader {
    0% {
        -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
    }
}
@-moz-keyframes timer-loader {
    0% {
        -moz-transform: rotate(0deg);
             transform: rotate(0deg);
    }
    100% {
        -moz-transform: rotate(360deg);
             transform: rotate(360deg);
    }
}
@-o-keyframes timer-loader {
    0% {
        -o-transform: rotate(0deg);
           transform: rotate(0deg);
    }
    100% {
        -o-transform: rotate(360deg);
           transform: rotate(360deg);
    }
}
@keyframes timer-loader {
    0% {
        -webkit-transform: rotate(0deg);
           -moz-transform: rotate(0deg);
             -o-transform: rotate(0deg);
                transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
           -moz-transform: rotate(360deg);
             -o-transform: rotate(360deg);
                transform: rotate(360deg);
    }
}
div.information{
  border:2px solid white;
  padding:40px;
  width:40%;
  height:250px;
  background:white;
  margin:40px auto;
}
div.information h1{
  text-align:center;
  font-family:Sriracha-Regular;
  color:#47A1ED;
}
div.information p{
  text-align:center;
  font-size:1.8vw;
    font-family:Sriracha-Regular;
    /* color:#47A1ED;*/
}
div.button{
  width:60%;
  margin:0px auto;
  height:auto;
}
div.button a input[type=submit]{
  width:100%;
  font-family:Sriracha-Regular;
  font-size:1.8vw;
  font-weight:bold;
  border-radius:30px;
  border:1px solid #47A1ED;
  background:#47A1ED;
  color:white;
  letter-spacing:2px;
}
@media(max-width:320px){
  div.information{
    width:60%;
    height:115px;
    padding:40px;
    padding-top:20px;
  }
  div.information h1{
    font-size:5vw;
  }
  div.information p{
    font-size:3.5vw;
    text-align:justify;
    line-height:15px;
  }
  div.button{
    width:80%;
  }
  div.button a input[type=submit]{
    font-size:3.5vw;
  }
}
@media(min-width:320px) and (max-width:375px){
  div.information{
    width:60%;
    height:115px;
    padding:40px;
    padding-top:20px;
  }
  div.information h1{
    font-size:5vw;
  }
  div.information p{
    font-size:3.5vw;
    text-align:justify;
    line-height:15px;
  }
  div.button{
    width:80%;
  }
  div.button a input[type=submit]{
    font-size:3.5vw;
  }
}
@media(min-width:375px) and (max-width:425px){
  div.information{
    width:60%;
    height:130px;
    padding:40px;
    padding-top:20px;
  }
  div.information h1{
    font-size:5vw;
  }
  div.information p{
    font-size:3.5vw;
    text-align:justify;
    line-height:15px;
  }
  div.button{
    width:80%;
  }
  div.button a input[type=submit]{
    font-size:3.5vw;
  }
}
@media(min-width:425px) and (max-width:768px){
    div.information{
    width:60%;
    height:auto;
    padding:40px;
    padding-top:20px;
  }
  div.information h1{
    font-size:5vw;
  }
  div.information p{
    font-size:3.5vw;
    text-align:justify;
    line-height:30px;
  }
  div.button{
    width:80%;
  }
  div.button a input[type=submit]{
    font-size:3.5vw;
  }
}
</style>
</head>
<body>
<div class="la-timer">
    <div></div>
</div>
<div class="information">
  <h1>Registration successful!!!</h1>
  <p>
    A text message shall be sent to you in due course to know your Code Number for random screening
  </p>
  <div class="button"><a href="logout.php"><input type="submit" name="" value="Logout"></a></div>
</div>
</body>
</html>