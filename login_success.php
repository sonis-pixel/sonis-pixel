
<?php
session_start();
if(!isset($_SESSION['myusername']))
{
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Fooddays</title>
<link rel="stylesheet" type="text/css" href="style21.css">
</head>
<body>
    
    <br>
    <h3>Login Successful!!!!!!!!!!!!!</h3>
    <br>
    <br>
<form action="Logout.php" method="get">
    <h1><input type="submit" value="LOG OUT"></h1>
</form>
<div id ="nav">
              <ul>
                <center><button onclick="window.location.href='admin.html'"><span id="li3">Goto Admin Page</span></button></center>
                  <br>
              </ul>
            </div>
</body>
</html>