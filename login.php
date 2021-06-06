<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
<link rel="stylesheet" type="text/css" href="style21.css">
</head>
<body style="text-align : center">
<div id="frm">
    
<button id="b1" onclick="window.location.href='resturant.html'"><span id="li3">HOME</span></button>
 <div class="header"><h1>Admin Login Page</h1></div>
<form action="chlogin.php" method="POST">
    <P>

       <label>Username:</lable>
<input type="text" id="username" name="username"  placeholder="(Username)" />
    </P>
    <p>
        

<label>Password:</lable> 

<input type="password" id="password" name="password" />
        
    </p>
    <p>
        
<input type="submit" id="btn" value="Login" />
    </p>

</form>
    </div>
</body>
</html>