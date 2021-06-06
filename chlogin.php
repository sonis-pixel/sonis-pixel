<?php

$username=$_POST['username'];
$password=$_POST['password'];

//to prevent mysql
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);



mysql_connect("localhost","root","");
mysql_select_db("resturantdb");


$result=mysql_query("select * from loginpage where username='$username' and password='$password'")
       or die("failed to quuery db".mysql_error());

$row=mysql_fetch_array($result);

if($row['username'] == $username && $row['password'] ==$password){
    echo "login success".$row['username'];
    
}else {
    echo"failed to login";
}
$count=mysql_num_rows($result);
if($count==1){
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>

